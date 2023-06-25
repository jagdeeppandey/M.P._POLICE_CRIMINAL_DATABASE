<?php
    session_start();
    $db=mysqli_connect('localhost','root','','criminal_database');
    if(isset($_POST['log']))
    {
        $mail=mysqli_real_escape_string($db,$_POST['email']);
        $ran=mysqli_real_escape_string($db,$_POST['rank']);
        $pass=mysqli_real_escape_string($db,$_POST['Pass']);
        
        
        $k=md5($pass);
        $query1="SELECT * FROM admin_d WHERE email='$mail' AND category='$ran' AND pass='$pass'";
        $query2="SELECT * FROM sub_admin WHERE email='$mail' AND rank='$ran' AND pass='$pass'";
        $result=mysqli_query($db,$query1);
        $resultss=mysqli_query($db,$query2);
        if(mysqli_num_rows($result)==1)
        {
            ?>
            <script>alert("Admin login");
            location.href="/SIH_COLLAGE_PROJECT/admin_show/index1.html";</script>
            <?php
        }
        elseif(mysqli_num_rows($resultss)==1)
        {
            ?>
            <script>alert("Sub_Admin login");
            location.href="/SIH_COLLAGE_PROJECT/sub_admin_show/index1.html";</script>
            <?php
        }
        else{
            ?>
            <script>alert("Invalid Input");
        location.href='login.html'</script>
            <?php
        }
    
    }
?>