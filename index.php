<?php
require "private/includes/config.php";
require "private/includes/model.php";
require "private/includes/controllers.php";

$CONFIG = require('./private/includes/config.php');

if ( ! isset( $_GET['page'] ) ) {
	header( 'Status: 404' );
	echo '404 Page Not Found';
	exit;
}

switch ( $_GET['page'] ) {
	case '':
        home();
        break;
	case 'home':
		home();
        break;
    case 'checkpassword':
        checkpassword();
        break;
    case 'createaccount':
        createaccount();
        break;
        
}
