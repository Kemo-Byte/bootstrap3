<?php

function lang($word) {
$lang =  array(


'logo' => 'KemoByte',
'Home' => 'Home',
'About' => 'About',
'Company' => 'Company',
'services' => 'services',
'Programming' =>'Programming' ,
'Web Design' => 'Web Design',
'Desktop' => 'Desktop',
'Web Hosting' =>'Web Hosting' ,
'Map' => 'Map',
'Contact' => 'Contact',


	 );
return (isset($word))? $lang[$word] : '';
}

?>