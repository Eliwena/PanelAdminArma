
<table id="table_id" class="table-text table table-striped">
    <thead>
        <tr  class="table-text">
            <th>Uid</th>
            <th>Pid</th>
            <th>Prénom / Nom</th>
            <th>Cash</th>
            <th>Bank</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
   <?php foreach ($players as $player){?>
       <tr id="row-<?= $player["uid"] ?>">
           <td class="table-text"><?php echo $player['uid']; ?></td>
           <td class="table-text"><?php echo $player['pid']?></td>
           <td class="table-text"><?php echo $player['name']; ?></td>
           <td class="table-text"><?php echo $player['cash']?></td>
           <td class="table-text"><?php echo $player['bankacc']?></td>
           <td>
               <?php if($_SESSION['role'] == 'Helpeur'){?>
                <a href="#" onclick="editPlayerAction(this)" data-id="<?= $player["uid"] ?>" class="button4" style="background-color:#4e9af1">View</a>
               <?php } elseif($_SESSION['role'] == 'Modérateur') { ?>
                   <a href="#" onclick="editPlayerAction(this)" data-id="<?= $player["uid"] ?>" class="button4" style="background-color:#f1bb4e">Edit</a>
               <?php }else{?>
                   <a href="#" onclick="editPlayerAction(this)" data-id="<?= $player["uid"] ?>" class="button4" style="background-color:#f1bb4e">Edit</a>
                   <a href="#" id="<?= $player["uid"] ?>" class="delete_player button4" style="background-color:#f14e4e">Whipe</a>
               <?php }?>
<!--               <a href="something" class="button4" style="background-color:#f14e4e">Edit</a>-->
<!--               <a href="something" class="button4" style="background-color:#84f14e">Button 3</a>-->
<!--               <a href="something" class="button4" style="background-color:#4ef18f">Button 4</a>-->
<!--               <a href="something" class="button4" style="background-color:#4e9af1">Button 5</a>-->
<!--               <a href="something" class="button4" style="background-color:#9a4ef1">Button 6</a>-->
<!--               <a href="something" class="button4" style="background-color:#f14ebd">Button 7</a>-->
           </td>
        </tr>
  <?php  }?>
    </tbody>
</table>

