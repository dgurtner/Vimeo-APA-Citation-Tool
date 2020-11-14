<!DOCTYPE html>
<html>
<head>
  <!-- version 201810021503 -->
  <title>Paste Individual Links - Citing Vimeo Videos</title>
  <link rel="stylesheet" type="text/css" href="../citingyoutube/style.css?<?php require_once('reqd_force_reload_assets.php') ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../citingyoutube/numpy.css?<?php require_once('reqd_force_reload_assets.php') ?>" />
  <style type="text/css" id="switch"></style>

  <script type="text/javascript">
    function validateForm() {
      var vm_1=document.forms["yoururls"]["vm_1"].value;
      if (vm_1 == null || vm_1 == "") {
        alert("SERIOUSLY! Please add at least ONE vimeo link!");
        return false;
      }
    }
  </script>
  
  <script type="text/javascript" src="../citingyoutube/numpy.js"></script>

</head>
<body id="rapper">

  <div id="main">
<?php

// print citations
$current_date = date("F j, Y");
$is_it_si = $_GET['done'];
if ($is_it_si != '' || $is_it_si != null) {
  
  $count_inputs = 1;
  while ($count_inputs <= $is_it_si) {
    $vimeo_link = $_POST['vm_'.$count_inputs];
    
    // video title n'stuff
    require('reqd_video_title_nstuff.php');
        
    // format video date
    require('reqd_video_date_format.php');
    
    // make months pretty
    // require('reqd_make_months_pretty.php');
    // not necessary for vimeo
    
    $print_it = "<p>$video_producer (Producer). ($use_this_date). <em>$video_title</em>. Retrieved $current_date,&nbsp;<a href='$vimeo_link' target='_blank' title='$video_title' rel='noopener' class='inline_disabled' id='vimeo_link_$count_inputs'>$vimeo_link</a></p>";
    
    // $is_unavailable = preg_match("/unavailable-message/i", $vimeo_page, $matches, PREG_OFFSET_CAPTURE);
    // print_r ($matches);

    require('reqd_cite_in_spanish.php');
    
    if ($video_title != '' || $video_title != null) {
      // print $print_it;
      $alef_bet[] .= $print_it;
    }
    
    $count_inputs++;
      
  }
  
  // print 'sort<br><br>';
  require('reqd_alef_bet.php');
  print '<p>&nbsp;</p>';
  
  print '<p><a class="another" href="/citingvimeo/" title="Do Another!">another!</a></p>';

} else {

  // how many videos?
  $min_urls = 1;
  $how_many = $_GET['n'];
  
  if ($how_many == '' || $how_many == 0 || $how_many == null || $how_many <= $min_urls) {
    $how_many = $min_urls;
    
    print '<p>Please add a vimeo link to begin.</p>';
    print '<form action="/citingvimeo/?done=1" method="post" onsubmit="return validateForm()" name="yoururls">';
    print '<p><input type="text" maxlength="255" name="vm_1" value="" class="urls"></p>';
    print '<p><input type="checkbox" name="espanol" value="por favor">Make Citation(s) Spanish</p>';
    print '<p><input type="submit" name="submit" value="cite!"></p></form>';
    print '<form action="/citingvimeo/" method="get">';
    print '<p>Adding more links? How many?</p>';
    print '<p><input type="text" maxlength="2" name="n" value="" class="urls how_many"></p>';
    print '<p><input type="submit" name="submit_how_many" value="fields!"></p></form>';
    // print '<p>OR paste in a list of links:</p>';
    // print '<p><a class="another" href="/citingvimeo/add_urls.php">CLICK HERE!</a></p><p>&nbsp;</p>';
    
  } else {
    
    print '<form action="/citingvimeo/?done=' . $how_many . '" method="post" onsubmit="return validateForm()" name="yoururls">';
    print '<p>Please add a vimeo link to begin.</p>';

    // get some urls
    $count = 1;
    while ( $count <= $how_many) {
      print '<p><input type="text" maxlength="255" name="vm_' . $count . '" value="" class="urls"></p>';
      $count++;
    }

    print '<p><input type="checkbox" name="espanol" value="por favor">Make Citation(s) Spanish</p>';
    print '<p><input type="submit" name="submit" value="citations!"></p></form>';
  
  }
  
}

?>

  </div>
  
<?php

require_once "sidebar.php";

?>
  <div class="clear_fix"></div>
  
  <?php require_once('../citingyoutube/helloworld.php'); ?>
</body>
</html>

