
<?php


$con=mysqli_connect("localhost","root","") or die (mysqli_error($con));
mysqli_select_db($con,'study') or die (mysqli_error($con));

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/stud.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/year.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>	

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark"
    style=" background-image: linear-gradient(to right,#09e5db , #d314dc, #260aee );">
      <a class="navbar-brand" href="#">Exam Archives</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="year.php">Year <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://vignaniit.edu.in/" target="_blank">About us</a>
          </li>
          
        </ul>
  
      </div>
    </nav>


<h1 style="text-align: center" >Courses</h1>
<?php
      if(isset($_POST['submit']))
      {
        $year=$_POST['year'];
        session_start();
         $_SESSION['year']=$year;
          $branch=$_POST['branch'];
         $_SESSION['branch']=$branch;
         $semester=$_POST['semester'];
         $_SESSION['semester']=$semester;      
          $result=mysqli_query($con,"select distinct subject from papers where year='$year' and branch='$branch' and semester='$semester'");
          if ($result->num_rows > 0) {
              $rows=mysqli_fetch_array($result);
             }
        	?>
     <form action="pdflist.php" method="post">
       <div class="box">
       <div class="form-group" style="margin-top:15px;">
                <div class="form-elements">
                  <div class="form-item">
                    <label style="font-size:15px">Subject: </label>
                   
                    <select name="pdf" required>
                    <option value="0">None</option>
                    <option value="1"><?php  echo $rows[0] ?> </option>
                    <?php $rows=mysqli_fetch_array($result);?>
                    <option value="2"><?php  echo $rows[0] ?> </option>
                    <?php $rows=mysqli_fetch_array($result);?>
                    <option value="3"><?php  echo $rows[0] ?> </option>
                    <?php $rows=mysqli_fetch_array($result);?>
                    <option value="4"><?php  echo $rows[0] ?> </option>
                    <?php $rows=mysqli_fetch_array($result);?>
                    <option value="5"><?php  echo $rows[0] ?> </option>
                    <?php $rows=mysqli_fetch_array($result);?>
                    <option value="6"><?php  echo $rows[0] ?> </option> 
                    </select>
        </div>
        </div>
        </div>
        <br>
        <br>
        <br>
            <button type="submit" class = "btn btn-outline-info bpad" name="subject">Submit</button>
      </div>
    </form>
    <?php
      }
?>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
  </body>
</html>

