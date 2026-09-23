<?php
/*
|--------------------------------------------------------------------------
| Rodapé (parcial compartilhada)
|--------------------------------------------------------------------------
| Depende de $isHome, $navLinks e da função imb_nav_href(), todos
| definidos em inc/navbar.php — sempre dê include no navbar antes.
|
| Este arquivo também carrega o script.js. Não repita a tag <script>
| nas páginas, senão os listeners são registrados duas vezes.
|--------------------------------------------------------------------------
*/

$isHome    = $isHome ?? false;
$navLinks  = $navLinks ?? [];
$homeHref  = $isHome ? '#inicio' : 'index.php#inicio';
?>
<footer class="footer">
    <div class="container footer-grid">

        <div>
            <a href="<?= $homeHref ?>" class="logo footer-logo">
                <img src="assets/logo-imb.png" alt="Logo IMB Educação" class="logo-mark">
                <span class="logo-text">Educação</span>
            </a>
            <p>A IMB Educação é uma plataforma brasileira de ensino em saúde. Formamos profissionais com conteúdo organizado, moderno e acessível — começando pela Radiologia.</p>
            <div class="socials">
                <a href="#" aria-label="Instagram da IMB Educação">Instagram</a>
                <a href="#" aria-label="LinkedIn da IMB Educação">LinkedIn</a>
            </div>
        </div>

        <div>
            <h3>Links rápidos</h3>
            <?php foreach ($navLinks as $link): ?>
                <a href="<?= imb_nav_href($link, $isHome) ?>"><?= htmlspecialchars($link['label']) ?></a>
            <?php endforeach; ?>
        </div>

        <div>
            <h3>Plataforma</h3>
            <a href="login.php">Área do aluno</a>
            <a href="cadastro.php">Criar conta</a>
            <a href="contato.php">Suporte</a>
            <a href="contato.php">Termos de uso</a>
        </div>

        <div>
            <h3>Contato</h3>
            <p>✉ <a href="mailto:contato@imbeducacao.com.br">contato@imbeducacao.com.br</a></p>
            <p>☎ <a href="https://wa.me/5511999990000">(11) 99999-0000</a></p>
            <p>⌖ São Paulo — SP, Brasil</p>
            <a href="contato.php" class="footer-contact-link">Fale conosco →</a>
        </div>

    </div>

    <div class="footer-bottom">
        <div class="container">
            <span>© <?= date('Y') ?> IMB Educação. Todos os direitos reservados.</span>
            <span>CNPJ 00.000.000/0001-00 — Feito no Brasil</span>
        </div>
    </div>
</footer>

<script src="script.js"></script>