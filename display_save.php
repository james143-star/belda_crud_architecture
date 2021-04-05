
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>



<?php




//specifying the credentials for connection

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "architecture";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

    
    $query = "SELECT * FROM mogamitay";
    

    
    
    echo '<center> <div class="col-sm-8"><table class="table table-striped table-dark" border="0" cellspacing="2" cellpadding="10" width = "100%">   
    <tr> 
          <td scope="col" > <font face="Arial">ID</font> </td> 
          <td scope="col"> <font face="Arial">Usernames</font> </td> 
          <td scope="col"> <font face="Arial">PASSWORDS</font> </td> 
          <td scope="col"> <font face="Arial">STATUS</font> </td> 
      </tr></div> </div>';

          
          if ($result = $conn->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $column1 = $row["mugamitay_id"];
                $column2 = $row["Username"];
                $column3 = $row["Userpass"];
                $column4 = $row["status"];
         
                echo '<tr> 
                          <td>'.$column1.'</td> 
                          <td>'.$column2.'</td> 
                          <td>'.$column3.'</td> 
                          <td>'.$column4.'</td> 
                          
                      </tr>';
            }
            $result->free();
        } 
   
?>
