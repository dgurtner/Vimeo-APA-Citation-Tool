<?php

    $vimeo_page = '';
    $vimeo_page = file_get_contents($vimeo_link);
    
    $title_break1 = explode(',"title":"', $vimeo_page);
    $title_break2 = explode('","description":"', $title_break1[1]);
    $video_title = ucwords(strtolower($title_break2[0]));
    
    $pub_break1 = explode(',"display_name":"', $vimeo_page);
    $pub_break2 = explode('","has_advanced_stats"', $pub_break1[1]);
    $video_producer = ucwords(strtolower($pub_break2[0]));

?>
