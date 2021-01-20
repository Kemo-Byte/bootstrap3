<?php

function lang($word) {

$lang =  array(
'logo'=> 'كيموبايت',
'Home' => 'الصفحة الرئيسية',
'About' => 'عن الموقع',
'Company' => 'الشركة',
'services' => 'الخدمات',
'Programming' =>'برمجة' ,
'Web Design' => 'تصميم الويب',
'Desktop' => 'سطح المكتب',
'Web Hosting' =>'إستضافت الويب' ,
'Map' => 'خريطة الموقع',
'Contact' => 'تواصل معنا',


	 );

return (isset($word))? $lang[$word] : '';
}

?>
