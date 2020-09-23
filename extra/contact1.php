<?php 
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
    // $target_countries = $_POST['target_countries'];
    $quantity = $_POST['quantity'];
    $tax = $_POST['tax'];
    $discount = $_POST['discount'];
    $grand_invoice = $_POST['grand_invoice'];

    require_once 'fpdf/fpdf.php';

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial","",20);
    $pdf->Cell(0,10,"Mwaikanges Investment Group cc",0,1,'C');
    $pdf->Cell(0,10,"MWAIKANGE DIGITAL",0,1,'C');
    $pdf->SetTextColor(0,0,255);
    $pdf->Cell(0,10,"www.mwaikangedigital.co.za",0,1,'C');
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(0,10,"TAX INVOICE",0,1,'C');
    $pdf->SetFont("Arial","",10);
    $pdf->Cell(0,10,"Full Name:{$full_name}",0,0,'L');
    $pdf->Ln(5.8);
    $pdf->Cell(0,10,"REFERENCE",0,0,'R');
    $pdf->Write(5,"Email:{$email}");
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
    $pdf->Ln(7.5);
    $pdf->Write(5,"WhatsApp Mobile Number:{$phone}");
    $pdf->Ln(7.5);
    $pdf->Write(5,"Company:{$company}");
    $pdf->Ln(7.5);
    $pdf->Write(5,"Country:{$country}");
    $pdf->Ln(7.5);
    $pdf->SetFont("Arial","",10);
    $pdf->Cell(50,10,"ITEM DESCRIPTION",1,0,'C');
    $pdf->Cell(40,10,"QUANTITY",1,0,'C');
    $pdf->Cell(50,10,"R",1,0,'C');
    $pdf->Cell(50,10,"Total",1,1,'C');
    $pdf->Cell(50,10,"",0,0);
    $pdf->Cell(50,10,"",0,0);
    $pdf->Cell(50,10,"",0,0);
    $pdf->Cell(40,10,"",0,1);

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

    // $pdf->SetFont("Arial","",20);
    // $pdf->Cell(0,10,"www.mwaikangedigital.co.za",1,0,'C');

    $content = $pdf->Output('Invoice Payment.pdf','D');



    
}



?>