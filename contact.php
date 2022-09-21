<?php 
if (isset($_POST['sendmail'])) {
    $fromEmail = $_POST['email'];
    $toEmail = "kyilintun.mdy18.hh@gmail.com";
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = $toEmail;
    $subject = $subject;
    $headers = "MIME-Version: 1.0" ."\r\n";
    $headers = "Content-type:test/html:html;charset=UTF-8" . "\r\n";
    $headers = 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n" . 'Reply-To: '.$fromEmail. "\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = $message;

    $result = @mail($to, $subject, $message, $headers);
    echo '<script>alert("Email sent successfully!")</script>';
    echo '<script>window.location.href="index.php"</script>';
}