
<table id="table_id" class="table-text table table-striped">
    <thead>
    <tr  class="table-text">
        <th>Id</th>
        <th>Pid</th>
        <th>Side</th>
        <th>Classname</th>
        <th>Type</th>
        <th>Option</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($vehicles as $vehicle){?>
        <tr>
            <td class="table-text"><?php echo $vehicle['id']; ?></td>
            <?php foreach ($players as $player){
                if($player['pid'] == $vehicle['pid']){?>
            <td class="table-text"><a href="#" onclick="editPlayerAction(this)" data-id="<?= $player["uid"] ?>"  style=""><?php echo $player['name'];?></a></td>
            <?php }}?>
            <td class="table-text"><?php echo $vehicle['side']; ?></td>
            <td class="table-text"><?php echo $vehicle['classname']?></td>
            <td class="table-text"><?php echo $vehicle['type']?></td>
            <td>
                <a href="#" onclick="editVehicleAction(this)" data-id="<?= $vehicle["id"] ?>" class="button4" style="background-color:#f1bb4e">Edit</a>
<!--                               <a href="something" class="button4" style="background-color:#f14e4e">Edit</a>-->
<!--                               <a href="something" class="button4" style="background-color:#84f14e">Button 3</a>-->
<!--                               <a href="something" class="button4" style="background-color:#4ef18f">Button 4</a>-->
<!--                               <a href="something" class="button4" style="background-color:#4e9af1">Button 5</a>-->
<!--                               <a href="something" class="button4" style="background-color:#9a4ef1">Button 6</a>-->
<!--                               <a href="something" class="button4" style="background-color:#f14ebd">Button 7</a>-->
            </td>
        </tr>
    <?php  }?>
    </tbody>
</table>

