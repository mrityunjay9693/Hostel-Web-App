<?php

class utility
{
    static function js_redirect($url)
    {
        echo "<script>window.locaion.href = '$url'</script>";
    }

    static function js_alert($message)
    {
        echo "<script>alert('$message')</script>";
    }
}
