<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3><i class="icon fas fa-database"></i>   ANL | Admin</h3>
        </div>

        <ul class="list-unstyled components">
            <span>GENERAL</span>
            <li>
                <a href="/"><i class="icon fas fa-caret-square-right"></i>  Home</a>
            </li>
            <span>LIFE</span>
            <li>
                <a href="/players"><i class="icon fas fa-users-cog"></i>   Joueur</a>
            </li>
<!--            Si Helpeurs visions que des joueurs-->
            <?php if($_SESSION['role'] !== 'Helpeur'){?>
            <li>
                <a href="/vehicles"><i class="icon fas fa-car"></i>   Vehicules</a>
            </li>
            <li>
                <a href="#"><i class="icon fas fa-users"></i>   Groupes <i style="color:red" class="fas fa-wrench"></i></a>
            </li>
            <?php if($_SESSION['role'] !== 'Modérateur'){?>
            <li>
                <a href="#"><i class="icon fas fa-home"></i>   Maisons <i style="color:red" class="fas fa-wrench"></i></a>
            </li>
            <li>
                <a href="#"><i class="icon fas fa-warehouse"></i>   Stockage <i style="color:red" class="fas fa-wrench"></i></a>
            </li>
            <?php } ?>
            <li>
                <a href="#"><i class="icon fas fa-industry"></i>   Entreprise <i style="color:red" class="fas fa-wrench"></i></a>
            </li>
            <?php } ?>
            <span>ADMIN</span>
            <li>
                <a href="#pageSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="icon fas fa-comment-alt"></i>   Note <i style="color:red" class="fas fa-wrench"></i></a>
                <ul class="collapse list-unstyled" id="pageSubmenu0">
                    <li>
                        <a href="#">Notes</a>
                    </li>
                    <li>
                        <a href="#">Mes notes</a>
                    </li>
                </ul>
            </li>
            <?php if($_SESSION['role'] !== 'Helpeur'){?>
            <li>
                <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="icon fas fa-list"></i>   Logs <i style="color:red" class="fas fa-wrench"></i></a>
                <ul class="collapse list-unstyled" id="pageSubmenu1">
                    <li>
                        <a href="#">Logs Mort</a>
                    </li>
                    <?php if($_SESSION['role'] !== 'Modérateur'){?>
                    <li>
                        <a href="#">Logs transaction</a>
                    </li>
                    <li>
                        <a href="#">...</a>
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <?php if($_SESSION['superRole'] !== 0){?>
            <li>
                <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="icon fas fa-user-tag"></i>   Rôle <i style="color:red" class="fas fa-wrench"></i></a>
                <ul class="collapse list-unstyled" id="pageSubmenu2">
                    <li>
                        <a href="#">Liste Rôle</a>
                    </li>
                    <li>
                        <a href="#">Ajout de rôle</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="icon fas fa-user-astronaut"></i>   Utilisateurs</a>
                <ul class="collapse list-unstyled" id="pageSubmenu3">
                    <li>
                        <a href="/users">Liste</a>
                    </li>
                    <li>
                        <a href="/user/new">Ajout Utilisateur</a>
                    </li>
                </ul>
            </li>
            <?php } } ?>
        </ul>
    </nav>

