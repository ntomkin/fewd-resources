<?

$provinces  =  array(		
				'AB' => 'Alberta',
				'BC' => 'British Columbia',
				'MB' => 'Manitoba',
				'NB' => 'New Brunswick',
				'NF' => 'Newfoundland',
				'NT' => 'Northwest Territories',
				'NS' => 'Nova Scotia',
				'NU' => 'Nunavut',
				'ON' => 'Ontario',
				'PE' => 'Prince Edward Island',
				'QC' => 'Quebec',
				'SK' => 'Saskatchewan',
				'YT' => 'Yukon Territory') ; 

switch ($_REQUEST['act']):

case 'provinces':

         $outputString = "";
	 
	 foreach ($provinces as $key => $val):
	 	$outputString .= "<li> $key:$val </li>";
	 endforeach; 
	 echo $outputString;
	break;
 
default:
	echo 'This should not happen';
endswitch;


?>
