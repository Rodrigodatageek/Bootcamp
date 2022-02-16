<?php  


class Session
{
    // One object of this class that we'll create and keep
    public static $instance = null;

    // get that one session instance
    // create it if it is not yet created
    public static function instance()
    {
        if (static::$instance === null) {
            static::$instance = new Session;
        }
        return static::$instance;
    }

    // Object properties and methods below this point

    // data from the $_SESSION
    public $data = [];

    public function __construct()
    {
        session_start();

        $this->data = $_SESSION;
    }

    public function set($key, $value)
    {
        $this->data[$key] = $value;

        $_SESSION[$key] = $value;

    }
    // gets a value from the session or returns the value of $default if $key is not found 
    public function get($key, $default = null)
    {
        return $this->data[$key] ?? $default;

    }

    
    
    

}