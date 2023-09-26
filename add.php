<?php 
        $con = mysqli_connect("localhost","root","","student_library");

        if(isset($_POST['submit'])){
           
        $user_name= $_POST['user_name'];

        $password = $_POST['password'];

        $location = $_POST['location'];

        $contact = $_POST['contact'];

        $query = "INSERT INTO task(user_name,password,location,contact) values('$user_name','$password','$location','$contact')";
           
        $merge = mysqli_query($con,$query);

        if($merge){
            echo '<script>location.replace("index.php")</script>';
        }else{
            echo "keep going".$con->error;
        }

        }

        
?>











<!DOCTYPE html>
<html class="color" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./add.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>
<body class="color">
    
    <div class="container">
    
        <form method="post" action="add.php" id="form" autocomplete="off">
        <h1>Register form</h1>
            <div class="input">
                <label class="lab">user name</label>
                <input type="text" name="user_name" id="user_name" placeholder="Enter user name">
                <label id="user_name-error" class="error" for="user_name"></label>
            </div>
            <div class="input">
                <label class="lab">password</label>
                <input type="text" name="password" id="password" placeholder="Enter password">
            </div>
            <div class="input">
                <label class="lab">location</label>
                <input type="text" name="location" id="location" placeholder="Enter location">
            </div>
            <div class="input">
                <label class="lab">contact</label>
                <input type="text" name="contact" id="contact" placeholder="Enter contact">
            </div>
            
                <input type="submit" id="submit" name="submit">
            </form>
            <script src="./jquery-validation-1.19.5/jquery.js"></script>
            <script src="./jquery-validation-1.19.5/jquery.validate.js"></script>
            <script>
                $(document).ready(function(){
                   $("#form").click(function(){
                    $("#form").validate({
                        rules:{
                            user_name:"required",
                            password:{
                                required:true, minlength:5
                            },
                            location:"required",
                            contact:{
                                required:true,
                                digits:true,
                                minlength:10,
                                maxlength:10
                            }
                        },
                        messages:{
                            user_name:"enter name",
                            password:{
                                required:"please enter password",
                                minlength:"type maxmum 5 "
                            },
                            location:"please enter location",
                            contact:{
                                required:"type only number",
                                maxlength:"10 degits must"
                            }
                        }
                    });

                   });
                   
                });
            </script>
    </div>
    
    
</body>
</html>