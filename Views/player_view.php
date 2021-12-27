<?php

$date = $player['insert_time']
?>

<div class=" row gutters-sm">
    <div class="col-md-4 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <div class="mt-3">
                        <h4>
                        <span id="player_uid"><?php echo $player['uid']; ?></span>
                        <?php
                        if ($player['adminlevel'] == 1) {
                            echo "<i style='color:  #9b59b6  ;' class='form-label fas fa-bolt'></i>";
                        } else if ($player['adminlevel'] == 2) {
                            echo "<i style='color:  #2980b9  ;' class='fas fa-bolt'></i>";
                        } else if ($player['adminlevel'] == 3) {
                            echo "<i style='color:#1abc9c;' class='fas fa-bolt'></i>";
                        } else if ($player['adminlevel'] == 4) {
                            echo "<i style='color:  #f1c40f  ;' class='fas fa-bolt'></i>";
                        } else if ($player['adminlevel'] == 5) {
                            echo "<i style='color:  #c0392b ;' class='form-label fas fa-bolt'></i>";
                        }
                        ?>
                        </h4>
                        <?php if($_SESSION['role'] === 'Helpeur' || $_SESSION['role'] === 'Modérateur' ){?>
                        <p class="text-secondary mb-1"><?php echo $player['name']; ?></p>
                        <?php } else { ?>
                        <input id="player" type="text" class="input-name" placeholder="" value="<?= $player['name']; ?>">
                        <?php } ?>
                        <p class="text-secondary mb-1">Arrivé : <?php echo date('d-m-Y', strtotime($date)); ?></p>
                        <p class="text-secondary mb-1">Tel : <?php echo $player['phone_number']; ?></p>
                        <p class="text-secondary mb-1">Steam ID : <?php echo $player['pid']; ?></p>
                        <div class="form-row">
                            <div class="col">
                                <?php if($_SESSION['role'] === 'Helpeur'){?>
                                <select id='coplevel' class="form-select form-control" aria-label="Cop level" disabled>
                                <?php } else { ?>
                                <select id='coplevel' class="form-select form-control" aria-label="Cop level" >
                                <?php } ?>
                                    <option selected>Cop level : <?php echo $player['coplevel'];?></option>
                                    <?php for($i = 0 ; $i <= 14; $i++){?>
                                            <?php if($i != $player['coplevel']){?>
                                        <option name="coplevel" value="<?php echo $i?>">Cop Level : <?php echo $i; ?></option>
                                    <?php }} ?>
                                </select>
                            </div>
                            <div class="col">
                                <?php if($_SESSION['role'] === 'Helpeur'){?>
                                <select id="mediclevel" class="form-select form-control" aria-label="Medic level" disabled>
                                <?php } else { ?>
                                <select id="mediclevel" class="form-select form-control" aria-label="Medic level">
                                <?php } ?>
                                    <option  selected>Medic level : <?php echo $player['mediclevel']?></option>
                                    <?php for($j = 0 ; $j <= 13; $j++){?>
                                        <?php if($j != $player['mediclevel']){?>
                                            <option name=" mediclevel" value="<?php echo $j?>">Medic Level : <?php echo $j; ?></option>
                                        <?php }} ?>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3 list-vehicles">
            <div class="card h-100">
                <div class="card-body">
                    <h4>Vehicules</h4>
                    <table class="table-text table table-striped">
                        <thead>
                        <tr class="table-text">
                            <th>Nom</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($vehicles as $vehicle) { ?>
                            <tr id="row-<?php echo $vehicle['id']; ?>">
                                <td style=' text-align:left; font-size:15px'
                                    class="text-secondary mb-1 table-text"><?php echo $vehicle['classname']; ?></td>
                                <td>
                                    <a href="#" onclick="editVehicleAction(this)" data-id="<?= $vehicle["id"] ?>" class="button4" style="background-color:#4e9af1">More</a>
                                    <?php if($_SESSION['role'] !== 'Helpeur'){?>
                                    <a href="#" id="<?php echo $vehicle['id'] ?>" class="delete_vehicles_player button4"
                                       style="background-color:#f14e4e">Delete</a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card mb-3">
            <div class="card-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link nav-link-license active" id="pills-home-tab" data-toggle="pill"
                           href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Licence
                            Civile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-license" id="pills-profile-tab" data-toggle="pill"
                           href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Licence
                            Police</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-license" id="pills-contact-tab" data-toggle="pill"
                           href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Licence
                            Medical</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        <?php
                        $licenses = explode("],[", $player['civ_licenses']);
                        $licenses = str_replace('"[[', '', $licenses);
                        $licenses = str_replace(']]"', '', $licenses);
                        $licenses = str_replace('`', '', $licenses);
                        foreach ($licenses as $license) {
                            $license = explode(',', $license);
                            if (count($license) > 1) {
                                ?>
                                <button id="<?php echo $license[0]; ?>"
                                        class="btn <?php if($_SESSION['role'] !== 'Helpeur'){?>license <?php } ?> <?php if ($license[1] == '1') { ?> active <?php } ?> civ "><?php echo $license[0]; ?></button>
                            <?php } else { ?> <span>N'as pas la license</span><?php }
                        }
                        ?>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <?php
                        $licenses = explode("],[", $player['cop_licenses']);
                        $licenses = str_replace('"[[', '', $licenses);
                        $licenses = str_replace(']]"', '', $licenses);
                        $licenses = str_replace('`', '', $licenses);
                        foreach ($licenses as $license) {
                            $license = explode(',', $license);
                            if (count($license) > 1) {
                                ?>
                                <button id="<?php echo $license[0]; ?>"
                                        class=" btn <?php if($_SESSION['role'] !== 'Helpeur'){?>license <?php } ?>  <?php if ($license[1] == '1') { ?> active <?php } ?> cop "><?php echo $license[0]; ?></button>
                            <?php } else { ?> <span>N'as pas la license</span><?php }
                        }
                        ?>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <?php
                        $licenses = explode("],[", $player['med_licenses']);
                        $licenses = str_replace('"[[', '', $licenses);
                        $licenses = str_replace(']]"', '', $licenses);
                        $licenses = str_replace('`', '', $licenses);
                        foreach ($licenses as $license) {
                            $license = explode(',', $license);
                            if (count($license) > 1) {
                                ?>
                                <button id="<?php echo $license[0]; ?>"
                                        class=" btn <?php if($_SESSION['role'] !== 'Helpeur'){?>license <?php } ?> <?php if ($license[1] == '1') { ?> active <?php } ?> med "><?php echo $license[0]; ?></button>
                            <?php } else { ?> <span>N'as pas la license</span><?php }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gutters-sm">
            <div class="col-sm-6 mb-3">
                <?php if(!empty($houses) && count($houses)>2 && !empty($containers) && count($containers)>2){?>
                <div class="card h-50 ">
                    <?php } if(empty($houses) || count($houses) <= 2 || empty($containers) || count($containers) <= 2  ) { ?>
                    <div class="card h-100">
                    <?php }?>
                    <div class="card-body">
                        <div class="mt-3">
                            <h4>Argent</h4>
                            <div class="form-row">
                                <div class="col">
                                    <small>CASH $</small>
                                    <?php if($_SESSION['role'] !== 'Helpeur' && $_SESSION['role'] !== 'Modérateur'){?>
                                    <input id="cash" type="number" class="form-control input_player"
                                           placeholder="" value="<?php echo $player['cash']; ?>">
                                    <?php } else { ?>
                                    <input id="cash" type="number" class="form-control input_player"
                                           placeholder="" value="<?php echo $player['cash']; ?>" disabled>
                                    <?php } ?>
                                    <span id="cash_valide" class="valide">
                                                Changement enregistré !
                                            </span>
                                </div>
                                <div class="col">
                                    <small>BANK $</small>
                                    <?php if($_SESSION['role'] !== 'Helpeur' && $_SESSION['role'] !== 'Modérateur'){?>
                                        <input id="bankacc" type="number" class="form-control input_player"
                                               placeholder="" value="<?php echo $player['bankacc']; ?>">
                                    <?php } else { ?>
                                        <input id="bankacc" type="number" class="form-control input_player"
                                               placeholder="" value="<?php echo $player['bankacc']; ?>" disabled>
                                    <?php } ?>
                                    <span id="bankacc_valide" class="valide">
                                                Changement enregistré !
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if($_SESSION['role'] !== 'Helpeur' && $_SESSION['role'] !== 'Modérateur'){?>
            <div class="col-sm-6 mb-3">
                <div class="card h-100 ">
                    <div class="card-body">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link nav-link-license active" id="pills-house-tab" data-toggle="pill"
                                   href="#pills-house" role="tab" aria-controls="pills-house" aria-selected="true">Maison</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-license" id="pills-stock-tab" data-toggle="pill"
                                   href="#pills-stock" role="tab" aria-controls="pills-stock"
                                   aria-selected="false">Stock</a>
                        </ul>
                        <div class="tab-content " id="pills-tabContent">
                            <div class="tab-pane fade show list-house active" id="pills-house" role="tabpanel"
                                 aria-labelledby="pills-house-tab">
                                <table class="table-text table table-striped">
                                    <thead>
                                    <tr class="table-text">
                                        <th>Position</th>
                                        <th>Garage</th>
                                        <th>Owned</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($houses as $house) { ?>
                                        <tr id="row-<?php echo $house['id']; ?>">
                                            <td style=' text-align:left; font-size:15px' class="text-secondary mb-1 table-text"><?php echo $house['pos']; ?></td>
                                            <td style=' text-align:left; font-size:15px' class="text-secondary mb-1 table-text"><?php echo $house['garage']; ?></td>
                                            <td style=' text-align:left; font-size:15px' class="text-secondary mb-1 table-text"><?php echo $house['owned']; ?></td>
                                            <td>
                                                <a href="#" id="<?php echo $house['id'] ?>" class="delete_vehicles_player button4"
                                                   style="background-color:#f14e4e">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade  show list-house " id="pills-stock" role="tabpanel"
                                 aria-labelledby="pills-stock-tab">
                                <table class="table-text table table-striped">
                                    <thead>
                                    <tr class="table-text">
                                        <th>Classname</th>
                                        <th>Position</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($containers as $container) { ?>
                                        <tr id="row-<?php echo $container['id']; ?>">
                                            <td style=' text-align:left; font-size:15px' class="text-secondary mb-1 table-text"><?php echo $container['classname']; ?></td>
                                            <td style=' text-align:left; font-size:15px' class="text-secondary mb-1 table-text"><?php echo $container['pos']; ?></td>
                                            <td>
                                                <a href="#" onclick="editVehicleAction(this)" data-id="" class="button4" style="background-color:#4e9af1">More</a>
                                                <a href="#" id="" class="delete_vehicles_player button4"
                                                   style="background-color:#f14e4e">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
