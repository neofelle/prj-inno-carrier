<script>
var BASE_URL = "<?php echo $base_url; ?>";
</script>

<section class="content-header">
    <h1>
        <?= __("Users") ?>
        <!-- <small>Control panel</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
    </ol>
</section>

<section class="content">
    <!-- Main Row -->
    <div class="row">
        <section class="col-lg-12 ">
            <div class="box " >
                <div class="box-header">

                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addUserModal" title="Add New User" ><i class="fa fa-plus"></i> Add New User</button>

                    <h3 class="box-title text-black" ></h3>
                </div>
                <div class="box-body">
                    <table id="dt-users-list" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Group</th>
                                <th>Date Created</th>
                                <th>Date Modified</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users as $u) { ?>
                                <?php include("edit.ctp"); ?>
                                <tr>
                                    <td><?= $u->username; ?></td>
                                    <td><?= $u->group->name; ?></td>
                                    <td><?= date("M d, Y", strtotime($u->created)); ?></td>
                                    <td><?= date("M d, Y", strtotime($u->modified)); ?></td>
                                    <td style="text-align:center;">
                                        <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#editUserModal-<?= $u->id; ?>">Edit</button>
                                        <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteUserModal-<?= $u->id; ?>">Delete</button>

                                        <div style="text-align:left !important;" class="modal fade" id="deleteUserModal-<?= $u->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                            <div class="modal-dialog " role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="exampleModalLabel">Delete User</h4>
                                                  </div>

                                                  <div class="modal-body">
                                                    <p>Are you sure you want to delete selected entry?</p>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <?= $this->Form->postLink(
                                                            'Yes',
                                                            ['action' => 'delete', $u->id],
                                                            ['class' => 'btn btn-danger', 'escape' => false]
                                                        )
                                                    ?>                                    
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</section>

<?php include("add.ctp"); ?>
