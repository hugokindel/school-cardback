<?php
require_once "core/config.php";
require_once "core/utility.php";
require_once "core/account.php";

// Définis la timezone par défaut
date_default_timezone_set("Europe/Paris");

// On démarre la session
session_start();

// Charge la base de donnée
$db = mysqli_connect("35.205.34.35", "root", "@!hk-fpv-io2-2019!@", "cardback");

if (!$db) {
    echo mysqli_connect_error();
}

//echo createAccount("kindelhugo.per@gmail.com", "Root123@", "Hugo", "Kindel")[1]."<br>";
//echo removeAccount($_SESSION["accountId"], $_SESSION["accountPassword"])[1]."<br>";
//echo connectAccount("kindelhugo.per@gmail.com", "root")[1]."<br>";
//disconnectAccount();

// Défini la page à charger
$link = isset($_GET["link"]) ? "page/".$_GET['link'] : "page/welcome";

if (!file_exists($link.".php")) {
    $link = "page/404";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Titre de la page -->
    <title>cardback</title>

    <!-- Informations générales -->
    <meta charset="utf-8">

    <!-- Favicon -->
    <meta name="theme-color" content="#FFFFFF">
    <link rel="icon" type="image/png" sizes="32x32" href="/res/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/res/favicon/favicon-16x16.png">

    <!-- Feuille de style -->
    <link rel="stylesheet" href="/res/style/utility/normalize.css">
    <link rel="stylesheet" href="/res/style/base.css">
    <link rel="stylesheet" href="/res/style/sf-pro-rounded.css">
    <link rel="stylesheet" href="/res/style/component.css">
    <?php
    // Indique le lien vers le CSS de la page voulu
    if (file_exists("res/style/".$link.".css")) {
        echo '<link rel="stylesheet" href="/res/style/'.$link.'.css">';
    }
    ?>
</head>
<body>
<?php
// Charge la page voulu
require $link.".php";
?>

<script src="/res/script/component.js"></script>

</body>
</html>
<?php
// Ferme la connexion à la base de donnée
mysqli_close($db);
?>