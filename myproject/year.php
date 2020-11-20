
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


<form action="selection.php" method="post">
    <!-- Example split danger button -->
    <div class="box">
              
            
                
               <div class="form-group" style="margin-top:-15px;">
                <div class="form-elements">
                  <div class="form-item">
                    <label>Year</label>
                    <select name="year" required>
                    <option value="0">None</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                    <label>Branch</label>
                    <select  name="branch" required>
                    <option value="0">None</option>
                      <option value="CSE">CSE</option>
                      <option value="ECE">ECE</option>
                      <option value="EEE">EEE</option>
                      <option value="ECM">ECM</option>
                      <option value="IT">IT</option>
                      <option value="MECH">MECH</option>
                      <option value="CIVIL">CIVIL</option>
                    </select>
                    <label>Semester</label>
                    <select name="semester" required>
                    <option value="0">None</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      
                    </select>
                  </div>
                 </div> 
                 </div>
                
            <br>
            <button type="submit" class = "btn btn-outline-info bpad" name="submit">Go</button>
    </div>
</form>

   
     <script>
       
       $(".select1 a").click(function(){
         $(".selectbtn1:first-child").html($(this).text()+' <span class="caret"></span>');
       });

       $(".select2 a").click(function(){
         $(".selectbtn2:first-child").html($(this).text()+' <span class="caret"></span>');
       });

       $(".select3 a").click(function(){
         $(".selectbtn3:first-child").html($(this).text()+' <span class="caret"></span>');
       });
     </script>

   
</body>

</html>