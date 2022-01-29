<div class="card col-lg-4 offset-4">
    <div class="card-body">
        <div class="d-flex flex-column align-items-center text-center">
            <div class="mt-3">
                <h4>
                    <label>Id : </label>
                    <span id="user_uid"><?php echo $user['uid']; ?></span>
                </h4>
                <label>Nom</label>
                <input id="player" type="text" class="input-name" placeholder="" value="<?= $user['name']; ?>">
                <p class="text-secondary mb-1">Email : <?php echo $user['email']; ?></p>

                    <select id='role' class="form-select form-control" aria-label="Role" >
                    <?php foreach ($roles as $role){
                        if($role['id'] ==$user['primaryGroup']){ ?>
                    <option selected>Role : <?php echo $role['group_name'];?></option>
                    <?php }}?>
                    <?php for($i = 0 ; $i <= 8; $i++){?>
                        <?php if($i != $user['primaryGroup']){?>
                            <?php foreach ($roles as $role){
                                if($role['id'] == $i){?>
                            <option name="role" value="<?php echo $i?>">Role : <?php echo $role['group_name']; ?></option>
                    <?php }}}} ?>
                </select>
                </div>
            </div>
        </div>
    </div>
</div>