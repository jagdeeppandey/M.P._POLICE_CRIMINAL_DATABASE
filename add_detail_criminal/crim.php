<?php
    session_start();
    $db=mysqli_connect('localhost','root','','criminal_database');
    if(isset($_POST['crim']))
    {
        echo "hghgh";
        $name=$_POST['name'];
        $pn=$_POST['pn'];
        $age=$_POST['age'];
        $addr=$_POST['addr'];
        $ct=$_POST['ct'];
        $verd=$_POST['verd'];
        $dat=$_POST['dat'];
        $time=$_POST['time'];
        $slct1=$_POST['slct1'];
        $slct2=$_POST['slct2'];
        $gender=$_POST['gender'];
        $filename=$_POST['filename'];

        $query="INSERT INTO criminal_d VALUES('$name','$pn','$age','$addr','$ct','$verd','$dat','$time','$slct1','$slct2','$gender','$filename')";
        $data=mysqli_query($db,$query);

        ?>
        <script>location.href='about_victim.html'</script>
        <?php
    }
?>