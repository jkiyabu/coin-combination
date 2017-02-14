<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/CoinCombinations.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get('coin_combination', function() use ($app) {
        $coin_combination = new CoinCombination;
        $quarters = $coin_combination->numberOfQuarters($_GET['change']);
        $dimes = $coin_combination->numberOfDimes($_GET['change']);
        $nickles = $coin_combination->numberOfNickles($_GET['change']);
        $pennies = $coin_combination->numberOfPennies($_GET['change']);
        return $app['twig']->render('coin_combination.html.twig', array('quarters' => $quarters, 'dimes' => $dimes, 'nickles' => $nickles, 'pennies' => $pennies));
    });

    return $app;
?>
