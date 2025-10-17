<?

// set json response header
header("Content-Type: application/json");

// redirect to me endpoint
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($request_uri !== '/me') {
    header("Location: /me", true, 301);
    exit;
}

$url = "https://catfact.ninja/fact";


// init curl
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
// receive response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

// handle error
if (!$response) {
    http_response_code(500);
    echo json_encode([
        "status" => "error",
        "message" => curl_error($ch)
    ]);
    exit;
} else {
    // decode data
    $factData = json_decode($response, true);

}

curl_close($ch);


$response_body = [
    "status" => "success",
    "user" => [
        "email" => "wathika02@gmail.com",
        "name" => "Joseph Wathika",
        "stack" => "PHP"
    ],
    "timestamp" => gmdate("c"),
    "fact" => $factData["fact"] ?? "No fact found"
];

echo (json_encode($response_body, JSON_PRETTY_PRINT));