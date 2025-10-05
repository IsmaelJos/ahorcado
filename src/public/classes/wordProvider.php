<?php

declare(strict_types=1);

final class WordProvider {


    public function __construct(
        string $filePath
    ){}

    public function randomWord(): string{
        $palabras = file_get_contents($filePath);
        $arrPalabras = explode(',',$palabras);
        return array_rand($arrPalabras);
    }

}

?>