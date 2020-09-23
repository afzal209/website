

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <title>SMSWeb| Invoice Payment</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script defer src="https://friconix.com/cdn/friconix.js"> </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="./style.css">





    <style>

        .over{

            background-color: rgba(100, 65, 165, 0.85) !important;

            min-height: 100%;

            background-repeat: no-repeat;

            background-size: cover;

            background-position: relative;

        }

        @media only screen and (max-width: 600px) {
            img {
                /* max-width: 100%;
                height: 50%; */
                display: none;
            }
            .copy{
                /* text-align: center; */
                font-size: 10px;
            }
        }
    </style>

<script>(function(v,i,s,a){if(!v._visaSettings){v._visaSettings={};}v._visaSettings["cac7e36e-9772-11ea-b589-901b0edac50a"]={v:"0.3",s:"cac7e36e-9772-11ea-b589-901b0edac50a",a:"1"};_v=i.getElementsByTagName("head")[0];_a=_v;_i=i.createElement("script");_s=_i;_s.defer="defer";_s.src=s+a+v._visaSettings["cac7e36e-9772-11ea-b589-901b0edac50a"].v;_a.appendChild(_s);})(window,document,"//app-worker.visitor-analytics.io/main",".js?s=cac7e36e-9772-11ea-b589-901b0edac50a&v=")</script>

</head>



