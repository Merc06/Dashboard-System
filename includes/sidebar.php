<div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">

<!--

    Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
    Tip 2: you can also add an image using data-image tag

-->
    
    <?php 
        include "includes/db_con.php";
        $query = "SELECT * FROM user";
        $run = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($run);
    ?>

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
            <li class="active">
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
            
            <?php include "includes/quick_links.php"; ?>
            
            
        </ul>
    </div>
</div>





