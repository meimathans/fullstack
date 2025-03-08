<?php
session_start();

// Check if session variable is set
if(isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    $name = "Guest";
}
?>
<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <style>
nav {
    width: 100%;
    height: 75px;
    line-height: 75px;
    padding: 0px 100px;
    position: fixed;
background-image:linear-gradient(#746d63,#0d20ed);
	}
.drop{
    display: inline-block;
	}
.play-button {
            display: inline-block;
            padding: 10px 15px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        </style>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
          rel="stylesheet"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="index.css">
 </head>
    <body>

	<nav>
  <div class="logo">
    QUIZ PORTAL
  </div>
  <ul class="nav">
    <li><a href="#">HOME</a></li>
    <li><a href="ab.php">CONTENT</a></li>
    <li><a href="apply.php">CERTIFICATE</a></li>
	  <li><a href="login.php">LOGIN</a></li>
     <form class="d-flex">
        <input class="form-control m-3" type="text" placeholder="Search">
        <button class="btn btn-primary m-3" type="button">Search</button>
      </form>
  </ul>
</nav>
<div class="container-fluid">
    <center>
    <img src="23.jpg" width="101%" height="86%">
    <h1>WELCOME <?php echo htmlspecialchars($name);?></h1>
    <br>
    
    <h1>TOPICS AVAILABLE @ PORTAL</h1>
  </center>
        </div>
		<div class="ml-5">
		  <div class="row">
        <div class="column">
    <thead>
      <table border="3" style="width: 70%" class="table table-hover">
                    <tr><th>S.no</th>
                      <th>Available quiz in 2025(Science in technology)</th></tr>
                   <tr><td>1</td>
                      <td>Basic science</td></tr>
                      <tr><td>2</td>
                      <td>Biology</td></tr>
                  <tr>
                      <td>3</td>
                      <td>Botony</td>
                  </tr>
                  <tr>
                      <td>4</td>
                      <td>Zoology</td>
                  </tr>
                  <tr>
                      <td>5</td>
                      <td>Advanced science</td>
                  </tr>
              </table>
          </div>
          <div class="column">
            <table border="3" style="width: 70%" class="table table-hover" class="table table-bordered">
              <tr>
                  <th>S.no</th>
                  <th>Available quiz in 2025(Mathematics)</th>
              </tr>
              <tr>
                  <td>1</td>
                  <td>Basic mathematics</td>
              </tr>
              <tr>
                  <td>2</td>
                  <td>Problem on ages</td>
              </tr>
              <tr>
                  <td>3</td>
                  <td>Simple interest</td>
              </tr>
              <tr>
                  <td>4</td>
                  <td>Compound interest</td>
              </tr>
              <tr>
                  <td>5</td>
                  <td>Advanced mathematics</td>
              </tr>
          </table>
          </div>
          <div class="column">
            <table border="3" style="width: 70%"class="table table-hover">
              <tr>
                  <th>S.no</th>
                  <th>Available quiz in 2025(programming)</th>
              </tr>
              <tr>
                  <td>1</td>
                  <td>C progrtsmming</td>
              </tr>
              <tr>
                  <td>2</td>
                  <td>Python programming</td>
              </tr>
              <tr>
                  <td>3</td>
                  <td>Javascript</td>
              </tr>
              <tr>
                  <td>4</td>
                  <td>React Js</td>
              </tr>
              <tr>
                  <td>5</td>
                  <td>Java</td>
              </tr>
          </table>
        </div>
      </div>
    <div class="row">
        <div class="column">
          <h2>TOP QUIZ!</h2>
          <img src="s1.png" height="130px">
          <h1></h1>
            <h3>Basic Science Quiz</h3>
            <p>From: Feb 17, 2025 - To: Feb 22, 2026</p>
            <p>5 Questions | 50 sec Duration</p>
            <a href="#" class="play-button">Play</a>
        </div>
        
        <div class="column">
          <h2>TOP QUIZ!</h2>
          <p> <img src="m1.png"height=130px"></p>
          <h3>Advanced Mathematics Quiz</h3>
            <p>From: Feb 14, 2025 - To: Mar 15, 2026</p>
            <p>5 Questions | 50 sec Duration</p>
            <a href="#" class="play-button">Play</a>
        </div>
        <div class="column">
          <h2>TOP QUIZ!</h2>
          <p> <img src="m2.png"height=130px"></p>
          <h3>Compound Interest Quiz</h3>
            <p>From: Feb 14, 2025 - To: Mar 15, 2027</p>
            <p>5 Questions | 50 sec Duration</p>
            <a href="#" target="_self" class="play-button">play</a>
      </div>
    </div>
    <div class="row">
        <div class="column">
          <h2>TOP QUIZ!</h2>
          <img src="p1.png" height="130px">
          <h1></h1>
            <h3>Java Quiz</h3>
            <p>From: Feb 17, 2025 - To: Feb 22, 2026</p>
            <p>5 Questions | 50 sec Duration</p>
            <a href="#" class="play-button">Play</a>
        </div>
        <div class="column">
          <h2>TOP QUIZ!</h2>
          <p> <img src="p2.png"height=130px"></p>
          <h3>React js Quiz</h3>
            <p>From: Feb 14, 2025 - To: Mar 15, 2025</p>
            <p>5 Questions | 50 sec Duration</p>
            <a href="#" class="play-button">Play</a>
        </div>
        <div class="column">
          <h2>TOP QUIZ!</h2>
          <p> <img src="s2.png"height=130px"></p>
          <h3>Biology 2025 Quiz</h3>
            <p>From: Feb 14, 2025 - To: Mar 15, 2027</p>
            <p>5 Questions | 50 sec Duration</p>
            <a href="#" target="_self" class="play-button">play</a>
      </div>
    </div>
    <div class="row">
        <div class="column">
          <h2>TOP QUIZ!</h2>
          <img src="m3.png" height="130px">
          <h1></h1>
            <h3>Simple interest Quiz</h3>
            <p>From: Feb 17, 2025 - To: Feb 22, 2026</p>
            <p>5 Questions | 50 sec Duration</p>
            <a href="#" class="play-button">Play</a>
        </div>
        <div class="column">
          <h2>TOP QUIZ!</h2>
          <p> <img src="s3.png"height=130px"></p>
          <h3>Advanced Science Quiz</h3>
            <p>From: Feb 14, 2025 - To: Mar 15, 2025</p>
            <p>5 Questions | 50 sec Duration</p>
            <a href="#" class="play-button">Play</a>
        </div>
        <div class="column">
          <h2>TOP QUIZ!</h2>
          <p> <img src="p3.png"height=130px"></p>
          <h3>Javascript Quiz</h3>
            <p>From: Feb 14, 2025 - To: Mar 15, 2027</p>
            <p>5 Questions | 50 sec Duration</p>
            <a href="#" target="_self" class="play-button">play</a>
      </div>
    </div>
    <div class="row">
        <div class="column">
          <h2>TOP QUIZ!</h2>
          <img src="p4.png" height="130px">
          <h1></h1>
            <h3>Python programming Quiz</h3>
            <p>From: Feb 17, 2025 - To: Feb 22, 2026</p>
            <p>5 Questions | 50 sec Duration</p>
            <a href="#" class="play-button">Play</a>
        </div>
        <div class="column">
          <h2>TOP QUIZ!</h2>
          <p> <img src="m4.png"height=130px"></p>
          <h3>Problem on ages Quiz</h3>
            <p>From: Feb 14, 2025 - To: Mar 15, 2025</p>
            <p>5 Questions | 50 sec Duration</p>
            <a href="#" class="play-button">Play</a>
        </div>
        <div class="column">
          <h2>TOP QUIZ!</h2>
          <p> <img src="p5.png"height=130px"></p>
          <h3>C programming Quiz</h3>
            <p>From: Feb 14, 2025 - To: Mar 15, 2027</p>
            <p>5 Questions | 50 sec Duration</p>
            <a href="#" target="_self" class="play-button">play</a>
      </div>
	  <center>
	  <div class="container d-flex justify-content-center">
        <div>
            <p> for more result <a href=" https://quizizz.com/?lng=en">click here</a></p>
			<p> for more result <a href=" ">click here</a></p>
        </div>
        </div>
    </div>
	</div> </div>
</body>
</html>
