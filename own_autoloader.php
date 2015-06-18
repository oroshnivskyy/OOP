<?php
function autoload($className)
{echo $className, ":";
    $path = "src".DIRECTORY_SEPARATOR;
    $className = ltrim($className, '\\');
    $fileName  = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    echo $fileName, "\n";
    require $path.$fileName;
}
spl_autoload_register('autoload');