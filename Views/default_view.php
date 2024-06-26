<div class="clearfix"></div>

<div class="row top_tiles">
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
            <div class="icon"><i class="fa fa-users"></i></div>
            <div class="count">players</div>
            <h3>players</h3>
            <p>totalPlayers</p>
        </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
            <div class="icon"><i class="fa fa-user"></i></div>
            <div class="count">newestPlayer </div>
            <h3>latestPlayer</h3>
            <p>latestPlayerDesc</p>
        </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
            <div class="icon"><i class="fa fa-car"></i></div>
            <div class="count">veh_count</div>
            <h3>totalVehicles</h3>
            <p>totalVehiclesDesc</p>
        </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
            <div class="icon"><i class="fa fa-home"></i></div>
            <div class="count"> house_count </div>
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
