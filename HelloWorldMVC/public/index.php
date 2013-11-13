<?php

require_once( '../../vendor/autoload.php' );

( new \Staq\Server )
	->addApplication( 'HelloWorldMVC' ) // This name should match with a top namespace, and a main folder
    	->addPlatform( 'local' )            // This a way to say that we are in a local environment. For example, that enables the error traces
	->getCurrentApplication( )          // We get the current application, we just added one so we know which we will have
	->run( );                           // Resolve the current route, call a controller and display the result
