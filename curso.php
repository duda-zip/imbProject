<?php
/*
|--------------------------------------------------------------------------
| IMB Educação - Detalhe do curso
|--------------------------------------------------------------------------
| Acesse como: curso.php?slug=radiologia
| Os dados vêm de inc/courses.php (mesmo array usado na Home), então
| editar um curso lá atualiza os dois lugares automaticamente.
|--------------------------------------------------------------------------
*/

$isHome = false;

require __DIR__ . '/inc/courses.php';

$slug = $_GET['slug'] ?? '';
$curso = null;

foreach ($courses as $item) {
    if ($item['slug'] === $slug) {
        $curso = $item;
        break;
    }
}

// Slug inválido ou inexistente: volta pra lista de cursos na Home.
if (!$curso) {
    header('Location: 404.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<?php
    $pageTitle = $curso['title'];
    $pageDesc  = mb_substr($curso['description'], 0, 160);
    $pageImage = $curso['image'] ?? 'assets/og-default.jpg';
    include 'inc/head.php';
?>
    <link rel="stylesheet" href="css/base.css?v=2">
    <link rel="stylesheet" href="css/curso.css?v=2">
</head>
<body>

<?php include __DIR__ . '/inc/navbar.php'; ?>

<main>
<section class="course-hero">
    <div class="container">
        <p class="breadcrumb">
            <a href="index.php#inicio">Início</a> /
            <a href="index.php#cursos">Cursos</a> /
            <?= htmlspecialchars($curso['title']) ?>
        </p>

        <div class="course-hero-head">
            <div class="course-hero-info reveal">
                <span class="status <?= $curso['status'] === 'Disponível' ? 'available' : '' ?>"><?= htmlspecialchars($curso['status']) ?></span>
                <h1><?= htmlspecialchars($curso['title']) ?></h1>
                <p><?= htmlspecialchars($curso['description']) ?></p>

                <div class="course-hero-meta">
                    <span>▦ <?= htmlspecialchars($curso['modules']) ?></span>
                    <span>🎓 Certificado digital ao concluir</span>
                </div>

                <div class="course-hero-actions">
                    <?php if ($curso['status'] === 'Disponível'): ?>
                        <a href="cadastro.php" class="btn btn-primary btn-large">Quero me matricular <span>→</span></a>
                    <?php else: ?>
                        <a href="cadastro.php" class="btn btn-outline btn-large">Quero ser avisado quando abrir</a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="course-hero-image reveal">
                <img src="assets/<?= htmlspecialchars($curso['image']) ?>" alt="<?= htmlspecialchars($curso['title']) ?>">
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php if (! empty($curso['modules_list'])): ?>
            <div class="section-heading-left reveal">
                <span class="section-eyebrow">Grade curricular</span>
                <h2>O que você vai aprender</h2>
                <p>Provisório — a grade final será revisada antes do lançamento.</p>
            </div>

            <ul class="module-list">
                <?php foreach ($curso['modules_list'] as $index => $modulo): ?>
                    <li class="reveal">
                        <span class="module-number"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span>
                        <h3><?= htmlspecialchars($modulo) ?></h3>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <div class="course-empty reveal">
                <h3>Esse curso ainda está em produção</h3>
                <p>Estamos preparando o conteúdo com carinho. Cadastre-se para ser avisado assim que o curso de <?= htmlspecialchars($curso['title']) ?> estiver disponível.</p>
                <a href="cadastro.php" class="btn btn-primary">Quero ser avisado</a>
            </div>
        <?php endif; ?>
    </div>
</section>
</main>

<?php include __DIR__ . '/inc/footer.php'; ?>
</body>
</html>
