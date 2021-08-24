<?php

//Allow the config
define('_CONFIG_',true);
//Require_the_config
require_once "inc/config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf.8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="robots" content="follow">

    <title>Page Title</title>
    <base href="/" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/css/uikit.min.css" />
</head>
<body>

<div class="uk-section uk-container">
<?php
echo "FX Type 0.8";
echo '<br/>';
echo "Hi Arsham, I have setted up everything you told me on : ";
echo date("Y/m/d");
?>

<p>
    <a href="/MyLogin/Login.php">Login </a> <br/>
    <a href="/MyLogin/Register.php">Register </a>
</p>
</div>

<?php require_once "inc/footer.php"; ?>
</body>
</html>
