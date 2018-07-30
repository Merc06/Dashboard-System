<div class="modal fade" id="logout">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>  
        <h5 class="modal-title">Ready to Leave?</h5>
    
      </div>
      <div class="modal-body">Are you sure you want to leave?</div>
        <form method="POST" action="functions.php">
          <div class="modal-footer" style="padding: 10px 10px;">
            <button class="btn btn-primary btn-sm" type="button" data-dismiss="modal">Cancel</button>
            <input type="submit" class="btn btn-danger btn-sm" value="Logout" name="logout">
          </div>
        </form>
    </div>
  </div>
</div>


<div class="modal fade" id="login-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">  
          <img src="assets/img/newlog.jpg" width="100%";>
      </div>
      <div class="modal-body">
            <div class="container-fluid">
                <div id="message"></div>
                <form method="post" id="login-form">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="userlog" id="username" placeholder="*Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="passlog" id="password" placeholder="*Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn form-control" name="login" id="login">
                            Login
                        </button>
                        <div class="clearfix"></div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
  </div>
</div>


<div class="modal fade" id="upload">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>  
        <h5 class="modal-title">Upload Profile Picture</h5>
      </div>
        <div class="modal-body">
            <form method="post" enctype="multipart/form-data" action="functions.php">
                <input type="file" name="photo" class="form-control-file" required>
                
        </div>
                <div class="modal-footer" style="padding: 7px 10px;">
                    <button class="btn btn-primary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                    <input type="submit" name="upload" class="btn btn-info pull-right btn-sm" value="Upload">
                </div>
            </form>
    </div>
  </div>
</div>


<div class="modal fade" id="editLinks">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>  
        <h5 class="modal-title">EDIT LINKS</h5>
      </div>
        <div class="modal-body">
            <form method="post">
                <div class="form-group">
                    <label>Url</label>
                    <input type="text" name="url_edit" id="url_edit" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title_edit" id="title_edit" class="form-control" required>
                </div>
                <input type="hidden" id="row_links_id">
                   
        </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                    <input type="submit" name="submit_edit" id="submit_edit" class="btn btn-warning pull-right btn-sm" value="Edit">
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="data_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">User Details</h5>
      </div>
        <div class="modal-body" id="user_detail"></div>
        <div class="modal-footer">
            <button class="btn btn-primary btn-sm" type="button" data-dismiss="modal">Back</button>
        </div>
    </div>
  </div>
</div>


<div id="edit_user_modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Edit User Details</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="edit-form">
                        <div id="alert"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Employee ID</label>
                                    <input type="number" id="empId" name="empId" class="form-control" placeholder="Enter Employee ID..." required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Branch</label>
                                    <select id="branchId" name="branch_id" class="form-control" required>
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
                                    <select id="deptId" name="dept_id" class="form-control" required>
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
                                    <input type="text" class="form-control" disabled placeholder="Company" value="Leisure & Resorts World Inc.">
                                </div>
                            </div>                         
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="emailAdd" name="email" placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user">Username</label>
                                    <input type="text" class="form-control" id="user_Name" name="user_Name" placeholder="Username" required>
                                </div>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" placeholder="First Name" id="firstname" name="firstname" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name" id="lastname" name="lastname" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="Home Address" id="addr" name="addr">
                                </div>
                            </div>
                        </div>
                         <input type="hidden" name="userId" id="userId">
                </div>
                <div class="modal-footer">
                    <button type="submit" id="editUser" class="btn btn-info btn-fill">Update</button>        
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </form>
                </div>  
           </div>  
      </div>  
 </div>

