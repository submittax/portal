<?php
    include("database.php");
 
 

// sign up function
if (isset($_POST['register'])) {

$type = mysqli_real_escape_string($conn,$_POST['u_type']);
$name = mysqli_real_escape_string($conn,$_POST['u_name']);
$email = mysqli_real_escape_string($conn,$_POST['u_email']);
$phone = mysqli_real_escape_string($conn,$_POST['u_phone']);
// $city = mysqli_real_escape_string($conn,$_POST['u_city']);
$password = mysqli_real_escape_string($conn,$_POST['u_password']);
$password = md5($password);

$token = rand(100000,999999);
$hash_token = md5($token);
$link = 'https://submittax.com/user/verify-email.php?token='.$hash_token;

$sel = mysqli_query($conn,"select user_name from users where email = '$email' ");
$row_count=mysqli_num_rows($sel);

$sel1 = mysqli_query($conn,"select user_name from users where phone = '$phone' ");
$row_count1=mysqli_num_rows($sel1);

    if($row_count1>0)
    {
        header('location:../user/login.php?$type=1&contactexist');
    }

    if($row_count>0)
    {
        header('location:../user/login.php?$type=1&mailexist');
    }
    else
    {
                $add_qry = "INSERT into users (`u_type`,`user_name`,`email`,`phone`,`password`,`email_verify_token`)values($type, '$name', '$email' ,'$phone','$password', '$hash_token')"; 
                $res = mysqli_query($conn,$add_qry);
                echo $row_count;
                echo $add_qry;
                echo "res = ".$res;
                
                if ($res==true)
                {
                    echo $add_qry;
                    // $_SESSION['UTYPE'] = $type;
                     header('location:../user/dashboard.php');
                    /*mail*/
                    // $to = $email;
                    // $subject = 'SubmitTax Verify Email.';
                    // $message = $link;
                    // $headers = 'From: '.$_SESSION['SITE_EMAIL']. "\r\n" .
                    // 'Reply-To: '.$_SESSION['SITE_EMAIL']. "\r\n" .
                    // 'X-Mailer: PHP/' . phpversion();
             
                    // mail($to,$subject,$message,$headers);
                    /*end mail*/
                }
                else{
                     header('location:../user/dashboard.php?signupFailure');
                }
    }
   
}

// admin login
// login 
if (isset($_POST['admin_login'])) {

    $email = mysqli_real_escape_string($conn,$_POST['admin_login_email']);
    $password = mysqli_real_escape_string($conn,$_POST['admin_login_pass']);

    // $password = md5($password);

    $sel = mysqli_query($conn,"select * from admin where admin_email = '$email' ");
    if(mysqli_num_rows($sel))
    {
        $row = mysqli_fetch_assoc($sel);
        $pass = $row['password'];
        if($pass == $password)
        {
            session_start();
            $_SESSION['ADMINID'] = $row['admin_id'];
            // $_SESSION['UTYPE'] = $row['u_type'];
            // $_SESSION['PLANID'] = $row['plan_id'];
            // echo json_encode(['msg' => 'success']);
             header('location:../admin/dashboard.php');
        }
        else
        {
            // echo json_encode(['msg' => 'notExist']);
             header('location:../admin/login.php?wrongPass&'.$password);
        }
    }
    else
    {
        // echo json_encode(['msg' => 'notExist']);
                     header('location:../admin/login.php?notExist');
    }
        

}


// login 
if (isset($_POST['login_submit'])) {

    $email = mysqli_real_escape_string($conn,$_POST['login_email']);
    $password = mysqli_real_escape_string($conn,$_POST['login_pass']);

    $password = md5($password);

    $sel = mysqli_query($conn,"select * from users where email = '$email' ");
    if(mysqli_num_rows($sel))
    {
        $row = mysqli_fetch_assoc($sel);
        $pass = $row['password'];
        if($pass == $password)
        {
            $_SESSION['USERID'] = $row['user_id'];
            // $_SESSION['UTYPE'] = $row['u_type'];
            // $_SESSION['PLANID'] = $row['plan_id'];
            // echo json_encode(['msg' => 'success']);
             header('location:../user/dashboard.php');
        }
        else
        {
            // echo json_encode(['msg' => 'notExist']);
             header('location:../user/login.php?wrongPass');
        }
    }
    else
    {
        // echo json_encode(['msg' => 'notExist']);
                     header('location:../user/login.php?notExist');
    }
        

}


