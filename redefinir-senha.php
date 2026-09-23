<?php
/*
|--------------------------------------------------------------------------
| IMB Educação - Redefinir senha
|--------------------------------------------------------------------------
| Página acessada pelo link enviado por e-mail: redefinir-senha.php?token=...
|
| Quando o backend existir, ANTES de exibir o formulário será preciso:
|   1. verificar se o token existe no banco
|   2. verificar se não expirou
|   3. verificar se ainda não foi usado
| Se qualquer checagem falhar, mostrar o aviso de link inválido.
|
| Por enquanto a página só simula: sem ?token= na URL, mostra o estado
| de link inválido, para você ver os dois cenários.
|--------------------------------------------------------------------------
*/

$token       = $_GET['token'] ?? '';
$tokenValido = $token !== '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<?php
    $pageTitle = 'Nova senha';
    $pageDesc  = 'Defina uma nova senha para sua conta IMB Educação.';
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
            <h1>Crie uma senha nova e segura.</h1>
            <ul class="auth-checklist">
                <li>Use ao menos 8 caracteres</li>
                <li>Combine letras e números</li>
                <li>Evite dados pessoais ou sequências</li>
            </ul>
        </div>

        <p class="auth-quote">&ldquo;Conhecimento que transforma carreiras.&rdquo;</p>
    </div>

    <main class="auth-form-wrap">
        <a href="login.php" class="back-link">← Voltar ao login</a>

        <div class="auth-form-card">

            <?php if (!$tokenValido): ?>

                <h2>Link inválido</h2>
                <p class="auth-form-sub">Este link de recuperação expirou ou já foi utilizado. Solicite um novo para continuar.</p>
                <a href="esqueci-senha.php" class="btn btn-primary btn-block">Solicitar novo link</a>

            <?php else: ?>

                <h2>Nova senha</h2>
                <p class="auth-form-sub">Escolha uma senha que você não utilize em outros sites.</p>

                <div class="auth-alert auth-alert-success" id="formNotice" hidden>
                    Senha atualizada. Quando o banco de dados estiver conectado, você será redirecionada para o login.
                </div>

                <form class="auth-form" id="resetForm" novalidate>
                    <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">

                    <label for="password">Nova senha</label>
                    <div class="password-field">
                        <input type="password" id="password" name="password" required autofocus autocomplete="new-password">
                        <button type="button" class="password-toggle" aria-label="Mostrar senha">👁</button>
                    </div>

                    <div class="password-strength" id="strengthBar" hidden>
                        <div class="strength-track"><span id="strengthFill"></span></div>
                        <small id="strengthLabel">Força da senha</small>
                    </div>

                    <small class="field-error" id="erro-password" hidden>A senha precisa ter ao menos 8 caracteres.</small>

                    <label for="password_confirm">Confirmar nova senha</label>
                    <div class="password-field">
                        <input type="password" id="password_confirm" name="password_confirm" required autocomplete="new-password">
                        <button type="button" class="password-toggle" aria-label="Mostrar senha">👁</button>
                    </div>
                    <small class="field-error" id="erro-password_confirm" hidden>As senhas não coincidem.</small>

                    <button type="submit" class="btn btn-primary btn-block">Salvar nova senha</button>
                </form>

            <?php endif; ?>

        </div>
    </main>

</div>

<script>
(function () {
    // Mostrar/ocultar senha — vale para os dois campos
    document.querySelectorAll('.password-toggle').forEach(function (botao) {
        botao.addEventListener('click', function () {
            var input = botao.previousElementSibling;
            input.type = input.type === 'password' ? 'text' : 'password';
        });
    });

    var form = document.getElementById('resetForm');
    if (!form) return; // estamos na tela de link inválido

    var senha     = document.getElementById('password');
    var confirma  = document.getElementById('password_confirm');
    var aviso     = document.getElementById('formNotice');
    var barra     = document.getElementById('strengthBar');
    var preenche  = document.getElementById('strengthFill');
    var rotulo    = document.getElementById('strengthLabel');

    // Medidor simples de força: conta critérios atendidos
    senha.addEventListener('input', function () {
        var valor = senha.value;
        barra.hidden = valor.length === 0;

        var pontos = 0;
        if (valor.length >= 8)        pontos++;
        if (valor.length >= 12)       pontos++;
        if (/[a-z]/.test(valor) && /[A-Z]/.test(valor)) pontos++;
        if (/\d/.test(valor))         pontos++;
        if (/[^A-Za-z0-9]/.test(valor)) pontos++;

        var niveis = ['fraca', 'fraca', 'media', 'media', 'forte', 'forte'];
        var textos = ['Muito fraca', 'Fraca', 'Razoável', 'Boa', 'Forte', 'Muito forte'];

        preenche.className = niveis[pontos];
        preenche.style.width = ((pontos / 5) * 100) + '%';
        rotulo.textContent = textos[pontos];
    });

    function marcar(input, id, invalido) {
        document.getElementById('erro-' + id).hidden = !invalido;
        input.classList.toggle('input-invalid', invalido);
        return !invalido;
    }

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        var ok = true;
        ok = marcar(senha, 'password', senha.value.length < 8) && ok;
        ok = marcar(confirma, 'password_confirm',
                    confirma.value === '' || confirma.value !== senha.value) && ok;

        if (!ok) {
            form.querySelector('.input-invalid').focus();
            return;
        }

        aviso.hidden = false;
        form.reset();
        barra.hidden = true;
    });
})();
</script>
</body>
</html>