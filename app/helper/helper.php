<?php 



if(!function_exists('fix_title')) {
    function fix_title($title) {
        $title = str_replace(['0','1','2','3','4','5','6','7','8','9', '.'], '', $title);
        return $title;
    }
}

if(!function_exists('addinEnInSpan')) {
    function addinEnInSpan($term) {

        return ;
    }
}

?>