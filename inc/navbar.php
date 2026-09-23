<?php
/*
|--------------------------------------------------------------------------
| Navbar (parcial compartilhada)
|--------------------------------------------------------------------------
| Antes de dar include('inc/navbar.php'), defina:
|   $isHome      = true|false;   // true só na index.php
|   $currentPage = 'contato.php' // opcional: destaca o link da página atual
|
| Cada link tem um 'type':
|   'anchor' -> seção da home. Fora da home, prefixa index.php antes do #.
|   'page'   -> arquivo próprio. Usa o href como está.
|--------------------------------------------------------------------------
*/

$isHome      = $isHome ?? false;
$currentPage = $currentPage ?? '';

$navLinks = [
    ['label' => 'Início',  'href' => 'inicio',      'type' => 'anchor'],
    ['label' => 'Sobre',   'href' => 'sobre',       'type' => 'anchor'],
    ['label' => 'Cursos',  'href' => 'cursos',      'type' => 'anchor'],
    ['label' => 'Blog',    'href' => 'blog',        'type' => 'anchor'],
    ['label' => 'Contato', 'href' => 'contato.php', 'type' => 'page'],
];

if (!function_exists('imb_nav_href')) {
    function imb_nav_href(array $link, bool $isHome): string
    {
        if (($link['type'] ?? 'anchor') === 'page') {
            return $link['href'];
        }
        return ($isHome ? '' : 'index.php') . '#' . $link['href'];
    }
}

if (!function_exists('imb_nav_active')) {
    function imb_nav_active(array $link, string $currentPage): string
    {
        return (($link['type'] ?? 'anchor') === 'page' && $link['href'] === $currentPage)
            ? ' class="nav-active"'
            : '';
    }
}
?>
<a href="#conteudo" class="skip-link">Pular para o conteúdo</a></header>
<header class="navbar" id="navbar">
    <nav class="nav-container">
        <a href="<?= $isHome ? '#inicio' : 'index.php#inicio' ?>" class="logo" aria-label="IMB Educação">
            <img src="assets/logo-imb.png" alt="Logo IMB Educação" class="logo-mark">
            <span class="logo-text">Educação</span>
        </a>

        <div class="desktop-nav">
            <?php foreach ($navLinks as $link): ?>
                <a href="<?= imb_nav_href($link, $isHome) ?>"<?= imb_nav_active($link, $currentPage) ?>><?= htmlspecialchars($link['label']) ?></a>
            <?php endforeach; ?>
        </div>

        <div class="nav-actions desktop-nav">
            <a href="login.php" class="btn btn-ghost">Entrar</a>
            <a href="cadastro.php" class="btn btn-primary">Cadastrar-se</a>
        </div>

                <button class="menu-button" id="menuButton" aria-label="Abrir menu"
                aria-expanded="false" aria-controls="mobileMenu">
            <span aria-hidden="true">☰</span>
        </button>
    </nav>

    <nav class="mobile-menu" id="mobileMenu" aria-label="Menu principal">        <?php foreach ($navLinks as $link): ?>
            <a href="<?= imb_nav_href($link, $isHome) ?>"<?= imb_nav_active($link, $currentPage) ?>><?= htmlspecialchars($link['label']) ?></a>
        <?php endforeach; ?>
        <div class="mobile-actions">
            <a href="login.php" class="btn btn-outline">Entrar</a>
            <a href="cadastro.php" class="btn btn-primary">Cadastrar-se</a>
        </div>
    </nav>  
</header>