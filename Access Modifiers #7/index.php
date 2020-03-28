<?php

class User
{
    public $name = "Michael";
    private $password = "123456";
    protected $email = "abc@example.com";

    public function getPass()
    {
        return $this->password;
    }

}

class Admin extends User
{
    public function __construct()
    {
        echo $this->email . "\n";
    }
    public function modifyPassword()
    {
        $this->password = "modified" . $this->password;
    }
}

$user = new User;
echo $user->name; // Michael

echo "\n";

// echo $user->password;
// Fatal error: Uncaught Error: Cannot access private property User::$password

// echo $user->email;
// Fatal error: Uncaught Error: Cannot access protected property User::$email

// password can only be accessed from inside the class.
// e.g. but using a get... method
echo $user->getPass(); // 123456

echo "\n";

// Child classes of the parent class can access the protected properties.
$admin = new Admin; // abc@example.com

// Child classes can access public methods from the parent.
echo $admin->getPass(); // 123456

// Child classes do not have access to parent private properties.
// echo $admin->password;
// Notice: Undefined property: Admin::$password

// Child classes do not have access to parent private properties even on methods.
// echo $admin->modifyPassword()
// Notice: Undefined property: Admin::$password;
