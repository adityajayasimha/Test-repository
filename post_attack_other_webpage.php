<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8"/>
<title>7 Wonders</title>
</head>
<body>
<h1><centre>7 Wonders of the World</centre></h1>
<h4>
7 Wonders of the World are:
<ol>
<li>Taj Mahal - India</li>
<li>Colosseum - Italy</li>
<li>Great Wall - China</li>
<li>Petra - Jordan</li>
<li>Chinese Itza - Mexico</li>
<li>Macchhu Picchu - Peru</li>
<li>Christ Redeemer - Brazil</li>
</ol>
<form method='post' action='handle_payments.php'>
<input type='hidden' name='acc_no' value='1234'/>
<input type='hidden' name='amount' value='200.00'/>
<input type='hidden' name='sessionID' value='<?php echo session_id(); ?>'/>
<input type='submit' value='Click here to know more!'/>
</form>
</h4>
</body>
</html>