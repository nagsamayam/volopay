<?php
if (!function_exists('full_title')) {
    function full_title($pageTitle = ''): string
    {
        if (!$pageTitle) {
            return config('app.name');
        }

        return config('app.name') . ' - ' . $pageTitle;
    }
}

if (!function_exists('ga_tracking_id')) {
    function ga_tracking_id(): string
    {
        return config('services.google_analytics.tracking_id');
    }
}

if (!function_exists('set_active')) {
    function set_active($path, $strict = false, $active = 'active'): string
    {
        $is = false;
        foreach ((array)$path as $k => $v) {
            $v = $strict ? $v : $v . '*';
            if (Request::is($v)) {
                $is = true;
                break;
            }
        }

        return $is ? " class=$active" : '';
    }
}

if (!function_exists('uri_exists')) {
    function uri_exists($uri): bool
    {
        $is = false;
        foreach ((array)$uri as $k => $v) {
            if (Request::is($v)) {
                $is = true;
                break;
            }
        }

        return $is;
    }
}