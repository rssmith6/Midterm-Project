<?php
$dsn = "ygdlmxex3jvt9v67;dbname=zippyusedautos";
$username = 'tnu86ovjrc4uj06o';
$password = ' ig021061rrg2kc73';

try{
    $db = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
    $error_message = 'Database Error: ';
    $error_message .= $e->getMessage();
    include('view/error.php');
    exit();
}
?>
