<?php
  require("PHPMailer/src/PHPMailer.php");
  require("PHPMailer/src/SMTP.php");
  require("PHPMailer/src/Exception.php");
class Mailer{
    
    public function dathangmail($tieude,$noidung,$maildathang){
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->CharSet = 'UTF-8';
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "khanhbells@gmail.com";
        $mail->Password = "cbdrkzfbqqbxcgsw";
        $mail->SetFrom("khanhbells@gmail.com");
        $mail->Subject = $tieude;
        $mail->Body = $noidung;
        $mail->AddAddress($maildathang);

        if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message has been sent";
        }
    }
}     
?>