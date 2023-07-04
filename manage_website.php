<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>


<?php
//session_start();
//error_reporting(0);
include('./constant/connect1.php');


    $q1 = "UPDATE `manage_website` SET `title`='$title',`short_title`='$short_title',`footer`='$footer' ,`currency_code`= '$currency_code'";
    if ($conn->query($q1) === TRUE) {

        $_SESSION['success'] = 'Record Successfully Updated';
?>
        <script type="text/javascript">
            window.location = "manage_website.php";
        </script>
    <?php

    } else {

        $_SESSION['error'] = 'Something Went Wrong';
    }
    ?>
    <script>
        //window.location = "sms_config.php";
    </script>
<?php


?>

<?php
$que = "select * from manage_website";
$query = $conn->query($que);
while ($row = mysqli_fetch_array($query)) {
    //print_r($row);
    extract($row);
    $title = $row['title'];
    $short_title = $row['short_title'];
    $footer = $row['footer'];
    $currency_code = $row['currency_code'];
   
}

?>



<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Website Management</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Website Management</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid">




        <div class="row">
            <div class="col-lg-8" style="    margin-left: 10%;">
                <div class="card">
                    <div class="card-title">

                    </div>
                    <div class="card-body">
                        <div class="input-states">
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="<?php echo $title; ?>" name="title" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Short Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="<?php echo $short_title; ?>" name="short_title" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Footer</label>
                                        <div class="col-sm-9">
                                            <textarea class="textarea_editor form-control" name="footer" rows="5" placeholder="Enter text ..." style="height:300px;"><?php echo $footer; ?></textarea>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Currency Code</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="<?php echo $currency_code; ?>" name="currency_code" class="form-control">
                                        </div>
                                    </div>
                                </div>

                              


                                <button type="submit" name="btn_web" class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <?php
        include('./constant/layout/footer.php');

        ?>