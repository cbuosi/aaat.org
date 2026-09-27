<?php
/**
 * Programa unico do site: recebe a pagina pela URL, monta o layout
 * (cabecalho + menu, conteudo, rodape) e serve a resposta.
 *
 * URLs limpas via .htaccess:  /eventos  ->  index.php?p=eventos
 */

require_once __DIR__ . '/config.php';

$rota = trim($_GET['p'] ?? '');

if ($rota === '') {
    $rota = 'home';
}

if (!isset($ROUTES[$rota])) {
    http_response_code(404);
    $rota = '404';
    $PAGINA = [
        'file'  => '404.php',
        'title' => 'Página não encontrada',
        'desc'  => 'A página que você procura não existe.',
    ];
} else {
    $PAGINA = $ROUTES[$rota];
}

require __DIR__ . '/layout/header.php';
require __DIR__ . '/pages/' . $PAGINA['file'];
require __DIR__ . '/layout/footer.php';
