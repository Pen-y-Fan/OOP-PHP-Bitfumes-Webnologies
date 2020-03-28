<?php

spl_autoload_register(
    function ($class) {

        $filename = strtolower($class . ".php");
        echo "Search for file: $filename \n";
        // $checkFile = file_exists("./" . $filename);

        $included = include_once $filename;
        if (!$included) {
            echo "$filename has not been included \n";
        }
        // } catch (Exception $e) {
        //     echo "There was an error with class: $class or opening file: $filename";
        //     echo "\nError: $e";
        // }
        // if (!$checkFile) {
        //     echo $filename . " not found";
        //     return false;
        // } else {

        //     echo $class;
        //     include $filename;
        //     return true;
        // }
    }
);
