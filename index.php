<?php
/*
|--------------------------------------------------------------------------
| IMB Educação - versão simples para estudo
|--------------------------------------------------------------------------
| Stack: PHP + HTML + CSS + JavaScript
| Esta versão mantém o layout criado no Lovable, mas remove React,
| TypeScript, Vite, Bun e componentes proprietários.
|
| Você pode editar os textos e cursos diretamente neste arquivo.
|--------------------------------------------------------------------------
*/

$isHome = true;

require __DIR__ . '/inc/courses.php';

$stats = [
    ['value' => '+500', 'label' => 'Alunos ativos'],
    ['value' => '5', 'label' => 'Cursos planejados'],
    ['value' => '10', 'label' => 'Módulos iniciais'],
    ['value' => '100%', 'label' => 'Certificado digital'],
];

$differentials = [
    ['icon' => '▶', 'title' => 'Videoaulas de alta qualidade', 'description' => 'Aulas gravadas em estúdio, com áudio nítido e didática objetiva.'],
    ['icon' => '★', 'title' => 'Certificado', 'description' => 'Certificado digital validado ao concluir cada curso.'],
    ['icon' => '▤', 'title' => 'Materiais complementares', 'description' => 'Resumos, apostilas e exercícios para fixar o conteúdo.'],
    ['icon' => '◎', 'title' => 'Acesso online', 'description' => 'Estude quando e onde quiser, direto do navegador.'],
    ['icon' => '▦', 'title' => 'Plataforma intuitiva', 'description' => 'Navegação simples, progresso claro e zero distração.'],
    ['icon' => '◉', 'title' => 'Suporte ao aluno', 'description' => 'Time dedicado para resolver dúvidas técnicas e pedagógicas.'],
    ['icon' => '✦', 'title' => 'Professores especialistas', 'description' => 'Profissionais atuantes na área da saúde e do ensino.'],
    ['icon' => '↻', 'title' => 'Atualizações constantes', 'description' => 'Conteúdo revisado periodicamente conforme novas diretrizes.'],
];

$benefits = ['Estude onde quiser', 'Acesso em qualquer dispositivo', 'Conteúdo atualizado', 'Professores qualificados', 'Certificado', 'Plataforma moderna'];

$testimonials = [
    ['name' => 'Mariana Alves', 'course' => 'Curso de Radiologia', 'comment' => 'A organização dos módulos me ajudou demais. Consegui estudar entre os plantões e finalizar o curso no prazo.'],
    ['name' => 'Rafael Monteiro', 'course' => 'Curso de Radiologia', 'comment' => 'Conteúdo direto ao ponto e materiais complementares excelentes. A plataforma é rápida e muito fácil de usar.'],
    ['name' => 'Camila Duarte', 'course' => 'Curso de Radiologia', 'comment' => 'Professores muito preparados. O certificado digital saiu na hora, sem burocracia nenhuma.'],
];

require __DIR__ . '/inc/posts.php';

