



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

                                <form id="msform" action="summary.php" method="POST" >

                                <?php 

                                // include 'contact_script.php';                                        

                                ?>

                                    <ul id="progressbar">

                                        <li class="active"></li>

                                        <li class="active"></li>

                                        <li></li>

                                        <li></li>

                                    </ul>

                                    <fieldset>

                                        <h2 class="fs-title">Job Specifications</h2>

                                        <?php 

                                        if(isset($_POST['submit'])){

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

                                        }

                                        ?>

                                        <div class="form-container row">

                                                <textarea class="form-control" placeholder="Copy and past here the full complete link address,you would want your lead to be directed to,website,WhatsApp or Telegram Group etc.. " id="link" rows="3" name="link"></textarea>

                                                <div class="col-md-4">

                                                    <label for="" style="font-size: 10px;">leads-generator.co.za/</label>

                                                </div>

                                                <div class="col-md-6">

                                                    <input type="text" name="short_name" id="short_name" placeholder="Short Name"  maxlength="20" />

                                                </div>

                                                <div class="col-md-2" style="margin-top: 8%;font-size: small;">

                                                    <label for="">20</label>

                                                </div>

                                                <div class="col-md-10">

                                                <textarea class="form-control" placeholder="Type the message you want to in your sms campaign together with your link " id="message" rows="3" name="message"  maxlength="120"></textarea>

                                                </div>

                                                <div class="col-md-2" style="margin-top: 16.5%;font-size: small; ">

                                                <label for="">120</label>

                                                </div>

                                                <div class="col-md-12">

                                                    <input type="date" name="date" id="date" required>

                                                    <label for="datetime">Schedule Date</label>

                                                </div>

                                                <div class="col-md-12 form-group">

                                                <select name="time" id="time" class="form-control" required style="font-size:70%;">

                                                <?php 

                                                for($hours=0; $hours<24; $hours++) // the interval for hours is '1'

                                                for($mins=0; $mins<60; $mins+=30) // the interval for mins is '30'

                                                    echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'

                                                                   .str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';

                                                ?>

                                                </select>

                                                    <!-- <input type="time" name="time" id="time" required> -->

                                                    <label for="time">Schedule Time</label>

                                                </div>

                                                <h3 class="fs-subtitle">We dont promote Porn,Gambling or any other illegal activity,please type in below the web address of the site,service ,product you will be promoting for consideration</h2>

                                                <div class="col-md-12">

                                                    <input type="text" name="website_address" id="website_address" placeholder="Website link/Address" required>

                                                </div>

                                                <input type="hidden" name="full_name" id="full_name"  value="<?php echo $_GET['full_name'] ?>" />

                                                <input type="hidden" name="email" id="email" value="<?php echo $_GET['email'] ?>" />

                                                <input type="hidden" name="phone" id="phone" value="<?php echo $_GET['phone'] ?>" />

                                                <input type="hidden" name="company" id="company" value="<?php echo $_GET['company'] ?>" />

                                                <input type="hidden" name="country" id="country" value="<?php echo $_GET['country'] ?>" />

                                        </div>

                                        <!-- <input type="button" name="previous" class="previous action-button-previous"

                                            value="Previous" /> -->

                                        <input type="submit" name="next" id="next" class="next action-button" value="Next" />

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- <script src="./script.js"></script> -->

<script>

   $(document).ready(function () {

    //Contact Form validation on click event

    $('#date').on('change',function () {

        // alert('yes');

        var date = $('#date').val();

        var c = new Date();

        day = ("0" + c.getDate()).slice(-2);

        month = ("0" + (c.getMonth() + 1)).slice(-2);

        year = c.getFullYear();

        var std = [year, month, day].join('-');

        //  alert(std);

        if (date == std ) {

            $('#date').val('');

            alert('You cannot select current days');

        }

        else if(date < std){

             $('#date').val('');

            alert('You cannot select old date');

        }

        // else{

        //     alert('no');

        // }

        // day = current.getDay();

        // month = current.getMonth();

        // year = current.getFullYear();

        // alert(day);

    })

    

});

</script>

</html>