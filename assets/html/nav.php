<?php
$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>

<nav>
    <ul>
        <li><img class='nav-logo' src='/assets/img/brand/logo.webp'/></li>
        <li><a <?php if ($url == "https://nebulr.me/" || $url == "https://nebulr.localhost/" || $url == "https://nebulr.localhost/index.php") {echo "class='active'";}?>href='/'>Home</a></li>
        <li><a <?php if (strpos($url,'/pages/projects.php') !== false) {echo "class='active'";}?> href='/pages/projects.php'>Projects</a></li>
        <li><a <?php if (strpos($url,'/pages/youtube.php') !== false) {echo "class='active'";}?> href='/pages/youtube.php'>Youtube</a></li>
    </ul>
</nav>