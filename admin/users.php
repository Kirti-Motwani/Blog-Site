<?php
ob_start();
$page_title = "Users";
include_once ("includes/header.php");
?>

<!DOCTYPE html>
<html lang="en">
<body id="page-top" class="sidebar-toggled">

<?php
include_once ("includes/navigation.php");
?>

<div id="wrapper">

    <!-- Sidebar -->
    <?php
    include_once ("includes/sidebar.php");
    ?>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"><?php echo $page_title;?></li>
            </ol>
            <?php
            if(isset($_GET['source'])){
                $source = $_GET['source'];
            }else{
                $source = "";
            }
            switch($source){
                case "add_user":
                    include_once ("pages/users/add-user.php");
                    break;
                case "edit_user":
                    include_once ("pages/users/edit-user.php");
                    break;
                case "delete_user":
                    include_once ("pages/users/delete-user.php");
                    break;
                default:
                    include_once ("pages/users/view-all-users.php");
            }
            ?>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <?php
        include_once ("includes/footer.php");
        ?>
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->
<!-- Scroll to Top Button-->
<?php
include_once ("includes/scripts_btn_to_top.php");
?>
  </body>
</html>
