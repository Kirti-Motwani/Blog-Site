<?php
$page_title = "Categories";
?>
<!DOCTYPE html>
<html lang="en">

<?php
    include_once ("includes/header.php");
?>
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
              <a href="index.php">CMS Admin</a>
            </li>
            <li class="breadcrumb-item active"><?php echo  $page_title;?></li>
          </ol>

          <!--MAIN PAGE CONTENT-->
          <div class="row">
            <div class="col-md-6 ">
                <?php
                include_once ("pages/categories/add-category-form.php");
                ?>
            </div>
              <div class="col-md-6">
                  <?php
                  include_once ("pages/categories/edit-category-form.php");
                  ?>
              </div>
          </div>

            <!--row end-->
            <?php
            include_once ("pages/categories/view-all-categories.php");
            ?>
            <!--END OF MAIN PAGE CONTENT-->
        </div>
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
