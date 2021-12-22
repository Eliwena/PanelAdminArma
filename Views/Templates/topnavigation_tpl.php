<div id="content">

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-toogle">
                <i class="fas fa-align-left"></i>
            </button>
            <div class="dropdown right">
                <button class="btn btn-secondary dropdown-toggles" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <?php echo $_SESSION['name'] . ' ['. $_SESSION['role'] .'] ';?>

                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a href="/logout" class="dropdown-item" href="#">Log-out</a>
                    <a class="dropdown-item" href="#">Gestion<i style="color:red" class="fas fa-wrench"></i></a>
                </div>
            </div>

        </div>
    </nav>