
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $ip = $_SERVER['REMOTE_ADDR'];
    $log = "[" . date("Y-m-d H:i:s") . "] Nome: $username | IP: $ip\n";
    file_put_contents("logs.txt", $log, FILE_APPEND);
}
header("Location: obrigado.html");
exit();
?>
