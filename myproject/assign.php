<html>
    <head>
        <center>    
            <h1> Heading 1</h1>
        </center>
    </head>
    <body style="background: lightblue">
        <center>
            <p style="font-size:30px">This is paragraph</p>
        </center>
    </body>
</html>


<?php
    $con=mysqli_connect("localhost","root","");
    if($con)
    {
        echo "<center><h4>Succesfully connected</h4></center>";
    }
    die (mysqli_error($con));
?>