<?php
/*
|--------------------------------------------------------------------------
| IMB Educação - Contato
|--------------------------------------------------------------------------
| Ainda não há envio real de e-mail nem gravação em banco. Por enquanto
| a página valida os campos no navegador e mostra uma confirmação
| visual. O envio de verdade entra junto com o banco de dados, para
| que a mensagem também fique registrada numa tabela `contatos`.
|
| O campo .honeypot é uma armadilha anti-spam: invisível para pessoas,
| mas robôs preenchem tudo que encontram. Se vier preenchido, é bot.
|--------------------------------------------------------------------------
*/

$isHome      = false;
$currentPage = 'contato.php';

$contatoInfo = [
    ['icone' => '✉',  'titulo' => 'E-mail',     'valor' => 'contato@imbeducacao.com.br', 'href' => 'mailto:contato@imbeducacao.com.br'],
    ['icone' => '📱', 'titulo' => 'WhatsApp',   'valor' => '(11) 90000-0000',            'href' => 'https://wa.me/5511900000000'],
    ['icone' => '📍', 'titulo' => 'Localização', 'valor' => 'São Bernardo do Campo — SP', 'href' => null],
    ['icone' => '🕐', 'titulo' => 'Atendimento', 'valor' => 'Seg. a sex., das 9h às 18h',  'href' => null],
];

