<?php
  $register=0;
  $unregister=0;
  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'server.php';
    $name =$_POST['name'];
    $email =$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM student WHERE name='$name'";
    $result=mysqli_query($con,$sql);
    if($result){
      $num=mysqli_num_rows($result);
      if($num>0){
        $unregister=1;
      }
      else{
        $sql="INSERT INTO student values('$name','$email','$password')";
        $result=mysqli_query($con,$sql);
        if($result){
          $register=1;
        }
        else{
          die(mysqli_error($con));
        }
      }
    }
  }
?>
<html>
    <head>
        <title>ONLINE QUIZ</title>
        <style>
            body{
                background-color: black;
                background-size: cover;
                color: white;
            }
            .design{
                margin: 20%;
                border: 2px solid black;
                text-align: center;
                padding: 30px;
                margin-top: 5%;
            }
            .button{
                display: inline-block;
                background-color: #28b463;
                color: white;
                padding: 15px 30px;
                text-decoration: none;
                border-radius: 5px;
                font-size: 1.2em;
                border-radius: 16px;
                transition: transform .2s;
            }
            .button:hover{
                background-color: #239b56;
                transform: scale(1.2); 
            }
        </style>
    </head>
    <body>
<?php 
  if($register){
     
          echo " <div class='design'><h2>You have created a account. click login</h2><br><br><a href='login.php' class='button'>login</a>
          </div>";}

?>
<?php 
    if($unregister){
        echo "<div class='design'> Entered data is already exist<br><r><br> <a href='login.php' class='button'>click back to login</a> </div>";
    }
?>
</body>
</html>