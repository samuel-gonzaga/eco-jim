<?php

if (isLoggedIn()) {
    $linkHref = 'logout';
    $linkText = 'usuarios';
} else {
    $linkHref = 'login';
    $linkText = 'administradores';
}

?>

<link rel="stylesheet" href="/eco-jim/app/views/css/footer.css">
<footer>
    <p>© 2025 Acesso para <a href="<?= $linkHref; ?>"><?= $linkText; ?></a></p>
</footer>
