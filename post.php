<?php
/*
|--------------------------------------------------------------------------
| IMB Educação - Detalhe do post do blog
|--------------------------------------------------------------------------
| Acesse como: post.php?slug=como-iniciar-na-radiologia
| Os dados vêm de inc/posts.php (mesmo array usado na prévia da Home).
|--------------------------------------------------------------------------
*/

$isHome = false;

require __DIR__ . '/inc/posts.php';

$slug = $_GET['slug'] ?? '';
$post = null;

foreach ($posts as $item) {
    if ($item['slug'] === $slug) {
        $post = $item;
        break;
    }
}

// Slug inválido ou inexistente: volta pro blog na Home.
if (! $post) {
    header('Location: index.php#blog');
    exit;
}

// Posts relacionados: os outros, excluindo o atual (máximo 3).
$relacionados = array_values(array_filter($posts, fn ($item) => $item['slug'] !== $post['slug']));
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<?php
    $pageTitle = $post['title'];
    $pageDesc  = mb_substr($post['excerpt'], 0, 160);
    $pageImage = $post['image'] ?? 'assets/og-default.jpg';
    $ogType    = 'article';
    include 'inc/head.php';
?>
    <link rel="stylesheet" href="css/base.css?v=2">
    <link rel="stylesheet" href="css/post.css?v=2">
</head>
<body>

<?php include __DIR__ . '/inc/navbar.php'; ?>

<main>
<section class="post-hero">
    <div class="container">
        <p class="breadcrumb">
            <a href="index.php#inicio">Início</a> /
            <a href="index.php#blog">Blog</a> /
            <?= htmlspecialchars($post['title']) ?>
        </p>

        <div class="post-meta-top reveal">
            <span><?= htmlspecialchars($post['category']) ?></span>
            <span>· <?= htmlspecialchars($post['date']) ?></span>
        </div>

        <h1 class="reveal"><?= htmlspecialchars($post['title']) ?></h1>

        <div class="post-cover reveal">
            <img src="assets/<?= htmlspecialchars($post['image']) ?>" alt="<?= htmlspecialchars($post['title']) ?>">
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <article class="post-article">
            <?php foreach ($post['body'] as $paragrafo): ?>
                <p class="reveal"><?= htmlspecialchars($paragrafo) ?></p>
            <?php endforeach; ?>
        </article>

        <div class="post-cta reveal">
            <h3>Gostou do conteúdo?</h3>
            <p>Cadastre-se para acompanhar novos artigos e conhecer os cursos da IMB Educação.</p>
            <a href="cadastro.php" class="btn btn-primary">Criar conta gratuita</a>
        </div>

        <?php if (! empty($relacionados)): ?>
            <div class="section-heading related-heading reveal">
                <span class="section-eyebrow">Continue lendo</span>
                <h2>Outros artigos</h2>
            </div>

            <div class="related-grid">
                <?php foreach ($relacionados as $item): ?>
                    <a href="post.php?slug=<?= urlencode($item['slug']) ?>" class="related-card reveal">
                        <img src="assets/<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['title']) ?>">
                        <div class="related-card-body">
                            <span><?= htmlspecialchars($item['category']) ?> · <?= htmlspecialchars($item['date']) ?></span>
                            <h3><?= htmlspecialchars($item['title']) ?></h3>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
</main>

<?php include __DIR__ . '/inc/footer.php'; ?>
</body>
</html>
