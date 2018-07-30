<?php
    include_once "includes/db_con.php";
    
    if(!isset($_SESSION["id"])){
        echo "   
            <script>
                 window.location='login.php';
            </script> 
             ";
    }

    $query = "SELECT * FROM user 
                INNER JOIN branch ON user.branch_id = branch.branch_id
                INNER JOIN department ON user.dept_id = department.dept_id
                WHERE id = '".$_SESSION['id']."'";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result)){
        $pic = $row['image'];
        $emp_id = $row['emp_id'];
        $branch_name = $row['branch_name'];
        $dept_name = $row['dept_name'];
        $username = $row['username'];
        $email = $row['e_mail'];
        $first = $row['firstname'];
        $last = $row['lastname'];
        $address = $row['address'];
    }

?>

<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <b>LRWC APPLICATIONS</b>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <p><b>
                                Profile
                                </b><b class="caret"></b>
                            </p>

                      </a>
                      <ul class="dropdown-menu">
                            <div class="card card-user">
                                <div class="image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                                </div>
                                <div class="content">
                                    <div class="author">
                                         <a data-toggle="modal" href="#" data-target="#upload">
                                            <img class="avatar border-gray" data-toggle="tooltip" title="Upload Photo" data-placement="bottom" src="assets/img/<?php if(!empty($pic)){ echo $pic; }else echo 'upload.png'; ?>" alt="..."/>
                                        </a>
                                        <h4 class="title"><?php echo "$first $last"; ?><br />
                                             <small>UN: <?php echo $username; ?></small><br>
                                              <small>Leisure & Resort's World Corp.</small>
                                          </h4>
                                    <p class="description text-center">
                                        <div class="content table-responsive table-full-width">
                                            <table class="table table-hover table-striped">
                                                <tr align="center">  
                                                     <td width="40%"><label>Employee ID</label></td>
                                                     <td width="10%"><label>:</label></td>
                                                     <td width="50%"><?php echo $emp_id; ?></td>  
                                                </tr>
                                                <tr align="center">  
                                                     <td width="40%"><label>Branch</label></td>
                                                     <td width="10%"><label>:</label></td>
                                                     <td width="50%"><?php echo $branch_name; ?></td>  
                                                </tr>
                                                <tr align="center">  
                                                     <td width="40%"><label>Department</label></td>
                                                     <td width="10%"><label>:</label></td>
                                                     <td width="50%"><?php echo $dept_name; ?></td>  
                                                </tr>
                                                <tr align="center">  
                                                     <td width="40%"><label>Email</label></td>
                                                     <td width="10%"><label>:</label></td>
                                                     <td width="50%"><?php echo $email; ?></td>  
                                                </tr>  
                                                <tr align="center">  
                                                     <td width="40%"><label>Address</label></td>
                                                     <td width="10%"><label>:</label></td>
                                                     <td width="50%"><?php echo $address; ?></td>  
                                                </tr>  
                                            </table>
                                        </div>
                                    </p>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <button href="#" class="btn btn-simple"><i class="fa fa-skype"></i></button>
                                    <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                    <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                                </div>
                            </div>
                      </ul>
                </li>
                <li>
                    <a data-toggle="modal" href="#" data-target="#logout" style="color: #ff4a54;">
                        <p><b>Logout</b></p>
                    </a>
                </li>
                <li class="separator hidden-lg"></li>
            </ul>
        </div>
    </div>
</nav>