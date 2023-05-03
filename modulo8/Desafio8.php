<?php $form_complete = null; ?>
<h2>Contact</h2>

<form name="contact" method="POST">
    <div>
        <?php
        if ( isset( $_POST['name'] ) && empty( trim( $_POST['name'] ) ) ) {
            echo "<p class=\"alert\">Name is required</p>";
            $form_complete = false;
        }
        ?>
        <label for="name">Name:</label> <input type="text" name="name" placeholder="Your Name" required/>
    </div>
    <div>
        <?php
        if ( isset( $_POST['email'] ) && empty( trim( $_POST['email'] ) ) ) {
            echo "<p class=\"alert\">Email is required</p>";
            $form_complete = false;
        }
        ?>
        <label for="name">Email:</label> <input type="email" name="email" placeholder="Your Email" required/>
    </div>
    <div>
        <p>Reason for Contact:</p>
        <input type="radio" name="reason" id="consult" value="consult" /> <label for="consult">Consult</label>
        <input type="radio" name="reason" id="question" value="question" /> <label for="question">Question</label>
        <input type="radio" name="reason" id="hello" value="hello" /> <label for="hello">Say Hello</label>
    </div>
    <div>
        <?php
        if ( isset( $_POST['message'] ) && empty( trim( $_POST['message'] ) ) ) {
            echo "<p class=\"alert\">Message is required</p>";
            $form_complete = false;
        }
        ?>
        <label for="message">What's your message?</label>
        <textarea name="message" required></textarea>
    </div>
    <div><input type="submit" name="submit" value="Submit" /></div>
</form>

<style>
    .alert {
        color: red;
        font-weight: bold;
    }
</style>

<?php
$form_complete ?: true;
if ( $form_complete ) {
    $message = '';
    foreach( $_POST as $name => $value ) {
        if ( 'submit' != $name ) {
            if ( is_array( $value ) ) {
                $value = implode( ', ', $value );
            }
            $message .= ucfirst( $name ) ."is $value.\n\n";
        }
    }
    $to = "Pedro Sousa<pedro.sousa2904@gmail.com>";
    $subject = "Reason for contact: " . $_POST['reason'];
    $from = $_POST['name'] . '<' . $_POST['email']. '>';
    $headers = 'From: ' . $from . "\r\n" .
        'Reply-To: ' . $from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if(mail($to, $subject, $message, $headers)){
        echo "<h3>Your message has been sent</h3>";
    }
}

