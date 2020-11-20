
<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/stud.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Materials</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina+2&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="jquery-3.4.1.min.js"></script>
  </head>
  
<body>

   
    <h1 style="text-align: center"> Select to Upload</h1>

</body>



<?php


$con=mysqli_connect("localhost","root","") or die (mysqli_error($con));
mysqli_select_db($con,'study') or die (mysqli_error($con));


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
    ?>

       <form method="post" action="fileupload.php">

          <div class="box"  >
          
          <button  type="submit" name="subject" class = "btn btn-outline-info bpad1" value="1"><?php  echo $rows[0] ?></button>
          <br><br><br>
          <?php $rows=mysqli_fetch_array($result);?>
          <button type="submit" name="subject" class = "btn btn-outline-info bpad1" value="2" ><?php  echo $rows[0]?> </button>
          <br><br><br>
          <?php $rows=mysqli_fetch_array($result);?>
          <button type="submit" name="subject" class = "btn btn-outline-info bpad1" value="3" ><?php  echo $rows[0]?> </button>
          <br><br><br>
          <?php $rows=mysqli_fetch_array($result);?>
          <button type="submit" name="subject" class = "btn btn-outline-info bpad1" value="4" ><?php  echo $rows[0]?> </button>
          <br><br><br>
          <?php $rows=mysqli_fetch_array($result);?>
          <button type="submit" name="subject" class = "btn btn-outline-info bpad1" value="5" ><?php  echo $rows[0]?> </button>
          <br><br><br>
          <?php $rows=mysqli_fetch_array($result);?>
          <button type="submit" name="subject" class = "btn btn-outline-info bpad1"  value="6"><?php  echo $rows[0]?> </button>

           </div>
          </form>
          <?php
      
    } else {
      echo "No subjects";
    }
}
?>
<div class="box">
<div class="form-elements">
<div class="form-item">
<button type="button" class = "btn btn-outline-info bpad" onclick="window.location.href='index.html'">Back to home</button>
</div> 
</div> 
</div>

