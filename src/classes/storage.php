<?php

declare(strict_types=1);

namespace src\classes\storage;

final class Storage {
    private string $key;

    public function __construct(string $key = 'ahorcado'){
        $this->key = $key;
    }

    public function get(string $name, $default = null): mixed{
        if($_SESSION[$name] != null ){
            return $_SESSION[$name];
        }
        return $default;
    }

    public function set(string $name, $value): void{
        $_SESSION[$name] = $value; 
    }

    public function reset(): void{
        session_start();
        session_destroy();
        header("Location: index.php");
        exit;
    }

}

?>