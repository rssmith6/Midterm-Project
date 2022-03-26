<?php
$dsn = 'mysql:dbname=zippyusedautos;host=kfgk8u2ogtoylkq9.cbetxkdyhwsb.us-east-1.rds.amazonaws.com':
$username = 'tnu86ovjrc4uj06o';
$password = ' ig021061rrg2kc73';

try{
    $db = new PDO($servername, $username, $password);
} catch(PDOException $e) {
    $error_message = 'Database Error: ';
    $error_message .= $e->getMessage();
    include('view/error.php');
    exit();
}
?>
