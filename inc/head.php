<?php
/*
|--------------------------------------------------------------------------
| <head> compartilhado
|--------------------------------------------------------------------------
| Antes de dar include('inc/head.php'), defina o que quiser mudar:
|
|   $pageTitle = 'Contato';                 // vira "Contato — IMB Educação"
|   $pageDesc  = 'Fale com a equipe...';    // descrição da página
|   $pageImage = 'assets/og-curso.jpg';     // imagem de compartilhamento
|   $noIndex   = true;                      // pede aos buscadores que ignorem
|   $base      = '/IMB-Educacao-PHP/';      // só na 404.php
|
| Todas são opcionais — sem elas, os valores padrão abaixo são usados.
|
| A imagem de Open Graph PRECISA de URL absoluta (http://...). Redes
| sociais não conseguem resolver caminho relativo, então montamos a
| URL completa a partir do host da requisição.
|--------------------------------------------------------------------------
*/

$siteName  = 'IMB Educação';
$base      = $base      ?? '';
$pageTitle = $pageTitle ?? null;
$pageDesc  = $pageDesc  ?? 'Plataforma brasileira de ensino em saúde. Cursos online de Radiologia com certificado digital.';
$pageImage = $pageImage ?? 'assets/og-default.jpg';
$noIndex   = $noIndex   ?? false;
$ogType    = $ogType    ?? 'website';

// Título: "Página — IMB Educação" ou só o nome do site na home
$fullTitle = $pageTitle ? "$pageTitle — $siteName" : "$siteName — Cursos online de Radiologia e saúde";

// Monta http://host/... a partir da requisição atual
$scheme  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host    = $_SERVER['HTTP_HOST'] ?? 'localhost';
$rootUrl = $scheme . '://' . $host . ($base !== '' ? $base : '/IMB-Educacao-PHP/');

$ogImage = $rootUrl . ltrim($pageImage, '/');
$ogUrl   = $scheme . '://' . $host . ($_SERVER['REQUEST_URI'] ?? '');
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= htmlspecialchars($fullTitle) ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
<?php if ($noIndex): ?>
<meta name="robots" content="noindex, nofollow">
<?php endif; ?>

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="32x32" href="<?= $base ?>assets/favicon-32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= $base ?>assets/favicon-16.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?= $base ?>assets/apple-touch-icon.png">
<meta name="theme-color" content="#0E1B45">

<!-- Open Graph (WhatsApp, Facebook, LinkedIn) -->
<meta property="og:type" content="<?= htmlspecialchars($ogType) ?>">
<meta property="og:site_name" content="<?= htmlspecialchars($siteName) ?>">
<meta property="og:title" content="<?= htmlspecialchars($fullTitle) ?>">
<meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
<meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>">
<meta property="og:url" content="<?= htmlspecialchars($ogUrl) ?>">
<meta property="og:locale" content="pt_BR">

<!-- Twitter/X -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($fullTitle) ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>">
<meta name="twitter:image" content="<?= htmlspecialchars($ogImage) ?>">