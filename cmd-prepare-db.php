<?php

	require "wp-config.php";
	
	$dbContents = file_get_contents("./database.sql");
	
	/*
		Add any required environments here.
	*/

	$environments = array(
		"staging" 		=> STAGING_URL,
		"production" 	=> PRODUCTION_URL
	);

	foreach( $environments as $env => $url ){

		file_put_contents( $env . ".sql", 
			str_replace( DEVELOPMENT_URL, $url, $dbContents )
		);
	}