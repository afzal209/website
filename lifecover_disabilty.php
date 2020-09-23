<?php 
include_once 'include/header.php';
ch_title("Lifecover & Disabilty Page")
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
                            <div class="form-body col-lg-3 col-md-3 col-sm-12">
                                <form id="msform" action="plan_page.php" method="POST" >
                                    <fieldset>

                                        <h2 class="fs-title">LIFECOVER & DISABILTY PAGE 1/2</h2>
                                        <input type="text" name="medical_test" id="medical_test" placeholder="Have you had any medical tests, such as a treadmill stress test, X-Ray, MRI, heart scan, sleep study, or echocardiogram, what was the outcome?"  /><span id="name-info" class="info"></span>
                                        <input type="text" name="driving_infractions" id="driving_infractions" placeholder="Have you had any driving infractions, including moving violations, DUI/DWI, reckless driving, or license suspensions in the last 5 years?"  /><span id="surname-info" class="info"></span>
                                        <input type="text" name="insurance" id="insurance" placeholder="Have you been rated or declined for life insurance in the past?"  /><span id="company-info" class="info"></span>
                                        <input type="text" name="family_member" id="family_member" placeholder=" Has any maternal family member of yours ever been diagnosed with Cancer / Diabetes /Asthama or any other Genetic illness?"  /><span id="id-passport-no-info" class="info"></span>
                                        <input type="text" name="consume_alcohol" id="consume_alcohol" placeholder=" Do you consume alcohol? if so how many glasses per week?"  /><span id="id-passport-no-info" class="info"></span>
                                        <input type="text" name="medications" id="medications" placeholder="Are you currently taking any medications? If yes, please provide name and dosage below."  /><span id="name-info" class="info"></span>
                                        <input type="text" name="COPD" id="COPD" placeholder="Asthma, emphysema, obstructive sleep apnea, or COPD?"  /><span id="surname-info" class="info"></span>
                                        <input type="text" name="height" id="height" placeholder="What is your Height?"  /><span id="name-info" class="info"></span>
                                        <input type="text" name="weight" id="weight" placeholder="What is your weight?"  /><span id="name-info" class="info"></span>          
                                    </fieldset>
                                </form>
                            </div>
                            <div class="form-body col-lg-4 col-md-4 col-sm-12">
                                <form id="msform" action="plan_page.php" method="POST" >
                                    <fieldset>
                                        <h3 class="fs-subtitle">The following questions are to assess your medical history, depending on the Type of Life & Disability Cover you choose at the end, Medical Test May or May not be required.</h3>
                                        <h3 class="fs-subtitle">The consultant will call you after the quote is done to talk with you about the such requirements and the value of the desired Life cover.</h3>
                                        <h3 class="fs-subtitle" style="color: red;">Choose Yes or No,where aplicable type answer .</h3>
                                        <input type="text" name="mental_nervous" id="mental_nervous" placeholder="Depression, Anxiety, or other mental nervous condition?"  /><span id="name-info" class="info"></span>
                                        <textarea class="form-control" placeholder="Cardiovascular disorder, including heart attack, coronary artery disease, arrhythmia, valvular disease, heart murmur, cerebrovascular disease, stroke, or TIA? " id="Cardiovascular_disorder" rows="3" name="Cardiovascular_disorder"  maxlength="120"></textarea>
                                        <input type="text" name="intolerance" id="intolerance" placeholder="Diabetes, elevated blood sugar, or glucose intolerance?"  /><span id="company-info" class="info"></span>
                                        <input type="text" name="treated_condition" id="treated_condition" placeholder=" Any other health impairment or medically treated condition? If yes, please specify below"  /><span id="id-passport-no-info" class="info"></span>
                                        <input type="text" name="cardiovascular" id="cardiovascular" placeholder=" Do you have any family history (parents or siblings) of death prior to age 60 from cardiovascular disease or cancer?"  /><span id="id-passport-no-info" class="info"></span>
                                        <input type="text" name="tobacco" id="tobacco" placeholder="Have you used tobacco in any form within the past 10 years? If yes, please specify type and date of use below."  /><span id="name-info" class="info"></span>
                                        <input type="submit" name="next" class="next action-button" value="Next" /> 
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