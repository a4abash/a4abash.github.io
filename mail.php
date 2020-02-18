<?php 
if(isset($_POST['Submit'])){
$to = "podey115@gmail.com";
$name = $_POST['name'];
$subject = $_POST['subject'];
$txt = $name . $_POST['message'];
$headers = "From: ". $_POST['email'];
mail($to,$subject,$txt,$headers);
header('Location: http://abashshah.com.np/'])
}
?>
