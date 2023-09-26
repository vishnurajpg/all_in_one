<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all in one</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
              <div class="card" >
                    <div class="card-head">
                            <h1>Student Library</h1>
                    </div>
                     <div class="card-body">
                            <button><a href="add.php"> New User </a></button>
                            <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Password</th>
                                <th scope="col">Location</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Extra</th>

                                </tr>
                            </thead>
                            <tbody>
                                    <?php 
                                        $con1 = mysqli_connect("localhost","root","","student_library");
                                            $sql = "select * from task";
                                                $merge = mysqli_query($con1,$sql);
                                                    $uid=1;
                                                     while($inner= mysqli_fetch_array($merge)){
                                                        $id =$inner['id']; //this is database id not use this time ???
                                                        $user_name = $inner['user_name'];
                                                        $password = $inner['password'];
                                                        $location = $inner['location'];
                                                        $contact=$inner['contact'];
                                    ?>
                                    <tr>
                                        <td><?php echo $uid ?></td>
                                        <td><?php echo $user_name?></td>
                                        <td><?php echo $password ?></td>
                                        <td><?php echo $location ?></td>
                                        <td> <?php echo $contact ?></td>
                                        <td>
                                        <div class="d-grid gap-2 d-md-block">
                                             <button class="btn btn-primary" type="button" ><a href='edit.php?edit=<?php echo $id?>'> Edit </a> </button>
                                             <button class="btn btn-danger"   type="button"> <a href='delete.php?delete=<?php echo $id?>'> Delete </a> </button>
                                        </div>
                                        </td>
                                        
                                    </tr>
                                    
                                    <?php $uid++; }?>
                            </tbody>
</table>
              </div>
           </div>
            </div>
        </div>
    </div>
</body>
</html>