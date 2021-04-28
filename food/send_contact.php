<?php 
/**................................................................
 
 * ................................................................
 */

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

$to = " "; 
	$email_subject = "Contact form submission: $name";
	$email_body = "Sie haben eine Email von Haryana Tandoori Resturant erhalten;. ".
	" Details :\n Name: $name \n Email: $email_address \n Message: \n $message"; 
	
	$headers = "From: Haryana Tandoori Resturant"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	//header('Location: contact_success.php');
        	
  echo '<script language = "javascript">';
  // echo "window.location.href='login.php'"; 
  echo "alert('Vielen DAnk für Ihrer nachricht. Sie werden von uns kontaktiern , so bald wie möglich!');window.location.href='contact.php'";
   echo '</script>';
    exit;

?>
