<?php

class utility
{
    static function js_redirect($a)
    {
        echo "<script>window.location.href = '$a'</script>";
    }

    static function js_alert($message)
    {
        echo "<script>alert('$message')</script>";
    }   
}
