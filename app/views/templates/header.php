<?php
$currentRoute = basename($_SERVER['REQUEST_URI']);

// Não depende de usuário logado
if ($currentRoute === 'about') {
    $linkHref = 'home';
    $linkText = 'Home';
} else {
    $linkHref = 'about';
    $linkText = 'About';
}

// Depende de usuário logado
if (isLoggedIn()) {
    $linkHrefDashBoard = 'dashboard';
    $linkTextDashBoard = 'Dashboard';
    $key = true;
    if ($currentRoute === 'dashboard') {
        $linkHrefDashBoard = 'home';
        $linkTextDashBoard = 'Home';
    }
} else {
    $key = false;
    $linkHref2 = '';
    $linkText2 = '';
}
?>

<link rel="stylesheet" href="/eco-jim/app/views/css/header.css">
<header>
    <nav class="navbar">
        <div class="container">
            <h1 class="logo">Eco JIM</h1>
            <ul class="nav-links">
                <?php if ($key): ?>
                    <li><a href="<?= $linkHrefDashBoard; ?>"><?= $linkTextDashBoard; ?></a></li>
                <?php endif; ?>
                <li><a href="<?= $linkHref; ?>"><?= $linkText; ?></a></li>
                <?php if ($key): ?>
                    <li><a href="logout">Sair</a></li>
                <?php endif; ?>

            </ul>
        </div>
    </nav>
</header>
