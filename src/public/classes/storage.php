<?php

declare(strict_types=1);

final class Storage {

    public function __construct(
        string $key = 'ahorcado'
    ){}

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