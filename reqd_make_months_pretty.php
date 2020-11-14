<?php

      // month format we don't like
      $bad_months = array();
      $bad_months[0] = '/Jan/';
      $bad_months[1] = '/Feb/';
      $bad_months[2] = '/Mar/';
      $bad_months[3] = '/Apr/';
      $bad_months[4] = '/Jun/';
      $bad_months[5] = '/Jul/';
      $bad_months[6] = '/Aug/';
      $bad_months[7] = '/Sep/';
      $bad_months[8] = '/Oct/';
      $bad_months[9] = '/Nov/';
      $bad_months[10] = '/Dec/';

      // month format we do like
      $good_months = array();
      $good_months[0] = 'January';
      $good_months[1] = 'February';
      $good_months[2] = 'March';
      $good_months[3] = 'April';
      $good_months[4] = 'June';
      $good_months[5] = 'July';
      $good_months[6] = 'August';
      $good_months[7] = 'September';
      $good_months[8] = 'October';
      $good_months[9] = 'November';
      $good_months[10] = 'December';
      
      // replace
      $make_months_pretty = preg_replace($bad_months, $good_months, $use_this_date);
      
  print '<!-- ';
  print_r($make_months_pretty);
  print ' -->';

?>
