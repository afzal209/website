

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <title>SMSWeb</title>

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

                        <div class="col-md-12 col-sm-12">

                        </div>

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

                                <form id="msform" action="contact.php" method="POST" >

                                <?php 

                                // include 'contact_script.php';                                        

                                ?>

                                    <ul id="progressbar">

                                        <li class="active"></li>

                                        <li class="active"></li>

                                        <li class="active"></li>

                                        <li></li>

                                    </ul>

                                    <fieldset>

                                        <h2 class="fs-title">Invoice Summary</h2>

                                        <h3 class="fs-subtitle">Traget Countries</h3>

                                        <div class="form-container row">

                                            <div class="col-md-12 inputGroup">

                                                <input type="checkbox" name="target_countries[]" id="target_countries1"

                                                    value="South Africa">

                                                <label for="target_countries1">South Africa</label>

                                            </div>

                                            <div class="col-md-12 inputGroup">

                                                <input type="checkbox" name="target_countries[]" id="target_countries2" value="Namibia">

                                                <label for="target_countries2">Namibia</label>

                                            </div>

                                            <div class="col-md-12 inputGroup">

                                                <input type="checkbox" name="target_countries[]" id="target_countries3" value="Lesotho">



                                                <label for="target_countries3">Lesotho</label>

                                            </div>



                                            <div class="col-md-12 inputGroup">

                                                <input type="checkbox" name="target_countries[]" id="target_countries4"

                                                    value="Swaziland">

                                                <label for="target_countries4">Swaziland</label>

                                            </div>

                                            

                                            <h3 class="fs-subtitle">If you choose more than one country,sms send will be mixed to fullfill the requirement at the discretion of support</h3>

                                            <div class="col-md-12 form-group" >

                                                <select name="quantity" id="quantity" class="form-control" required style="font-size:70%;">

                                                    <option value="">Click Drop Down to Choose Quantity of SMS</option>

                                                    <option value="100">100 units</option>

                                                    <option value="300">300 units</option>

                                                    <option value="500">500 units</option>

                                                    <option value="1000">1000 units</option>

                                                    <option value="3000">3000 units</option>

                                                    <option value="5000">5000 units</option>

                                                </select>

                                                <span id="quantity-info"

                        class="info"></span>

                                            </div>

                                            

                                            <div class="col-md-12 ">

                                                <h3 class="fs-subtitle">Tax</h3>

                                            <input type="number" name="tax" id="tax" placeholder="Tax" readonly/>

                                            </div>

                                            

                                            <div class="col-md-12">

                                                <h3 class="fs-subtitle">Discount</h3>

                                            <input type="number" name="discount" id="discount" placeholder="Discount" readonly />

                                            </div>

                                             

                                            <div class="col-md-12">

                                                 <h3 class="fs-subtitle">Total Price (Rands)</h3>

                                            <input type="number" name="grand_invoice" id="grand_invoice" placeholder="Grand Invoice Total(in South African Rands)" readonly /><span id="grand_invoice-info"

                        class="info"></span>

                                            </div>

                                                <input type="hidden" name="full_name" id="full_name"  value="<?php echo $_POST['full_name'] ?>" />

                                                <input type="hidden" name="email" id="email" value="<?php echo $_POST['email'] ?>" />

                                                <input type="hidden" name="phone" id="phone" value="<?php echo $_POST['phone'] ?>" />

                                                <input type="hidden" name="company" id="company" value="<?php echo $_POST['company'] ?>" />

                                                <input type="hidden" name="country" id="country" value="<?php echo $_POST['country'] ?>" />

                                                <input type="hidden" name="link" id="link" value="<?php echo $_POST['link'] ?>" />

                                                <input type="hidden" name="short_name" id="short_name" value="<?php echo $_POST['short_name'] ?>" />

                                                <input type="hidden" name="message" id="message" value="<?php echo $_POST['message'] ?>" />

                                                <input type="hidden" name="date" id="date" value="<?php echo $_POST['date'] ?>" />

                                                <input type="hidden" name="time" id="time" value="<?php echo $_POST['time'] ?>" />

                                                <input type="hidden" name="website_address" id="website_address" value="<?php echo $_POST['website_address'] ?>" />





                                        </div>



                                        <!-- <input type="button" name="previous" class="previous action-button-previous"

                                            value="Previous" /> -->

                                        <input type="submit" name="submit" class="next action-button" value="Generate " />

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

<!-- <script src="./script.js"></script> -->

<script>

    $(document).ready(function() {

    // alert('yes')

        $('#quantity').on('change', function(e) {

            // console.log(e)

            var quantity_name = e.target.value;

            // console.log(role_name);

            if (quantity_name == '100') {

                $('#tax').val('0');

                $('#discount').val('0');

                $('#grand_invoice').val('300');  

            }

            else if(quantity_name == '300'){

                $('#tax').val('0');

                $('#discount').val('0');

                $('#grand_invoice').val('400');  

            }

            else if(quantity_name == '500'){

                $('#tax').val('0');

                $('#discount').val('0');

                $('#grand_invoice').val('500');  

            }

            else if(quantity_name == '1000'){

                $('#tax').val('0');

                $('#discount').val('0');

                $('#grand_invoice').val('900');  

            }

            else if(quantity_name == '3000'){

                $('#tax').val('0');

                $('#discount').val('0');

                $('#grand_invoice').val('2400');  

            }

            else if(quantity_name == '5000'){

                $('#tax').val('0');

                $('#discount').val('0');

                $('#grand_invoice').val('3500');  

            }

            else{

                $('#tax').val('');

                $('#discount').val('');

                $('#grand_invoice').val('');  

            }   

        });



       

});

</script>

</html>