<?php
/**
 * Dados do site. Tudo que muda com o tempo (menu, contatos, documentos,
 * galerias, evento em destaque) fica aqui - nao no meio do HTML.
 */

/* ====================================================== */
/* DADOS DA ASSOCIACAO */
/* ====================================================== */

$SITE = [
    'nome'      => 'ASSOCIAÇÃO ANTIALCOÓLICA DE TAQUARITINGA',
    'fundacao'  => '05 de setembro de 1982',
    'email'     => 'aataquaritinga@gmail.com',
    'telefones' => ['(16) 3252-3903', '(16) 99612-7221'],
    'whatsapp'  => '5516996127221',
    'endereco'  => [
        'rua'    => 'Avenida João de Jorge, nº 538',
        'bairro' => 'Vila São Paulo',
        'cidade' => 'Taquaritinga - SP',
        'cep'    => '15900-110',
    ],
    'facebook'  => 'https://www.facebook.com/profile.php?id=100011397605586',
    'analytics' => 'G-Z77PFY28FZ',
];

/* ====================================================== */
/* ROTAS (tambem define o menu) */
/* ====================================================== */

/**
 * Whitelist de rotas: nenhum caminho vindo da URL e incluido direto.
 * 'menu' => false esconde a rota do menu de navegacao.
 */
$ROUTES = [
    'home' => [
        'file'  => 'home.php',
        'title' => 'ASSOCIAÇÃO ANTIALCOÓLICA DE TAQUARITINGA',
        'desc'  => 'Associação Antialcoólica de Taquaritinga: acolhimento e apoio a pessoas e famílias afetadas pelo alcoolismo desde 1982.',
        'menu'  => false,
    ],
    'reunioes' => [
        'file'  => 'reunioes.php',
        'title' => 'Reuniões',
        'label' => 'Reuniões',
        'desc'  => 'Reuniões semanais aos sábados, das 20h às 22h. Participação gratuita e aberta a todos.',
        'icon'  => 'fa-users',
    ],
    'eventos' => [
        'file'  => 'eventos.php',
        'title' => 'Eventos',
        'label' => 'Eventos',
        'desc'  => 'Registros das atividades, encontros e eventos da Associação Antialcoólica de Taquaritinga.',
        'icon'  => 'fa-calendar-days',
    ],
    'quermesse' => [
        'file'  => 'quermesse.php',
        'title' => 'Quermesse da Amizade 2026',
        'label' => 'Quermesse',
        'label2' => '2026',
        'desc'  => 'Fotos da Quermesse da Amizade 2026 da Associação Antialcoólica de Taquaritinga.',
        'icon'  => 'fa-calendar-days',
    ],
    'jantar-2026' => [
        'file'  => 'jantar-2026.php',
        'title' => 'Jantar Beneficente 2026',
        'label' => 'Jantar',
        'label2' => '2026',
        'desc'  => 'Jantar Beneficente 2026 da Associação Antialcoólica de Taquaritinga.',
        'icon'  => 'fa-utensils',
    ],
    'premiacao-2026' => [
        'file'  => 'premiacao-2026.php',
        'title' => 'Premiação 2026',
        'label' => 'Premiação',
        'label2' => '2026',
        'desc'  => 'Premiação 2026 da Associação Antialcoólica de Taquaritinga.',
        'icon'  => 'fa-trophy',
    ],
    'documentos' => [
        'file'  => 'documentos.php',
        'title' => 'Estatuto/Documentos',
        'label' => 'Documentos',
        'desc'  => 'Estatuto, atas e demonstrativos financeiros da Associação Antialcoólica de Taquaritinga.',
        'icon'  => 'fa-file-lines',
    ],
    'contato' => [
        'file'  => 'contato.php',
        'title' => 'Contato',
        'label' => 'Contato',
        'desc'  => 'Endereço, telefones e e-mail da Associação Antialcoólica de Taquaritinga.',
        'icon'  => 'fa-envelope',
    ],
];