<body class="main">

    <div >

            <div class="main-dialog" role="document">

                <div class="main-content" style="margin-top: 2%;">

                    <div class="main-header">

                        <!-- <img src="" alt="logo"> -->

                    </div>

                    <div class="main-body">

                        <div class="row">



                        <div class="main-text col-lg-5 col-md-5 col-sm-12 col-xm-12" class="main-img">

                                <div class="col-md-12 col-sm-10" class="main-img1">

                                    

                                    <img src="dist/facebook2.jpg" alt="" style="width: 650px; height: 438px;" >
                                    <!-- <h3 class="fs-subtitle copy" style="margin-left: 10%;color:white;margin-top: 3%;" >© 2023 www.lead-generator.co.za is a subsidiary of Mwaikanges Investment Group cc</h3> -->
                                    <!-- © 2023 www.lead-generator.co.za is a subsidiary of Mwaikanges Investment Group cc -->



                                </div>
                                <div class="col-md-12 col-sm-10">
                                    <h3 class="fs-subtitle copy" style="margin-left: 10%;color:white;margin-top: 3%;font-size: 11px;" >© 2023 www.lead-generator.co.za is a subsidiary of Mwaikanges Investment Group cc</h3>
                                </div>

                            </div>



                            <div class="form-body col-lg-5 col-md-5 col-sm-12">

                                <form id="msform" action="invoice.php" method="POST">

                              

                                <ul id="progressbar">

                                        <li class="active"></li>

                                        <li class="active"></li>

                                        <li class="active"></li>

                                        <li class="active"></li>

                                    </ul>

                                    <fieldset>

                                        <h2 class="fs-title">Invoice Payment</h2>

                                       

                                        <div class="form-container row">

                                            <div class="col-md-12 inputGroup">

                                                <?php

                                                if (isset($_GET['phone'])) {

                                                    $ph= $_GET['phone'];

                                                    if (preg_match('/264/',$ph)) {

                                                    $nam = str_replace("264","NAM-",$ph);

                                                    echo'

                                                    <label for="depth1" style="background-color: #ee0979;color:white;">INVOICE REF:'.$nam.'

                                                    </label>';

                                                    }

                                                    elseif (preg_match('/27/',$ph)) {

                                                        $rsa = str_replace("27","RSA-",$ph); 

                                                        echo'

                                                        <label for="depth1" style="background-color: #ee0979;color:white;">INVOICE REF:'.$rsa.'

                                                        </label>';

                                                    }

                                                    elseif (preg_match('/268/',$ph)) {

                                                        $szl = str_replace("268","SZL-",$ph);

                                                        echo'

                                                        <label for="depth1" style="background-color: #ee0979;color:white;">INVOICE REF:'.$szl.'

                                                        </label>';

                                                    }

                                                    elseif (preg_match('/266/',$ph)) {

                                                        $lso = str_replace("266","LSO-",$ph);

                                                        echo'

                                                        <label for="depth1" style="background-color: #ee0979;color:white;">INVOICE REF:'.$lso.'

                                                        </label>';

                                                    }

                                                }

                                                else {

                                                    header("location:index.php");

                                                }

                                                ?>

                                            </div>

                                            <h3 class="fs-subtitle">Invoice + Job sheet was automatically sent to your email</h3>

                                            <h4 class="fs-subtitle">Click any of the option below to Make Payment</h4>

                                            <?php

                                             $quantity = $_GET['quantity'];

                                             if ($quantity == '100') {

                                                echo'

                                                <div class="col-md-6 inputGroup">

                                                    <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/100-_SMS-p195954000"><label for="depth1" style="background-color: orange;color:white;">Pay Via Card</label></a>

                                                </div>

                                                <div class="col-md-6 ">

                                                    <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/100-_SMS-p195954000"><img src="dist/visa-master.png"></a>       

                                                </div>

                                                <div class="col-md-6" >

                                                    <a href="https://referrals.minecoin.co.za/100UnitsSMS"><img src="dist/ewallet.png" style="width: 60px;height: 60px;"></a>       

                                                </div>

                                                <div class="col-md-6 inputGroup" style="margin-top: 5%;">

                                                    <a href="https://referrals.minecoin.co.za/100UnitsSMS"><label for="" style="background-color: orange;color:white;font-size: 70%;">Pay Via Mobile Wallet</label></a>

                                                </div>

                                                <div class="col-md-6 inputGroup" style="margin-top: 5%;">

                                                    <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/100-_SMS-p195954000"><label for="depth1" style="background-color: orange;color:white;">Pay Via BTC</label></a>

                                                </div>

                                                <div class="col-md-6 " style="margin-top: 3%;">

                                                    <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/100-_SMS-p195954000"><img src="dist/bitcoin.jpg" style="width: 60px;height: 60px;"></a>       

                                                </div>

                                                 ';

                                             }

                                             elseif ($quantity == '300') {

                                                echo'

                                                <div class="col-md-6 inputGroup">

                                                    <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/300-_SMS-p195951811"><label for="depth1" style="background-color: orange;color:white;">Pay Via Card</label></a>

                                                </div>

                                                <div class="col-md-6 ">

                                                     <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/300-_SMS-p195951811"><img src="dist/visa-master.png"></a>       

                                                </div>

                                                <div class="col-md-6" >

                                                    <a href="https://referrals.minecoin.co.za/300UnitsSMS"><img src="dist/ewallet.png" style="width: 60px;height: 60px;"></a>       

                                                </div>

                                                <div class="col-md-6 inputGroup" style="margin-top: 5%;">

                                                    <a href="https://referrals.minecoin.co.za/300UnitsSMS"><label for="" style="background-color: orange;color:white;font-size: 70%;">Pay Via Mobile Wallet</label></a>

                                                </div>

                                                <div class="col-md-6 inputGroup" style="margin-top: 5%;">

                                                    <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/300-_SMS-p195951811"><label for="depth1" style="background-color: orange;color:white;">Pay Via BTC</label></a>

                                                </div>

                                                <div class="col-md-6 " style="margin-top: 3%;">

                                                     <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/300-_SMS-p195951811"><img src="dist/bitcoin.jpg" style="width: 60px;height: 60px;"></a>       

                                                </div>';

                                             }

                                             elseif ($quantity == '500') {

                                                echo'

                                                <div class="col-md-6 inputGroup">

                                                    <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/500-_SMS-p195957894"><label for="depth1" style="background-color: orange;color:white;">Pay Via Card</label></a>

                                                </div>

                                                <div class="col-md-6 ">

                                                     <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/500-_SMS-p195957894"><img src="dist/visa-master.png"></a>       

                                                </div>

                                                <div class="col-md-6" >

                                                    <a href="https://referrals.minecoin.co.za/500UnitsSMS"><img src="dist/ewallet.png" style="width: 60px;height: 60px;"></a>       

                                                </div>

                                                <div class="col-md-6 inputGroup" style="margin-top: 5%;">

                                                    <a href="https://referrals.minecoin.co.za/500UnitsSMS"><label for="" style="background-color: orange;color:white;font-size: 70%;">Pay Via Mobile Wallet</label></a>

                                                </div>

                                                <div class="col-md-6 inputGroup" style="margin-top: 5%;">

                                                    <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/500-_SMS-p195957894"><label for="depth1" style="background-color: orange;color:white;">Pay Via BTC</label></a>

                                                </div>

                                                <div class="col-md-6 " style="margin-top: 3%;">

                                                     <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/500-_SMS-p195957894"><img src="dist/bitcoin.jpg" style="width: 60px;height: 60px;"></a>       

                                                </div>';

                                             }

                                             elseif ($quantity == '1000') {

                                                echo'

                                                <div class="col-md-6 inputGroup">

                                                    <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/1000-_SMS-p195953961"><label for="depth1" style="background-color: orange;color:white;">Pay Via Card</label></a>

                                                </div>

                                                <div class="col-md-6 ">

                                                     <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/1000-_SMS-p195953961"><img src="dist/visa-master.png"></a>       

                                                </div>

                                                <div class="col-md-6" >

                                                    <a href="https://referrals.minecoin.co.za/1000UnitsSMS"><img src="dist/ewallet.png" style="width: 60px;height: 60px;"></a>       

                                                </div>

                                                <div class="col-md-6 inputGroup" style="margin-top: 5%;">

                                                    <a href="https://referrals.minecoin.co.za/1000UnitsSMS"><label for="" style="background-color: orange;color:white;font-size: 70%;">Pay Via Mobile Wallet</label></a>

                                                </div>

                                                <div class="col-md-6 inputGroup" style="margin-top: 5%;">

                                                    <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/1000-_SMS-p195953961"><label for="depth1" style="background-color: orange;color:white;">Pay Via BTC</label></a>

                                                </div>

                                                <div class="col-md-6 " style="margin-top: 3%;">

                                                     <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/1000-_SMS-p195953961"><img src="dist/bitcoin.jpg" style="width: 60px;height: 60px;"></a>       

                                                </div>';

                                             }

                                             elseif ($quantity == '3000') {

                                                echo'

                                                <div class="col-md-6 inputGroup">

                                                    <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/3000-_SMS-p195972144"><label for="depth1" style="background-color: orange;color:white;">Pay Via Card</label></a>

                                                </div>

                                                <div class="col-md-6 ">

                                                     <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/3000-_SMS-p195972144"><img src="dist/visa-master.png"></a>       

                                                </div>

                                                <div class="col-md-6" >

                                                    <a href="https://referrals.minecoin.co.za/3000UnitsSMS" ><img src="dist/ewallet.png" style="width: 60px;height: 60px;"></a>       

                                                </div>

                                                <div class="col-md-6 inputGroup" style="margin-top: 5%;">

                                                    <a href="https://referrals.minecoin.co.za/3000UnitsSMS"><label for="" style="background-color: orange;color:white;font-size: 70%;">Pay Via Mobile Wallet</label></a>

                                                </div>

                                                <div class="col-md-6 inputGroup" style="margin-top: 5%;">

                                                    <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/3000-_SMS-p195972144"><label for="depth1" style="background-color: orange;color:white;">Pay Via BTC</label></a>

                                                </div>

                                                <div class="col-md-6 " style="margin-top: 3%;">

                                                     <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/3000-_SMS-p195972144"><img src="dist/bitcoin.jpg" style="width: 60px;height: 60px;"></a>       

                                                </div>';

                                             }

                                             elseif ($quantity == '5000') {

                                                echo'

                                                <div class="col-md-6 inputGroup">

                                                    <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/5000-_SMS-p195973005"><label for="depth1" style="background-color: orange;color:white;">Pay Via Card</label></a>

                                                </div>

                                                <div class="col-md-6 ">

                                                     <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/5000-_SMS-p195973005"><img src="dist/visa-master.png"></a>       

                                                </div>

                                                <div class="col-md-6" >

                                                    <a href="https://referrals.minecoin.co.za/5000UnitsSMS" ><img src="dist/ewallet.png" style="width: 60px;height: 60px;"></a>       

                                                </div>

                                                <div class="col-md-6 inputGroup" style="margin-top: 5%;">

                                                    <a href="https://referrals.minecoin.co.za/5000UnitsSMS" ><label for="" style="background-color: orange;color:white;font-size: 70%;">Pay Via Mobile Wallet</label></a>

                                                </div>

                                                <div class="col-md-6 inputGroup" style="margin-top: 5%;">

                                                    <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/5000-_SMS-p195973005"><label for="depth1" style="background-color: orange;color:white;">Pay Via BTC</label></a>

                                                </div>

                                                <div class="col-md-6 " style="margin-top: 3%;">

                                                     <a href="https://mwaikangesinvestmentgroupcc.ecwid.com/5000-_SMS-p195973005"><img src="dist/bitcoin.jpg" style="width: 60px;height: 60px;"></a>       

                                                </div>';

                                             }

                                            ?>

                                            

                                            <!-- <div class="col-md-12 inputGroup" style="margin-top: 3%;"> -->

                                            <!-- <form action="invoice.php" method="POST"> -->

                                                <input type="hidden" name="full_name" id="full_name"  value="<?php echo $_GET['full_name'] ?>" />

                                                <input type="hidden" name="email" id="email" value="<?php echo $_GET['email'] ?>" />

                                                <input type="hidden" name="phone" id="phone" value="<?php echo $_GET['phone'] ?>" />

                                                <input type="hidden" name="company" id="company" value="<?php echo $_GET['company'] ?>" />

                                                <input type="hidden" name="country" id="country" value="<?php echo $_GET['country'] ?>" />

                                                <input type="hidden" name="link" id="link" value="<?php echo $_GET['link'] ?>" />

                                                <input type="hidden" name="short_name" id="short_name" value="<?php echo $_GET['short_name'] ?>" />

                                                <input type="hidden" name="message" id="message" value="<?php echo $_GET['message'] ?>" />

                                                <input type="hidden" name="date" id="date" value="<?php echo $_GET['date'] ?>" />

                                                <input type="hidden" name="time" id="time" value="<?php echo $_GET['time'] ?>" />

                                                <input type="hidden" name="website_address" id="website_address" value="<?php echo $_GET['website_address'] ?>" />

                                                <input type="hidden" name="target_countries" id="target_countries"  value="<?php echo $_GET['target_countries'] ?>" />

                                                <input type="hidden" name="quantity" id="quantity" value="<?php echo $_GET['quantity'] ?>" />

                                                <input type="hidden" name="tax" id="tax" value="<?php echo $_GET['tax'] ?>" />

                                                <input type="hidden" name="discount" id="discount" value="<?php echo $_GET['discount'] ?>" />

                                                <input type="hidden" name="grand_invoice" id="grand_invoice" value="<?php echo $_GET['grand_invoice'] ?>" />

                                                <!-- <label for="depth1" style="background-color: #ee0979;color:white;"><a href="">DOWNLOAD INVOICE-PDF</a></label> -->

                                                <input type="submit" name="submit" value="DOWNLOAD INVOICE-PDF" style="background-color: #ee0979;color:white;"/>

                                            <!-- </form> -->

                                                

                                            <!-- </div> -->

                                            <h4 class="fs-subtitle">Download PDF to make Bank Transfer/Bank Deposit / EFT</h4>

                                        </div>



                                        <!-- <input type="button" name="previous" class="previous action-button-previous"

                                            value="Previous" /> -->

                                            <!-- <input type="submit" name="submit" class="submit action-button"

                                                value="Submit" /> -->



                                    </fieldset>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

                
            </div>

    </div>



</body>



<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

<script src="./script.js"></script>





</html>