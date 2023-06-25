<?php include 'all_add.php'; ?>

<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="sub_adminCss.css">
    <title>Register co-admin </title>
  </head>
  <body>
    

<section class="vh-80 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 20px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-4">Register Co-Admin Form</h3>
            
            <form  id="login" method="post" action="">

              <div class="row">
                <div class="col-md-6 mb-2">

                  <div class="form-outline">
                    <input type="text" name="firstName" class="form-control" placeholder="First Name" required/>
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-2">

                  <div class="form-outline">
                    <input type="text" name="lastName" class="form-control" placeholder="Last Name" required/>
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-3 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required/>
                    <label for="email" class="form-label">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-2">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="Male" checked required/>
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="Female" required/>
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="other" required/>
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-1">

                  <div class="form-outline">
                    <input type="text" name="city" class="form-control" placeholder="City" required/>
                    <label class="form-label" for="emailAddress">City</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-1">

                  <div class="form-outline">
                    <input type="tel" name="phoneNumber" class="form-control" placeholder="Phone Number" required/>
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12 mb-4 pb-2 pb-md-0 mb-md-4">

                  <select class="select form-control-lg" name="rank" required>
                    <option value="No_rank_choosed" disabled>Choose Rank</option>
                    <option value="DGP">DGP</option>
                    <option value="ADGP">ADGP</option>
                    <option value="IGP">IGP</option>
                    <option value="DIG">DIG</option>
                    <option value="AIG/SSP">AIG/SSP</option>
                    <option value="SP">SP</option>
                    <option value="Addl.SP">Addl.SP</option>
                    <option value="DSP">DSP</option>
                    <option value="ASP-2Y">ASP(2 year service)</option>
                    <option value="ASP-1Y">ASP(1 year service)</option>
                    <option value="INS/CI">INS/CI</option>
                    <option value="API">API</option>
                    <option value="SI">SI</option>
                    <option value="ASI">ASI</option>
                    <option value="HC/SCPO">HC/SCPO</option>
                    <option value="SC">SC</option>
                    <option value="PC/CPO">PC/CPO</option>

                  </select>
                  <label class="form-label select-label">Choose Rank</label>

                </div>
              </div>

                <div class="form-group mb-4 pb-2 pb-md-0 mb-md-4">
                        <label for="Password1">Password</label>
                        <input type="password" class="form-control" name="Password1" placeholder="Password" required>
                </div>
                
                <div class="form-group mb-4 pb-2 pb-md-0 mb-md-4">
                        <label for="Password2">Confirm Password</label>
                        <input type="password" class="form-control" name="Password2" placeholder=" Confirm Password" required>
                </div>
                <input type="checkbox" id="ossm" name="ossm"> 
                <label for="ossm">Check me out </label> 
                    
                <div class="d-flex justify-content-center">
                    <button type="submit"
                      class="btn btn-info btn-block btn-lg gradient-custom-4 text-body" name="reg">Register</button>
                  </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    
  </body>
</html>
 


<?php
    if(isset($_POST['reg']))
    {
        $fname=$_POST['firstName'];
        $lname=$_POST['lastName'];
        $email=$_POST['email'];
        $gend=$_POST['inlineRadioOptions'];
        $city=$_POST['city'];
        $pn=$_POST['phoneNumber'];
        $rank=$_POST['rank'];
        $pwd1=$_POST['Password1'];
        $pwd2=$_POST['Password2'];

        $query="INSERT INTO sub_admin values('$fname','$lname','$email','$gend','$city','$pn','$rank','$pwd1','$pwd2')";
        $data=mysqli_query($conn,$query);

        $html="
        <table>
            <tr><td>Name</td><td>$fname</td></tr>
            <tr><td>Email</td><td>$email</td></tr>
            <tr><td>Gender</td><td>$gend</td></tr>
            <tr><td>City</td><td>$city</td></tr>
            <tr><td>pn</td><td>$pn</td></tr>
            <tr><td>rank</td><td>$rank</td></tr>
            <tr><td>password</td><td>$pwd1</td></tr>
          </table>";

        include ('smtp/PHPMailerAutoload.php');
        $mail=new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host="smtp.gmail.com";
        $mail->Port=587;
        $mail->SMTPSecure="tls";
        $mail->SMTPAuth=true;
        $mail->Username="phptesterbyjp@gmail.com";
        $mail->Password="eehkfhugvfkxfmpw";
        $mail->setFrom("phptesterbyjp@gmail.com");
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject="Registered Successfully ✔";
        $mail->Body=$html;
        $mail->SMTPOptions=array('ssl'=>array(
          'verfy_peer'=>false,
          'verify_peer_name'=>false,
          'allow_self_signed'=>false
        ));
        if($mail->send())
        {
          echo "Mail send";
        }
        else{
          echo "Error ecoured";
        }


        if($data)
        {
            ?>
            <script type="text/javascript"> 
           alert("Data saved Successfully");
            location.href='/SIH_COLLAGE_PROJECT/admin_show/index1.html';
          </script>
            <?php
        }
        else
        {
          ?>
          <script type="text/javascript"> 
          alert("Please Try Again");</script>
          <?php
            echo "Data not inserted";
        }
    }
?>