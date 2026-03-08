<?php

$to = "asagency1999@gmail.com";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$resume = $_FILES['resume']['name'];
$temp = $_FILES['resume']['tmp_name'];

move_uploaded_file($temp,"uploads/".$resume);

$subject = "New Delivery Job Application";

$message = "
New Application Received

Name: $name
Email: $email
Phone: $phone
Resume File: $resume
";

$headers = "From: $email";

mail($to,$subject,$message,$headers);

echo "<script>
alert('Application Submitted Successfully');
window.location='index.html';
</script>";

?>
