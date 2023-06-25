<?php
    session_start();
    $db=mysqli_connect('localhost','root','','criminal_database');
    if(isset($_POST['vict']))
    {
        $fname=$_POST['fname'];
        $pn=$_POST['pn'];
        $age=$_POST['age'];
        $det=$_POST['det'];
        $disc=$_POST['disc'];
        $gender=$_POST['gender'];
        echo $gender;

        $query="INSERT INTO victim_d VALUES('$fname','$pn','$age','det','$disc','$gender')";
        $data=mysqli_query($db,$query);

        ?>
        <script>location.href='/SIH_COLLAGE_PROJECT/login/login.html'</script>
        <?php
    }
?>