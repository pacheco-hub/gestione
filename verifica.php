<?php
$recaptcha_secret = "6Lf0HfMqAAAAADEd6OJDK0QdUaNnQsKO6-RuqKhJ"; // Sostituisci con la tua Secret Key
$recaptcha_response = $_POST['recaptcha_response'];

$url = "https://www.google.com/recaptcha/api/siteverify";
$data = [
    'secret' => $recaptcha_secret,
    'response' => $recaptcha_response
];

$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    ]
];
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$response_data = json_decode($result, true);

if ($response_data["success"] && $response_data["score"] > 0.5) {
    echo "Utente verificato - Score: " . $response_data["score"];
} else {
    echo "Possibile bot - Score: " . $response_data["score"];
}
?>
