<?php include "includes/db_con.php"; ?>
<?php include "includes/session.php"; ?>

<!doctype html>
<html lang="en">

<?php include "includes/head.php"; ?>    
<?php include "includes/modal.php"; ?>    
<body>

<div class="wrapper">
    
    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-1.jpg">

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
                <li class="active">
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
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><span class="fa fa-user" style="font-size:20px;color: #1dc7ea;"></span> Register Account</h4>
                            </div>
                            <div class="content">
                                <form class="form-signin" method="post" id="register-form">
                                    <div id="alert_reg"></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Employee ID</label>
                                                <input type="number" id="emp_id" name="emp_id" class="form-control" placeholder="*EMPLOYEE ID" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Branch</label>
                                                <select id="branch_id" name="branch_id" class="form-control" required>
                                                    <option value=""></option>
                                        <?php
                                        $query_branch = "SELECT * FROM branch";
                                        $run_branch = mysqli_query($conn, $query_branch);

                                        while($row_branch = mysqli_fetch_array($run_branch)){
                                            $br_id = $row_branch['branch_id'];
                                            $br_name = $row_branch['branch_name'];
                                            echo "<option value='$br_id'>$br_name</option>";
                                        }
                                        ?>
                                                </select>
                                            </div>
                                        </div>                         
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Department</label>
                                                <select id="dept_id" name="dept_id" class="form-control" required>
                                                    <option value=""></option>
                                        <?php
                                        $query_dept = "SELECT * FROM department";
                                        $run_dept = mysqli_query($conn, $query_dept);

                                        while($row_dept = mysqli_fetch_array($run_dept)){
                                            $dept_id = $row_dept['dept_id'];
                                            $dept_name = $row_dept['dept_name'];
                                            echo "<option value='$dept_id'>$dept_name</option>";
                                        }
                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Company (disabled)</label>
                                                <input type="text" class="form-control" disabled placeholder="Company" value="Leisure & Resorts World Corporation">
                                            </div>
                                        </div>                         
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="*EMAIL" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user">Username</label>
                                                <input type="text" class="form-control" id="userReg" name="userReg" placeholder="*USERNAME" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pass">Password</label>
                                                <input type="password" class="form-control" id="passReg" name="passReg" placeholder="*PASSWORD" required>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="*FIRST NAME" id="first" name="firstName" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="*LAST NAME" id="last" name="lastName" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="*HOME ADDRESS" id="address" name="address">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" name="btn-save" id="register" class="btn btn-info btn-fill pull-right">Register</button>
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
    <script>
        $(document).ready(function() {
            $('#branch_id').select2({
                
            });
            
            $('#dept_id').select2({

            });
        });
    </script>
</html>