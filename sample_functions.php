<?php 
if(isset($_POST['emp'])){
    $emp = $_POST['emp'];
    
    echo '
        <div class="alert alert-success alert-dismissable fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong> Your Employee ID is "'.$emp.'"
        </div>
    ';
}
?>