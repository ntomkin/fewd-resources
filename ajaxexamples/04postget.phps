<?

switch ($_REQUEST['act']):

case 'edit':
	echo "Edit is successful $_REQUEST[name] ". $_SERVER['REQUEST_METHOD'];
	break;
case 'insert':
	echo "Insert has been successful $_REQUEST[name] " .  $_SERVER['REQUEST_METHOD'];
	break;
default:
	echo 'This should not happen';
endswitch;


?>