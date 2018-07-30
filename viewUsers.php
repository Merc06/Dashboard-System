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
    
    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-4.jpg">

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
                <li class="active">
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
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><span class="fa fa-users" style="font-size:20px;color: #1dc7ea;"></span>&nbsp; Users Table</h4>
                                <p class="category">Here you can view, modify or delete Users</p>
                            </div><br>
                            <div class="content table-responsive table-full-width">
                                <table class="mdl-data-table table table-hover table-striped" id="dataTable">
                                    <thead>
                                        <th>Employee ID</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                        <?php
                                        
                            $links_table = "SELECT * FROM user";
                            $result_table = mysqli_query($conn, $links_table);
                            while($row = mysqli_fetch_array($result_table)){
                                $id = $row["id"];
                                echo '
                                    <tr>
                                        <td>'.$row["emp_id"].'</td>
                                        <td>'.$row["firstname"].'</td>
                                        <td>'.$row["lastname"].'</td>
                                        <td>'.$row["address"].'</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" id="'.$id.'" class="view_user btn btn-fill btn-info btn-sm">View</button>
                                                <button type="button" id="'.$id.'" class="edit_user btn btn-fill btn-warning btn-sm">Edit</button>
                                                <button type="button" id="'.$id.'" class="delete_user btn btn-fill btn-danger btn-sm">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                ';
                            }
                        ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div><br>
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
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable').DataTable( {
                columnDefs: [
                    {
                        targets: [ 0, 1, 2 ],
                        className: 'mdl-data-table__cell--non-numeric'
                    }
                ]
            } );
        } );
    </script>

</html>