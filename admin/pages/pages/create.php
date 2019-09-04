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
$title = "";
$success = "";
$fail = "";
if (isset($_POST['btnsave'])) { }
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Create Page
            <a href="<?php echo URL; ?>/pages/pages/index.php" class="btn btn-success btn-xs"><i class="fa fa-reply"></i> Back</a>
        </h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <form method="POST" class="form-horizontal" enctype="multipart/form-data">
                    <?php if ($success != "") { ?>
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $success; ?>
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
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="title" class="col-sm-1">Title <span class="text-danger">*</span></label>
                                <div class="col-sm-11">
                                    <input type="text" name="title" id="title" class="form-control" value="<?php echo $title; ?>" require>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Description</h2>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                            <p></p>
                            <p>
                                <button class="btn btn-success btn-sm">Save</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
<div class="control-sidebar-bg"></div>
<?php get_js(); ?>
<script>
    CKEDITOR.replace('description');
</script>
<?php include "../../template/clean-footer.php"; ?>