/* ====================================================== */
/* DOCUMENTOS OFICIAIS */
/* ====================================================== */

$DOCUMENTOS = [
    [
        'arquivo'   => 'Docs/ATA BIENIO 2025 - 2027.pdf',
        'titulo'    => 'ATA DE ELEIÇÃO DA NOVA DIRETORIA E CONSELHO FISCAL PARA O BIÊNIO 2025/2027',
        'subtitulo' => 'Exercícios 2025 / 2026 / 2027',
        'icone'     => 'fa-file-pdf',
    ],
    [
        'arquivo'   => 'Docs/DEMONSTRATIVO_17_18_19_20.pdf',
        'titulo'    => 'Demonstrativo Integral de Receitas e Despesas',
        'subtitulo' => 'Exercícios 2017 / 2018 / 2019 / 2020',
        'icone'     => 'fa-file-pdf',
    ],
    [
        'arquivo'   => 'Docs/ELEICAO_ESTATUTO_COD_CIVIL_2007.pdf',
        'titulo'    => 'Eleição / Estatuto Código Civil',
        'subtitulo' => 'Documento oficial referente ao ano de 2007',
        'icone'     => 'fa-file-lines',
    ],
    [
        'arquivo'   => 'Docs/ESTATUTO_COD_CIVIL_2007.pdf',
        'titulo'    => 'Adequação Código Civil',
        'subtitulo' => 'Estatuto atualizado conforme Código Civil de 2007',
        'icone'     => 'fa-scale-balanced',
    ],
];

/* ====================================================== */
/* GALERIAS */
/* ====================================================== */

$GALERIA_EVENTOS = [
    'img/ev1.jpg', 'img/ev2.jpg', 'img/ev3.jpg',
    'img/ev4.jpg', 'img/ev5.jpg', 'img/ev6.jpg',
    'img/ev7.jpg', 'img/ev8.jpg', 'img/ev9.jpg',
];

/* Ordem intencional: comeca em 67 e 68, depois o restante. */
$GALERIA_QUERMESSE = [
    'img2/A1 (67).jpeg',
    'img2/A1 (68).jpeg',
    'img2/A1 (1).jpeg',
    'img2/A1 (10).jpeg',
    'img2/A1 (11).jpeg',
    'img2/A1 (12).jpeg',
    'img2/A1 (13).jpeg',
    'img2/A1 (14).jpeg',
    'img2/A1 (15).jpeg',
    'img2/A1 (16).jpeg',
    'img2/A1 (17).jpeg',
    'img2/A1 (18).jpeg',
    'img2/A1 (19).jpeg',
    'img2/A1 (2).jpeg',
    'img2/A1 (20).jpeg',
    'img2/A1 (21).jpeg',
    'img2/A1 (22).jpeg',
    'img2/A1 (23).jpeg',
    'img2/A1 (24).jpeg',
    'img2/A1 (25).jpeg',
    'img2/A1 (26).jpeg',
    'img2/A1 (27).jpeg',
    'img2/A1 (28).jpeg',
    'img2/A1 (29).jpeg',
    'img2/A1 (3).jpeg',
    'img2/A1 (30).jpeg',
    'img2/A1 (31).jpeg',
    'img2/A1 (32).jpeg',
    'img2/A1 (33).jpeg',
    'img2/A1 (34).jpeg',
    'img2/A1 (35).jpeg',
    'img2/A1 (36).jpeg',
    'img2/A1 (37).jpeg',
    'img2/A1 (38).jpeg',
    'img2/A1 (39).jpeg',
    'img2/A1 (4).jpeg',
    'img2/A1 (40).jpeg',
    'img2/A1 (41).jpeg',
    'img2/A1 (42).jpeg',
    'img2/A1 (43).jpeg',
    'img2/A1 (44).jpeg',
    'img2/A1 (45).jpeg',
    'img2/A1 (46).jpeg',
    'img2/A1 (47).jpeg',
    'img2/A1 (48).jpeg',
    'img2/A1 (49).jpeg',
    'img2/A1 (5).jpeg',
    'img2/A1 (50).jpeg',
    'img2/A1 (51).jpeg',
    'img2/A1 (52).jpeg',
    'img2/A1 (53).jpeg',
    'img2/A1 (54).jpeg',
    'img2/A1 (55).jpeg',
    'img2/A1 (56).jpeg',
    'img2/A1 (57).jpeg',
    'img2/A1 (58).jpeg',
    'img2/A1 (59).jpeg',
    'img2/A1 (6).jpeg',
    'img2/A1 (60).jpeg',
    'img2/A1 (61).jpeg',
    'img2/A1 (62).jpeg',
    'img2/A1 (63).jpeg',
    'img2/A1 (64).jpeg',
    'img2/A1 (65).jpeg',
    'img2/A1 (66).jpeg',
    'img2/A1 (7).jpeg',
    'img2/A1 (8).jpeg',
    'img2/A1 (9).jpeg',
];

