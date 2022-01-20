<?php
    use PHPMailer\PHPMailer\PHPMailer;

    require_once "PHPMailer/src/PHPMailer.php";
    require_once "PHPMailer/src/SMTP.php";
    require_once "PHPMailer/src/Exception.php";

    $mail = new PHPMailer(true);

    $alert = '';

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $body = $_POST['message'];



    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'infofireflycoffee@gmail.com'; // gmail mail adresi
        $mail->Password = 'Firefly123-'; // gmail şifresi adresi
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("infofireflycoffee@gmail.com"); // gmail mail adresi
        $mail->Subject = $name;
        $mail->Body = "<h3>Name : $name <br>Email: $email <br>Number: $number <br>Message : $body</h3>";

        $mail->send();
            $alert = '<div class="alert-success">
                 <span>Firefly Tarafından İsteğiniz Alınmıştır.</span>
                </div>';
                } catch (Exception $e){
                $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
            }
        }

?>
