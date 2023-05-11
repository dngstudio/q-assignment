<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
	
    $data = [
        'email' => $email,
        'password' => $password
    ];

    // Convert the data array to JSON
    $payload = json_encode($data);

    $url = "https://symfony-skeleton.q-tests.com/api/v2/token";

    // Initialize cURL
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($payload)
    ]);

    // Execute the POST request and close cURL session
    $response = curl_exec($curl);
    curl_close($curl);

    // Decode the JSON response
    $responseData = json_decode($response, true);

    // Check if the response contains the token key
    if (isset($responseData['token_key'])) {
        $tokenKey = $responseData['token_key'];

        $_SESSION['token_key'] = $tokenKey;

        // Set the expiration time
        $_SESSION['expiry_time'] = time() + (24 * 60 * 60); // 24 hrs
		sleep(1); // There's a very specific reason this is here 
        header("Location: index.php");
        exit();
    } else {
        echo "Login failed. Please try again.";
        echo '<a href="index.php">Go back</a>';
    }
}
?>
