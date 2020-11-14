<?php

$cite_in_spanish = $_POST['espanol'];

// add some logic
if($cite_in_spanish != '' && $cite_in_spanish === 'por favor') {
  
  // print '<!-- ' . $cite_in_spanish . ' -->';
  
  // english months
  $eng_months = array();
  $eng_months[0] = '/January/';
  $eng_months[1] = '/February/';
  $eng_months[2] = '/March/';
  $eng_months[3] = '/April/';
  $eng_months[4] = '/May/';
  $eng_months[5] = '/June/';
  $eng_months[6] = '/July/';
  $eng_months[7] = '/August/';
  $eng_months[8] = '/September/';
  $eng_months[9] = '/October/';
  $eng_months[10] = '/November/';
  $eng_months[11] = '/December/';

  // spanish months
  $esp_months = array();
  $esp_months[0] = 'enero';
  $esp_months[1] = 'febrero';
  $esp_months[2] = 'marzo';
  $esp_months[3] = 'abril';
  $esp_months[4] = 'mayo';
  $esp_months[5] = 'junio';
  $esp_months[6] = 'julio';
  $esp_months[7] = 'agosto';
  $esp_months[8] = 'septiembre';
  $esp_months[9] = 'octubre';
  $esp_months[10] = 'noviembre';
  $esp_months[11] = 'deciembre';

  // replace for spanish
  $spanish_months = ucwords(preg_replace($eng_months, $esp_months, $use_this_date));
  $spanish_today = preg_replace($eng_months, $esp_months, $current_date);

  // print '<!-- ';
  // print_r($spanish_taday);
  // print ' -->';

  $print_it = "<p>$video_producer (Producer). ($spanish_months). <em>$video_title</em>. Encontrado $spanish_today,&nbsp;<a href='$vimeo_link' target='_blank' title='$video_title' rel='noopener' class='inline_disabled' id='vimeo_link_$count_inputs'>$vimeo_link</a></p>";
}

?>
