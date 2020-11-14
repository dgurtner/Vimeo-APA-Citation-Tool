<?php
      
$letters_array = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');

$rand_1 = rand(0,25);
$rand_2 = rand(0,9);
$rand_3 = rand(0,25);
$rand_4 = rand(0,9);
$rand_5 = rand(0,25);
$rand_6 = rand(0,9);
$rand_7 = rand(0,25);
$rand_8 = rand(0,9);

$rand_stamp = $letters_array[$rand_1] . $rand_2 . $letters_array[$rand_3] . $rand_4 . $letters_array[$rand_5] . $rand_6 . $letters_array[$rand_7] . $rand_8;

print $rand_stamp;

// can I use special chars?
$hebrew_array = array('א‬','ב‬','ג‬','ד‬','ה‬','ו','ז','ח','ט‬','י','ך','כ','ל','ם','מ','ן','נ','ס','ע','ף','פ','ץ','צ','ק','ר','ש','ת','וּ');
$rand_9 = rand(0,27);
print $hebrew_array[$rand_9];
// apparently...


?>
