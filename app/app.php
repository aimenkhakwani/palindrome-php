<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Palindrome.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();
    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../view'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->get("/output", function() use ($app) {
        $newPali = new Palindrome;
        $output = $newPali->evaluate($_GET['input']);
        return $app['twig']->render('output.html.twig', array('output'=>$output));
    });

    return $app;
?>