/* ====================================================== */
/* GALERIAS 2026 */
/* ====================================================== */

$GALERIA_JANTAR_2026 = [
    'img/jantar-2026/jantar-2026-01.jpeg',
    'img/jantar-2026/jantar-2026-02.jpeg',
    'img/jantar-2026/jantar-2026-03.jpeg',
    'img/jantar-2026/jantar-2026-04.jpeg',
    'img/jantar-2026/jantar-2026-05.jpeg',
    'img/jantar-2026/jantar-2026-06.jpeg',
    'img/jantar-2026/jantar-2026-07.jpeg',
    'img/jantar-2026/jantar-2026-08.jpeg',
];

$VIDEO_JANTAR_2026 = 'video/jantar-2026.mp4';

$GALERIA_PREMIACAO_2026 = [
    'img/premiacao-2026/premiacao-2026-36.jpeg',
    'img/premiacao-2026/premiacao-2026-01.jpeg',
    'img/premiacao-2026/premiacao-2026-02.jpeg',
    'img/premiacao-2026/premiacao-2026-03.jpeg',
    'img/premiacao-2026/premiacao-2026-04.jpeg',
    'img/premiacao-2026/premiacao-2026-05.jpeg',
    'img/premiacao-2026/premiacao-2026-06.jpeg',
    'img/premiacao-2026/premiacao-2026-07.jpeg',
    'img/premiacao-2026/premiacao-2026-08.jpeg',
    'img/premiacao-2026/premiacao-2026-09.jpeg',
    'img/premiacao-2026/premiacao-2026-10.jpeg',
    'img/premiacao-2026/premiacao-2026-11.jpeg',
    'img/premiacao-2026/premiacao-2026-12.jpeg',
    'img/premiacao-2026/premiacao-2026-13.jpeg',
    'img/premiacao-2026/premiacao-2026-14.jpeg',
    'img/premiacao-2026/premiacao-2026-15.jpeg',
    'img/premiacao-2026/premiacao-2026-16.jpeg',
    'img/premiacao-2026/premiacao-2026-17.jpeg',
    'img/premiacao-2026/premiacao-2026-18.jpeg',
    'img/premiacao-2026/premiacao-2026-19.jpeg',
    'img/premiacao-2026/premiacao-2026-20.jpeg',
    'img/premiacao-2026/premiacao-2026-21.jpeg',
    'img/premiacao-2026/premiacao-2026-22.jpeg',
    'img/premiacao-2026/premiacao-2026-23.jpeg',
    'img/premiacao-2026/premiacao-2026-24.jpeg',
    'img/premiacao-2026/premiacao-2026-25.jpeg',
    'img/premiacao-2026/premiacao-2026-26.jpeg',
    'img/premiacao-2026/premiacao-2026-27.jpeg',
    'img/premiacao-2026/premiacao-2026-28.jpeg',
    'img/premiacao-2026/premiacao-2026-29.jpeg',
    'img/premiacao-2026/premiacao-2026-30.jpeg',
    'img/premiacao-2026/premiacao-2026-31.jpeg',
    'img/premiacao-2026/premiacao-2026-32.jpeg',
    'img/premiacao-2026/premiacao-2026-33.jpeg',
    'img/premiacao-2026/premiacao-2026-34.jpeg',
    'img/premiacao-2026/premiacao-2026-35.jpeg',
];

