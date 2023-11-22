<?php

class Student
{
    private static function hello()
    {
        echo "This is static hello function";
    }

    public static function __callStatic( $name, $arguments )
    {
        if ( method_exists( __CLASS__, $name ) ) {
            call_user_func_array([__CLASS__, $name], $arguments);
        } else {
            echo "Method does not exist: ({$name})";
        }
    }

}

Student::hello();
