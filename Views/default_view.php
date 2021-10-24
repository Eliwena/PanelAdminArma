<div class="clearfix"></div>

<div class="row top_tiles">
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
            <div class="count"><?php echo $countPlayers; ?> <i class="fa fa-users"></i></div>
            <h3>Joueurs</h3>
            <p>Nombre de joueurs  </p>

        </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
            <div class="count"> <i class="fa fa-user"></i></div>
            <h3>latestPlayer</h3>
            <p>latestPlayerDesc</p>
        </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
            <div class="count"><?php echo $countVehicles; ?> <i class="fa fa-car"></i></div>
            <h3>Véhicules</h3>
            <p>Total de véhicules </p>
        </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
            <div class="count"> house_count <i class="fa fa-home"></i> </div>
            <h3>totalHouses</h3>
            <p>totalHousesDesc</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <h3>tenRichestPlayersBank</h3>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>name</th>
                <th>bank</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"><a href="{{ base_url() }}/player/{{ player.uid }}" target="_blank">name</a></th>
                <th scope="row">name</th>
                <td>bankacc</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <h3>tenRichestPlayersCash</h3>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>name</th>
                <th>cash</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"><a href="{{ base_url() }}/player/{{ player.uid }}" target="_blank">name</a></th>
                <th scope="row">name</th>
                <td>cash</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3>factionMetrics</h3>
        <canvas id="chartjs-4" class="chartjs" width="770" height="385" style="display: block; width: 770px; height: 385px;"></canvas>
    </div>
</div>
