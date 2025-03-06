<?php 
    $valid=0;
    $invalid=0;
    if($_SERVER['REQUEST_METHOD']=='POST'){
      include 'server.php';
      $name=$_POST['name'];
      $password=$_POST['password'];
      $sql="SELECT * FROM student WHERE name='$name' AND password='$password'";
      $result=mysqli_query($con,$sql);
      if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
          $valid=1;
          if($valid){
            session_start();
            $_SESSION['name']=$name;
           
            header('location:index.php');
        }
        }
        else{
         $invalid=1;
        }
      }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="login.css">
    <script>
        function valid(){
            let x=document.forms["form"]["name"].value;
            let y=document.forms["form"]["password"].value;
            if(x==""&& y==""){
                alert("Fill the data");
                return false;
            }
        }
    </script>
</head>

<body>

    <div class="main">
        <h1>QUIZ</h1>
        <h3>LOGIN</h3>

        <form action="login.php" method="POST" id="form">
            <label for="first">
                Username:
            </label>
            <input type="text" name="name" 
                placeholder="name" required >

            <label for="password">
                Password:
            </label>
            <input type="password" name="password"
                placeholder="Password" required >
                  
                <button id="b1">Submit</button>

<script type="text/javascript">
    var b1 = document.getElementById("b1");
    var e1 = document.documentElement;

    b1.addEventListener("click", () => {
        if (e1.requestFullscreen) {
            e1.requestFullscreen();
        } else if (e1.mozRequestFullScreen) { // Firefox
            e1.mozRequestFullScreen();
        } else if (e1.webkitRequestFullscreen) { // Chrome, Safari, and Opera
            e1.webkitRequestFullscreen();
        } else if (e1.msRequestFullscreen) { // IE/Edge
            e1.msRequestFullscreen();
        }
    });
</script>

                
                <?php
                            if($valid){
                               
                                header('location:index.php');
                            }
                        ?>
                        <?php 
                            if($invalid){
                                echo "<span>Invalid username or password</span>";
                            }
                        ?>
        </form>
            </div>
        <p> Not registered?
            <a href="signup.php" style="text-decoration: none;">
                 <a href="signup.php">sign up</a>
            </a>
        </p>
    </div>
</body>
</html>