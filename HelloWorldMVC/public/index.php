<?php

require_once( '../../vendor/autoload.php' );

( new \Staq\Server )
	->addApplication( 'HelloWorldMVC' )
	->getCurrentApplication( )
	->run( );
