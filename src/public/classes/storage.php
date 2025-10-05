<?php

declare(strict_types=1);

final class Storage {
    private string $key;

    public function __construct(string $key = 'ahorcado'){
        $this->key = $key;
    }

    public function get(string $name, $default = null){

    }

    public function set(string $name, $value): void{

    }

    public function reset(): void{
        session_start();
        session_destroy();
        header("Location: index.php");
        exit;
    }

}

?>