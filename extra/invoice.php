<?php

if (isset($_POST['submit'])) {
   
    // echo '<script>alert("yes")</script>';
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


    require_once 'fpdf/fpdf.php';

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->Ln(15);
        $pdf->SetFont("Times","B",13);
        $pdf->SetTextColor(79,89,19);
        $pdf->Cell(20,5,"MWAIKANGES INVESTMENT GROUP CC",0,0);
        $pdf->Cell(140,5,"COMMERCIAL INVOICE",0,1,'R');
        $pdf->SetFont("Times","B",10);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,5,"WWW.LEAD-GENERATOR.CO.ZA",0,1);
        $pdf->SetFont("Times","",10);
        $pdf->Cell(0,5,"Email:sales@lead-generator.co.za",0,1);
        $pdf->Ln(4);
        $pdf->Cell(40,5,'Name',0,0);
        $pdf->SetTextColor(255,0,0);
        $pdf->Cell(20,5,":$full_name",0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(40,5,'Company Name',0,0);
        $pdf->SetTextColor(255,0,0);
        $pdf->Cell(20,5,":$company",0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(40,5,'Mobile Number',0,0);
        $pdf->SetTextColor(255,0,0);
        $pdf->Cell(20,5,":+$phone",0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(40,5,'Email',0,0);
        $pdf->SetTextColor(255,0,0);
        $pdf->Cell(20,5,":$email",0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(40,5,'Country',0,0);
        $pdf->SetTextColor(255,0,0);
        $pdf->Cell(20,5,":$country",0,1);
        $pdf->SetTextColor(0,0,0);  
        $pdf->Cell(40,5,'Invoice Date',0,0);
        $pdf->SetTextColor(255,0,0);
        $pdf->Cell(20,5,":$date",0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(40,5,'Reference Number',0,0);
        $pdf->SetTextColor(255,0,0);
        if (preg_match('/264/',$phone)) {
            $nam = str_replace("264","NAM-",$phone);
            $pdf->Cell(20,5,":$nam",0,1);
        }
        elseif (preg_match('/27/',$phone)) {
            $rsa = str_replace("27","RSA-",$phone); 
            $pdf->Cell(20,5,":$rsa",0,1);
        }
        elseif (preg_match('/268/',$phone)) {
            $szl = str_replace("268","SZL-",$phone);
            $pdf->Cell(20,5,":$szl",0,1);
        }
        elseif (preg_match('/266/',$phone)) {
            $lso = str_replace("266","LSO-",$phone);
            $pdf->Cell(20,5,":$lso",0,1);
        }
        elseif (preg_match('/213/',$phone)) {
            $DZA = str_replace("213","DZA-",$phone);
            $pdf->Cell(20,5,":$DZA",0,1);
        }
        elseif (preg_match('/244/',$phone)) {
            $AGO = str_replace("244","AGO-",$phone);
            $pdf->Cell(20,5,":$AGO",0,1);
        }
        elseif (preg_match('/229/',$phone)) {
            $BEN = str_replace("229","BEN-",$phone);
            $pdf->Cell(20,5,":$BEN",0,1);
        }
        elseif (preg_match('/267/',$phone)) {
            $BWA = str_replace("267","BWA-",$phone);
            $pdf->Cell(20,5,":$BWA",0,1);
        }
        elseif (preg_match('/226/',$phone)) {
            $BFA = str_replace("226","BFA-",$phone);
            $pdf->Cell(20,5,":$BFA",0,1);
        }
        elseif (preg_match('/257/',$phone)) {
            $BDI = str_replace("257","BDI-",$phone);
            $pdf->Cell(20,5,":$BDI",0,1);
        }
        elseif (preg_match('/237/',$phone)) {
            $CMR = str_replace("237","CMR-",$phone);
            $pdf->Cell(20,5,":$CMR",0,1);
        }
        elseif (preg_match('/238/',$phone)) {
            $CPV = str_replace("238","CPVLSO-",$phone);
            $pdf->Cell(20,5,":$CPV",0,1);
        }
        elseif (preg_match('/236/',$phone)) {
            $CAF = str_replace("236","CAF-",$phone);
            $pdf->Cell(20,5,":$CAF",0,1);
        }
        elseif (preg_match('/269/',$phone)) {
            $COM = str_replace("269","COM-",$phone);
            $pdf->Cell(20,5,":$COM",0,1);
        }
        elseif (preg_match('/243/',$phone)) {
            $COD = str_replace("243","COD-",$phone);
            $pdf->Cell(20,5,":$COD",0,1);
        }
        elseif (preg_match('/253/',$phone)) {
            $DJI = str_replace("253","DJI-",$phone);
            $pdf->Cell(20,5,":$DJI",0,1);
        }
        elseif (preg_match('/20/',$phone)) {
            $EGY = str_replace("20","EGY-",$phone);
            $pdf->Cell(20,5,":$EGY",0,1);
        }
        elseif (preg_match('/240/',$phone)) {
            $GNQ = str_replace("240","GNQ-",$phone);
            $pdf->Cell(20,5,":$GNQ",0,1);
        }
        elseif (preg_match('/291/',$phone)) {
            $ERI = str_replace("291","ERI-",$phone);
            $pdf->Cell(20,5,":$ERI",0,1);
        }
        elseif (preg_match('/251/',$phone)) {
            $ETH = str_replace("251","ETH-",$phone);
            $pdf->Cell(20,5,":$ETH",0,1);
        }
        elseif (preg_match('/241/',$phone)) {
            $GAB = str_replace("241","GAB-",$phone);
            $pdf->Cell(20,5,":$GAB",0,1);
        }
        elseif (preg_match('/220/',$phone)) {
            $GMB = str_replace("220","GMB-",$phone);
            $pdf->Cell(20,5,":$GMB",0,1);
        }
        elseif (preg_match('/233/',$phone)) {
            $GHA = str_replace("233","GHA-",$phone);
            $pdf->Cell(20,5,":$GHA",0,1);
        }
        elseif (preg_match('/224/',$phone)) {
            $GIN = str_replace("224","GIN-",$phone);
            $pdf->Cell(20,5,":$GIN",0,1);
        }
        elseif (preg_match('/245/',$phone)) {
            $GNB = str_replace("245","GNB-",$phone);
            $pdf->Cell(20,5,":$GNB",0,1);
        }
        elseif (preg_match('/225/',$phone)) {
            $CIV = str_replace("225","CIV-",$phone);
            $pdf->Cell(20,5,":$CIV",0,1);
        }
        elseif (preg_match('/254/',$phone)) {
            $KEN = str_replace("254","KEN-",$phone);
            $pdf->Cell(20,5,":$KEN",0,1);
        }
        elseif (preg_match('/231/',$phone)) {
            $LBR= str_replace("231","LBR-",$phone);
            $pdf->Cell(20,5,":$LBR",0,1);
        }
        elseif (preg_match('/218/',$phone)) {
            $LBY= str_replace("218","LBY-",$phone);
            $pdf->Cell(20,5,":$LBY",0,1);
        }
        elseif (preg_match('/261/',$phone)) {
            $MDG= str_replace("261","MDG-",$phone);
            $pdf->Cell(20,5,":$MDG",0,1);
        }
        elseif (preg_match('/265/',$phone)) {
            $MWI= str_replace("265","MWI-",$phone);
            $pdf->Cell(20,5,":$MWI",0,1);
        }
        elseif (preg_match('/223/',$phone)) {
            $MLI= str_replace("223","MLI-",$phone);
            $pdf->Cell(20,5,":$MLI",0,1);
        }
        elseif (preg_match('/222/',$phone)) {
            $MRT= str_replace("222","MRT-",$phone);
            $pdf->Cell(20,5,":$MRT",0,1);
        }
        elseif (preg_match('/230/',$phone)) {
            $MUS= str_replace("230","MUS-",$phone);
            $pdf->Cell(20,5,":$MUS",0,1);
        }
        elseif (preg_match('/212/',$phone)) {
            $MAR= str_replace("212","MAR-",$phone);
            $pdf->Cell(20,5,":$MAR",0,1);
        }
        elseif (preg_match('/258/',$phone)) {
            $MOZ= str_replace("258","MOZ-",$phone);
            $pdf->Cell(20,5,":$MOZ",0,1);
        }
        elseif (preg_match('/227/',$phone)) {
            $NER= str_replace("227","NER-",$phone);
            $pdf->Cell(20,5,":$NER",0,1);
        }
        elseif (preg_match('/234/',$phone)) {
            $NGA= str_replace("234","NGA-",$phone);
            $pdf->Cell(20,5,":$NGA",0,1);
        }
        elseif (preg_match('/242/',$phone)) {
            $COG= str_replace("242","COG-",$phone);
            $pdf->Cell(20,5,":$COG",0,1);
        }
        elseif (preg_match('/262/',$phone)) {
            $REU= str_replace("262","REU-",$phone);
            $pdf->Cell(20,5,":$REU",0,1);
        }
        elseif (preg_match('/250/',$phone)) {
            $RWA= str_replace("250","RWA-",$phone);
            $pdf->Cell(20,5,":$lso",0,1);
        }
        elseif (preg_match('/290/',$phone)) {
            $SHN= str_replace("290","SHN-",$phone);
            $pdf->Cell(20,5,":$SHN",0,1);
        }
        elseif (preg_match('/239/',$phone)) {
            $STP= str_replace("239","STP-",$phone);
            $pdf->Cell(20,5,":$STP",0,1);
        }
        elseif (preg_match('/221/',$phone)) {
            $SEN= str_replace("221","SEN-",$phone);
            $pdf->Cell(20,5,":$SEN",0,1);
        }
        elseif (preg_match('/248/',$phone)) {
            $SYC= str_replace("248","SYC-",$phone);
            $pdf->Cell(20,5,":$SYC",0,1);
        }
        elseif (preg_match('/232/',$phone)) {
            $SLE= str_replace("232","SLE-",$phone);
            $pdf->Cell(20,5,":$SLE",0,1);
        }
        elseif (preg_match('/252/',$phone)) {
            $SOM= str_replace("252","SOM-",$phone);
            $pdf->Cell(20,5,":$SOM",0,1);
        }
        elseif (preg_match('/27/',$phone)) {
            $ZAF= str_replace("27","ZAF-",$phone);
            $pdf->Cell(20,5,":$ZAF",0,1);
        }
        elseif (preg_match('/211/',$phone)) {
            $SSD= str_replace("211","SSD-",$phone);
            $pdf->Cell(20,5,":$SSD",0,1);
        }
        elseif (preg_match('/249/',$phone)) {
            $SDN= str_replace("249","SDN-",$phone);
            $pdf->Cell(20,5,":$SDN",0,1);
        }
        elseif (preg_match('/268/',$phone)) {
            $SWZ= str_replace("268","SWZ-",$phone);
            $pdf->Cell(20,5,":$SWZ",0,1);
        }
        elseif (preg_match('/255/',$phone)) {
            $TZA= str_replace("255","TZA-",$phone);
            $pdf->Cell(20,5,":$TZA",0,1);
        }
        elseif (preg_match('/228/',$phone)) {
            $TGO= str_replace("228","TGO-",$phone);
            $pdf->Cell(20,5,":$TGO",0,1);
        }
        elseif (preg_match('/216/',$phone)) {
            $TUN= str_replace("216","TUN-",$phone);
            $pdf->Cell(20,5,":$TUN",0,1);
        }
        elseif (preg_match('/256/',$phone)) {
            $UGA= str_replace("256","UGA-",$phone);
            $pdf->Cell(20,5,":$UGA",0,1);
        }
        elseif (preg_match('/212/',$phone)) {
            $ESH= str_replace("212","ESH-",$phone);
            $pdf->Cell(20,5,":$ESH",0,1);
        }
        elseif (preg_match('/260/',$phone)) {
            $ZMB= str_replace("260","ZMB-",$phone);
            $pdf->Cell(20,5,":$ZMB",0,1);
        }
        elseif (preg_match('/263/',$phone)) {
            $ZWE= str_replace("263","ZWE-",$phone);
            $pdf->Cell(20,5,":$ZWE",0,1);
        }
        $pdf->Ln(10);
        $pdf->SetFont("Times","B",10);
        $pdf->SetFillColor(214,288,188);
        $pdf->Rect(10,84, 189, 8, 'F');
        $pdf->SetTextColor(0,0,0);
        $pdf->SetDrawColor(155, 187, 89 );
        $pdf->Cell(32,8,'Product',1,0);
        $pdf->Cell(32,8,'Quantity',1,0);
        $pdf->Cell(61,8,'Description',1,0);
        $pdf->Cell(32,8,'Price (R)',1,0);
        $pdf->Cell(32,8,'Total (R)',1,1);
        $pdf->SetFont("Times","",10);
        $pdf->Cell(32,7,'01',1,0);
        $pdf->Cell(32,7,"$quantity",1,0);
        $pdf->Cell(61,7,"SMS_Campaign",1,0);
        $pdf->Cell(32,7,"$grand_invoice.00",1,0);
        $pdf->Cell(32,7,"$grand_invoice.00",1,1);

        $pdf->Cell(32,7,'',1,0);
        $pdf->Cell(32,7,"COUNTRIES",1,0);
        $pdf->Cell(61,7,"$t_countries",1,0);
        $pdf->Cell(32,7,"",1,0);
        $pdf->Cell(32,7,"",1,1);

        $pdf->Cell(32,7,'',1,0);
        $pdf->Cell(32,7,"",1,0);
        $pdf->Cell(61,7,"",1,0);
        $pdf->Cell(32,7,"",1,0);
        $pdf->Cell(32,7,"",1,1);

        $pdf->Cell(32,7,'',1,0);
        $pdf->Cell(32,7,"",1,0);
        $pdf->Cell(61,7,"",1,0);
        $pdf->Cell(32,7,"",1,0);
        $pdf->Cell(32,7,"",1,1);


        $pdf->Cell(32,7,'',1,0);
        $pdf->Cell(32,7,"",1,0);
        $pdf->Cell(61,7,"",1,0);
        $pdf->Cell(32,7,"",1,0);
        $pdf->Cell(32,7,"",1,1);

        $pdf->Ln(6);
       
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(30,5,'TAX BASE','T',0);
        $pdf->Cell(20,5,'------','T',1);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->SetFillColor(214,288,188);
        $pdf->Rect(150, 138, 50, 4.5, 'F');
        $pdf->Cell(30,5,'VAT (0%)','T',0);
        $pdf->Cell(20,5,'0,00%','T',1);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(30,5,'VAT AMOUNT','T',0);
        $pdf->Cell(20,5,'_R','T',1);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->SetFillColor(214,288,188);
        $pdf->Rect(150, 148 , 50, 4.5, 'F');
        $pdf->Cell(30,5,'TOTAL (R)','T',0);
        $pdf->Cell(20,5,"$grand_invoice.00",'T',1);
        $pdf->Ln();
        $pdf->SetFont("Times","",0);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,'','0',0);
        $pdf->Cell(20,5,"SIGNATURE:",'0',1,'L');

        $pdf->Ln(8);
        $pdf->SetFont("Times","",0);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(0,5,"Terms: 48 hours from the invoice date",0,1);
        $pdf->Cell(0,5,"Please make payments to the following account:",0,1);

        $pdf->Ln();
        $pdf->SetFont("Times","B",10);
        $pdf->Cell(40,5,'Bank Account Name',0,0);
        $pdf->Cell(20,5,": Standard Bank of Namibia",0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(40,5,'Account Name',0,0);
        $pdf->Cell(20,5,": Mwaikanges Investment Group cc",0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(40,5,'Account Number',0,0);
        $pdf->Cell(20,5,": 60003941522",0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(40,5,'Branch Code',0,0);
        $pdf->Cell(20,5,": 082 972",0,1);
        $pdf->SetTextColor(0,0,0);  
        $pdf->Cell(40,5,'Bank Branch',0,0);
        $pdf->Cell(20,5,": Katutura",0,1);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(40,5,'Swift',0,0);
        $pdf->Cell(20,5,": SBNMNANX",0,1);
        $pdf->Cell(40,5,'E-wallet  Namibia',0,0);
        $pdf->Cell(20,5,": 264 81 808 3704 |085 734 0513",0,1);
        $pdf->Cell(40,5,'E-wallet  South Africa',0,0);
        $pdf->Cell(20,5,":  Not Yet Available |Not Yet Available",0,1);
        $pdf->Ln();

        $pdf->Cell(20,5,"THANK YOU FOR YOUR BUSINESS!",0,1);
        $pdf->SetY(-15);

        $pdf->SetFillColor(214,288,188);
        
        // // $pdf->SetFont("Arial","",20);
        // // $pdf->Cell(0,10,"www.mwaikangedigital.co.za",1,0,'C');
         $pdf->Line(20, 280, 210-20, 280); // 20mm from each edge
        
        $pdf->Output('invoice.pdf','D');

}
?>