<?php
use Philo\Blade\Blade;
if (!function_exists('view')) {
    function view($name = NULL, $data = [], $mergeData = []) {
        $CI =& get_instance();
        if (!isset($CI->blade)) {
            $views = __DIR__ . '/../views';
            $cache = __DIR__ . '/../cache';
            $CI->blade = new Blade($views, $cache);
        }
        echo $CI->blade->view()->make($name, $data, $mergeData)->render();
    }
}
