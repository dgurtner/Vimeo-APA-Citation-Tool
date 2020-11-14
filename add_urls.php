<!DOCTYPE html>
<html>
<head>

  <title>Paste a List - Citing Vimeo Videos</title>
  <link rel="stylesheet" type="text/css" href="../citingyoutube/style.css?<?php require_once('reqd_force_reload_assets.php') ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../citingyoutube/numpy.css?<?php require_once('reqd_force_reload_assets.php') ?>" />
  <style type="text/css" id="switch"></style>
  
  <script type="text/javascript" src="../citingyoutube/numpy.js"></script>

</head>
<body id="rapper">
  <div id="main">

<?php

$sent_me_links = $_POST['vimeo_link_list'];
$links_to_array = explode("\r\n", $sent_me_links);

print '<!-- 

 ';
print_r($links_to_array);
print ' 
 -->';

$current_date = date("F j, Y");

if ($sent_me_links != '' || $sent_me_links != null) {
  
  $count_links = 0;
  $link_sum = count($links_to_array) - 1;
  
  while ($count_links <= $link_sum) {
    $vimeo_link = $links_to_array[$count_links];
        
    // video title n'stuff
    require('reqd_video_title_nstuff.php');
    
    // format video date
    require('reqd_video_date_format.php');
    
    // make months pretty
    // require('reqd_make_months_pretty.php');
    // not necessary for vimeo
          
    $print_it = "<p>$video_producer (Producer). ($use_this_date). <em>$video_title</em>. Retrieved $current_date,&nbsp;<a href='$vimeo_link' target='_blank' title='$video_title' rel='noopener' class='inline_disabled' id='vimeo_link_$count_inputs'>$vimeo_link</a></p>";
    
    require('reqd_cite_in_spanish.php');
    
    if ($video_title != '' || $video_title != null) {
      // print $print_it;
      $alef_bet[] .= $print_it;
    }
    
    $count_links++;
    $print_it = '';

  }

  // print 'sort<br><br>';
  require('reqd_alef_bet.php');

  print '<p><a class="another" href="/citingvimeo/add_urls.php" title="Do Another!">another!</a></p>';

} else {

?>
    <form action="/citingvimeo/add_urls.php" method="post" name="just_urls">
      <textarea name="vimeo_link_list" id="vimeo_link_list" rows="20" cols="80"></textarea>
      <p><input type="checkbox" name="espanol" value="por favor">Make Citation(s) Spanish</p>
      <p><input type="submit" name="send_me_links" value="cite!" id="send_link_list"></p>
    </form>

  </div>
<?php
}

require_once "sidebar.php";

?>
  <div class="clear_fix"></div>
  
  <?php require_once('../citingyoutube/helloworld.php'); ?>
</body>
</html>

