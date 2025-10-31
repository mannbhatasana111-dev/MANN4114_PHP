<?php
if (!function_exists('my_plugin_function')) 
{
    function my_plugin_function() 
    {
        echo "Plugin is working!";
    }
}

if (function_exists('my_plugin_function')) 
{
    my_plugin_function();
} 
else 
{
    echo "Plugin function not found.";
}
?>
