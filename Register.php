<?php
define('_CONFIG_',true);
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
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
        <form class="uk-form-stacked js-register">
            <fieldset class="uk-fieldset">

                <legend class="uk-legend">F-X-Type0.8</legend>

                <h3>Register</h3>
                <div class="uk-margin">
                    <input class="uk-input" type="email" required="required" placeholder="Email">
                </div>

                <div class="uk-margin">
                    <input class="uk-input" type="password" required="required" placeholder="Password">
                </div>

                <!--  <div class="uk-margin">
                    <select class="uk-select">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>  -->

                <div class="uk-margin">
                    <button class="uk-button uk-button-default" type="submit">Register</button>
                </div>

            </fieldset>
        </form>
    </div>
</div>
</body>
</html>
