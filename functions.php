<?php
    date_default_timezone_set('Asia/Taipei');
    ini_set("session.gc_maxlifetime", "28800");
    $current_date = date('m/d/Y h:i:s a', time());
    session_start();
    include_once "includes/db_con.php";
    
    if(isset($_POST['user'])){
        $user = mysqli_real_escape_string($conn, $_POST['user']);
        $pass = $_POST['pass'];
        
        $query = "SELECT * FROM user WHERE username = '$user' AND password = '".md5($pass)."'";
        $run = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($run);
        $id = $row['id'];
        $empid = $row['emp_id'];
        $firstname = $row['firstname'];
        $username = $row['username'];
        $password = $row['password'];
        
        if($user != $username || md5($pass) != $password){
            echo "1";
            exit();
            
        }else{
            $_SESSION["id"] = $id;
            $_SESSION["empid"] = $empid;
            $_SESSION["firstname"] = $firstname;
            echo "true";
            exit();
        }
    }       //=============> END OF LOGIN ================>

    if(isset($_POST['logout'])){
        session_destroy();
        header("location: login.php");
    }       //=============> END OF LOGOUT ================>

    if(isset($_POST['emp_id'])){
        
        $empId = $_POST['emp_id'];
        $branchId = $_POST['branch_id'];
        $deptId = $_POST['dept_id'];
        $email = $_POST['email'];
        $userReg = mysqli_real_escape_string($conn, $_POST['userReg']);
        $passReg = $_POST['passReg'];
        $first = $_POST['first'];
        $last = $_POST['last'];
        $address = $_POST['address'];
        
        $query = "SELECT * FROM user WHERE username = '".$userReg."'";
        $run = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($run);
        if($row > 0){
           echo "1";
            exit();
        }else{
            $query_add = "INSERT INTO user 
            (emp_id, branch_id, dept_id,username, password, e_mail, firstname, lastname, address) 
            values(
            '" . $empId . "',
            '" . $branchId . "',
            '" . $deptId . "',
            '" . $userReg . "',
            '" . md5($passReg) . "',
            '" . $email . "',
            '" . $first . "',
            '" . $last . "',
            '" . $address . "')";
            $run_add = mysqli_query($conn, $query_add);
            
            echo "registered";
            exit();
        }
        
    }       //=============> END OF REGISTER ================>

    if(isset($_POST['title_links'])){
        
        $title_links = $_POST['title_links'];
        $url_links = $_POST['url_links'];
        
        $query = "SELECT * FROM links_tbl WHERE link_title = '".$title_links."'";
        $run = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($run);
        
        if($row > 0){
            echo "1";
            exit();
        }else{
            
            $query_add = "INSERT INTO links_tbl (link_url, link_title)
                            values('".$url_links."', '".$title_links."' )";
            $run_add = mysqli_query($conn, $query_add);
            echo "true";
            exit();
        }
        
    }       //=============> END OF ADD LINKS ================>

    if(isset($_POST['upload'])){
        $target_path = "assets/img/";
        $target_path = $target_path.basename($_FILES['photo']['name']);  
        move_uploaded_file($_FILES['photo']['tmp_name'],$target_path);
        
        $query = "UPDATE user SET image = '". basename($_FILES['photo']['name']) . "' WHERE id = '".$_SESSION['id']."'";
        $run = mysqli_query($conn, $query);
        
        echo "   
            <script>
                 window.location='index.php';
            </script> 
             ";
    }       //===========> END OF UPLOAD IMAGE ==============>

    if(isset($_POST['user_id'])){
        $output = '';   
          $query = "SELECT * FROM user 
                    INNER JOIN branch ON user.branch_id = branch.branch_id
                    INNER JOIN department ON user.dept_id = department.dept_id
                    WHERE id = '".$_POST["user_id"]."'";  
          $result = mysqli_query($conn, $query); 
          $output .= '     
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                    ';  
          while($row = mysqli_fetch_array($result))  
          {  
              $emailAddress = $row['e_mail'];

              if(empty($row["image"])){
                  $output .= '
                    <tr>  
                         <th colspan="3"><center><img class="thumbnail img-responsive" width="150" src="assets/img/no.png"></center></th> 
                    </tr>
                    ';
              }else{
                  $output .= '
                    <tr>  
                         <th colspan="3"><center><img class="thumbnail img-responsive" width="150" src="assets/img/'.$row["image"].'"></center></th> 
                    </tr>
                    ';
              }
              
              $output .= ' 
                    <tr align="center">  
                         <td width="40%"><label>Employee ID</label></td>
                         <td width="10%"><label>:</label></td>
                         <td width="50%">'.$row["emp_id"].'</td>  
                    </tr>
                    <tr align="center">  
                         <td width="40%"><label>Branch</label></td>
                         <td width="10%"><label>:</label></td>
                         <td width="50%">'.$row["branch_name"].'</td>  
                    </tr>
                    <tr align="center">  
                         <td width="40%"><label>Department</label></td>
                         <td width="10%"><label>:</label></td>
                         <td width="50%">'.$row["dept_name"].'</td>  
                    </tr>
                    <tr align="center">  
                         <td width="40%"><label>Username</label></td>
                         <td width="10%"><label>:</label></td>
                         <td width="50%">'.$row["username"].'</td>  
                    </tr>  
                    <tr align="center">  
                         <td width="40%"><label>Email</label></td>
                         <td width="10%"><label>:</label></td>
                         <td width="50%">'.$emailAddress.'</td>  
                    </tr>  
                    <tr align="center">  
                         <td width="40%"><label>Firstname</label></td>
                         <td width="10%"><label>:</label></td>
                         <td width="50%">'.$row["firstname"].'</td>  
                    </tr>  
                    <tr align="center">  
                         <td width="40%"><label>Lastname</label></td>
                         <td width="10%"><label>:</label></td>
                         <td width="50%">'.$row["lastname"].'</td>  
                    </tr>
                    <tr align="center">  
                         <td width="40%"><label>Address</label></td>
                         <td width="10%"><label>:</label></td>
                         <td width="50%">'.$row["address"].'</td>  
                    </tr> 
               ';  
          }  
          $output .= '  
               </table>  
          </div>  
          ';  
          echo $output;  
    }

    if(isset($_POST['edit_id'])){
  
          $query = "SELECT * FROM user WHERE id = '".$_POST["edit_id"]."'";  
          $result = mysqli_query($conn, $query);  
          $row = mysqli_fetch_array($result);  
          echo json_encode($row);  

    }

    if(isset($_POST['empId'])){
        $userId = $_POST['userId'];
        $empId = $_POST['empId'];
        $branchId = $_POST['branchId'];
        $deptId = $_POST['deptId'];
        $emailAdd = $_POST['emailAdd'];
        $user_Name = $_POST['user_Name'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $addr = $_POST['addr'];
        
        $query = "  
           UPDATE user   
           SET emp_id = '".$empId."',   
           branch_id = '".$branchId."',   
           dept_id = '".$deptId."',   
           username = '".$user_Name."',   
           e_mail = '".$emailAdd."',
           firstname = '".$firstname."',
           lastname = '".$lastname."',
           address = '".$addr."'
           WHERE id = '".$userId."'";  
          $run = mysqli_query($conn, $query);
        
    }

    if(isset($_POST['frame_id'])){
        $frame_id = $_POST['frame_id'];
        
        $query = "SELECT * FROM links_tbl WHERE link_id = '".$frame_id."'";
        $run = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($run);
        echo '
            <iframe src="'.$row["link_url"].'" style="width: 100%; height: 700px;"
             marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0">
            </iframe>
        ';
        
        $insert_query = "INSERT INTO logs_tbl
                        (log_empid, link_id, log_date_access) VALUES
                        ('".$_SESSION["empid"]."', '$frame_id', '".date('Y-m-d')."')
                        ";
        $run_insert = mysqli_query($conn, $insert_query);
    }

    if(isset($_POST['delete_id'])){
        
        $query = "DELETE FROM user WHERE id = '".$_POST['delete_id']."'";
        $run = mysqli_query($conn, $query);
        
    }
 
    if(isset($_POST['edit_links'])){
  
          $query = "SELECT * FROM links_tbl WHERE link_id = '".$_POST["edit_links"]."'";  
          $result = mysqli_query($conn, $query);  
          $row = mysqli_fetch_array($result);  
          echo json_encode($row);  

    }

    if(isset($_POST['url_submit'])){
        $query = "UPDATE links_tbl
                  SET link_url = '".$_POST["url_submit"]."',
                  link_title = '".$_POST["title_submit"]."'
                  WHERE link_id = '".$_POST["row_links_id"]."'
        ";
        $run = mysqli_query($conn, $query);
    }

    if(isset($_POST['deleteLinks'])){
        
        $query = "DELETE FROM links_tbl WHERE link_id = '".$_POST['deleteLinks']."'";
        $run = mysqli_query($conn, $query);
        
    }


?>