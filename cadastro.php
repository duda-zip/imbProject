<?php
/*
|--------------------------------------------------------------------------
| IMB Educação - Cadastro
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
    $pageTitle = 'Criar conta';
    $pageDesc  = 'Crie sua conta gratuita na plataforma IMB Educação.';
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
            <h1>Comece sua jornada em educação médica de excelência.</h1>
            <ul class="auth-checklist">
                <li>Acesso a cursos de Radiologia e outras áreas da saúde</li>
                <li>Certificado digital ao concluir cada curso</li>
                <li>Acompanhamento do seu progresso</li>
            </ul>
        </div>

        <p class="auth-quote">&ldquo;Conhecimento que transforma carreiras.&rdquo;</p>
    </div>

    <main class="auth-form-wrap">
        <a href="index.php" class="back-link">← Voltar ao site</a>

        <div class="auth-form-card">
            <h2>Criar conta</h2>
            <p class="auth-form-sub">Leva poucos minutos para você começar a estudar.</p>

            <div class="auth-alert" id="formNotice" hidden>
                Este formulário ainda não está conectado a um banco de dados — isso será implementado na próxima etapa (Laravel).
            </div>

            <form class="auth-form" id="registerForm">
                <label for="name">Nome completo</label>
                <input type="text" id="name" name="name" required autofocus>

                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Senha</label>
                <div class="password-field">
                    <input type="password" id="password" name="password" required>
                    <button type="button" class="password-toggle" aria-label="Mostrar senha">👁</button>
                </div>

                <label for="password_confirmation">Confirmar senha</label>
                <div class="password-field">
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                    <button type="button" class="password-toggle" aria-label="Mostrar senha">👁</button>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Criar conta</button>
            </form>

            <p class="auth-form-footer">
                Já tem conta?
                <a href="login.php" class="auth-link">Entrar</a>
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

    document.getElementById('registerForm').addEventListener('submit', function (event) {
        event.preventDefault();

        var senha = document.getElementById('password').value;
        var confirmacao = document.getElementById('password_confirmation').value;
        var aviso = document.getElementById('formNotice');

        if (senha !== confirmacao) {
            aviso.textContent = 'As senhas não coincidem. Verifique e tente novamente.';
            aviso.hidden = false;
            return;
        }

        aviso.textContent = 'Este formulário ainda não está conectado a um banco de dados — isso será implementado na próxima etapa (Laravel).';
        aviso.hidden = false;
    });
</script>
</body>
</html>
