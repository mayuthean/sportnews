<?php
session_start();
?>
<?php ob_start(); ?>
<?php include "../../config.php"; ?>
<?php include "../../lib/db.php"; ?>
<?php include "../../lib/functions.php"; ?>
<?php
is_login();
?>

<?php include "../../template/header.php"; ?>

<?php
$pages = query("select * from pages where active=1");
$success = "";
if (isset($_GET['uid'])) {
    $id = $_GET['uid'];
    $i = non_query("update pages set active=0 where id=$id");
    if ($i > 0) {
        $success = "You have delete successful";
        header('location: index.php');
        $pages = query("select * from pages where active=1");
    }
}
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Page List
            <a href="<?php echo URL; ?>/pages/pages/create.php" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Create</a>
        </h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <?php if ($success != "") { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $success; ?>
                        }
                    </div>
                <?php } ?>
                <table class="table table-bordered table-sm">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>

                            </td>
                            <td></td>
                            <td>
                                <a href="?uid=<?php echo $user['id']; ?>" class="text-danger btn btn-danger btn-xs" title="Delete" onclick="return confirm('Are you sure!')">
                                    <i class="fa fa-trash"></i>
                                </a>
                                &nbsp;&nbsp;
                                <a href="<?php echo URL; ?>/pages/users/edit.php?uid=<?php echo $user['id']; ?>" class="text-success btn btn-success btn-xs" title="Edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<?php include "../../template/footer.php"; ?>