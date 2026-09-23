<?php
/*
|--------------------------------------------------------------------------
| Dados dos cursos (mock)
|--------------------------------------------------------------------------
| Ainda não existe banco de dados. Quando a etapa Laravel chegar, isso vira
| App\Models\Curso::query()->get(). Por enquanto, este array é a fonte
| única usada tanto pela Home quanto pela página de detalhe (curso.php),
| pra evitar manter a mesma informação duplicada em dois arquivos.
|--------------------------------------------------------------------------
*/

$courses = [
    [
        'slug' => 'radiologia',
        'title' => 'Curso de Radiologia',
        'description' => 'Formação completa em radiologia: princípios físicos, proteção radiológica, posicionamento e interpretação de imagens.',
        'image' => 'course-radiologia.jpg',
        'status' => 'Disponível',
        'modules' => '10 módulos',
        // Conteúdo provisório — trocar pela grade curricular real quando definida.
        'modules_list' => [
            'Introdução à Radiologia',
            'Física das Radiações',
            'Proteção Radiológica',
            'Equipamentos e Tecnologias',
            'Posicionamento Radiográfico I',
            'Posicionamento Radiográfico II',
            'Radiologia do Tórax',
            'Radiologia do Abdômen',
            'Radiologia Musculoesquelética',
            'Interpretação de Imagens e Laudos',
        ],
    ],
    [
        'slug' => 'anatomia',
        'title' => 'Anatomia',
        'description' => 'Bases anatômicas aplicadas à prática clínica, com foco em sistemas e correlação por imagem.',
        'image' => 'course-anatomia.jpg',
        'status' => 'Em breve',
        'modules' => 'Em produção',
        'modules_list' => [],
    ],
    [
        'slug' => 'enfermagem',
        'title' => 'Enfermagem',
        'description' => 'Procedimentos, cuidados assistenciais e segurança do paciente para o dia a dia da enfermagem.',
        'image' => 'course-enfermagem.jpg',
        'status' => 'Em breve',
        'modules' => 'Em produção',
        'modules_list' => [],
    ],
    [
        'slug' => 'imagem-medica',
        'title' => 'Imagem Médica',
        'description' => 'Tomografia, ressonância e ultrassonografia: protocolos, indicações e leitura de exames.',
        'image' => 'course-imagem.jpg',
        'status' => 'Em breve',
        'modules' => 'Em produção',
        'modules_list' => [],
    ],
    [
        'slug' => 'urgencia-emergencia',
        'title' => 'Urgência e Emergência',
        'description' => 'Condutas rápidas e seguras em atendimento pré-hospitalar e em sala de emergência.',
        'image' => 'course-urgencia.jpg',
        'status' => 'Em breve',
        'modules' => 'Em produção',
        'modules_list' => [],
    ],
];
