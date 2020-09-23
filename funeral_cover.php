<?php 
include_once 'include/header.php';
ch_title("Funeral Cover")
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
                            <div class="form-body col-lg-4 col-md-4 col-sm-12">
                                <form id="msform" action="plan_page.php" method="POST" >
                                    <fieldset>

                                        <h2 class="fs-title">Funeral Cover</h2>

                                        <h3 class="fs-subtitle">1 & 3 ME & MY CHILDREN(15-65)

                                        </h3>

                                       
                                        <input type="text" name="cover" id="cover" placeholder="who would you like to cover ?"  /><span id="name-info" class="info"></span>
                                        <input type="text" name="brith" id="brith" placeholder="what is your date of brith ?"  /><span id="surname-info" class="info"></span>
                                        <input type="number" name="amount" id="amount" placeholder="what is your desired cover amount ?"  /><span id="company-info" class="info"></span>
                                        <input type="text" name="child" id="child" placeholder=" Do you want to add a child ?"  /><span id="id-passport-no-info" class="info"></span>
                                        <!-- <input type="number" name="additional_cover" id="additional_cover" placeholder=" Do you Want to Cover Additional Person"  /><span id="id-passport-no-info" class="info"></span> -->
                                        <select class="form-control text-bold  selectpicker modalInput "   id="selectMon" name="selectMon[]"  multiple  data-live-search="true"  >
                                            <option value="">Do you Want to Cover Additional Person</option>
                                            <option value="my_family">2 ME & MY FAMILY(SPOUSE & KIDS 18-65)</option>
                                            <option value="my_parents">4 MY PARENTS & INLAWS(18-64)</option>
                                            <option value="extended_family">5 EXTENDED FAMILY(18-64)</option>


                                        </select>

                                        
                                        <!-- <input type="submit" name="next" class="next action-button" value="Next" /> -->
                                       <div id="my_family" class="my_family" style="margin-top: 3%;">
                                        <h3 class="fs-subtitle">2 ME & MY FAMILY(SPOUSE & KIDS 18-65)</h3>
                                        <input type="text" name="bene_name" id="bene_name" placeholder="Beneficiary Full Name"  /><span id="name-info" class="info"></span>
                                        <input type="text" name="bene_brith" id="bene_brith" placeholder="Beneficiary Date of Brith"  /><span id="surname-info" class="info"></span>
                                        <input type="number" name="bene_amount" id="amount" placeholder="what is your desired cover amount ?"  /><span id="company-info" class="info"></span>
                                        <input type="text" name="bene_child" id="child" placeholder=" Do you want to add a child ?"  /><span id="id-passport-no-info" class="info"></span>
                                       </div>
                                       <input type="submit" name="next" class="next action-button" value="Next" id="next" />
                                        
                                    </fieldset>



                                </form>

                            </div>
                            <div class="form-body col-lg-3 col-md-3 col-sm-12" id="main_div">
                                <form id="msform" action="plan_page.php" method="POST" >
                                    <fieldset>
                                        <div  id="my_parents" class="my_parents">
                                            <h3 class="fs-subtitle">4 MY PARENTS & INLAWS(18-64)</h3>                                        
                                            <input type="text" name="in_laws" id="in_laws" placeholder="Own Parents or in-law ?"  /><span id="name-info" class="info"></span>
                                            <input type="text" name="male_female" id="male_female" placeholder="Male or Female"  /><span id="surname-info" class="info"></span>
                                            <input type="text" name="bene_full_name" id="bene_full_name" placeholder="Beneficiary Full Name"  /><span id="company-info" class="info"></span>
                                            <input type="text" name="bene_date_brith" id="bene_date_brith" placeholder=" Beneficiary Date of Brith ?"  /><span id="id-passport-no-info" class="info"></span>
                                            <input type="number" name="cover_amount" id="cover_amount" placeholder="what is your desired cover amount ?"  /><span id="company-info" class="info"></span>
                                        </div>
                                       <div  id="extended_family" class="extended_family"> 
                                            <h3 class="fs-subtitle">5 EXTENDED FAMILY(18-64)</h3>
                                            <input type="text" name="family_member" id="family_member" placeholder="Extended Family Member ? "  /><span id="id-passport-no-info" class="info"></span>
                                            <input type="text" name="related" id="related" placeholder=" How are you related ?"  /><span id="id-passport-no-info" class="info"></span>
                                            <input type="text" name="beneficiary_full_name" id="beneficiary_full_name" placeholder=" Beneficiary Full Name"  /><span id="id-passport-no-info" class="info"></span>
                                            <input type="text" name="beneficiary_date_brith" id="beneficiary_date_brith" placeholder=" Beneficiary Date of Brith ?"  /><span id="id-passport-no-info" class="info"></span>
                                            <input type="number" name="desired_amount" id="desired_amount" placeholder="what is your desired cover amount ?"  /><span id="company-info" class="info"></span>
    
                                       </div>

                                        
                                       
                                        
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

<script>
$(document).ready(function () {
    $('#my_family').hide();
    $('#main_div').hide();
    $('#my_parents').hide();
    $('#extended_family').hide();
    $('select').change(function () {
       
        $(this).find('option:selected').each(function () {
            var optionValue = $(this).attr("value");
            // console.log(optionValue);
            if(optionValue == 'my_family'){
                $(".my_family").not("." + optionValue).hide();
                $("." + optionValue).show();
            }
            if(optionValue == 'my_parents'){
                $('#next').hide();
                $('#main_div').show();
                $(".my_parents").not("." + optionValue).hide();
                $("." + optionValue).show();
                // alert('next one');
            }
            if(optionValue == 'extended_family'){
                $('#next').hide();
                $('#main_div').show();
                $(".extended_family").not("." + optionValue).hide();
                $("." + optionValue).show();
                // alert('next one');
            }
        })
        
        
    }).change();
});
</script>

<?php
include_once 'include/script.php'; 
?>

</html>