<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
require_once("../includes/db.php");
$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$ORDER_ID = $_POST['ORDERID'];
$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


$sql = "SELECT * FROM event_reg WHERE ORDER_ID ='$ORDER_ID'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);

$event_name = $row['event_name'];
$event_id = $row['event_id'];


$sql_event = "SELECT * FROM events WHERE id = '".$event_id."' AND title = '".$event_name."'";
$result_event = mysqli_query($link, $sql_event);
$row_event = mysqli_fetch_assoc($result_event);

use PHPMailer\PHPMailer\PHPMailer;
require '../phpmailer/vendor/autoload.php';
                                            


if($isValidChecksum == "TRUE") {
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		$success_query = "UPDATE `event_reg` SET `TXN_STATUS` = 'SUCCESS' WHERE ORDER_ID ='$ORDER_ID'";
	    mysqli_query($link, $success_query);
		echo "<b><center>Transaction status is successful</center></b>" . "<br/>";
		$data =  '<!doctype html>
<html>
<head>
	<link rel="icon" href="../favicon.ico">
    <meta charset="utf-8">
    <title>Event Ticket | DevelopHowTo</title>
    <link rel="icon" href="../favicon.ico">
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family:"Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="https://develophowto.com/img/logo-big1.png" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                Order ID #:<span style="font-weight:bold; color:#0a1e33;">'.$_POST['ORDERID']. '</span><br>
                                Generated On: '.$_POST['TXNDATE'].'<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                DevelopHowTo, Inc.<br>
                                https://develophowto.com/<br>
                                contact@develophowto.com
                            </td>
                            
                            <td>
                                <strong>'.$row['F_NAME'].'</strong><br>
                                '.$row['EMAIL'].'<br>
                                '.$row['college_name'].'
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td>
                    Venue
                </td>
                
                <td>
                    Room No
                </td>
            </tr>
            
            <tr class="details">
                <td style="font-weight:bold; color:#1a67ad;">
                    '.$row_event['venue'].'
                </td>
                
                <td style="font-weight:bold; color:#1a67ad;">
                    '.$row_event['room_no'].'
                </td>
            </tr>
            <tr class="heading">
                <td>
                    Date
                </td>
                
                <td>
                    Timing
                </td>
            </tr>
            
            <tr class="details">
                <td style="font-weight:bold; color:#ad1a69;">
                    '.$row_event['ev_dates'].'
                </td>
                
                <td style="font-weight:bold; color:#ad1a69;">
                    '.$row_event['ev_timing'].'
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                    '.$_POST['PAYMENTMODE'].' #
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    '.$_POST['PAYMENTMODE'].'
                </td>
                
                <td>
                    '.$_POST['BANKNAME'].'
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Item
                </td>
                
                <td>
                    Price
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Workshop Entry PASS
                </td>
                
                <td>
                     ₹'. $_POST['TXNAMOUNT'].'
                </td>
            </tr>
            <tr class="total">
                <td></td>
                
                <td>
                   Total:  ₹'. $_POST['TXNAMOUNT'].'
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
';

		echo $data;

                                            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                                          try {
                                              //Server settings
                                              //$mail->SMTPDebug = 1;
                                                                                                         // Enable verbose debug output
                                              $mail->isSMTP();
                                                                                  // Set mailer to use SMTP
                                              $mail->Host = 'smtp.zoho.com';  // Specify main and backup SMTP servers
                                              $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                              $mail->Username = 'contact@develophowto.com';                 // SMTP username
                                              $mail->Password = 'develophowto2018@Aa';                           // SMTP password
                                              $mail->SMTPSecure = 'ssl';                           // Enable TLS encryption, `ssl` also accepted
                                              $mail->Port = 465;  
                                              $student_email = $row['EMAIL'];                               // TCP port to connect to

                                              //Recipients
                                              $mail->setFrom('contact@develophowto.com', 'DevelopHowTo | India');
                                              $mail->addAddress($student_email);     // Add a recipient
                                              $body =  '<!doctype html>
														<html>
														<head>
															<link rel="icon" href="../favicon.ico">
														    <meta charset="utf-8">
														    <title>A simple, clean, and responsive HTML invoice template</title>
														    
														    <style>
														    .invoice-box {
														        max-width: 800px;
														        margin: auto;
														        padding: 30px;
														        border: 1px solid #eee;
														        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
														        font-size: 16px;
														        line-height: 24px;
														        font-family:"Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
														        color: #555;
														    }
														    
														    .invoice-box table {
														        width: 100%;
														        line-height: inherit;
														        text-align: left;
														    }
														    
														    .invoice-box table td {
														        padding: 5px;
														        vertical-align: top;
														    }
														    
														    .invoice-box table tr td:nth-child(2) {
														        text-align: right;
														    }
														    
														    .invoice-box table tr.top table td {
														        padding-bottom: 20px;
														    }
														    
														    .invoice-box table tr.top table td.title {
														        font-size: 45px;
														        line-height: 45px;
														        color: #333;
														    }
														    
														    .invoice-box table tr.information table td {
														        padding-bottom: 40px;
														    }
														    
														    .invoice-box table tr.heading td {
														        background: #eee;
														        border-bottom: 1px solid #ddd;
														        font-weight: bold;
														    }
														    
														    .invoice-box table tr.details td {
														        padding-bottom: 20px;
														    }
														    
														    .invoice-box table tr.item td{
														        border-bottom: 1px solid #eee;
														    }
														    
														    .invoice-box table tr.item.last td {
														        border-bottom: none;
														    }
														    
														    .invoice-box table tr.total td:nth-child(2) {
														        border-top: 2px solid #eee;
														        font-weight: bold;
														    }
														    
														    @media only screen and (max-width: 600px) {
														        .invoice-box table tr.top table td {
														            width: 100%;
														            display: block;
														            text-align: center;
														        }
														        
														        .invoice-box table tr.information table td {
														            width: 100%;
														            display: block;
														            text-align: center;
														        }
														    }
														    
														    /** RTL **/
														    .rtl {
														        direction: rtl;
														        font-family: Tahoma, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
														    }
														    
														    .rtl table {
														        text-align: right;
														    }
														    
														    .rtl table tr td:nth-child(2) {
														        text-align: left;
														    }
														    </style>
														</head>

														<body>
														    <div class="invoice-box">
														        <table cellpadding="0" cellspacing="0">
														            <tr class="top">
														                <td colspan="2">
														                    <table>
														                        <tr>
														                            <td class="title">
														                                <img src="https://develophowto.com/img/logo-big1.png" style="width:100%; max-width:300px;">
														                            </td>
														                            
														                            <td>
														                                Order ID #:'.$_POST['ORDERID']. '<br>
														                                Created: '.$_POST['TXNDATE'].'<br>
														                            </td>
														                        </tr>
														                    </table>
														                </td>
														            </tr>
														            
														            <tr class="information">
														                <td colspan="2">
														                    <table>
														                        <tr>
														                            <td>
														                                DevelopHowTO, Inc.<br>
														                                https://develophowto.com/<br>
														                                contact@develophowto.com
														                            </td>
														                            
														                            <td>
														                                <strong>'.$row['F_NAME'].'</strong><br>
														                                '.$row['EMAIL'].'<br>
														                                '.$row['college_name'].'
														                            </td>
														                        </tr>
														                    </table>
														                </td>
														            </tr>
														            <tr class="heading">
                                                                        <td>
                                                                            Venue
                                                                        </td>
                                                                        
                                                                        <td>
                                                                            Room No
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                    <tr class="details">
                                                                        <td style="font-weight:bold; color:#1a67ad;">
                                                                            '.$row_event['venue'].'
                                                                        </td>
                                                                        
                                                                        <td style="font-weight:bold; color:#1a67ad;">
                                                                            '.$row_event['room_no'].'
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="heading">
                                                                        <td>
                                                                            Date
                                                                        </td>
                                                                        
                                                                        <td>
                                                                            Timing
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                    <tr class="details">
                                                                        <td style="font-weight:bold; color:#ad1a69;">
                                                                            '.$row_event['ev_dates'].'
                                                                        </td>
                                                                        
                                                                        <td style="font-weight:bold; color:#ad1a69;">
                                                                            '.$row_event['ev_timing'].'
                                                                        </td>
                                                                    </tr>
														            <tr class="heading">
														                <td>
														                    Payment Method
														                </td>
														                
														                <td>
														                    '.$_POST['PAYMENTMODE'].' #
														                </td>
														            </tr>
														            
														            <tr class="details">
														                <td>
														                    '.$_POST['PAYMENTMODE'].'
														                </td>
														                
														                <td>
														                    '.$_POST['BANKNAME'].'
														                </td>
														            </tr>
														            
														            <tr class="heading">
														                <td>
														                    Item
														                </td>
														                
														                <td>
														                    Price
														                </td>
														            </tr>
														            
														            <tr class="item">
														                <td>
														                    Workshop Entry PASS
														                </td>
														                
														                <td>
														                    INR '. $_POST['TXNAMOUNT'].'
														                </td>
														            </tr>
														            <tr class="total">
														                <td></td>
														                
														                <td>
														                   Total: INR '. $_POST['TXNAMOUNT'].'
														                </td>
														            </tr>
														        </table>
														    </div>
														</body>
														</html>
														';

                                              //Content
                                              $mail->isHTML(true);                                  // Set email format to HTML
                                              $mail->Subject = 'Workshop Entery Ticket | DevelopHowTo';
                                              $mail->Body    = $body;
                                              $mail->AltBody = strip_tags($body);

                                              $mail->send();
                                              echo '<center><h2>You have been Mailed your Entry Passes for the workshop.<br/> Screenshot this incase you have not recieved the Entry Ticket.</h2><center>';
                                          } catch (Exception $e) {
                                              echo 'Screenshot this page and keep it with you at the time of entry, Sorry but their is a problem with your email id';
                                          }
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
		$success_query = "UPDATE `event_reg` SET `TXN_STATUS` = 'FAILED' WHERE ORDER_ID ='$ORDER_ID'";
	    mysqli_query($link, $success_query);
	}
		
}
else {
	echo "<b>Checksum mismatched.</b>";
	$success_query = "UPDATE `event_reg` SET `TXN_STATUS` = 'FAILED' WHERE ORDER_ID ='$ORDER_ID'";
	    mysqli_query($link, $success_query);
	//Process transaction as suspicious.
}

?>