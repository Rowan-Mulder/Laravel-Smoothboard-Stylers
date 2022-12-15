<?php

if (!function_exists('formatField')) {
    function formatField($name) {
        return ucfirst(str_replace('_', ' ', $name));
    }
}