$assuntos = [
    'Dúvidas sobre os cursos',
    'Suporte técnico',
    'Certificados',
    'Parcerias e empresas',
    'Outro assunto',
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<?php
    $pageTitle = 'Contato';
    $pageDesc  = 'Fale com a equipe do IMB Educação. Tire dúvidas sobre cursos, certificados e parcerias.';
    include 'inc/head.php';
?>
    <link rel="stylesheet" href="css/base.css?v=2">
    <link rel="stylesheet" href="css/contato.css?v=2">
</head>
<body>

<?php include 'inc/navbar.php'; ?>

<main id="conteudo">

    <section class="contact-hero">
        <div class="container">
            <span class="section-eyebrow">Fale conosco</span>
            <h1>Estamos aqui para ajudar</h1>
            <p>Dúvidas sobre os cursos, certificados ou parcerias? Envie sua mensagem e nossa equipe responde em até dois dias úteis.</p>
        </div>
    </section>

    <section class="contact-section">
        <div class="container contact-layout">

            <div class="contact-card">
                <h2 class="contact-card-title">Envie sua mensagem</h2>
                <p class="contact-card-sub">Preencha o formulário abaixo e retornaremos pelo e-mail informado.</p>

                <div class="contact-alert contact-alert-success" id="formSuccess" hidden>
                    Mensagem registrada. O envio real será ativado quando o banco de dados estiver conectado.
                </div>

                <form class="contact-form" id="contactForm" novalidate>

                    <div class="form-row">
                        <div class="form-field">
                            <label for="nome">Nome completo <span aria-hidden="true">*</span></label>
                            <input type="text" id="nome" name="nome" required maxlength="120" autocomplete="name">
                            <small class="field-error" id="erro-nome" hidden>Informe seu nome.</small>
                        </div>

                        <div class="form-field">
                            <label for="email">E-mail <span aria-hidden="true">*</span></label>
                            <input type="email" id="email" name="email" required maxlength="150" autocomplete="email">
                            <small class="field-error" id="erro-email" hidden>Informe um e-mail válido.</small>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-field">
                            <label for="telefone">Telefone <span class="field-optional">(opcional)</span></label>
                            <input type="tel" id="telefone" name="telefone" maxlength="20" autocomplete="tel" placeholder="(00) 00000-0000">
                        </div>

                        <div class="form-field">
                            <label for="assunto">Assunto <span aria-hidden="true">*</span></label>
                            <select id="assunto" name="assunto" required>
                                <option value="">Selecione…</option>
                                <?php foreach ($assuntos as $assunto): ?>
                                    <option value="<?= htmlspecialchars($assunto) ?>"><?= htmlspecialchars($assunto) ?></option>
                                <?php endforeach; ?>
                            </select>
                            <small class="field-error" id="erro-assunto" hidden>Escolha um assunto.</small>
                        </div>
                    </div>

                    <div class="form-field">
                        <label for="mensagem">Mensagem <span aria-hidden="true">*</span></label>
                        <textarea id="mensagem" name="mensagem" rows="6" required maxlength="2000" placeholder="Conte com detalhes como podemos ajudar."></textarea>
                        <div class="field-meta">
                            <small class="field-error" id="erro-mensagem" hidden>Escreva ao menos 10 caracteres.</small>
                            <small class="char-count"><span id="charCount">0</span>/2000</small>
                        </div>
                    </div>

                    <!-- Armadilha anti-spam: escondida via CSS, ignorada por pessoas -->
                    <div class="honeypot" aria-hidden="true">
                        <label for="site">Não preencha este campo</label>
                        <input type="text" id="site" name="site" tabindex="-1" autocomplete="off">
                    </div>

                    <button type="submit" class="btn btn-primary btn-large btn-block">Enviar mensagem</button>

                    <p class="contact-form-note">
                        Ao enviar, você concorda que seus dados sejam usados apenas para responder a esta solicitação.
                    </p>
                </form>
            </div>

            <aside class="contact-aside">

                <div class="contact-info">
                    <h2 class="contact-card-title">Outros canais</h2><br>
                    <ul class="info-list">
                        <?php foreach ($contatoInfo as $item): ?>
                            <li class="info-item">
                                <span class="info-icon" aria-hidden="true"><?= $item['icone'] ?></span>
                                <div>
                                    <strong><?= htmlspecialchars($item['titulo']) ?></strong>
                                    <?php if ($item['href']): ?>
                                        <a href="<?= htmlspecialchars($item['href']) ?>"><?= htmlspecialchars($item['valor']) ?></a>
                                    <?php else: ?>
                                        <span><?= htmlspecialchars($item['valor']) ?></span>
                                    <?php endif; ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="contact-cta">
                    <h3>Já conhece nossos cursos?</h3>
                    <p>Veja a grade completa de formações em Radiologia e áreas da saúde.</p>
                    <a href="index.php#cursos" class="btn btn-white btn-block">Ver cursos</a>
                </div>

            </aside>

        </div>
    </section>

</main>

<?php include 'inc/footer.php'; ?>


<script>
(function () {
    var form     = document.getElementById('contactForm');
    var sucesso  = document.getElementById('formSuccess');
    var mensagem = document.getElementById('mensagem');
    var contador = document.getElementById('charCount');

    // Contador de caracteres da mensagem
    mensagem.addEventListener('input', function () {
        contador.textContent = mensagem.value.length;
    });

    function mostrarErro(id, exibir) {
        document.getElementById('erro-' + id).hidden = !exibir;
        document.getElementById(id).classList.toggle('input-invalid', exibir);
        return !exibir;
    }

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        // Bot preencheu a armadilha: finge que deu certo e não faz nada
        if (document.getElementById('site').value !== '') {
            return;
        }

        var nome    = document.getElementById('nome').value.trim();
        var email   = document.getElementById('email').value.trim();
        var assunto = document.getElementById('assunto').value;
        var texto   = mensagem.value.trim();

        var ok = true;
        ok = mostrarErro('nome', nome.length < 2) && ok;
        ok = mostrarErro('email', !/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(email)) && ok;
        ok = mostrarErro('assunto', assunto === '') && ok;
        ok = mostrarErro('mensagem', texto.length < 10) && ok;

        if (!ok) {
            form.querySelector('.input-invalid').focus();
            return;
        }

        sucesso.hidden = false;
        sucesso.scrollIntoView({ behavior: 'smooth', block: 'center' });
        form.reset();
        contador.textContent = '0';
    });
})();
</script>
</body>
</html>