/* ====================================================== */
/* EVENTO EM DESTAQUE (home) */
/* ====================================================== */

$JANTAR = [
    'imagem'   => 'img/Jantar_2026.09.11.jpeg',
    'titulo'   => 'Jantar Beneficente',
    'convite'  => 'ASSOCIAÇÃO ANTI-ALCOÓLICA TAQUARITINGA convida-os para',
    'data'     => '11/09/2026',
    'horario'  => '20:00',
    'valor'    => 'R$ 70,00',
    'contato'  => '(16) 99612-7221',
    'local'    => "Sede da Associação Anti-Alcoólica<br />Av. João de Jorge, 538 - Vila Rosa",
    'show'     => 'Sertanejo Raiz - Cia das Cordas',
    'show_tel' => '(16) 98152-4049',
    'entrada'  => 'Patê, Torrada, Salada Verde e Batata Temperada',
    'principal'=> 'Rondelli, Arroz, Feijão Tropeiro, Lombo, Torresmo, Couve',
];

/* ====================================================== */
/* HELPER */
/* ====================================================== */

/** Escapa texto para saida em HTML. */
function e(?string $texto): string
{
    return htmlspecialchars((string) $texto, ENT_QUOTES, 'UTF-8');
}

/**
 * Pasta em que o site esta instalado, detectada automaticamente.
 * Vazia quando o site esta na raiz do dominio ("/"), ou "/aaat" quando
 * esta em uma subpasta. E o que permite o mesmo codigo rodar em
 * http://localhost/aaat/ e em https://aaat.org/ sem alteracao.
 */
$BASE = dirname($_SERVER['SCRIPT_NAME'] ?? '/');
$BASE = rtrim(strtr($BASE, DIRECTORY_SEPARATOR, '/'), '/');
if ($BASE === '/') {
    $BASE = '';
}

/** Retorna a pasta base do site (sem barra no final). */
function base_url(): string
{
    global $BASE;

    return $BASE;
}

/**
 * Monta a URL de um arquivo do site: prefixa a pasta base e codifica cada
 * segmento do caminho. A codificacao e necessaria porque ha nomes com espacos
 * e parenteses, como "img2/A1 (67).jpeg" e "Docs/ATA BIENIO 2025 - 2027.pdf".
 */
function asset(string $caminho): string
{
    $segmentos = array_map('rawurlencode', explode('/', ltrim($caminho, '/')));

    return base_url() . '/' . implode('/', $segmentos);
}

/**
 * URLs limpas (/eventos) dependem do mod_rewrite do Apache lendo o .htaccess.
 * Quando isso nao esta disponivel, todo link interno daria 404.
 *
 *   false -> links como /index.php?p=eventos  (funciona em qualquer servidor)
 *   true  -> links como /eventos              (exige mod_rewrite + .htaccess)
 *
 * Deixe false ate confirmar no navegador que https://seusite/eventos abre.
 */
$URLS_LIMPAS = true;

/** Monta a URL de uma pagina do site: url('eventos') -> /eventos */
function url(string $rota = ''): string
{
    global $URLS_LIMPAS;

    $rota = trim($rota, '/');

    if ($rota === '' || $rota === 'home') {
        return base_url() . '/';
    }

    return $URLS_LIMPAS
        ? base_url() . '/' . $rota
        : base_url() . '/index.php?p=' . rawurlencode($rota);
}
