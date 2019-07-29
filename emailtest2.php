<?php
    if (isset($_POST['submit'])) {
        $email_to = "bansal.ashish096@gmail.com";
        $name = "Aditya";
        $email = "aditya@pryshth.org";
        $message = $_POST['message'];
        $headers  = "From: $name\r\n";
        $headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        if(mail($email_to, "Test emails", $message, $headers)){
            echo 'sent';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

              <form role="form" id="myform" method="post" data-toggle="validator">
                        <textarea cols="100" name="message" required rows="20"></textarea>
                        <input name="submit" type="submit" value="Send" >
                    </form>
</html>