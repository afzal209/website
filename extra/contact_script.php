<?php 

if(isset($_POST['submit'])){
    if(empty($_POST['choose_industry']) || empty($_POST['choose_intelligence']) || empty($_POST['choose_depth']) || empty($_POST['full_name']) || empty($_POST['mobile']) || empty($_POST['email']) || empty($_POST['company']) || empty($_POST['message'])){
        echo '<script>swal("Error","All feild are mandatory","error")</script>';
    }
    else {
        $to = 'mwaikange@gmail.com,support@minecoin.co.za';
        $subject = 'Covid19 Impact Tracker';
        $c_industry=$_POST['choose_industry'];
        $c_intelligence=$_POST['choose_intelligence'];
        $c_depth = $_POST['choose_depth']; 
        if(is_array($c_industry) || is_array($c_intelligence) || is_array($c_depth)){
            $array=array(
                'choose Industry'=>$c_industry,
                'choose Intelligence'=>$c_intelligence,
                'choose Depth' => $c_depth,
                
            );
            $value_industry=implode(',', $array['choose Industry']);
            $value_intelligence=implode(',', $array['choose Intelligence']);
            $value_depth = implode(',',$array['choose Depth']);
            $industry=$value_industry;
            $intelligence=$value_intelligence;
            $depth = $value_depth;
            $full_name = $_POST['full_name'];
            $mobile = $_POST['mobile'];
            $email= $_POST['email'];
            $company= $_POST['company'];
            $message = $_POST['message'];
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            $txt ='<table style="width:100%">
                        <tr>
                            <td>'.$full_name.'  '.$subject.'</td>
                        </tr>
                        <tr><td>Choose Industry: '.$industry.'</td></tr>
                        <tr><td>Choose Intelligence: '.$intelligence.'</td></tr>
                        <tr><td>Choose Depth: '.$depth.'</td></tr>
                        <tr><td>Full Name: '.$full_name.'</td></tr>
                        <tr><td>Mobile: '.$mobile.'</td></tr>
                        <tr><td>Email: '.$email.'</td></tr>
                        <tr><td>Company: '.$company.'</td></tr>
                        <tr><td>Message: '.$message.'</td></tr>       
                    </table>';

                // echo $txt;
        // echo $industry;
        // echo "<br>";
        // echo $intelligence;
        // echo "<br>";
        // echo $depth;
                if (@mail($to, $email, $txt, $headers))
                {
                    // echo '<script>swal("Your form is submitted successfully!","Researchica executive will touch base
                    // and share more details with you soon.","success")</script>';
                    echo '<script>swal("Researchica’s Covid19 Impact Tracker","Your form is submitted successfully. Researchica executive will soon touch base with you","success")</script>';
                }else{
                    echo '<script>swal("Error","Failed","error")</script>';
                }

            // print_r("Industry: ".$value_industry."<br> Intelligence: ".$value_intelligence);
            
            

        } 
    }
    
}




?>