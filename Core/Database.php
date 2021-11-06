<?php

namespace App\Core;


class Database
{

    private $pdo;
    private $table;

    /**
     * Database constructor.
     * @param null $class
     * Connexion à la base de données
     */
    public function __construct($class = null)
    {
        try {
            $this->pdo = new \PDO(DBDRIVER . ":dbname=" . DBNAME . ";host=" . DBHOST, DBUSER);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        } catch (Exception $e) {
            die ("Erreur SQL " . $e->getMessage());
        }

        $classExploded = $class !== null ? $class : explode("\\", get_called_class());
        $this->table = ($class !== null ? $class : end($classExploded));
    }


    public function getParentFields()
    {
        return array_keys(get_class_vars(__CLASS__));
    }

    /**
     * @param array $requestedParams
     * @param array $filter
     * @param string $filterString
     * @param string $moreString
     * @return array
     * Fonction pour créer une requête SELECT
     * $requestedParams contient les colonnes que nous voulons retourner et les filtres de condition.
     */
    public function query($requestedParams = [], $filter = [], $filterString = '', $moreString = '')
    {
        $columnFilter = [];
        foreach ($filter as $key => $value) {
            if (!is_null($value)) {
                if($key[0] !== "!") {
                    $columnFilter[] = $key . "=:" . $key;
                } else {
                    $columnFilter[] = ltrim($key, $key[0]) . "!=:" . ltrim($key, $key[0]);
                }
            }
        }
        $sql = "SELECT " . implode(",", $requestedParams) . " FROM " . $this->table
            . ($moreString ? $moreString : '')
            . (count($filter) ? " WHERE " . implode(" AND ", $columnFilter) : '')
            . ($filterString ? (count($filter) ? " AND " : ' WHERE ') . $filterString : '');
        $query = $this->pdo->prepare($sql);
        foreach ($filter as $key => $value) {
            if (!is_null($value)) {
                if($key[0] !== "!") {
                    $query->bindValue(":".$key, $value);
                } else {
                    $query->bindValue(":" . ltrim($key, $key[0]), $value);
                }
            }
        }
        //var_dump($query);
        $query->execute();

        return $query->fetchAll();
    }

    /**
     * @return array
     * Function to return de foreign key, used to save values in tables that contains foreign keys
     */

    public function get_foreignKeys()

    {

        return [];

    }

    /**
     * Fonction pour sauvegarder l'information dans la base de données.
     * Si un id existe, on exécute une requête UPDATE, sinon on exécute une requête INSERT INTO
     */
    public function save()
    {
        $data = array_diff_key(
            get_object_vars($this),
            get_class_vars(get_class())
        );


        $data = array_filter($data, function($value, $key) {
            //var_dump($key);
            if (!in_array($key, $this->get_foreignKeys())) {
                return [$key => $value];
            }
        }, ARRAY_FILTER_USE_BOTH);

        $columns = array_keys($data);
        $values = array_values($data);

        $columnForUpdate = [];

        if ($this->getUid() > 0) {
            foreach ($data as $key => $value) {
                if (!is_null($value)) {
                    $columnForUpdate[] = $key . "=:" . $key;
                }
            }

            $sql = "UPDATE " . $this->table . " SET " . implode(",", $columnForUpdate) . " WHERE uid=" . $this->getUid();
            $query = $this->pdo->prepare($sql);
            foreach ($data as $key => $value) {
                if (!is_null($value)) {
                    $query->bindValue(":$key", $value);
                }
            }
            $query->execute();
        } else {
            //INSERT
            unset($columns[0]);
            unset($data["uid"]);
            var_dump($columns);
            var_dump($values);
            $query = $this->pdo->prepare("INSERT INTO " . $this->table . " (
                                            " . implode(",", $columns) . "
                                            )  VALUES (
                                            :" . implode(",:", $columns) . "
                                            )");
            $query->execute($data);
        }
    }

    /**
     * @param $id
     * Function to "delete" an item, we set the isDeleted column to 1
     */
    public
    function delete($id)
    {
        $query = $this->pdo->prepare("DELETE FROM " . $this->table . " WHERE id=" . $id);
        $query->execute();
    }

}