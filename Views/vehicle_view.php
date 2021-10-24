<div class="container">
    <div class="main-body">
        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <?php if ($vehicle['type'] == 'Air') { ?>
                                <i style="font-size: 40px" class="fas fa-helicopter"></i>
                            <?php } else if ($vehicle['type'] == 'Car') { ?>
                                <i style="font-size: 40px" class="fas fa-car"></i>
                            <?php } else if ($vehicle['type'] == 'Ship') { ?>
                                <i style="font-size: 40px" class="fas fa-ship"></i>
                            <?php } ?>
                            <div class="mt-4">
                                <h4><?php echo $vehicle['classname']; ?></h4>
                                <hr class="my-4">
                                <p class="text-secondary mb-1">Vehicule de : <a href="#"
                                                                                onclick="editPlayerAction(this)"
                                                                                data-id="<?= $player[0]["uid"] ?>"
                                                                                style=""><?php echo $player[0]['name']; ?></a>
                                </p>
                                <p class="text-secondary mb-1">Entreprise : <?= $vehicle['entreprise_id'] ?> Si
                                    entreprise -->Nom </p>
                                <p class="text-secondary mb-1">Side : <?= $vehicle['side'] ?></p>
                                <p class="text-secondary mb-1">Plaque : <?= $vehicle['plate'] ?></p>
                                <p class="text-secondary mb-1">Couleur : <?= $vehicle['color'] ?></p>
                                <p class="text-secondary mb-1">Assurée : <?= $vehicle['insure'] ?></p>
                                <p class="text-secondary mb-1">Fourière : <?= $vehicle['fourriere'] ?></p>

                            </div>
                        </div>
                        <hr class="my-4">
                        <p class="text-secondary mb-1">Active : <?= $vehicle['active'] ?></p>
                        <p class="text-secondary mb-1">Alive : <?= $vehicle['alive'] ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card mb-3">
                    <div class="card-body">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link nav-link-license active" id="pills-home-tab" data-toggle="pill"
                                       href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Inventory</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-license" id="pills-profile-tab" data-toggle="pill"
                                       href="#pills-profile" role="tab" aria-controls="pills-profile"
                                       aria-selected="false">Gear</a>
                            </ul>


                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                     aria-labelledby="pills-home-tab">
                                    <p><?php
                                        echo $vehicle['inventory'];
                                        ?></p>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                     aria-labelledby="pills-profile-tab">
                                    <p><?php
                                        echo $vehicle['gear'];
                                        ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-secondary mb-1">Fuel : <?= $vehicle['fuel'] ?></p>
                                    <p class="text-secondary mb-1">Dommage : <?= $vehicle['damage'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>