<?php
require 'app/bootstrap/autoload.php';
require 'app/bootstrap/database.php';

session_cache_limiter(false);
session_start();

// Create Slim app
$app = new \Slim\Slim([
    'templates.path' => __DIR__ . '/app/views',
    'view' => new \Slim\Views\Twig()
]);

$app->add(new \Slim\Middleware\SessionCookie(array(
    'expires' => '20 minutes',
    'path' => '/',
    'domain' => null,
    'secure' => false,
    'httponly' => false,
    'name' => 'slim_session',
    'secret' => 'CHANGE_ME',
    'cipher' => MCRYPT_RIJNDAEL_256,
    'cipher_mode' => MCRYPT_MODE_CBC
)));

$view = $app->view();
$view->parserOptions = [
    'cache' => __DIR__ . '/app/storage/cache',
    'auto_reload' => true
];
$view->parserExtensions = [
    new \Slim\Views\TwigExtension()
];

// Routes
$app->get('/', function() use ($app) {
    $app->render('home.twig', ['app' => $app]);
})->name('home');

// Cadastro
$app->get('/cadastro', function() use ($app) {
    $app->render('cadastro.twig', ['app' => $app]);
})->name('cadastro');
// Cadastro novo cliente
$app->get('/cadastro-novo-cliente', function() use ($app) {
    $app->render('cadastro-novo-cliente.twig', ['app' => $app]);
})->name('cadastro-novo-cliente');

// FAQ
$app->get('/faq', function() use ($app) {
    $app->render('faq.twig', ['app' => $app]);
})->name('faq');

// Planos
$app->get('/planos', function() use ($app) {
    $app->render('planos.twig', ['app' => $app]);
})->name('planos');

// Planos => One
$app->get('/planos/one', function() use ($app) {
    $app->render('planos/one.twig', ['app' => $app]);
})->name('planos.one');

// Planos => Start
$app->get('/planos/start', function() use ($app) {
    $app->render('planos/start.twig', ['app' => $app]);
})->name('planos.start');

// Planos => Perfect
$app->get('/planos/perfect', function() use ($app) {
    $app->render('planos/perfect.twig', ['app' => $app]);
})->name('planos.perfect');

// Planos => Essencial
$app->get('/planos/essencial', function() use ($app) {
    $app->render('planos/essencial.twig', ['app' => $app]);
})->name('planos.essencial');

$app->post('/newsletter', 'NewsletterController:save')->name('newsAdd');
$app->post('/contato', 'ContatoController:send')->name('sendContato');
$app->post('/cadastro', 'CadastroController:send')->name('sendCadastro');
$app->post('/cadastro-novo-cliente', 'CadastroController:sendNew')->name('sendNewCadastro');

$app->run();
