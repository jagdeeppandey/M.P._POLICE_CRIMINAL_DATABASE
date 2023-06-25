<?php
    session_start();
    $db=mysqli_connect('localhost','root','','criminal_database');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Add Criminal</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script>
    function populate(s1, s2) {
      var s1 = document.getElementById(s1);
      var s2 = document.getElementById(s2);
      s2.innerHTML = "";
      if (s1.value == "Chhindwara") {
        var optionArray = ["|", "Junnardeo Police Station|Junnardeo Police Station", "Amarwara Police Station|Amarwara Police Station", "Bichua Police Station|Bichua Police Station", "Damua Police Station|Damua Police Station", "Lodhikhera Police Station|Lodhikhera Police Station"];
      } else if (s1.value == "Bhopal") {
        var optionArray = ["|", "Govindpura Police Station|Govindpura Police Station", "Habibganj Police Station|Habibganj Police Station","Jahangirabad Police Station|Jahangirabad Police Station","Bairagarh Police Station|Bairagarh Police Station","Kamla Nagar Police Station|Kamla Nagar Police Station"];
      } else if (s1.value == "Gwalior") {
        var optionArray = ["|","Police Station: Antri|Police Station: Antri","Police Station: Aron|Police Station: Aron","Police Station: Bahodapur|Police Station: Bahodapur","Police Station: Behat|Police Station: Behat","Police Station: Belgarha|Police Station: Belgarha","Police Station: Bijoli|Police Station: Bijoli"];
      } else if (s1.value == "Indore") {
        var optionArray = ["|","Aerodrum Police Station|Aerodrum Police Station","Annapurna Police Station|Annapurna Police Station","Banganga Police Station|Banganga Police Station","Chhatripura Police Station|Chhatripura Police Station","Dwarka Puri Police Station|Dwarka Puri Police Station"];
      } else if (s1.value == "Sagar") {
        var optionArray = ["|","Banda Police Station|Banda Police Station","Bina Police Station|Bina Police Station","Gopalganj Police Station|Gopalganj Police Station","Surkhi Police Station|Surkhi Police Station","Khurai Police Station|Khurai Police Station"];
      } else if (s1.value == "Ujjain") {
        var optionArray = ["|","Mahakal Police Station|Mahakal Police Station","Madhav Nagar Police Station|Madhav Nagar Police Station","Kotwali Police Station|Kotwali Police Station","Dewas Gate Police Station|Dewas Gate Police Station","Bherugarh Police Station|Bherugarh Police Station"];
      }
      for (var option in optionArray) {
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
      }
    }
  </script>

</head>

<body>
  <div class="container">
    <div class="title">Add details of Criminal</div>
    <div class="content">
      <form action="#" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter the name" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="int" name="pn" placeholder="Enter the number" required>
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="int" name="age" placeholder="Enter the age" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="addr" placeholder="Enter the address" required>
          </div>
          <div class="input-box">
            <span class="details">Criminal Type</span>
            <input placeholder="Choose from the list" name="ct" list='listid' required>
            <datalist id='listid'>
              <option value="Vehical theft">
              <option value="Gangster">
              <option value="Robber">
              <option value="Murderer">
              <option value="Rapiest">
              <option value="Chain snatcher">
              <option value="hidden/masked">
              <option value="other"></option>
            </datalist>
          </div>


          <div class="input-box">
            <span class="details">Verdict</span>
            <input type="text" name="verd" placeholder="write in here.." required>
          </div>

          <div class="input-box">
            <span class="details">Date</span>
            <input type="date" name="dat" placeholder="Choose from the list" required>
          </div>
          <div class="input-box">
            <span class="details">Time</span>
            <input type="text" name="time" placeholder="Choose from the list" required>
          </div>

          <div class="input-box">
            <span class="details">District where crime happend</span>
            <select class="forsame" id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
              <option value="">Chhose from the list</option>
              <option value="Chhindwara">Chhindwara</option>
              <option value="Bhopal">Bhopal</option>
              <option value="Indore">Indore</option>
              <option value="Gwalior">Gwalior</option>
              <option value="Sagar">Sagar</option>
              <option value="Ujjain">Ujjain</option>
            </select>

          </div>
          <div class="input-box">
            <span class="details">Under which Police Station?</span>

            <select class="forsame" id="slct2" name="slct2" required></select>

          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="Male">
          <input type="radio" name="gender" id="dot-2" value="Female">
          <input type="radio" name="gender" id="dot-3" value="other">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <input type="file" id="myFile" name="filename"><p>&nbsp;</p>
        <div class="button">
          <input type="submit" name='crim' value="Victim form">
        </div>
      </form>
    </div>
</body>
</html>


<?php
if(isset($_POST['crim']))
    {
        $name=$_POST['name'];
        $pn=$_POST['pn'];
        $age=$_POST['age'];
        $addr=$_POST['addr'];
        $ct=$_POST['ct'];
        $sec='';
        if($_POST['ct']=="Vehical theft")
        {
          $sec="IPC-379";
        }
        elseif($_POST['ct']=="Gangster")
        {
          $sec="IPC-376D,IPC-302,IPC-395,IPC-396,IPC-397";
        }
        elseif($_POST['ct']=="Robber")
        {
          $sec="IPC-397";
        }
        elseif($_POST['ct']=="Murderer")
        {
          $sec="IPC-302";
        }
        elseif($_POST['ct']=="Rapiest")
        {
          $sec="IPC-376";
        }
        elseif($_POST['ct']=="Chain snatcher")
        {
          $sec="IPC-379A,IPC-379B";
        }
        elseif($_POST['ct']=="hidden/masked")
        {
          $sec="IPC-188";
        }
        $verd=$_POST['verd'];
        $dat=$_POST['dat'];
        $time=$_POST['time'];
        $slct1=$_POST['slct1'];
        $slct2=$_POST['slct2'];
        $gender=$_POST['gender'];
        $filename=$_POST['filename'];


        $query1="INSERT INTO cri VALUE('$ct')";
        $query="INSERT INTO criminal_d VALUES('$name','$pn','$age','$addr','$ct','$sec','$verd','$dat','$time','$slct1','$slct2','$gender','$filename')";
        $data=mysqli_query($db,$query);

        ?>
        <script>location.href='about_victim.html';</script>
        <?php

    }
?>