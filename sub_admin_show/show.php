<?php
  $db=mysqli_connect('localhost','root','','criminal_database');
  $slctt1=$_POST['slctt1'];
  $slctt2=$_POST['slctt2'];
  $query="SELECT * FROM criminal_d where district='$slctt1' AND police_station='$slctt2'";

  $result=mysqli_query($db,$query);
  echo (mysqli_num_rows($result));

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Criminals Details</title>
  </head>
  <body>
   
   <center> 
    
<h1><b>Showing Criminals details..</b></h1></center><br>


    <table class="table ">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Age</th>
                <th scope="col">Address</th>
                <th scope="col">Criminal Type</th>
                <th scope="col">Section</th>
                <th scope="col">verdict</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">District</th>
                <th scope="col">Under which PS</th>
                <th scope="col">Gender</th>
                <th scope="col">IMG</th>
            </tr>
          
        </thead>
        <tbody>
            <tr>
              <?php
                  while($row=mysqli_fetch_assoc($result))
                  {
                    ?>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['Ph.No.'] ?></td>
                    <td><?php echo $row['Age'] ?></td>
                    <td><?php echo $row['Address'] ?></td>
                    <td><?php echo $row['Criminal_Type'] ?></td>
                    <td><?php echo $row['Section'] ?></td>
                    <td><?php echo $row['Verdict'] ?></td>
                    <td><?php echo $row['Date'] ?></td>
                    <td><?php echo $row['time'] ?></td>
                    <td><?php echo $row['district'] ?></td>
                    <td><?php echo $row['police_station'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['img'] ?></td>

                  </tr>
                    <?php
                  }
              ?>

            </tbody>
        
      </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>