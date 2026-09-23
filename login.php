<?php
/*
|--------------------------------------------------------------------------
| IMB Educação - Login
|--------------------------------------------------------------------------
| Ainda não há backend/banco de dados conectado (isso vem na etapa
| Laravel). Por enquanto esta página só é a interface visual: o
| envio do formulário é interceptado no JS e mostra um aviso.
|--------------------------------------------------------------------------
*/
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<?php
    $pageTitle = 'Entrar';
    $pageDesc  = 'Acesse sua conta na plataforma IMB Educação.';
    include 'inc/head.php';
?>
    <link rel="stylesheet" href="css/base.css?v=2">
    <link rel="stylesheet" href="css/auth.css?v=2">
</head>
<body class="auth-body">

<div class="auth-screen">

    <div class="auth-panel">
        <a href="index.php" class="auth-brand">
            <img src="assets/logo-imb.png" alt="Logo IMB Educação">
            <span>IMB Educação</span>
        </a>

        <div class="auth-panel-copy">
            <h1>Continue sua formação em Radiologia e outras áreas da saúde.</h1>
            <ul class="auth-checklist">
                <li>Conteúdo atualizado com rigor científico</li>
                <li>Professores especialistas</li>
                <li>Certificado digital reconhecido</li>
            </ul>
        </div>

        <p class="auth-quote">&ldquo;Conhecimento que transforma carreiras.&rdquo;</p>
    </div>

    <main class="auth-form-wrap">
        <a href="index.php" class="back-link">← Voltar ao site</a>

        <div class="auth-form-card">
            <h2>Entrar</h2>
            <p class="auth-form-sub">Acesse sua conta para continuar estudando.</p>

            <div class="auth-alert" id="formNotice" hidden>
                Este formulário ainda não está conectado a um banco de dados — isso será implementado na próxima etapa (Laravel).
            </div>

            <form class="auth-form" id="loginForm">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required autofocus>

                <label for="password">Senha</label>
                <div class="password-field">
                    <input type="password" id="password" name="password" required>
                    <button type="button" class="password-toggle" aria-label="Mostrar senha">👁</button>
                </div>

                <div class="auth-form-row">
                    <label class="auth-checkbox">
                        <input type="checkbox" name="lembrar">
                        Lembrar de mim
                    </label>
                    <a href="esqueci-senha.php" class="auth-link">Esqueci minha senha</a>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
            </form>

            <p class="auth-form-footer">
                Ainda não tem conta?
                <a href="cadastro.php" class="auth-link">Cadastre-se</a>
            </p>
        </div>
    </main>

</div>

<script>
    document.querySelectorAll('.password-toggle').forEach(function (button) {
        button.addEventListener('click', function () {
            var input = button.previousElementSibling;
            input.type = input.type === 'password' ? 'text' : 'password';
        });
    });

    document.getElementById('loginForm').addEventListener('submit', function (event) {
        event.preventDefault();
        document.getElementById('formNotice').hidden = false;
    });
</script>
</body>
</html>
