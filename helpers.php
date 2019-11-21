<?php

if (!function_exists('vImg')) {

    /**
     * Fix img path
     *
     * @param string $path
     * @param string $default
     *
     * @return string
     */
    function vImg($path, $default = '')
    {
        if (preg_match('@^http[s]?://@i', $path)) {
            return $path;
        }

        return Voyager::image($path, $default);
    }
}