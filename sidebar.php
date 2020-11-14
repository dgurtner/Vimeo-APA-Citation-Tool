<?

$its_me = stripcslashes($_SERVER['PHP_SELF']);

if ($its_me == '/citingvimeo/add_urls.php') {
  $switch_blurb = 'Would you rather add vimeo links into a form individually?';
  $switch_link = '/citingvimeo/index.php';
} else {
  $switch_blurb = 'Would you rather add a list of vimeo links into a form in bulk?';
  $switch_link = '/citingvimeo/add_urls.php';
}
?>

<div id="right_bar">
  <p><?php print $switch_blurb; ?></p>
  <p><a class="another" href="<?php print $switch_link; ?>">CLICK HERE!</a></p>

</div>
