

<?php 
include_once 'include/header.php';
ch_title("Index")
?>



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



                          <?php
                          include_once 'include/slider.php'; 
                          ?>


                            <div class="form-body col-lg-5 col-md-5 col-sm-12">

                                <form id="msform" action="buy_etherum.php" method="POST" >

                                <?php 

                                // include 'contact_script.php';                                        

                                ?>

                                    <!-- <ul id="progressbar">

                                        <li class="active"></li>

                                        <li></li>

                                        <li></li>

                                        <li></li>

                                    </ul> -->

        

                                    <fieldset>

                                        <h2 class="fs-title">Personal Details</h2>

                                        <h3 class="fs-subtitle">Fill in your credentials to authorize

                                            submission

                                        </h3>

                                       <?php 
                                        // $error =''; 
                                        // if (isset($_POST['next'])) {
                                        //     $full_name = $_POST['full_name'];
                                        //     $email = $_POST['email'];
                                        //     $phone = $_POST['phone'];
                                        //     $company = $_POST['company'];
                                        //     $country = $_POST['country'];
                                        //     $check_plus = substr_count($phone, '+');
                                        //     // echo $check_plus ;
                                        //     if ($check_plus == 0) {
                                        //         // echo '<script>alert("pleace add plus before number")</script>';
                                        //         echo $error = 'pleace add + sign before number';
                                        //     }
                                        //     else {
                                        //         // echo 'Message has been sent.';
                                        //         echo "<script>window.location='job.php?full_name=".$full_name."&email=".$email."&phone=".$phone."&company=".$company."&country=".$country."'</script>";
                                        //     }
                                        // }
                                        ?>
                                        <input type="text" name="name" id="name" placeholder="NAME"  /><span id="name-info" class="info"></span>
                                        <input type="text" name="surname" id="surname" placeholder="SURNAME"  /><span id="surname-info" class="info"></span>
                                        <input type="number" name="id_number" id="id_number" placeholder="ID NUMBER"  /><span id="company-info" class="info"></span>
                                        <input type="number" name="mobile_number" id="mobile_number" placeholder=" MOBILE NUMBER"  /><span id="id-passport-no-info" class="info"></span>
                                        <textarea class="form-control" placeholder="HOME ADDRESS " id="home_address" rows="3" name="home_address"  maxlength="120"></textarea>
                                        
                                        <input type="text" name="gender" id="gender" placeholder="GENDER "  /><span id="id-passport-no-info" class="info"></span>
                                        <input type="text" name="town_region" id="town_region" placeholder=" TOWN/REGION"  /><span id="id-passport-no-info" class="info"></span>
                                        <input type="text" name="employed" id="employed" placeholder=" EMPLOYED"  /><span id="id-passport-no-info" class="info"></span>
                                        <input type="text" name="industory" id="industory" placeholder=" INDUSTORY"  /><span id="id-passport-no-info" class="info"></span>

                                        
                                        <!-- <input type="submit" name="next" class="next action-button" value="Next" /> -->
                                        <h3 class="fs-subtitle">Which product are you interested in</h3>
                                        <div class="form-container row">
                                            <div class="col-lg-6 col-md-6 inputGroup">

                                                        <a href="funeral_cover.php"><label for="depth1" style="background-color: whitesmoke;color:black;">Funeral Cover</label></a>

                                            </div>
                                            <div class="col-lg-6 col-md-6 inputGroup">

                                                        <a href=""><label for="depth1" style="background-color: whitesmoke;color:black;">Retirement Plan</label></a>

                                            </div>
                                            <div class="col-lg-6 col-md-6 inputGroup">

                                                        <a href="lifecover_disabilty.php"><label for="depth1" style="background-color: whitesmoke;color:black;">Life & Disabilty Cover</label></a>

                                            </div>
                                            <div class="col-lg-6 col-md-6 inputGroup">

                                                        <a href=""><label for="depth1" style="background-color: whitesmoke;color:black;">Education Plan & Unit trust</label></a>

                                            </div>
                                        </div>
                                    </fieldset>



                                </form>

                            </div>

                        </div>

                    </div>

                </div>

                

            </div>

    </div>



</body>



<?php
include_once 'include/script.php'; 
?>

</html>