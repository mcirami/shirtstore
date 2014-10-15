<?php

    require_once("../includes/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $message = trim($_POST["message"]);
        $reason = $_POST["reason"];
        $error_message = array();

        if ($name == "" OR $email = "" OR $message == ""){
            $error_message[] = "You must specify a value for name, email address and message.";
        }

        foreach($_POST as $value){
            if(stripos($value, 'Content-Type:') !== FALSE){
                $error_message[] = "There was a problem with the information you entered.";
            }
        }

        if ($_POST["address"] != ""){
            $error_message[] = "Your form submission has an error.";
        }

        require_once(ROOT_PATH . "includes/phpmailer/class.phpmailer.php");

        $mail = new PHPMailer();

        if (!$mail->ValidateAddress($email)) {
            $error_message[] = "You must specify a valid email address.";
        }

        if(!isset($error_message)) {
            $email_body = "";
            $email_body = $email_body . '<img src="http://localhost:8888/ShirtStore/img/logo-paypal.png">';
            $email_body = $email_body . "<h1>Customer Contact</h1>";
            $email_body = $email_body . "<strong>Name:</strong> " . $name . "<br>";
            $email_body = $email_body . "<strong>Email:</strong> " . $email . "<br>";
            $email_body = $email_body . "<strong>Message:</strong> <p>" . $message . "</p><br>";
            $email_body = $email_body . "<strong>Reason:</strong> " . $reason;
            // Set from email
            $mail->setFrom($email, $name);
            // address of recipient
            $address = "orders@shirts4mike.com";
            //Set who the message is to be sent to
            $mail->addAddress($address, "Shirts 4 Mike");
            //Set the subject line
            $mail->Subject = "Shirts 4 Mike Contact Form Submission | " . $name;
            $mail->MsgHTML($email_body);

            //send the message, check for errors
            if ($mail->send()) {
                header("Location: " . BASE_URL . "contact/?status=thanks");
                exit;
            } else {
                $error_message[] = "There was a problem sending the email: " . $mail->ErrorInfo;
            }
        }
    }

    $pageTitle = "Contact Mike";
    $section = "contact";
    include(ROOT_PATH . "includes/header.php");
?>
    <div class="section page">
        <div class="wrapper">
            <h1>Contact</h1>
            <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks"){ ?>
                <p>Thanks for the email!  I'll be in touch shortly.</p>
            <?php } else { ?>
                <?php
                    if (!isset($error_message)){
                      echo "<p>I&rsquo;d love to hear from you! Complete the form to send me an email.</p>";
                    } else {
                        foreach($error_message as $error){
                            echo '<p class="message">' . $error . '</p>';
                        }
                    }
                ?>

                <form method="post" action="<?php echo BASE_URL; ?>contact/">
                    <table>
                        <tr>
                            <th>
                                <label for="name">Name</label>
                            </th>
                            <td>
                                <input type="text" name="name" id="name" value="<?php if(isset($name)) { echo htmlspecialchars($name); }?>">
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <label for="email">Email</label>
                            </th>
                            <td>
                                <input type="text" name="email" id="email" value="<?php if(isset($email)) { echo htmlspecialchars($email); }?>">
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <label for="reason">Reason For Inquiry</label>
                            </th>
                            <td>
                                <select name="reason" id="reason">
                                        <?php if (isset($reason)) { ?>
                                            <option value="<?php echo $reason; ?>"><?php echo displayReason($reason); ?></option>
                                        <?php } else { ?>
                                            <option value="general">General Question</option>
                                            <option value="sales">Sales Question</option>
                                            <option value="order">Special Order</option>
                                            <option value="support">Technical Support</option>
                                        <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <label for="message">Message</label>
                            </th>
                            <td>
                                <textarea name="message" id="message"><?php if(isset($message)) { echo htmlspecialchars($message); }?></textarea>
                            </td>
                        </tr>

                        <tr style="display: none;">
                        <th>
                            <label for="address">Address</label>
                        </th>
                        <td>
                            <input type="text" name="address" id="address">
                            <p>Humans (and frogs): please leave this field blank</p>
                        </td>
                        </tr>
                    </table>

                    <input type="submit" value="Send">

                </form>
            <?php } ?>
         </div>
     </div>

<?php function displayReason($value) {

    if ($value == "general"){
        return "General Question";
    } elseif ($value == "sales") {
        return "Sales Question";
    } elseif ($value == "order") {
        return "Special Order";
    } elseif ($value == "support") {
        return "Technical Support";
    }

    return "";
}
?>

<?php include(ROOT_PATH . "includes/footer.php"); ?>