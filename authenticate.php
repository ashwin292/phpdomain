<?php
$username = null;
$password = null;

// DEFINE our cipher
define('AES_256_CBC', 'aes-256-cbc');

// Generate a 256-bit encryption key
$encryption_key = openssl_random_pseudo_bytes(32);

// Generate an initialization vector
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(AES_256_CBC));

// Encrypt the data
$data = "password";

// Encrypt $data using aes-256-cbc cipher with the given encryption key and
// our initialization vector.
$encrypted = openssl_encrypt($data, AES_256_CBC, $encryption_key, 0, $iv);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $encrypt_pass = openssl_encrypt($password, AES_256_CBC, $encryption_key, 0, $iv);
        if($username == 'admin' && $encrypt_pass == $encrypted) {
            header('Location: currentusers.php');
        }
        else {
            header('Location: authenticate.php');
        }
        
    } else {
        header('Location: authenticate.php');
    }
} else {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <div>
            <header>
                <a href="index.php">Home</a>
                <h1>Login to view List of current users</h1>        
            </header>
            <section>
                <form id="login" method="post">
                    <label for="username">Username:</label>
                    <input id="username" name="username" type="text" required>
                    <label for="password">Password:</label>
                    <input id="password" name="password" type="password" required>                    
                    <br />
                    <input type="submit" value="Login">
                </form>
            </section>
        </div>
    </body>
</html>
<?php } ?>