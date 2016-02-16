<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/LeetSpeak.php";

    session_start();

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"
    ));

    $app->get("/", function() use ($app){
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/LeetSpeak", function() use ($app){
        $newLeetSpeak = new LeetSpeak;
        $result = $newLeetSpeak->toLeetSpeak($_GET['words']);
        return $app['twig']->render('index.html.twig', array('leet'=>$result));

    });

    return $app;
 ?>
