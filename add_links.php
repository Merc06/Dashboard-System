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
                    <?php 
                    if($_SESSION['id'] == 1){
                        echo $_SESSION['firstname']."(Admin)";
                    }else{
                        echo $_SESSION['firstname'];    
                    }
                    ?>
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
                <li class="active">
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
                    <div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><span class="fa fa-plus-circle" style="font-size:20px;color: #1dc7ea;"></span> Add Links Here</h4>
                            </div>
                            <div class="content">
                                <form method="post" id="links-form">
                                    <div id="mess"></div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Links Title</label>
                                                <input type="text" class="form-control" placeholder="*LINKS TITLE" id="title_links" name="title_links" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>URL</label>
                                                <input type="text" class="form-control" placeholder="*URL" id="url_links" name="url_links" required>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" name="links" id="add_links" class="btn btn-info btn-fill pull-right">Add Links</button>
                                    <div class="clearfix"></div>
                                </form>
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