$(document).ready(function(){
 
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    
    $("#login-form").validate({
        
        rules:
        {
            userlog: {
                required: true,
                minlength: 3
            },
            passlog: {
                required: true,
                minlength: 4
            }
        },
        messages: 
        {
            userlog: {
                required: "<p class='error'>Username is required!</p>",
                minlength: "<p class='error'>Username is too short!</p>"
            },
            passlog: {
                required: "<p class='error'>Password is required!</p>",
                minlength: "<p class='error'>Password requires min. of 4 and max. of 15</p>"
             }
        },
        submitHandler: submitLogin
        
    });
    
    function submitLogin(){
        var user = $("#username").val();
        var pass = $("#password").val();

            $.ajax({
                url     :   "functions.php",
                method  :   "POST",
                data    :   {user:user,pass:pass},
                beforeSend: function(){
                    $("#message").html('');
                    $("#login").html('Login');
                },
                success :   function(data){
                    
                    $("#login").html('<span class="fa fa-gear fa-spin"></span> &nbsp; Please wait...');
                    if(data == 1){                

                        $("#message").fadeIn(1000, function(){

                            $("#message").html('<div class="alert alert-danger alert-with-icon alert-dismissable fade in" data-notify="container"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button><span data-notify="icon" class="pe-7s-bell"></span><span data-notify="message">Incorrect username or password! </span></div>');
                            
                            $("#login").html('Login');
                            $("#message").fadeOut(4000);
                        });
                    }else if(data == "true"){

                            window.location = "index.php";
 
                    }else{
                        $("#message").fadeIn(1000, function(){

                            $("#message").html('<div class="alert alert-danger"><span class="fa fa-info-sign"></span> &nbsp; '+data+' !</div>');

                            $("#login").html('Login');
                        });
                    }
                }
            });
    }
    
    jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Only alphabetical characters");
    
    $("#register-form").validate({
        
        rules:
        {
            emp_id: {
                required: true,
                minlength: 3
            },
            branch_id: {
                required: true
            },
            dept_id: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            userReg: {
                required: true,
                minlength: 3
            },
            passReg: {
                required: true,
                minlength: 4,
                maxlength: 15
            },
            firstName: {
                required: true,
                minlength: 3,
                maxlength: 20,
                lettersonly: true
            },
            lastName: {
                required: true,
                minlength: 3,
                maxlength: 20,
                lettersonly: true
            },
            address: {
                required: true,
                minlength: 3
            },
        },
        messages:
        {
            emp_id: "<p class='error'>Enter valid Employee Number</p>",
            branch_id: "<p class='error'>Select Branch</p>",
            dept_id: "<p class='error'>Select Department</p>",
            email: "<p class='error'>Enter a valid Email</p>",
            userReg: "<p class='error'>Enter a valid Username</p>",
            passReg: "<p class='error'>Password contains a min. of 4 and max. of 15</p>",
            firstName: {
                required: "<p class='error'>Enter a valid Firstname</p>",
                minlength: "<p class='error'>Firstname is too short</p>",
                maxlength: "<p class='error'>Firstname is too long</p>",
                lettersonly: "<p class='error'>Name contains letters only</p>"
            },
            lastName: {
                required: "<p class='error'>Enter a valid Lastname</p>",
                minlength: "<p class='error'>Lastname is too short</p>",
                maxlength: "<p class='error'>Lastname is too long</p>",
                lettersonly: "<p class='error'>Name contains letters only</p>"
            },
            address: "<p class='error'>Enter a valid address</p>"
        },
        submitHandler: submitForm
        
    });
    
    function submitForm(){
        
        var emp_id = $("#emp_id").val();
        var branch_id = $("#branch_id").val();
        var dept_id = $("#dept_id").val();
        var email = $("#email").val();
        var userReg = $("#userReg").val();
        var passReg = $("#passReg").val();
        var first = $("#first").val();
        var last = $("#last").val();
        var address= $("#address").val();

        $.ajax({
           
            url    :   "functions.php",
            method :   "POST",
            data   :{emp_id:emp_id,branch_id:branch_id,dept_id:dept_id,email:email,
                     userReg:userReg,passReg:passReg,first:first,last:last,address:address},
            beforeSend: function(){
                $("#alert_reg").html('');
                $("#register").html('Register');
            },
            success :   function(data){
                
                $("#register").html('<span class="fa fa-gear fa-spin"></span> &nbsp; Please wait...');
                
                if(data == 1){
                        
                    $("#alert_reg").fadeIn(2000, function(){
                        
                        $("#alert_reg").html('<div class="alert alert-danger alert-with-icon alert-dismissable fade in" data-notify="container"><span data-notify="icon" class="pe-7s-bell"></span><span data-notify="message">Username already taken!</span></div>');

                        $("#register").html('Register');
                        $("#alert_reg").fadeOut(4000);
                    });
                }else if(data == "registered"){
                    
                    $("#alert_reg").fadeIn(2000, function(){
                        
                        $("#alert_reg").html('<div class="alert alert-success alert-with-icon alert-dismissable fade in" data-notify="container"><span data-notify="icon" class="pe-7s-bell"></span><span data-notify="message">You have successfully register an account! </span></div>');
                    
                        $(".form-control").val(""); 
                        $("#register").html('Register');
                        $("#alert_reg").fadeOut(4000);
                    });
                }else{
                    $("#alert_reg").fadeIn(1000, function(){

                        $("#alert_reg").html('<div class="alert alert-danger"><span class="fa fa-info-sign"></span> &nbsp; '+data+' !</div>');

                        $("#register").html('Register');
                    });
                }
            }
        });
        return false;
    }
    
    $("#links-form").validate({
        
        rules:
        {
            title_links:  {
                required: true
            },
            url_links: {
                required: true
            }
        },
        messages:
        {
            title_links: "<p class='error'>Link title is required!</p>",
            url_links: "<p class='error'>Url is required!</p>"
        },
        submitHandler: submitLinks
        
    });
    
    function submitLinks(){
        
        var title_links = $("#title_links").val();
        var url_links = $("#url_links").val();
        
        $.ajax({
            
            url    :   "functions.php",
            method :   "POST",
            data   :    {title_links:title_links,url_links:url_links},
            beforeSend: function(){
                $("#mess").html('');
                $("#add_links").html('Add Links');
            },
            success:    function(data){
                
                $("#add_links").html('<span class="fa fa-gear fa-spin"></span> &nbsp; please wait...');
                
                if(data == 1){
                    
                    $("#mess").fadeIn(1000, function(){
                        
                        $("#mess").html('<div class="alert alert-danger alert-with-icon alert-dismissable fade in" data-notify="container"><span data-notify="icon" class="pe-7s-bell"></span><span data-notify="message">This link is already exist!</span></div>');

                        $("#add_links").html('Add Links');
                        $("#mess").fadeOut(4000);
                    });
                }else if(data == "true"){

                    $("#mess").fadeIn(1000, function(){
                        
                        $("#mess").html('<div class="alert alert-success alert-with-icon alert-dismissable fade in" data-notify="container"><span data-notify="icon" class="pe-7s-bell"></span><span data-notify="message">You have successfully added Links!</span></div>');

                        $(".form-control").val('');
                        $("#add_links").html('Add Links');
                        $("#mess").fadeOut(4000);
                    })
                }else{
                    $("#mess").fadeIn(1000, function(){

                        $("#mess").html('<div class="alert alert-danger"><span class="fa fa-info-sign"></span> &nbsp; '+data+' !</div>');

                        $("#add_links").html('Add Links');
                    });
                }
            }
            
        });
        
    }
    
    $(document).on('click', '.view_user', function(){  
           var user_id = $(this).attr("id");  
           if(user_id != '')  
           {  
                $.ajax({  
                     url:"functions.php",  
                     method:"POST",  
                     data:{user_id:user_id},  
                     success:function(data){  
                          $('#user_detail').html(data);  
                          $('#data_modal').modal('show');  
                     }  
                });  
           }            
      });
    
    $(document).on('click', '.edit_user', function(){  
           var edit_id = $(this).attr("id");  
           $.ajax({  
                url:"functions.php",  
                method:"POST",  
                data:{edit_id:edit_id},  
                dataType:"json",  
                success:function(data){
                     $('#userId').val(data.id);
                     $('#empId').val(data.emp_id);  
                     $('#branchId').val(data.branch_id);  
                     $('#deptId').val(data.dept_id);  
                     $('#user_Name').val(data.username);  
                     $('#emailAdd').val(data.e_mail);  
                     $('#firstname').val(data.firstname);
                     $('#lastname').val(data.lastname); 
                     $('#addr').val(data.address); 
 
                     $('#edit_user_modal').modal('show');  
                }  
           });  
      });
    
    $("#editUser").click(function(){
        var userId = $("#userId").val();
        var empId = $("#empId").val();
        var branchId = $("#branchId").val();
        var deptId = $("#deptId").val();
        var emailAdd = $("#emailAdd").val();
        var user_Name = $("#user_Name").val();
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var addr= $("#addr").val();
        
        $.ajax({
            url     :   "functions.php",
            method  :   "POST",
            data    :   {userId:userId,empId:empId,branchId:branchId,deptId:deptId,
                         emailAdd:emailAdd,user_Name:user_Name,firstname:firstname,
                         lastname:lastname,addr:addr},
            success :   function(data){
                $("#edit_user_modal").modal("hide");
                
            }
        });
        
    });
    
    $(".delete_user").click(function(){  
           var delete_id = $(this).attr("id");  
           if(confirm("Are you sure you want to delete this account?"))  
           {
               if(delete_id == 1){
                   alert("Head admin cannot be deleted!");
                   return false;
               }else{
                 $.ajax({  
                     url:"functions.php",  
                     method:"POST",  
                     data:{delete_id:delete_id},  
                     success:function(data){    
                          alert("Success!");
                        location.reload();
                     }  
                });                   
               }
 
           }else{
               return false;
           }            
      });
    
    $(document).on('click', '.add_frame', function(){  
           var frame_id = $(this).attr("id");  
           $.ajax({  
                url:"functions.php",  
                method:"POST",  
                data:{frame_id:frame_id},
                success:function(data){
                    $('#time_card').hide();
                    $('#bar_card').hide();
                    $('#line_card').hide();
                    $('#frames').html(data);
                    $('#frame_card').fadeIn();
                }  
           });  
      });
    
    $(document).on('click', '.editLinks', function(){  
           var edit_links = $(this).attr("id");  
           $.ajax({  
                url:"functions.php",  
                method:"POST",  
                data:{edit_links:edit_links},  
                dataType:"json",  
                success:function(data){ 
                     $('#row_links_id').val(data.link_id);
                     $('#url_edit').val(data.link_url);  
                     $('#title_edit').val(data.link_title);  
 
                     $('#editLinks').modal('show');  
                }  
           });  
      });
    
    $("#submit_edit").click(function(){
        var row_links_id = $("#row_links_id").val();
        var url_submit = $("#url_edit").val();
        var title_submit = $("#title_edit").val();
        
        if(url_submit == "" || title_submit == ""){
            return false;
        }else{
            $.ajax({
                url     :   "functions.php",
                method  :   "POST",
                data    :   {row_links_id:row_links_id,url_submit:url_submit,                                  title_submit:title_submit},
                success :   function(data){
                    $("#editLinks").modal('hide');
                }

            });    
        }
        
    });
    
    $(".deleteLinks").click(function(){
        var deleteLinks = $(this).attr("id");
        if(confirm("Are you sure you want to delete this Link?")){
            $.ajax({
                url     :   "functions.php",
                method  :   "POST",
                data    :   {deleteLinks:deleteLinks},
                success :   function(data){
                    alert("Success!");
                    location.reload();
                }
            });
        }  
        
    });
    
    
    
});