$faqs = [
    ['question' => 'Como funciona o acesso?', 'answer' => 'Após a matrícula você recebe acesso imediato à plataforma. Basta entrar com seu e-mail e senha para assistir às aulas de qualquer lugar.'],
    ['question' => 'Recebo certificado?', 'answer' => 'Sim. Ao concluir todos os módulos do curso, o certificado digital é emitido automaticamente e fica disponível na sua área do aluno.'],
    ['question' => 'Quanto tempo tenho de acesso?', 'answer' => 'O acesso é de 12 meses a partir da matrícula, com direito a todas as atualizações lançadas nesse período.'],
    ['question' => 'Posso acessar pelo celular?', 'answer' => 'Pode. A plataforma é totalmente responsiva e funciona em celular, tablet e computador, sem precisar instalar nada.'],
    ['question' => 'Como faço minha matrícula?', 'answer' => 'Clique em “Cadastrar-se”, preencha seus dados e escolha o curso desejado. Em poucos minutos o acesso é liberado.'],
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<?php
    include 'inc/head.php';
?>
    <link rel="stylesheet" href="css/base.css?v=2">
    <link rel="stylesheet" href="css/home.css?v=2">
</head>
<body>

<?php include __DIR__ . '/inc/navbar.php'; ?>

<main>
<section id="inicio" class="hero">
    <div class="grid-overlay"></div>
    <div class="container hero-grid">
        <div class="hero-content reveal">
            <span class="eyebrow">✦ &nbsp; Novo: Curso completo de Radiologia</span>
            <h1>Aprenda com excelência.<span>Evolua na área da saúde.</span></h1>
            <p>A plataforma completa para estudantes e profissionais que desejam aprender com qualidade. Videoaulas, materiais complementares e certificado digital em uma experiência simples e organizada.</p>
            <div class="hero-buttons">
                <a href="#cursos" class="btn btn-primary btn-large">Conheça os cursos <span>→</span></a>
                <a href="cadastro.php" class="btn btn-outline btn-large">Começar agora</a>
            </div>
            <div class="hero-features">
                <span>✓ Certificado digital</span>
                <span>▶ Acesso imediato às aulas</span>
            </div>
        </div>

        <div class="hero-image-wrap reveal">
            <div class="hero-glow"></div>
            <img src="assets/hero-illustration.png" alt="Estudantes da área da saúde usando notebooks e tablets ao lado de um exame de radiologia">
            <div class="floating-card progress-card">
                <small>Progresso do módulo</small>
                <strong>78%</strong>
                <div class="progress"><span></span></div>
            </div>
            <div class="floating-card certificate-card">
                <div class="certificate-icon">✓</div>
                <div><small>Certificado</small><strong>Emitido</strong></div>
            </div>
        </div>
    </div>
</section>

<section class="stats-section">
    <div class="container stats-grid">
        <?php foreach ($stats as $stat): ?>
            <div class="stat"><strong><?= $stat['value'] ?></strong><span><?= $stat['label'] ?></span></div>
        <?php endforeach; ?>
    </div>
</section>

<section id="sobre" class="section">
    <div class="container about-grid">
        <div class="about-image reveal">
            <img src="assets/about-illustration.png" alt="Ilustração sobre educação em saúde">
        </div>
        <div class="section-content reveal">
            <span class="section-eyebrow">Sobre a IMB</span>
            <h2>Conhecimento que transforma carreiras.</h2>
            <p>A IMB Educação nasceu para tornar o ensino em saúde mais organizado, acessível e conectado com a prática profissional.</p>
            <div class="pillars">
                <div><span>01</span><div><h3>Ensino acessível</h3><p>Conteúdo de alto nível com preço justo.</p></div></div>
                <div><span>02</span><div><h3>Aprendizado prático</h3><p>Conteúdo pensado para a realidade da área da saúde.</p></div></div>
                <div><span>03</span><div><h3>Evolução contínua</h3><p>Uma plataforma preparada para crescer junto com você.</p></div></div>
            </div>
        </div>
    </div>

    <div class="container sobre-extra">
        <div class="section-heading reveal">
            <span class="section-eyebrow">Por que a IMB?</span>
            <h2>Uma experiência pensada para você aprender melhor.</h2>
            <p>Recursos essenciais para tornar seus estudos mais simples, organizados e eficientes.</p>
        </div>
        <div class="features-grid">
            <?php foreach ($differentials as $item): ?>
                <article class="feature-card reveal">
                    <div class="feature-icon"><?= $item['icon'] ?></div>
                    <h3><?= htmlspecialchars($item['title']) ?></h3>
                    <p><?= htmlspecialchars($item['description']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="cursos" class="section section-muted">
    <div class="container">
        <div class="section-heading reveal">
            <span class="section-eyebrow">Cursos</span>
            <h2>Cursos em destaque</h2>
            <p>Começamos pela Radiologia. Novas formações da área da saúde chegam em breve à plataforma.</p>
        </div>
        <div class="courses-grid">
            <?php foreach ($courses as $course): ?>
                <article class="course-card reveal">
                    <div class="course-image">
                        <img src="assets/<?= htmlspecialchars($course['image']) ?>" alt="<?= htmlspecialchars($course['title']) ?>">
                        <span class="status <?= $course['status'] === 'Disponível' ? 'available' : '' ?>"><?= htmlspecialchars($course['status']) ?></span>
                    </div>
                    <div class="course-body">
                        <span class="module">▦ <?= htmlspecialchars($course['modules']) ?></span>
                        <h3><?= htmlspecialchars($course['title']) ?></h3>
                        <p><?= htmlspecialchars($course['description']) ?></p>
                        <a href="curso.php?slug=<?= urlencode($course['slug']) ?>" class="btn <?= $course['status'] === 'Disponível' ? 'btn-primary' : 'btn-outline' ?>">Saiba mais →</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section benefits-section">
    <div class="container benefits-grid">
        <div class="benefits-content reveal">
            <span class="section-eyebrow">Tudo em um só lugar</span>
            <h2>Estude do seu jeito, no seu ritmo.</h2>
            <p>Tenha uma experiência moderna e organizada para acompanhar sua formação de onde estiver.</p>
            <div class="benefits-list">
                <?php foreach ($benefits as $benefit): ?>
                    <span>✓ <?= htmlspecialchars($benefit) ?></span>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="benefits-image reveal">
            <img src="assets/benefits-illustration.png" alt="Ilustração dos benefícios da plataforma IMB Educação">
        </div>
    </div>
</section>

<section class="section section-muted">
    <div class="container">
        <div class="section-heading reveal">
            <span class="section-eyebrow">Depoimentos</span>
            <h2>Quem aprende com a IMB, recomenda.</h2>
        </div>
        <div class="testimonials-grid">
            <?php foreach ($testimonials as $testimonial): ?>
                <article class="testimonial reveal">
                    <div class="stars">★★★★★</div>
                    <p>“<?= htmlspecialchars($testimonial['comment']) ?>”</p>
                    <strong><?= htmlspecialchars($testimonial['name']) ?></strong>
                    <span><?= htmlspecialchars($testimonial['course']) ?></span>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="blog" class="section">
    <div class="container">
        <div class="section-heading reveal">
            <span class="section-eyebrow">Blog</span>
            <h2>Conteúdo para continuar evoluindo.</h2>
            <p>Informação, carreira e estudos para quem vive a área da saúde.</p>
        </div>
        <div class="blog-grid">
            <?php foreach ($posts as $post): ?>
                <article class="blog-card reveal">
                    <img src="assets/<?= htmlspecialchars($post['image']) ?>" alt="<?= htmlspecialchars($post['title']) ?>">
                    <div class="blog-body">
                        <span><?= htmlspecialchars($post['category']) ?> · <?= htmlspecialchars($post['date']) ?></span>
                        <h3><?= htmlspecialchars($post['title']) ?></h3>
                        <p><?= htmlspecialchars($post['excerpt']) ?></p>
                        <a href="post.php?slug=<?= urlencode($post['slug']) ?>">Ler artigo →</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-muted">
    <div class="container faq-container">
        <div class="section-heading reveal">
            <span class="section-eyebrow">FAQ</span>
            <h2>Ficou com alguma dúvida?</h2>
        </div>
        <div class="faq-list">
            <?php foreach ($faqs as $index => $faq): ?>
                <div class="faq-item reveal">
                    <button class="faq-question" type="button">
                        <span><?= htmlspecialchars($faq['question']) ?></span><b>+</b>
                    </button>
                    <div class="faq-answer"><p><?= htmlspecialchars($faq['answer']) ?></p></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container cta-content">
        <span class="section-eyebrow light">Comece sua jornada</span>
        <h2>Pronto para evoluir na área da saúde?</h2>
        <p>Conheça a IMB Educação e dê o próximo passo na sua formação.</p>
        <a href="cadastro.php" class="btn btn-white btn-large">Quero começar →</a>
    </div>
</section>
</main>

<?php include __DIR__ . '/inc/footer.php'; ?>
</body>
</html>
