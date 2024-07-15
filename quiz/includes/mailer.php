<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
// in your terminal: crontab -e
// 0 0 1 * * php /path/to/mailer.php

include "db.php";

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../vendor/autoload.php';


// Check if today is the first day of the month
if (date('j') === '1') {
    // Execute the monthly task here
    $allEmails = callEmails($dbConnection);
    // print_r($allEmails);
    foreach($allEmails as $key => $row){
        if ($row['email']){
            $name = $row['user_name'];
            $email = $row['email'];
            $message = "TEST";
            sendEmail($name, $email, $message);
        } else {
        }
    }
} else {
    echo "Today is not the first day of the month.";

}

function sendEmail($name, $email, $message){
    //Create a new PHPMailer instance
    $mail = new PHPMailer();

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    $mail->SMTPDebug = 0; // SMTP::DEBUG_SERVER;

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    //Use `$mail->Host = gethostbyname('smtp.gmail.com');`
    //if your network does not support SMTP over IPv6,
    //though this may cause issues with TLS

    //Set the SMTP port number:
    // - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
    // - 587 for SMTP+STARTTLS
    $mail->Port = 587;

    //Set the encryption mechanism to use:
    // - SMTPS (implicit TLS on port 465) or
    // - STARTTLS (explicit TLS on port 587)
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

    $mail->SMTPSecure = 'tls';

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'xusrew.z@gmail.com';

    //Password to use for SMTP authentication
    $pass = getenv('PASSWORD', true) ?: getenv('PASSWORD');
    // $mail->Password = getenv('PASSWORD');
    $mail->Password = 'dyuh dayw hcuz mmae';
    
    //Set who the message is to be sent from
    //Note that with gmail you can only use your account address (same as `Username`)
    //or predefined aliases that you have configured within your account.
    //Do not use user-submitted addresses in here
    $mail->setFrom('xusrew.z@gmail.com', 'ARI');

    //Set an alternative reply-to address
    //This is a good place to put user-submitted addresses
    //$mail->addReplyTo('replyto@example.com', 'First Last');

    //Set who the message is to be sent to
    $mail->addAddress($email);
    $mail->addReplyTo("$email", 'Information');


    // Fetch the content of the webpage ; first possibility
    $url = 'https://www.php.net/manual/en/function.getenv.php'; // Replace with the URL of your webpage
    $content = file_get_contents($url);

    $chartImage = 'path/to/chart.png'; // Path to the generated image; report charts generieren

    // Set the HTML content of the email to the webpage content
    $mail->isHTML(true);
    // $mail->MsgHTML(file_get_contents($url));

    //Set the subject line
    $mail->Subject = 'Newsletter From ARAM';
    $mail->Body = "
        Email: $email
        Dear $name 
        Sehr geehrte Damen und Herren
        Mein Ziel ist es mein Potential in einer sinnstiftenden Tätigkeit effektiv einzubringen und
        michweiterzuentwickeln. Ihre vakante Stelle spricht mich sehr an, weil ich in dieser meine IT-
        Kenntnisse in Kombination mit Beratungsleistungzur Geltung bringen kann. Wenn ein Web-
        Applikations-entwicklwer in ihr Team passt, dann bin ich die richtige Person für die Stelle.
        Bevor ich 2014 in die Schweiz kam, habe ich im Irak Informatik studiert. An der ETH und
        UniZürich habe ich meine Fachkenntnisse mit meinem Bachelor der Mathematik und
        Informatik abgeglichen und meine Informatikkenntnisse vertiefen können, z.B. in
        Programmiersprachen wie Python, PHP, JavaScript, SQL. u.a. An der ZHAW habe ich 2021-
        2022 als ICT-Support 1st-, 2nd-Levelgearbeitet. Dabei konnte ich viel Erfahrung sammeln. In
        einfachen Worten verfüge ich über solide Kenntnisse im Bereich Softwarentwicklung, um
        Design, Entwicklung und Deployment auszuführen. Momentan besuche ich einen Kurs für
        applikations-, web-Entwicklung bei der Stadt Zürich.

        Als verlässlicher und leistungsbereiter Mitarbeiter zeichne ich mich durch eine strukturierte
        Arbeitsweise aus und habe ich hohe Ansprüche an die Qualität meiner Arbeit. Ich
        beherrsche mehrere Sprachen stilsicher in Wort und Schrift, darunter Deutsch und Englisch.
        Neuem gegenüber sehr offen und interessiert, nehme ich die Herausforderungen mit Freude
        an und bin ich bestrebt die optimalen Lösungen zu finden. Nicht nur inhaltlich auch
        betreffend Arbeitszeiten und Arbeitsschichten bin zu 100% zeitlich flexibel.
        Bei meiner Neuorientierung werde ich unterstützt und habe ich die Möglichkeit mich via ein
        finanziertes dreimonatiges Praktikum einzuarbeiten und Sie von meiner Person zu
        überzeugen.
        Ich freue mich Ihr Interesse geweckt zu haben. Gerne gebe ich Ihnen in einem persönlichen
        Gespräch mehr von meiner Person preis. Ich werde gerne einige meiner Projekte euch
        präsentieren.

        Freundliche Grüsse
        Ismail Mostafanejad";
        //Message: Here is our NEWALETTER $content" . '<html><br><body><h1>Webpage with Visualization</h1><img src="' . $chartImage . '" alt="Chart"></body></html>';

    //Attach an image file
    //$mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if ($mail->send()) {
        $response = "Message sent to $email <br>";
    } else {
        // Handle the case where the script is accessed directly without a POST request
        $response = "Error: Oops! Something went wrong while sending email: $email";
        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }
    echo $response;
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}
?>