<!DOCTYPE HTML>
<html>
	<head>
		<title>
			My recordings
		</title>
		<body>
			<h1>My recordings</h1>
		<?php
    // Include the PHP TwilioRest library 
	include 'Services/Twilio.php';
    
    // Twilio REST API version 
    $ApiVersion = "2010-04-01";
    
    // Set our AccountSid and AuthToken 
	$accountSid = 'ACbb18f5e402345bfcbf91cdba0e7f6767';
	$authToken  = 'b6e32ac1367c35cbd8ae94c4d61bfb60';

	// @start snippet
    // Instantiate a new Twilio Rest Client 
	$client = new Services_Twilio($accountSid, $authToken);
	echo ("<table>");
	foreach($client->account->recordings as $recording) {
  		echo "<tr><td>{$recording->duration} seconds</td> ";
  		echo "<td><audio src=\"https://api.twilio.com/2010-04-01/Accounts/$accountSid/Recordings/{$recording->sid}.mp3\" controls preload=\"auto\" autobuffer></audio></td>";
  		echo "<td>{$recording->date_created}</td>";
  		echo "<td>{$recording->sid}</td></tr>";
	}
	echo ("<table>");
	// @end snippet
    ?>
	</body>
</html>