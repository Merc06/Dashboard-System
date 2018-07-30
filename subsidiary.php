<?php
include_once "includes/db_con.php";
include "includes/session.php";
?>

<!doctype html>
<html lang="en">

<?php include "includes/head.php"; ?>    
<?php include "includes/modal.php"; ?>    
<body>

<div class="wrapper">
    
    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-2.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php" class="simple-text">
                    <?php echo $_SESSION['firstname'];?>
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="index.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <?php if($_SESSION['id'] == 1){ ?>
                <li>
                    <a href="register.php">
                        <i class="pe-7s-add-user"></i>
                        <p>Add user</p>
                    </a>
                </li>
                <li>
                    <a href="viewUsers.php">
                        <i class="pe-7s-users"></i>
                        <p>View all users</p>
                    </a>
                </li>
                <li>
                    <a href="add_links.php">
                        <i class="pe-7s-plus"></i>
                        <p>Add links</p>
                    </a>
                </li>
                <li>
                    <a href="links_table.php">
                        <i class="pe-7s-note2"></i>
                        <p>Links Table</p>
                    </a>
                </li>
                <?php }else{ echo '';} ?>
  
            </ul>
        </div>
    </div>
    
    <div class="main-panel">
        
        <?php include "includes/navbar.php"; ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="margin-bottom:0;">
                            <div class="header">
                                <h4 class="title">SUBSIDIARY:</h4>
                                <br>
                            </div>
                            <div class="content">
                                <img class="img-responsive" src="assets/img/subsidiary.png">
                                <br>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <?php include "includes/footer.php"; ?>
    </div>
</div>


</body>

    <?php include "includes/script.php"; ?>

</html>