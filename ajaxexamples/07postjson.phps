<?
$options = array( 
		'nullState'				 => array(	'nullKey'=>'nullProv',
											'nullMsg' => '---Select One Province---' 
									   ),
		'Provinces' => array(		
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
									'YT' => 'Yukon Territory'),
		'States' => array(
									'AK' => 'Alaska',
									'AL' => 'Alabama',
									'AR' => 'Arkansas',
									'AZ' => 'Arizona',
									'CA' => 'California',
									'CO' => 'Colorado',
									'CT' => 'Connecticut',
									'DC' => 'District of Columbia',
									'DE' => 'Delaware',
									'FL' => 'Florida',
									'GA' => 'Georgia',
									'HI' => 'Hawaii',
									'IA' => 'Iowa',
									'ID' => 'Idaho',
									'IL' => 'Illinois',
									'IN' => 'Indiana',
									'KS' => 'Kansas',
									'KY' => 'Kentucky',
									'LA' => 'Louisiana',
									'MA' => 'Massachusetts',
									'MD' => 'Maryland',
									'ME' => 'Maine',
									'MI' => 'Michigan',
									'MN' => 'Minnesota',
									'MO' => 'Missouri',
									'MS' => 'Mississippi',
									'MT' => 'Montana',
									'NC' => 'North Carolina',
									'ND' => 'North Dakota',
									'NE' => 'Nebraska',
									'NH' => 'New Hampshire',
									'NJ' => 'New Jersey',
									'NM' => 'New Mexico',
									'NV' => 'Nevada',
									'NY' => 'New York',
									'OH' => 'Ohio',
									'OK' => 'Oklahoma',
									'OR' => 'Oregon',
									'PA' => 'Pennsylvania',
									'PR' => 'Puerto Rico',
									'RI' => 'Rhode Island',
									'SC' => 'South Carolina',
									'SD' => 'South Dakota',
									'TN' => 'Tennessee',
									'TX' => 'Texas',
									'UT' => 'Utah',
									'VA' => 'Virginia',
									'VT' => 'Vermont',
									'WA' => 'Washington',
									'WI' => 'Wisconsin',
									'WV' => 'West Virginia',
									'WY' => 'Wyoming') );
	
switch ($_REQUEST['act']):
	case 'provinces':
		 echo json_encode($options['Provinces']);
		break;
	case 'states':
		echo json_encode($options['States']);
		break;
	default:
		echo 'This should not happen';
endswitch;


?>