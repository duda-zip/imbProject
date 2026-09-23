<?php
/*
|--------------------------------------------------------------------------
| IMB Educação - Esqueci minha senha
|--------------------------------------------------------------------------
| Interface visual apenas. Quando o banco existir, o envio vai:
|   1. gerar token com random_bytes(32)
|   2. gravar em password_resets (email, token_hash, expira_em)
|   3. enviar o link por e-mail
|
| IMPORTANTE: a mensagem de retorno é SEMPRE a mesma, exista ou não
| a conta. Confirmar que um e-mail está cadastrado permite que alguém
| descubra quem são os usuários do sistema (enumeração de usuários).
|--------------------------------------------------------------------------
*/
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<?php
    $pageTitle = 'Recuperar senha';
    $pageDesc  = 'Recupere o acesso à sua conta na plataforma IMB Educação.';
    $noIndex   = true;
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
            <h1>Recupere o acesso e volte aos seus estudos.</h1>
            <ul class="auth-checklist">
                <li>Link seguro enviado ao seu e-mail</li>
                <li>Validade de 1 hora por segurança</li>
                <li>Seu progresso permanece salvo</li>
            </ul>
        </div>

        <p class="auth-quote">&ldquo;Conhecimento que transforma carreiras.&rdquo;</p>
    </div>

    <main class="auth-form-wrap">
        <a href="login.php" class="back-link">← Voltar ao login</a>

        <div class="auth-form-card">
            <h2>Recuperar senha</h2>
            <p class="auth-form-sub">Informe o e-mail cadastrado e enviaremos um link para você criar uma nova senha.</p>

            <div class="auth-alert" id="formNotice" hidden>
                Se houver uma conta associada a este e-mail, você receberá as instruções em instantes. Verifique também a caixa de spam.
            </div>

            <form class="auth-form" id="recoverForm" novalidate>
                <label for="email">E-mail cadastrado</label>
                <input type="email" id="email" name="email" required autofocus autocomplete="email">
                <small class="field-error" id="erro-email" hidden>Informe um e-mail válido.</small>

                <button type="submit" class="btn btn-primary btn-block">Enviar link de recuperação</button>
            </form>

            <p class="auth-form-footer">
                Lembrou da senha?
                <a href="login.php" class="auth-link">Entrar</a>
            </p>
            <p class="auth-form-footer">
                Ainda não tem conta?
                <a href="cadastro.php" class="auth-link">Cadastre-se</a>
            </p>
        </div>
    </main>

</div>

<script>
(function () {
    var form   = document.getElementById('recoverForm');
    var campo  = document.getElementById('email');
    var erro   = document.getElementById('erro-email');
    var aviso  = document.getElementById('formNotice');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        var valido = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(campo.value.trim());

        erro.hidden = valido;
        campo.classList.toggle('input-invalid', !valido);

        if (!valido) {
            campo.focus();
            return;
        }

        aviso.hidden = false;
        form.reset();
    });
})();
</script>
</body>
</html>