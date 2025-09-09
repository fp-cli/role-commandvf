<?php

if ( ! class_exists( 'FP_CLI' ) ) {
	return;
}

$fpcli_role_autoloader = __DIR__ . '/vendor/autoload.php';
if ( file_exists( $fpcli_role_autoloader ) ) {
	require_once $fpcli_role_autoloader;
}

FP_CLI::add_command( 'cap', 'Capabilities_Command' );
FP_CLI::add_command( 'role', 'Role_Command' );
