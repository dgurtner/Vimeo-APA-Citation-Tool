<?php
        
    $date_break_1 = explode('","uploaded_on_full":"', $vimeo_page);

    // create correct APA date format
    $date_break_2 = explode('","is_spatial":', $date_break_1[1]);
    $date_break_3 = explode(', ', $date_break_2[0]);
    
    $video_month_daynum = $date_break_3[1];
    $video_year = explode(' at', $date_break_3[2]);
    
    $video_date = ', ';
    $video_date = "$video_month_daynum, $video_year[0]";
    
    if ($video_date != ', ') {
        $use_this_date = $video_date;
    } else {
        $use_this_date = date("Y, F j");
    }
    
  // print '<!-- ';
  // print_r($use_this_date);
  // print ' -->';

?>
