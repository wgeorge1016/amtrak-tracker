<?php
// Optional: only needed if your host/browser blocks the page from calling the API directly.
// Put this next to index.html on any PHP host.
header('Content-Type: application/json');
header('Cache-Control: no-store');

$train = preg_replace('/\D/', '', $_GET['train'] ?? '');
if ($train === '' || strlen($train) > 5) {
    http_response_code(400);
    echo json_encode(['error' => 'bad train number']);
    exit;
}

$ctx = stream_context_create(['http' => [
    'timeout' => 10,
    'header'  => "User-Agent: personal-amtrak-tracker\r\n",
]]);
$body = @file_get_contents("https://api-v3.amtraker.com/v3/trains/$train", false, $ctx);

if ($body === false) {
    http_response_code(502);
    echo json_encode(['error' => 'upstream unavailable']);
    exit;
}
echo $body;
