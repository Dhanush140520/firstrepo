<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@mindfin.co.in";
    $email_subject = "Job Applied Form";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        // !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['mobile']) ||
        !isset($_POST['age']) ||
        !isset($_POST['experience']) ||
        !isset($_POST['position'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['name']; // required
    // $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['mobile']; // not required
    $age = $_POST['age']; // required
    $experience= $_POST['experience']; // required
    $position = $_POST['position']; // required
    // $age = $_POST['age']; // required

 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
 
//   if(!preg_match($string_exp,$last_name)) {
//     $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
//   }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
    // $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Mobile: ".clean_string($telephone)."\n";
    $email_message .= "Age: ".clean_string($age)."\n";
    $email_message .= "Experience: ".clean_string($experience)."\n";
    $email_message .= "Position: ".clean_string($position)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
if(@mail($email_to, $email_subject, $email_message, $headers)){

header("Location:../career.php?auth=success");
exit;
}
else{
   
    header("Location:../career.php?auth=fail");
    exit;
}
}
?>
 
<!-- include your own success html here -->
 
<!-- Thank you for contacting us. We will be in touch with you very soon. -->
 