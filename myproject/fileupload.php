<?php
$con=mysqli_connect("localhost","root","") or die (mysqli_error($con));
mysqli_select_db($con,'study');
session_start();
$year=$_SESSION['year'];
 $branch=$_SESSION['branch'];
$semester=$_SESSION['semester'];
$subject1=$_SESSION['subject1'];

if(isset($_POST['subject']))
{
    $sub=$_POST['subject'];
    $result=mysqli_query($con,"select distinct subject from papers where year='$year' and branch='$branch' and semester='$semester'");
   $var=$sub;
    for($i=0; $i<$var; $i++)
    {
        $rows=mysqli_fetch_array($result);
    }
     $sub=$rows[0];
     
     $subject1=$sub;
     $_SESSION['subject1']=$subject1;    
}


if(isset($_POST['submit']))
    {
      
     //echo "this is working";
     $name=$_POST['name'];
     $file=$_FILES['file']['name'];
     $check= mysqli_query($con,"insert into papers values('$year','$branch','$semester','$subject1','$name','$file','NULL')");
     if($check)
     {
       move_uploaded_file($_FILES['file']['tmp_name'],"uploads/$file");
       echo "<script>alert('File has been Uploaded') </script>";
     }
   else{
    echo "<script>alert('Error....File has not been Uploaded') </script>";
   }
}   



?>

<html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/stud.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>File Upload</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina+2&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="jquery-3.4.1.min.js"></script>
  </head>
    <body style="background-image: blue;">
    <h1 style="text-align: center"> Select to Upload</h1>
        <form action="fileupload.php" method="post" enctype="multipart/form-data">
            <label style= "text-size: 30px">Name</label>
            <input type="text" name="name">
            <br>
            <br>
            <label> Select File to Upload</label> 
            <input  type="file" name="file">
            <input type="submit" name="submit" value="Upload">
        </form>
<div class="box">
        <div class="form-elements">
<div class="form-item">
<button type="button" class = "btn btn-outline-info bpad" onclick="window.location.href='facultypage.php'">Back to Uploads</button>
</div> 
</div> 
</div>
</div>
        <div class="box">
       
<div class="form-elements">
<div class="form-item">
<button type="button" class = "btn btn-outline-info bpad" onclick="window.location.href='index.html'">Back to home</button>
</div> 
</div> 
</div>
         </body>
</html>