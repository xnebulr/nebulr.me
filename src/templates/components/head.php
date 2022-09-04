<?php $url = 'https://' . $_SERVER['SERVER_NAME'] ?>

<?php
$hashCss = $env->getAssetHashCss();
$hashJs = $env->getAssetHashJs();
$hashRes = $env->getAssetHashRes();
?>

<title><?= $main->getPageTitle($directory, $locale) ?></title>
<meta name='description' content='<?= $locale['DESCRIPTION'] ?>'>
<meta name='og:title' property='og:title' content='<?= $locale['TITLE_LONG'] . ' - ' . $locale['TITLE']?>'>
<meta name='og:description' property='og:description' content='<?= $locale['DESCRIPTION'] ?>'>
<link rel='canonical' href='<?= $url ?>'>

<!-- Basic -->
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no'>
<link href='/assets/css/style.min.css<?= $hashCss ?>' type='text/css' rel='stylesheet'/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

<!-- Fontawesome -->
<script src="https://kit.fontawesome.com/8119fd0658.js" crossorigin="anonymous"></script>

<!-- Analytics -->
<noscript>
<img src="https://sn.nblr.cc/ingress/92bb565b-ec53-4b55-80a6-14bc28ca7bc9/pixel.gif">
</noscript>
<script defer src="https://sn.nblr.cc/ingress/92bb565b-ec53-4b55-80a6-14bc28ca7bc9/script.js"></script>

<!-- Favicon -->
<link rel='apple-touch-icon' sizes='180x180' href='/assets/img/favicon/apple-touch-icon.png<?= $hashRes ?>'>
<link rel='icon' type='image/png' sizes='32x32' href='/assets/img/favicon/favicon-32x32.png<?= $hashRes ?>'>
<link rel='icon' type='image/png' sizes='16x16' href='/assets/img/favicon/favicon-16x16.png<?= $hashRes ?>'>
<link rel='manifest' href='/assets/img/favicon/site.webmanifest<?= $hashRes ?>'>
<link rel='mask-icon' href='/assets/img/favicon/safari-pinned-tab.svg<?= $hashRes ?>' color='#202225'>
<link rel='shortcut icon' href='/assets/img/favicon/favicon.ico<?= $hashRes ?>'>
<meta name='msapplication-TileColor' content='#202225'>
<meta name='msapplication-config' content='/assets/img/favicon/browserconfig.xml'>
<meta name='theme-color' content='#202225'>