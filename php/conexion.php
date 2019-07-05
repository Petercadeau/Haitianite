<?php
	$serverName = "WIN81\SQLEXPRESS"; //serverName\instanceName
	$connectionInfo = array( "Database"=>"Haitianite", "UID"=>"peterca", "PWD"=>"peter130498");
	$conn = sqlsrv_connect( $serverName, $connectionInfo);

	if( $conn ) {
	    /* echo "Conexión establecida.<br />";*/
	}else{
	     echo "Conexión no se pudo establecer.<br />";
	     die( print_r( sqlsrv_errors(), true));
	}
?>