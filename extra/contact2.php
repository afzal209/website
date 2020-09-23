<?php 

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['submit'])) {
   
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $country = $_POST['country'];
    $link = $_POST['link'];
    $short_name = $_POST['short_name'];
    $message = $_POST['message'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $website_address = $_POST['website_address'];
    $t_countries = $_POST['target_countries'];
    $quantity = $_POST['quantity'];
    $tax = $_POST['tax'];
    $discount = $_POST['discount'];
    $grand_invoice = $_POST['grand_invoice'];
    if (is_array($t_countries)) {
        $array = array(
            'target_countries'=>$t_countries,
        );
        $value_countries = implode(',',$array['target_countries']);
        $countries = $value_countries;
        require_once 'fpdf/fpdf.php';

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont("Times","",20);
        $pdf->Cell(0,10,"Mwaikanges Investment Group cc",0,1,'C');
        $pdf->SetFillColor(242,242,242);
        $pdf->Rect(5, 20, 200, 20, 'F');
        $pdf->Cell(0,10,"MWAIKANGE DIGITAL",0,1,'C');
        $pdf->SetTextColor(0,0,255);
        $pdf->Cell(0,10,"www.mwaikangedigital.co.za",0,1,'C');
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,10,"TAX INVOICE",0,1,'C');
        $pdf->SetFont("Times","",10);
        $pdf->Cell(0,10,"Full Name:{$full_name}",0,0,'L');
        $pdf->Ln(5.8);
        $pdf->Cell(0,10,"REFERENCE",0,0,'R');
        $pdf->Ln(1);
        $pdf->Cell(0,10,"Email:{$email}",0,0,'L');
        $pdf->Ln(4.5);
        
        if (preg_match('/264/',$phone)) {
            $nam = str_replace("264","NAM-",$phone);
            $pdf->Cell(0,10,"$nam",0,0,'R');
        }
        elseif (preg_match('/27/',$phone)) {
            $rsa = str_replace("27","RSA-",$phone); 
            $pdf->Cell(0,10,"$rsa",0,0,'R');
        }
        elseif (preg_match('/268/',$phone)) {
            $szl = str_replace("268","SZL-",$phone);
            $pdf->Cell(0,10,"$szl",0,0,'R');
        }
        elseif (preg_match('/266/',$phone)) {
            $lso = str_replace("266","LSO-",$phone);
            $pdf->Cell(0,10,"$lso",0,0,'R');
        }
        $pdf->Write(5,"WhatsApp Mobile Number:{$phone}");
        $pdf->Ln(7.5);
        $pdf->Write(5,"Company:{$company}");
        $pdf->Ln(7.5);
        $pdf->Write(5,"Country:{$country}");
        $pdf->Ln(7.5);
        $pdf->Write(5,"Traget Countries:{$countries}");
        $pdf->Ln(7.5);
        $pdf->SetFont("Times","",10);
        $pdf->Cell(50,10,"ITEM DESCRIPTION",1,0,'C');
        $pdf->Cell(40,10,"QUANTITY",1,0,'C');
        $pdf->Cell(50,10,"R",1,0,'C');
        $pdf->Cell(50,10,"Total",1,1,'C');
        $pdf->Cell(50,10,"SMS UNITS",0,0);
        $pdf->Cell(50,10,"$quantity",0,0);
        $pdf->Cell(50,10,"",0,0);
        $pdf->Cell(40,10,"$grand_invoice",0,1);

        $pdf->Cell(50,10,"",0,0);
        $pdf->Cell(50,10,"",0,0);
        $pdf->Cell(50,10,"SUB TOTAL",0,0);
        $pdf->Cell(40,10,"$grand_invoice",0,1);

        $pdf->Cell(50,10,"",0,0);
        $pdf->Cell(50,10,"",0,0);
        $pdf->Cell(50,10,"DISCOUNT",0,0);
        $pdf->Cell(40,10,"$discount",0,1);

        $pdf->Cell(50,10,"",0,0);
        $pdf->Cell(50,10,"",0,0);
        $pdf->Cell(50,10,"SUB TOTAL",0,0);
        $pdf->Cell(40,10,"$grand_invoice",0,1);


        $pdf->Cell(50,10,"",0,0);
        $pdf->Cell(50,10,"",0,0);
        $pdf->Cell(50,10,"VAT",0,0);
        $pdf->Cell(40,10,"0",0,1);
        
        $pdf->Cell(50,10,"",1,0);
        $pdf->Cell(50,10,"",1,0);
        $pdf->Cell(50,10,"GRAND TOTAL",1,0);
        $pdf->Cell(40,10,"$grand_invoice",1,1);
        $pdf->SetFont("Times","",10);
        $pdf->Ln(2);
        $pdf->Cell(0,10,"Payment can be made into any of the following accounts:",0,1,'C');
        $pdf->Cell(0,0,"ALL AMOUNTS ARE IN SOUTH AFRICAN RAND",0,1,'C');
        $pdf->Ln(2);
        $pdf->SetFillColor(242,242,242);
        $pdf->Rect(5, 183, 200, 27, 'F');
        $pdf->SetFont("Times","B",10);
        $pdf->Cell(0,10,"Mwaikanges Investment Group cc",0,1,'C');
        $pdf->Cell(0,0,"Standard Bank of Namibia",0,1,'C');
        $pdf->SetFont("Times","",10);
        $pdf->Cell(0,8,"Branch: Shoprite Katutura Branch",0,1,'C');
        $pdf->Cell(0,1,"| Acc: 60003941522",0,1,'C');
        $pdf->Cell(0,6,"| Acc Type: Savings",0,1,'C');
        $pdf->Cell(0,3,"| SWIFT: SBNMNANX",0,1,'C');

        $pdf->Ln(4);

        $pdf->SetFillColor(217,217,217);
        $pdf->Rect(5, 215, 200, 5, 'F');
        $pdf->SetFont("Times","B",10);
        $pdf->Cell(0,10,"EWALLET - MOBILE PAYMENT",0,1,'C');
        $pdf->SetFillColor(242,242,242);
        $pdf->Rect(5, 220, 200, 40, 'F');
        $pdf->SetFont("Times","",10); 
        $pdf->Cell(0,0,"Namibia - 264 81 808 3704 / 264 81 267 0352",0,1,'C');
        $pdf->Cell(0,8,"Only - FNB & Windhoek",0,1,'C');
        $pdf->Cell(0,8,"South Africa - Not Available Yet",0,1,'C');
        $pdf->Cell(0,7,"Payment Reference: 20200423003030",0,1,'C');
        $pdf->Cell(0,8,"Proof of payment can be e-mailed to:invoice@mwaikangedigital.co.za.,uploaded to",0,1,'C');
        $pdf->Cell(0,0,"** MED Token are only processed & sent when your reflect on your bank statement.",0,1,'C');
        $pdf->Cell(0,6,"Thankyou for support MineCoin Growth Funds,Its platform & yourself.",0,1,'C');
        $pdf->SetFont("Times","B",10);    
        $pdf->SetTextColor(255,0,0);
        $pdf->Cell(0,6,"Payment Reference: 20200423003030.",0,1,'C');
        $pdf->SetFont("Times","",10);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,6,"Proof of payment can be e-mailed to:invoice@mwaikangedigital.co.za.,or send to our WhatsApp by clicking HERE:.",0,1,'C');
        $pdf->Cell(0,0,"Mwaikange DigitalOfficial Whatsapp - Number.",0,1,'C');
        $pdf->Cell(0,5,"**All Orders will only processed & sent when your payment reflects on our bank statement or When E-Wallets are withdrawn.",0,1,'C');
        // // $pdf->SetFont("Times","",20);
        // // $pdf->Cell(0,10,"www.mwaikangedigital.co.za",1,0,'C');

        
        // $pdf->Output('Invoice Payment.pdf','D');
        $contact = $pdf->Output('','S');

        // $attach_pdf_multipart = chunk_split( base64_encode( $pdf->Output( 'Invoice Payment.pdf','D' ) ) );
        
        require_once 'PHPMailer/src/PHPMailer.php';
        require_once 'PHPMailer/src/SMTP.php';
        require_once 'PHPMailer/src/Exception.php';
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = 'ssl://smtp.gmail.com';
        $mail->Port = '465';
        $mail->SMTPAuth = 'true';
        $mail->Username = 'afzal1503a@aptechgdn.net';
        $mail->Password = 'aptech123';
        $mail->SMTPSecure  = 'ssl';
        $mail->From = $_POST['email'];
        if (preg_match('/264/',$phone)) {
            $nam = str_replace("264","-NAM-",$phone);
            $mail->FromName = 'JobCard_Leads -REF'.$nam;
        }
        elseif (preg_match('/27/',$phone)) {
            $rsa = str_replace("27","-RSA-",$phone); 
            $mail->FromName = 'JobCard_Leads -REF'.$rsa;
        }
        elseif (preg_match('/268/',$phone)) {
            $szl = str_replace("268","-SZL-",$phone);
            $mail->FromName = 'JobCard_Leads -REF'.$szl;
        }
        elseif (preg_match('/266/',$phone)) {
            $lso = str_replace("266","-LSO-",$phone);
            $mail->FromName = 'JobCard_Leads -REF'.$lso;
        }
        $mail->AddAddress("mwaikange@gmail.com");
        // $mail->AddAddress("afzal_209@hotmail.com");
        $mail->AddAddress($email);
        $mail->Subject  = "Payment Invoice";
        $msg .= "<table style='width:100%'>
                    <tr><td>Link: '".$link."'</td></tr>
                    <tr><td>Short Name: '".$short_name."'</td></tr>
                    <tr><td>Message: '".$message."'</td></tr>
                    <tr><td>Date: '".$date."'</td></tr>
                    <tr><td>Time: '".$time."'</td></tr>
                    <tr><td>Website Complete Address: '".$website_address."'</td></tr> 
                    <tr><td>Target Countries: '".$countries."'</td></tr>
                    <tr><td>Quantity: '".$quantity."'</td></tr>
                    <tr><td>Tax: '".$tax."'</td></tr>
                    <tr><td>Discount '".$discount."'</td></tr>      
                    <tr><td>Grand Invoice: '".$grand_invoice."'</td></tr>      
                </table>\r\n\r\n";  
        $mail->MsgHTML($msg);
        $mail->addStringAttachment($contact,'invoice.pdf'); // attachment
        if(!$mail->Send()) {
            echo 'Message was not sent.';
            echo 'Mailer error: ' . $mail->ErrorInfo;
        } else {
            // echo 'Message has been sent.';
            echo "<script>window.location='invoice_payment.php?full_name=".$full_name."&email=".$email."&phone=".$phone."&company=".$company."&country=".$country."&target_countries=".$countries."&quantity=".$quantity."&tax=".$tax."&discount=".$discount."&grand_invoice=".$grand_invoice."'</script>";

        }
    }
    




    
}



?>