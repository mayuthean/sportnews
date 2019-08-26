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
$fname = "";
$lname = "";
$email = "";
$uname = "";
$phone = "";
$pass = "";
$success = "";
$fail = "";
if (isset($_POST['btnsave'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $uname = $_POST['username'];
    $phone = $_POST['phone'];
    $pass = md5($_POST['password']);
    $sql = "insert into users(first_name, last_name, email, username, phone, password) value(
            '{$fname}', '{$lname}', '{$email}', '{$uname}', '{$phone}', '{$pass}')";
    $i = non_query($sql);
    if ($i > 0) {
        $success = "You have insert successful";
    } else {
        $fail = "You have insert fail! please check again";
    }
}
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Create User
            <a href="<?php echo URL; ?>/pages/users/index.php" class="btn btn-success btn-xs"><i class="fa fa-reply"></i> Back</a>
        </h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <form method="POST" class="form-horizontal">
                    <?php if ($success != "") { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                        <?php echo $success; ?>;
                        }
                    </div>
                    <?php } ?>
                    <?php if ($fail != "") { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                        <?php echo $fail; ?>;
                        }
                    </div>
                    <?php } ?>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="fname" class="col-sm-3">First Name <span class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="fname" id="fname" class="form-control" value="<?php echo $fname; ?>" require>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lname" class="col-sm-3">Last Name <span class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="lname" id="lname" class="form-control" value="<?php echo $lname; ?>" require>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-3">Email<span class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>" require>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-3">Phone<span class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $phone; ?>" require>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username" class="col-sm-3">Username<span class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $uname; ?>" require>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-3">Password<span class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="password" name="password" id="password" class="form-control" value="<?php echo $pass; ?>" require>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="photo" class="col-sm-3">Image</label>
                                <input type="file" name="photo" id="photo" class="form-control">
                            </div>
                            <p>

                            </p>
                            <p>
                                <button class="btn btn-primary" name="btnsave">Save</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?php include "../../template/footer.php"; ?>