<?php

print '<!-- unsorted -->';
print '<!-- ';
print_r($alef_bet);
print ' -->';

sort($alef_bet,SORT_NATURAL);
if(sort($alef_bet)) {
  print '<!-- sort -->';
} else {
  print '<!-- no sort -->';
}

$alef_length = count($alef_bet);
for($alef_x = 0; $alef_x < $alef_length; $alef_x++) {
  print $alef_bet[$alef_x];
}

print '<!-- sorted -->';
print '<!-- ';
print_r($alef_bet);
print ' -->';

?>
