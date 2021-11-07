<div class="wrapper-new ">
    <div id="formContent">
        <!-- Tabs Titles -->
        <div class="fadeIn  tile-stats first">
            <div class="count">  Ajouter un Utilisateur</div>
        </div>
        <!-- Login Form -->
        <form method="post">
            <input type="text" id="name" class="input-login fadeIn second" name="name" placeholder="Username">
            <input type="email" id="email" class="input-login fadeIn third" name="email" placeholder="Email">
            <input type="password" id="password" class="input-login fadeIn fourth" name="password" placeholder="Password">
            <input type="number" id="number" class="input-login fadeIn five" name="role" placeholder="Role">
            <input type="submit" class="fadeIn six" name="save" value="Save">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <h6 class="underlineHover" href="#">Liste des rôles</h6>
            <?php foreach ($permissions as $permission){?>
             <?php echo $permission['id']?> => <?php echo  $permission['group_name']?>  <br>
            <?php } ?>
        </div>

    </div>
</div>

