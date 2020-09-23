<?php 
include_once 'include/header.php';
ch_title("Plan Page")
?>
<body class="main">

    <div>
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
                          <div class="form-body col-lg-6 col-md-6 col-sm-12">
                                <form id="msform" action="upload_document.php" method="POST" >
                                    <fieldset>
                                    <div class="form-container row" style="margin-left: 0;">
                                            <div class="col-lg-12 col-md-12 inputGroup" style="height: 50%;"> 
                                                <a href="funeral_cover.php"><label for="depth1" style="background-color: yellow;color:black;">Funeral Cover</label></a>
                                            </div>
                                            <div class="col-lg-12 col-md-12 inputGroup">
                                                <a href=""><label for="depth1" style="background-color: yellow;color:black;">Retirement Plan</label></a>
                                            </div>
                                            <div class="col-lg-12 col-md-12 inputGroup">
                                                <a href="lifecover_disabilty.php"><label for="depth1" style="background-color: yellow;color:black;">Life & Disabilty Cover</label></a>
                                            </div>
                                            <div class="col-lg-12 col-md-12 inputGroup">
                                                <a href=""><label for="depth1" style="background-color: yellow;color:black;">Education Plan & Unit trust</label></a>
                                            </div>
                                            <input type="submit" name="next" class="" value="Submit & Finalize" style="background-color: #ee0979;color:white;margin-left: 0%;"/>
                                             
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