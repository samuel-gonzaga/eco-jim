<?php
$currentRoute = basename($_SERVER['REQUEST_URI']);

if ($currentRoute === 'about') {
    $linkHref = 'home';
    $linkText = 'Home';
} else {
    $linkHref = 'about';
    $linkText = 'About';
}

?>

<link rel="stylesheet" href="/eco-jim/app/views/css/header.css">
<header>
<nav class="navbar">
    <div class="container">
        <h1 class="logo">Eco JIM</h1>
        <ul class="nav-links">
            <li><a href="<?= $linkHref; ?>"><?= $linkText; ?></a></li>
<!--            <li><a href="logout">Sair</a></li>-->

        </ul>
    </div>
</nav>
</header>