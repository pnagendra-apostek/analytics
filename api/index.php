<?php

/**
 * Step 1: Require the Slim Framework using Composer's autoloader
 *
 * If you are not using Composer, you need to load Slim Framework with your own
 * PSR-4 autoloader.
 */
require '../vendor/autoload.php';

/**
 * Step 2: Instantiate a Slim application
 *
 * This example instantiates a Slim application using
 * its default settings. However, you will usually configure
 * your Slim application now by passing an associative array
 * of setting names and values into the application constructor.
 */
$app = new Slim\App();

/**
 * Step 3: Define the Slim application routes
 *
 * Here we define several Slim application routes that respond
 * to appropriate HTTP request methods. In this example, the second
 * argument for `Slim::get`, `Slim::post`, `Slim::put`, `Slim::patch`, and `Slim::delete`
 * is an anonymous function.
 */
 
	/* Without Variables */
	$app->get('/', function ($request, $response, $args) {
		$response->write("Welcome to Slim api!");
		return $response;
	});
	
	/* Single variable */
	$app->get('/svar[/{var}]', function ($request, $response, $args) {
		$response->write($args['var']);
		return $response;
	})->setArgument('var', 'Single Variable Testing');

	/*Multiple Variables*/
	$app->get('/mvar[/{var1}/{var2}]', function ($request, $response, $args) {
		$response->write($args['var1']." == Multiple Variable Testing == " .$args['var2']);
		return $response;
	})->setArgument('var1', 'First Variable')->setArgument('var2', 'Second Variable');
	
	class Emp {
      public $Name = "";
      public $ID  = "";
    }
	/* Getting variable value based on variable name */
	$app->get('/var', function ($request, $response, $args) {
		
		$emp = new Emp();
        $emp->ID = $_GET['id'];
        $emp->Name  = $_GET['name'];
		echo json_encode($emp);
	});
	/*Getting connect with DB*/
	$app->get('/db', function ($request, $response, $args) {
		require_once 'mysql.php';
  
     });
	 

/**
 * Step 4: Run the Slim application
 *
 * This method should be called last. This executes the Slim application
 * and returns the HTTP response to the HTTP client.
 */
$app->run();
