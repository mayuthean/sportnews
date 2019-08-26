<?php
session_start();
?>
<?php include "../../config.php"; ?>
<?php include "../../lib/db.php"; ?>
<?php include "../../lib/functions.php"; ?>
<?php
is_login();
?>
<?php include "../../template/header.php"; ?>
<?php
$users = query("select * from users");
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            User List
            <a href="<?php echo URL;?>/pages/users/create.php" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Create</a>
        </h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <table class="table table-bordered table-sm">
                    <thead>
                        <th>#</th>
                        <th>Fist Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Image</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) { ?>
                            <tr>
                                <td><?php echo $user['id']; ?></td>
                                <td><?php echo $user['first_name']; ?></td>
                                <td><?php echo $user['last_name']; ?></td>
                                <td><?php echo $user['username'];?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td><?php echo $user['phone']; ?></td>
                                <td>
                                    <img src="" alt="PHOTO">
                                </td>
                                <td>
                                    <a href="#" class="text-danger" title="Delete" onclick="return confirm('Are you sure!')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    &nbsp;&nbsp;
                                    <a href="#" class="text-success" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<?php include "../../template/footer.php"; ?>