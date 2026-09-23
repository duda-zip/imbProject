<?php
/*
|--------------------------------------------------------------------------
| Dados dos posts do blog (mock)
|--------------------------------------------------------------------------
| Ainda não existe banco de dados. Quando a etapa Laravel chegar, isso vira
| App\Models\Post::query()->publicados()->get(). Por enquanto, este array
| é a fonte única usada tanto pela prévia na Home quanto pela página de
| detalhe (post.php).
|
| O texto de 'body' é conteúdo provisório escrito só pra a página não
| ficar vazia — troque pelos artigos reais quando estiverem prontos.
|--------------------------------------------------------------------------
*/

$posts = [
    [
        'slug' => 'como-iniciar-na-radiologia',
        'title' => 'Como iniciar na radiologia: o guia completo para 2026',
        'excerpt' => 'Entenda as competências essenciais, o campo de atuação e o caminho de formação de quem quer trabalhar com imagem médica.',
        'image' => 'blog-1.jpg',
        'category' => 'Carreira',
        'date' => '12 mar 2026',
        'body' => [
            'A radiologia é uma das áreas que mais cresce dentro do universo da saúde, unindo tecnologia, precisão diagnóstica e contato direto com o cuidado ao paciente. Para quem está pensando em entrar nesse campo, o primeiro passo é entender que a formação vai muito além de aprender a operar um equipamento: envolve compreender anatomia, física das radiações, protocolos de segurança e, principalmente, como interpretar o que a imagem está mostrando.',
            'Um bom ponto de partida é organizar o aprendizado em blocos: primeiro os fundamentos teóricos (anatomia e física radiológica), depois a prática de posicionamento do paciente e, por fim, a leitura e interpretação de exames. Pular etapas costuma gerar insegurança justamente na hora que mais importa — no atendimento real.',
            'Outro ponto importante é a proteção radiológica. Entender os limites de exposição, o uso correto de equipamentos de proteção individual e as boas práticas de sala é tão essencial quanto saber operar o aparelho. Isso protege tanto o profissional quanto o paciente.',
            'Por fim, vale lembrar que a radiologia é uma área em constante atualização. Novos protocolos, equipamentos e formas de diagnóstico por imagem surgem com frequência — por isso, a formação continuada não é um diferencial, é uma necessidade para quem quer se manter relevante na profissão.',
        ],
    ],
    [
        'slug' => 'rotina-de-estudos-6-metodos',
        'title' => 'Rotina de estudos: 6 métodos que funcionam na área da saúde',
        'excerpt' => 'Técnicas de revisão espaçada e organização de agenda para quem concilia trabalho, faculdade e cursos livres.',
        'image' => 'blog-2.jpg',
        'category' => 'Estudos',
        'date' => '28 fev 2026',
        'body' => [
            'Conciliar trabalho, faculdade e cursos livres é um desafio comum entre quem estuda a área da saúde. A boa notícia é que existem métodos de estudo comprovadamente eficazes para otimizar o tempo disponível, mesmo quando ele é escasso.',
            'A revisão espaçada é um dos mais indicados: em vez de estudar um conteúdo uma única vez de forma intensiva, você revisa o mesmo material em intervalos crescentes de tempo — por exemplo, um dia depois, depois três dias, depois uma semana. Isso fortalece a memória de longo prazo de forma muito mais eficiente do que a leitura repetida em um único dia.',
            'Outra técnica útil é dividir o conteúdo em blocos pequenos e usar sessões curtas e focadas, de 25 a 40 minutos, com pausas entre elas. Isso evita a fadiga mental e mantém a concentração em um nível mais alto durante todo o período de estudo.',
            'Por fim, organizar a agenda semanal com horários fixos para estudo — mesmo que curtos — cria consistência. É mais eficaz estudar 30 minutos todos os dias do que tentar compensar tudo em uma única sessão de fim de semana.',
        ],
    ],
    [
        'slug' => 'tecnologia-e-diagnostico',
        'title' => 'Tecnologia e diagnóstico: o que muda na prática clínica',
        'excerpt' => 'Novos protocolos e ferramentas digitais estão redefinindo o fluxo de trabalho dentro dos serviços de imagem.',
        'image' => 'blog-3.jpg',
        'category' => 'Tecnologia',
        'date' => '10 fev 2026',
        'body' => [
            'Os serviços de diagnóstico por imagem têm passado por transformações significativas nos últimos anos. Ferramentas digitais de apoio à decisão, sistemas de armazenamento em nuvem e fluxos de trabalho mais integrados estão mudando a rotina de quem atua na área.',
            'Um dos impactos mais visíveis é na velocidade do fluxo de trabalho: exames que antes levavam horas para chegar ao médico responsável agora podem ser compartilhados e analisados em minutos, graças a sistemas de imagem integrados diretamente ao prontuário eletrônico do paciente.',
            'Isso não substitui o profissional — pelo contrário, reforça a importância de quem sabe interpretar corretamente a imagem e tomar decisões com base nela. A tecnologia serve como apoio, não como substituição do raciocínio clínico.',
            'Para quem está se formando agora, entender esse cenário é essencial: a familiaridade com ferramentas digitais deixou de ser um diferencial e passou a ser parte básica da formação em diagnóstico por imagem.',
        ],
    ],
];
