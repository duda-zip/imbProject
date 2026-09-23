<?php
/*
|--------------------------------------------------------------------------
| IMB Educação - Página não encontrada (404)
|--------------------------------------------------------------------------
| Configurada no .htaccess via ErrorDocument. Pode ser acionada a partir
| de QUALQUER URL, inclusive subpastas inexistentes — por isso todos os
| caminhos de CSS, imagens e links precisam ser ABSOLUTOS ($base).
| Com caminhos relativos, a página abriria sem estilo em URLs profundas.
|
| O header 404 é obrigatório: sem ele o servidor responde "200 OK" e
| buscadores passam a indexar páginas de erro como se fossem conteúdo.
| (Esse problema tem até nome: soft 404.)
|--------------------------------------------------------------------------
*/

http_response_code(404);

// Ajuste aqui se mudar o nome da pasta ou publicar na raiz do domínio.
$base = '/IMB-Educacao-PHP/';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<?php
    $base      = '/IMB-Educacao-PHP/';
    $pageTitle = 'Página não encontrada';
    $pageDesc  = 'A página que você procura não foi encontrada.';
    $noIndex   = true;
    include __DIR__ . '/inc/head.php';
?>
    <link rel="stylesheet" href="<?= $base ?>css/base.css?v=2">
    <link rel="stylesheet" href="<?= $base ?>css/erro.css?v=2">
</head>
<body class="error-body">

<header class="error-topbar">
    <div class="container">
        <a href="<?= $base ?>index.php" class="logo" aria-label="IMB Educação">
            <img src="<?= $base ?>assets/logo-imb.png" alt="Logo IMB Educação" class="logo-mark">
            <span class="logo-text">Educação</span>
        </a>
    </div>
</header>

<main id="conteudo" class="error-main">
    <div class="container error-content">

        <span class="error-code" aria-hidden="true">404</span>

        <h1>Não encontramos esta página</h1>
        <p class="error-text">
            O endereço pode ter mudado, o conteúdo pode ter sido removido ou houve um erro de digitação.
            Use os atalhos abaixo para continuar navegando.
        </p>

        <div class="error-actions">
            <a href="<?= $base ?>index.php" class="btn btn-primary btn-large">Voltar ao início</a>
            <a href="<?= $base ?>contato.php" class="btn btn-outline btn-large">Falar com a equipe</a>
        </div>

        <div class="error-links">
            <h2>Talvez você procure por</h2>
            <div class="error-links-grid">
                <a href="<?= $base ?>index.php#cursos" class="error-link-card">
                    <strong>Cursos</strong>
                    <span>Formações em Radiologia e áreas da saúde</span>
                </a>
                <a href="<?= $base ?>index.php#blog" class="error-link-card">
                    <strong>Blog</strong>
                    <span>Artigos e conteúdos dos professores</span>
                </a>
                <a href="<?= $base ?>login.php" class="error-link-card">
                    <strong>Área do aluno</strong>
                    <span>Acesse seus cursos e certificados</span>
                </a>
                <a href="<?= $base ?>index.php#sobre" class="error-link-card">
                    <strong>Sobre nós</strong>
                    <span>Conheça a IMB Educação</span>
                </a>
            </div>
        </div>

    </div>
</main>

<footer class="error-footer">
    <div class="container">
        <span>© <?= date('Y') ?> IMB Educação. Todos os direitos reservados.</span>
    </div>
</footer>

</body>
</html>