
<table id="table_id" class="table-text table table-striped">
    <thead>
    <tr  class="table-text">
        <th>Uid</th>
        <th>Name</th>
        <th>Email</th>
        <th>Groupe</th>
        <th>Option</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user){?>
        <tr>
            <td class="table-text"><?php echo $user['uid']; ?></td>
            <td class="table-text"><?php echo $user['name']?></td>
            <td class="table-text"><?php echo $user['email']; ?></td>
            <?php foreach ($permissions as $permission){
                if($permission['id'] == $user['primaryGroup']){?>
                    <td class="table-text"><?php echo $permission['group_name']?></td>
                <?php }
            }?>

            <td>
                <a href="#" onclick="editUserAction(this)" data-id="<?= $user["uid"] ?>" class="button4" style="background-color:#f1bb4e">Edit</a>
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