// document upload
if(isset($_POST["upload_doc"])) {
    $target_dir = "../user-documents/";
    $ud_name = mysqli_real_escape_string($conn,$_POST['doc-name']);
    $uploadOk = 1;
    $ac_name = basename($_FILES["file_to_upload"]["name"]);
    $enc_file_name = md5($ac_name.date("m/d/Y h:i:s a", time()));

    $FileType = strtolower(pathinfo($ac_name,PATHINFO_EXTENSION));

    $target_file = $target_dir.$enc_file_name.".".$FileType;

   

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size is less than 5MB 
    if ($_FILES["file_to_upload"]["size"] > 5000000) {
        echo "Sorry, your file is too large. It should be less than 5MB !! ";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg"
    && $FileType != "pdf" && $FileType != "docx" && $FileType != "doc" ) {
        echo "Sorry, only JPG, JPEG, PNG, DOC & PDF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file_to_upload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["file_to_upload"]["name"]). " has been uploaded.";
            $qry = "INSERT into user_documents (`ud_name`, `ad_name`,`ac_name`, `user_id`)values('$ud_name', '$ud_name', '$enc_file_name.$FileType', '1')";
            $res = mysqli_query($conn,$qry);
            if ($res) {
                header('location:../user/dashboard.php?action=user-documents&smsg');
            }else{      
                header('location:../user/dashboard.php?action=user-documents&fmsg');
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }


} //endif

// return encrypted name of file
function upload_doc($a,$b,$conn){
    //$a - target directory
    //$b - input field name
    //$conn - database connection variable 
            // $target_dir = "../pan-documents/";
            $target_dir=$a;
            $filename = mysqli_real_escape_string($conn,$_POST[$b]);
            echo "\n file name : ".$filename;
            $enc_file_name = md5($filename.$b.date("m/d/Y h:i:s a", time()));
            echo "\nenc_file_name : ".$enc_file_name;
            // $ac_name = basename($_FILES["$b"]["name"]);
            // echo "\nac_name : ".$ac_name;
            $filetype = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
            echo "\nfile type : ".$filetype;
            $target_file = $target_dir.$enc_file_name.".".$filetype;
            echo "\ntarget file : ".$target_file;

            echo "<br>".move_uploaded_file($_FILES[$b]["tmp_name"], $target_file);        
            if(move_uploaded_file($_FILES["$b"]["tmp_name"], $target_file))
            {
                return $target_file;
            }
            else{
                echo "fail to upload file\n";
                print_r($_FILES);
                return false;
            }

}










// save individual PAN card info
if(isset($_POST["save-proceed-pan-payment"])){
    echo "save-proceed-pan session form id = ".$_SESSION['form_id'];
    $contact_number = mysqli_real_escape_string($conn,$_POST['contact_num']);
    $contact_email = mysqli_real_escape_string($conn,$_POST['contact_email']);

    $fname= mysqli_real_escape_string($conn,$_POST['fname']);
    $lname= mysqli_real_escape_string($conn,$_POST['lname']);
    $abbr_name= mysqli_real_escape_string($conn,$_POST['abbr_name']);
    $gender= mysqli_real_escape_string($conn,$_POST['gender']);
    $marital_status= mysqli_real_escape_string($conn,$_POST['marital_status']);
    $other_name= mysqli_real_escape_string($conn,$_POST['other-name-radio']);
    if($other_name=="yes")
    {
        $other_fname= mysqli_real_escape_string($conn,$_POST['other_fname']);
        $other_lname= mysqli_real_escape_string($conn,$_POST['other_lname']);
    }
    else{
        $other_fname="";
        $other_lname="";
    }
   
   $aadhar_number= mysqli_real_escape_string($conn,$_POST['aadhar_number']);
   $aadhar_name= mysqli_real_escape_string($conn,$_POST['aadhar_name']);
   // $aadhar_card= mysqli_real_escape_string($conn,$_POST['aadhar_card']);


    $dob= mysqli_real_escape_string($conn,$_POST['dob']);

    $father_fname= mysqli_real_escape_string($conn,$_POST['father_fname']);
    $father_lname= mysqli_real_escape_string($conn,$_POST['father_lname']);

    $mother_fname= mysqli_real_escape_string($conn,$_POST['mother_fname']);
    $mother_lname= mysqli_real_escape_string($conn,$_POST['mother_lname']);

    $parent_on_pan= mysqli_real_escape_string($conn,$_POST['parent_on_pan']);

    $address_for_communication= mysqli_real_escape_string($conn,$_POST['comm-address']);

    $residence_address= mysqli_real_escape_string($conn,$_POST['residence_address']);
    $residence_state= mysqli_real_escape_string($conn,$_POST['residence_state']);
    $residence_city= mysqli_real_escape_string($conn,$_POST['residence_city']);
    $residence_pincode= mysqli_real_escape_string($conn,$_POST['residence_pincode']);
    if($address_for_communication=="office")
    {
        $office_address= mysqli_real_escape_string($conn,$_POST['office_address']);
        $office_state= mysqli_real_escape_string($conn,$_POST['office_state']);
        $office_city= mysqli_real_escape_string($conn,$_POST['office_city']);
        $office_pincode= mysqli_real_escape_string($conn,$_POST['office_pincode']);        
    }
    else{
        $office_pincode="";
        $office_address="";
        $office_state="";
        $office_city="";
    }


    $income_source= mysqli_real_escape_string($conn,$_POST['income_source']);
    $annual_income= mysqli_real_escape_string($conn,$_POST['annual_income']);
    $business_type= mysqli_real_escape_string($conn,$_POST['business_type']);

    $status_of_applicant= mysqli_real_escape_string($conn,$_POST['applicant-category']);

    $poi_name= mysqli_real_escape_string($conn,$_POST['poi_name']);
    // $poi_doc= mysqli_real_escape_string($conn,$_POST['poi_doc']);
    $poa_name= mysqli_real_escape_string($conn,$_POST['poa_name']);
    // $poa_doc= mysqli_real_escape_string($conn,$_POST['poa_doc']);
    $pob_name= mysqli_real_escape_string($conn,$_POST['pob_name']);
    // $pob_doc= mysqli_real_escape_string($conn,$_POST['pob_doc']);

    // $applicant_pic = mysqli_real_escape_string($conn,$_POST['applicant_pic']);
    // $applicant_sign = mysqli_real_escape_string($conn,$_POST['applicant_sign']);
            $target_dir = "../pan-documents/";
            $aadhar_card =  upload_doc($target_dir,"aadhar_card",$conn);
            $applicant_pic =  upload_doc($target_dir,"applicant_pic",$conn);
            $poi_doc =  upload_doc($target_dir,"poi_doc",$conn);
            $poa_doc = upload_doc($target_dir,"poa_doc",$conn);
            $pob_doc = upload_doc($target_dir,"pob_doc",$conn);
            $applicant_sign =  upload_doc($target_dir,"applicant_sign",$conn);

    // $registration_number= mysqli_real_escape_string($conn,$_POST['registration_number']);

     if(true)
    {

    $sql=  "insert into `new_pan_individual` (`form_id`, `status_of_applicant`,`fname`, `lname`, `abb_name`, `other_name`, `other_fname`,`other_lname`,`gender`, `dob`, `father_fname`, `father_lname`, `mother_fname`, `mother_lname`, `parent_on_pan`, `address_for_communication`, `residence_address`, `residence_state`, `residence_city`, `residence_pincode`, `office_address`, `office_state`, `office_city`, `office_pincode`, `income_source`, `annual_income`, `bus_type`, `contact_no`, `email`, `poi_name`, `poi_doc`, `poa_name`, `poa_doc`, `pob_name`, `pob_doc`, `applicant_pic`, `applicant_sign`) 
        values
         ('NULL','".$status_of_applicant."','".$fname."','".$lname."','".$abbr_name."','".$other_name."','".$other_fname."','".$other_lname."','".$gender."','".$dob."','".$father_fname."','".$father_lname."','".$mother_fname."','".$mother_lname."','".$parent_on_pan."','".$address_for_communication."','".$residence_address."','".$residence_state."','".$residence_city."','".$residence_pincode."','".$office_address."','".$office_state."','".$office_city."','".$office_pincode."','".$income_source."','".$annual_income."','".$business_type."','".$contact_number."','".$contact_email."','".$poi_name."','".$poi_doc."','".$poa_name."','".$poa_doc."','".$pob_name."','".$pob_doc."','".$applicant_pic."','".$applicant_sign."')";

        $res = mysqli_query($conn,$sql);
        $_SESSION['id'] = mysqli_insert_id($conn);
        echo $_SESSION['id'];
        echo $res;
        echo $sql;
            
        
            
            
        if($res)
        {
            // move_uploaded_file($_FILES[$_POST["poi_doc"]]["tmp_name"], $target_file);
            // move_uploaded_file($_FILES["pob_doc"]["tmp_name"], $target_file);
            // move_uploaded_file($_FILES["poa_doc"]["tmp_name"], $target_file);
            // move_uploaded_file($_FILES["applicant_sign"]["tmp_name"], $target_file);



            // $sql1 = "select * from new_pan_individual where email = '".$contact_email."' and contact_no ='".$contact_number."'";

            // $res1 = mysqli_query($conn,$sql1);
            // echo $sql1;
            // var_dump($res1);
            // $row = mysqli_fetch_assoc($res1);
            // $form_id=$row['form_id'];
            // session_destroy();
            // session_start();
            $_SESSION['package_name'] = "new pan card";
            $_SESSION['form_id'] = mysqli_insert_id($conn);
            echo "form id = ".$_SESSION['form_id'];
            // header("dataFrom.php");
                        $sql = "select * from packages where package_code = 'ST042'";
                        $res = mysqli_query($conn,$sql);
                        $row=mysqli_fetch_assoc($res);
                        ?>


                <form method="POST" name="redirect" action="https://submittax.com/submittax/config/dataFrom.php">
                    <input type="text" name="form_id" value="<?=@$_SESSION['form_id']; ?>" hidden>
                    <input type="text" name="contact_number" value="<?=@$contact_number; ?>" hidden>
                    <input type="text" name="contact_email" value="<?=@$contact_email; ?>" hidden>
                    <input type="text" name="fname" value="<?=@$fname; ?>" hidden>
                    <input type="text" name="lname" value="<?=@$lname; ?>" hidden>
                    <input type="text" name="package_name" value="<?=@$row['package_name']; ?>" hidden>
                    <input type="text" name="display_price" value="<?=@$row['display_price']; ?>" hidden>

                    <button type="submit" name="pass-to-payment" hidden></button>   
                </form>
            <script type="text/javascript">
              document.forms['redirect'].submit();
            </script>
            <?php
                
        }
        
    }   


}


// basic forms funcationalities
if(isset($_POST["save-proceed-llp"]))
{

    $llpname1 = $_POST['llpname1'];
    $llpname2 = $_POST['llpname2'];
    $llpname3 = $_POST['llpname3'];

    $bus_activity = $_POST['bus_activity'];
    $num_of_shareholders = $_POST['num_of_shareholders'];

    // $address_proof = $_POST['address_proof'];
    // $noc = $_POST['noc'];

    $target_dir = "../user-documents/";
    $address_proof =  upload_doc($target_dir,"address_proof",$conn);
    $noc =  upload_doc($target_dir,"noc",$conn);



    // $user_id = $_SESSION['user_id'];
    $user_id="1";
    $sql = "insert into llp-basic (llpname1,llpname2,llpname3,bus_activity,num_shareholders,address_proof,noc,user_id) VALUES ('".$llpname1."','".$llpname2."','".$llpname3."','".$bus_activity."','".$num_of_shareholders."','".$address_proof."','".$noc."','".$user_id."') ";
    $res = mysqli_query($conn,$sql);

    $_SESSION['num_of_shareholders'] = $num_of_shareholders;
    $_SESSION['form_id'] = mysqli_insert_id($conn);

        $_SESSION['llp-basic'] = "1";        
    if($res)
    {
    }
    echo $sql."\n";
    var_dump($res);
    // echo "\n".$_SESSION['num_of_shareholders']."\n";
    // echo $_SESSION["llp-basic"]."\n";
    echo "SAVE AND PROCEED CLICKED\n";
    print_r($_SESSION);
}


if(isset($_POST["propreitor-basic-save"]))
{

    $dir_name = $_POST['dir_name'];
    $dir_email = $_POST['dir_email'];
    $dir_contact = $_POST['dir_contact'];

    $company_name = $_POST['company_name'];
    $cap_contribution = $_POST['cap_contribution'];


    $target_dir = "../user-documents/";
    $pan_card =  upload_doc($target_dir,"pan_card",$conn);
    $aadhar_card =  upload_doc($target_dir,"aadhar_card",$conn);



    // $user_id = $_SESSION['user_id'];
    $user_id="1";
    $sql = "insert into sole-propreitor (director_name,company_name,director_email,director_contact,director_capital_contribution,pan_card,aadhar_card,user_id) VALUES ('".$llpname1."','".$llpname2."','".$llpname3."','".$bus_activity."','".$num_of_shareholders."','".$address_proof."','".$noc."','".$user_id."') ";
    $res = mysqli_query($conn,$sql);

    echo $sql."\n";
    var_dump($res);
    // echo "\n".$_SESSION['num_of_shareholders']."\n";
    // echo $_SESSION["llp-basic"]."\n";
    echo "sole propreitor clicked\n";
    print_r($_SESSION);
}



if(isset($_POST["opc-save-basic"]))
{

    $cname1 = $_POST['cname1'];
    $cname2 = $_POST['cname2'];
    $cname3 = $_POST['cname3'];

    $bus_activity = $_POST['bus_activity'];

    // $address_proof = $_POST['address_proof'];
    // $noc = $_POST['noc'];

    $target_dir = "../user-documents/";
    $address_proof =  upload_doc($target_dir,"address_proof",$conn);
    $noc =  upload_doc($target_dir,"noc",$conn);



    // $user_id = $_SESSION['user_id'];
    $user_id="1";
    $sql = "insert into opc-basic (cname1,cname2,cname3,bus_activity,address_proof,noc,user_id) VALUES ('".$cname1."','".$cname2."','".$cname3."','".$bus_activity."','".$address_proof."','".$noc."','".$user_id."') ";
    $res = mysqli_query($conn,$sql);

    echo $sql."\n";
    var_dump($res);
    $_SESSION['opc-basic'] = true;
    echo "\n".$_SESSION['num_of_shareholders']."\n";
    echo $_SESSION["opc-basic"]."\n";
    echo "SAVE AND PROCEED CLICKED\n";
    print_r($_SESSION);
}



if(isset($_POST["save-partnership-basic"]))
{

    $firm_name = $_POST['firm_name'];
    $bus_activity = $_POST['bus_activity'];
    $firm_address = $_POST['firm_address'];

    $firm_state = $_POST['firm_state'];
    $firm_city = $_POST['firm_city'];
    $firm_pincode = $_POST['firm_pincode'];

     $firm_capital_amount = $_POST['firm_capital_amount'];
    
    $num_of_partners = $_POST['num_of_partners'];

    // $address_proof = $_POST['address_proof'];
    // $noc = $_POST['noc'];

    $target_dir = "../user-documents/";
    $address_proof =  upload_doc($target_dir,"address_proof",$conn);
    $noc =  upload_doc($target_dir,"noc",$conn);



    // $user_id = $_SESSION['user_id'];
    $user_id="1";
    $sql = "insert into partnership-basic (name, bus_activity,bus_address,state,city,pincode,cap_amount,num_of_partners,user_id) VALUES ('".$firm_name."','".$bus_activity."','".$firm_address."','".$firm_state."','".$firm_city."','".$firm_pincode."','".$firm_capital_amount."','".$num_of_partners."','".$user_id."') ";
    $res = mysqli_query($conn,$sql);

    echo $sql."\n";
    var_dump($res);
    // echo "\n".$_SESSION['num_of_shareholders']."\n";
    // echo $_SESSION["llp-basic"]."\n";
    echo "SAVE AND PROCEED CLICKED\n";
    print_r($_SESSION);
}



if(isset($_POST["save-proceed-pvt-ltd"]))
{

    $cname1 = $_POST['cname1'];
    $cname2 = $_POST['cname2'];
    $cname3 = $_POST['cname3'];

    $bus_activity = $_POST['bus_activity'];
    $num_of_shareholders = $_POST['num_of_shareholders'];

    // $address_proof = $_POST['address_proof'];
    // $noc = $_POST['noc'];

    $target_dir = "../user-documents/";
    $address_proof =  upload_doc($target_dir,"address_proof",$conn);
    $noc =  upload_doc($target_dir,"noc",$conn);



    // $user_id = $_SESSION['user_id'];
    $user_id="1";
    $sql = "insert into pvt_ltd_basic (cname1,cname2,cname3,bus_activity,num_shareholders,address_proof,noc,user_id) VALUES ('".$cname1."','".$cname2."','".$cname3."','".$bus_activity."','".$num_of_shareholders."','".$address_proof."','".$noc."','".$user_id."') ";
    $res = mysqli_query($conn,$sql);

        $_SESSION['num_of_shareholders'] = $num_of_shareholders;
    if($res)
    {
        $_SESSION['pvt-ltd-basic'] = "1";        
    }
    echo $sql."\n";
    var_dump($res);
    // echo "\n".$_SESSION['num_of_shareholders']."\n";
    // echo $_SESSION["llp-basic"]."\n";
    echo "SAVE AND PROCEED CLICKED\n";
    print_r($_SESSION);
}






// step-2 form functionalities

if(isset($_POST['save-proceed-opc-2']))
{

    $director_name = $_POST['director_name'];
    $director_email = $_POST['director_email'];
    $director_contact = $_POST['director_contact'];
    $director_birthplace = $_POST['director_birthplace'];
    $director_education = $_POST['director_education'];
    $director_roi = $_POST['director_roi'];
    $director_occupation = $_POST['director_occupation'];
    $director_shareholding = $_POST['director_shareholding'];
    $director_address_proof = $_POST['director_address_proof'];
    $director_address_proof_doc = $_POST['director_address_proof_doc'];
    $director_id_proof = $_POST['director_id_proof'];
    $director_id_proof_doc = $_POST['director_id_proof_doc'];


    $nominee_name = $_POST['nominee_name'];
    $nominee_email = $_POST['nominee_email'];
    $nominee_contact = $_POST['nominee_contact'];
    $nominee_birthplace = $_POST['nominee_birthplace'];
    $nominee_education = $_POST['nominee_education'];
    $nominee_roi = $_POST['nominee_roi'];
    $nominee_occupation = $_POST['nominee_occupation'];
    $nominee_address_proof = $_POST['nominee_address_proof'];
    $nominee_address_proof_doc = $_POST['nominee_address_proof_doc'];
    $nominee_id_proof = $_POST['nominee_id_proof'];
    $nominee_id_proof_doc = $_POST['nominee_id_proof_doc'];


   

    // $address_proof = $_POST['address_proof'];
    // $noc = $_POST['noc'];

    $target_dir = "../user-documents/";
    
    $director_address_proof_doc =  upload_doc($target_dir,"director_address_proof_doc",$conn);
    $director_id_proof_doc =  upload_doc($target_dir,"director_id_proof_doc",$conn);

    $nominee_address_proof_doc =  upload_doc($target_dir,"nominee_address_proof_doc",$conn);
    $nominee_id_proof_doc =  upload_doc($target_dir,"nominee_id_proof_doc",$conn);



    // $form_id = $_SESSION['form_id'];
    $form_id="1";

    // query for director
    $sql = "insert into opc-2 (name,contact,place_of_birth,education,resident_of_india,occupation,type,shareholding,address_proof_name,address_proof,id_proof_name,id_proof,form_id,) VALUES ('".$director_name."','".$director_contact."','".$director_birthplace."','".$director_education."','".$director_roi."','".$director_occupation."','director','".$director_shareholding."','".$director_address_proof."','".$director_address_proof_doc."','".$director_id_proof."','".$director_id_proof_doc."','".$form_id."') ";
    $res = mysqli_query($conn,$sql);

    // query for nominee
    $sql = "insert into opc-2 (name,contact,place_of_birth,education,resident_of_india,occupation,type,shareholding,address_proof_name,address_proof,id_proof_name,id_proof,form_id,) VALUES ('".$nominee_name."','".$nominee_contact."','".$nominee_birthplace."','".$nominee_education."','".$nominee_roi."','".$nominee_occupation."','nominee','NULL','".$nominee_address_proof."','".$nominee_address_proof_doc."','".$nominee_id_proof."','".$nominee_id_proof_doc."','".$form_id."') ";
    $res = mysqli_query($conn,$sql);


}








?>