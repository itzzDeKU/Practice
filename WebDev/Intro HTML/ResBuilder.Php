<?php
$insert =false;
if(isset($_POST['name'])){
  //Set connection variables
  $server= "localhost";
  $username= "root";
  $password= "root";

  //Create a database connection
  $con=mysqli_connect($server, $username, $password);

  //Connection Success
  if(!$con){
    die("Connection to this database failed due to".mysqli_connect_error());
  }
  $name= $_POST['name'];
  $email= $_POST['email'];
  $branch= $_POST['branch'];
  $highqual= $_POST['highqual'];
  $gender=$_POST['gender'];
  $mobno= $_POST['mobno'];
  $role=$_POST['role'];
  $skills=$_POST['skills'];
  $descr= $_POST['descr'];

  $sql="INSERT INTO `resbuild`.`resbuild` (`name`, `email`, `branch`, `highqual`, `gender`, `mobno`, `role`,`skills`,`descr`) VALUES ('$name', '$email', '$branch', '$highqual', '$gender',$mobno', '$role','$skills','$descr');";
  echo "$sql";

  //Execute the query
  if($con->query($sql) == true){
  echo "Successfully Inserted";
    $insert = true;
  //Flag for successful Insertion  
  }
  else{
    echo "ERROR: $sql <br> $con->error";
  }
  //Close the database connection
  $con->close();
}

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Resumee Builder-BITP</title>
        <link rel="shortcut icon" href="https://i.ibb.co/F8Vp2dk/Abs1.jpg" type="image/jpg">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">  
    </head>

    <body>
        <img class="bg" src="bg2.jpg" alt="Background">
        <div class="row" style="background-color:rgba(54, 52, 52, 0.929);">
            <div class="column">
              <img src="logo.jpg" alt="Logo" style="width: 100px; padding-left: 15px;">
            </div>
            <div class="column">
                 <h1>Resume Generator</h1>
            </div>
          </div>
          <br><br>
            <div class="container">
                <form action="ResBuilder.Php" method="post">

                    <label for="name">Name: </label> &nbsp;
                    <input type="text" id="name" name="name" placeholder="Name"> <br><br>
            
                    <label for="email">Email:</label> &nbsp;
                    <input type="text" id="email" name="email" placeholder="Email"><br><br>
             
                    <label for="branch">Branch:</label>&nbsp;
                    <input type="text" id="branch" name="branch" placeholder="Enter Branch"><br> <br>

                    <label for="highqual">Highest Qualifiaction: </label> &nbsp;
                    <select name="highqual" id="highqual" class="option" required >
                        <option value=""0>Choose..</option>
                        <option value="Matriculate">Matriculate</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Undergraduate">Undergraduate</option>
                        <option value="Postgraduate">Postgraduate</option>
                        <option value="Other">Others</option>
                    </select><br><br>

                    <label for="gender">Gender:</label> &nbsp;
                    <input type="radio" id="gender" name="gender" value="Male">
                    <label for="Male"> Male</label> &ensp;
                    <input type="radio" id="gender" name="gender" value="Female">
                    <label for="Female">Female</label><br> <br>  

                    <label for="mobno">Mobile No:</label>
                    <input type="text" maxlength=10 id="mobno" name="mobno" placeholder="Mobile Number"><br><br>

                    <label for="role">Role: </label> &nbsp;
                    <select name="role" id="role" class="option" required >
                        <option value="">Choose..</option>
                        <option value="Student">Student</option>
                        <option value="Intern">Intern</option>
                        <option value="Professional">Professional</option>
                        <option value="Other">Others</option>
                    </select><br><br>

                    <label for="skills">Skills:</label>&nbsp;
                    <textarea id="skills" name="skills" placeholder="Enter Skills: " row="5" cols="40"></textarea><br><br>

                    <label for="descr">About Yourself:</label> &nbsp;
                    <textarea name="descr" id= "descr" rows="5" cols="40" placeholder= "Enter about yourself here"></textarea><br><br>
                    
                    <center>
                    <button class="btn">Submit</button> &ensp;
                    <input type="reset" class="btn" value="Reset">
                    </center>
                   </form> 
             </div>
        
    </body>
</html>