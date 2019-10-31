<?php
if($_POST['submit']=='submit')
{
$name=$_POST['name'];
$phone=$_POST['mobile'];
$email=$_POST['email'];
$loanpurpose=$_POST['loan_purpose'];
$loanamount=$_POST['loan_amount'];
$message=$_POST['msg'];

$email2='arunkumarmathapati02@gmail.com,info@mavyah.com'; 
//$today = date("D M j G:i:s");  
            $msgSubject="Enquiry from the Website ".$_SERVER['HTTP_REFERER'];
              $headers  = "MIME-Version: 1.0\r\n";
              $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
             $headers .= "From: ".$email;				 
               $message="
						a person enquirys about loans through mindfin website: <br><br>
						Name: $name<br/>
						Email: $email<br/>
						Phone: $phone<br/>
						Loan Purpose: $loanpurpose<br/>
						Lone Amount: $loanamount<br/>
						Message: $message<br/>
						";
				
                mail($email2,$msgSubject,$message,$headers);
					  
			        $msgSubject1="Thanks for the Enquiry";
                  $headers1  = "MIME-Version: 1.0\r\n";
                  $headers1 .= "Content-type: text/html; charset=iso-8859-1\r\n";
                  $headers1 .= "From: ".$email2;
                   $message1='Thanks for the Enquiry. One of our representative will contact you shortly';
                      mail($email,$msgSubject1,$message1,$headers1);
                    echo "<script type='text/javascript'> alert('Thanks for the Contact. One of our representative will contact you shortly')</script>";           
}

?>
<script>
window.location.href="index.html";
</script>