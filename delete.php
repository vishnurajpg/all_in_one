<?php 
     $con = mysqli_connect("localhost","root","","student_library");

        $delete =$_GET['delete'];

            $query="delete from task where id ='$delete'";
     
                $combine =mysqli_query($con,$query);

                    if($combine){
                        echo '<script>location.replace("index.php")</script>';
                    }else{
                        echo "db error".$con->error;
                    }
?>