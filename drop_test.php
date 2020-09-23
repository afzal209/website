<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Show Hide Elements Using Select Box</title>
<style>
    .box{
        color: #fff;
        padding: 20px;
        display: none;
        margin-top: 20px;
    }
    .red{ background: #ff0000; }
    .green{ background: #228B22; }
    .blue{ background: #0000ff; }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>
</head>
<body>
    <div>
        <select>
            <option>Choose Color</option>
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
        </select>
    </div>
    <div class="red box">You have selected <strong>red option</strong> so i am here</div>
    <div class="green box">You have selected <strong>green option</strong> so i am here</div>
    <div class="blue box">You have selected <strong>blue option</strong> so i am here</div>


    <select class="form-control text-bold  selectpicker modalInput "   id="selectMon" name="selectMon[]"  multiple  data-live-search="true"  >
                                            <option value="">Do you Want to Cover Additional Person</option>
                                            <option value="my_family">2 ME & MY FAMILY(SPOUSE & KIDS 18-65)</option>
                                            <option value="my_parents">4 MY PARENTS & INLAWS(18-64)</option>
                                            <option value="extended_family">5 EXTENDED FAMILY(18-64)</option>


                                        </select>
</body>
</html>