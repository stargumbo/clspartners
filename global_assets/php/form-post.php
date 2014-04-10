<?php
$db = new PDO('mysql:host=localhost;dbname=bvkdev2_tkdev','bvkdev2_tkdev','tkdev12',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

$serialnum = $_POST['serialnum'];
$entry_email = $_POST['entry_email'];
$optin = $_POST['optin'];

$to = 'tkoscinski@bvk.com';
$subject = 'Serial entry ' . $serialnum;
$message = "<p>Serial Number: " . $serialnum . "</p>\r\n<p>Entry Email: " . $entry_email . "</p>\r\n<p>Opt in: " . $optin . "</p>";
$from = 'Boston Giveaway <noreply@randomactsoffunjet.com>';
$headers = 'From:' . $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
echo $message;
//mail($to, $subject, $message, $headers);

$subject_client = 'TNT Vacations Gives a Buck about Boston';
$message_client = "<html><body>";
$message_client .= "<h2>TNT Gives a Buck about Boston! (Actually We Give Two!)</h2>";
$message_client .= "<p>You found us on the streets of Boston this week, and entered your $2 bill serial number."; 
$message_client .= " Even though you weren't one of our vacation winners, we still wanted to make sure you walked away with a little special prize! That $2 bill was a little seed money for your next vacation, and now we've got an exclusive";
$message_client .= " promo code with up to $400 savings! It's our way of saying - It was great to meet you and thanks for entering!</p>";
$message_client .= "<p><strong>Save up to $400 with promo code ULTRABOS2!</strong></p>";
$message_client .= '<p><a href="http://www.funjet.com/Deals/Deal.aspx?deal=342&vendor=FJ1&promocode=ULTRABOS2&cmpid=EMC-TE1-Feb13">Go Now!</a></p>';
$message_client .= "<p><em>*Disclaimer: Promo code ULTRABOS2 is valid for travel 2/17/13-4/21/13 for any charter air/hotel vacations from Boston on Virgin America, minimum 7 night stay. Save up to $400 per reservation: save $175 on vacations $1000-$2499; save $300 on vacations $2500-$4999; save $400 on vacations $5000+. Must book by 2/28/13. Blackout dates apply: 4/13-4/14/13. Additional blackout dates may apply. Valid on new bookings only.</em></p>";
$message_client .= "</body></html>";

$query = $db->prepare('SELECT serial_id FROM contest_serials WHERE serial = :serialcheck');
$query->bindParam(':serialcheck', $serialnum);
$query->execute();

if ( $query->rowCount() > 0 ){ $winner = 1; };
if (!$winner){ mail($entry_email, $subject_client, $message_client, $headers); echo('exists:false'); } else { echo('exists:true'); };

$data = array(':serial' => $serialnum, ':entry' => $entry_email, ':optin' => $optin);  
$STH = $db->prepare('INSERT INTO contest_optin (serialnum, entry_email, optin, date) VALUES (:serial, :entry, :optin, NOW())');  
$STH->execute($data);  

?>
