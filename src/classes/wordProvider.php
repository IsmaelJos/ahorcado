<?php

declare(strict_types=1);

namespace src\classes\wordProvider;

final class WordProvider {

    private string $filePath;

    public function __construct(string $filePath){
        $this->filePath = $filePath;
    }

    public function randomWord(): string{
        $palabras = file_get_contents($this->filePath);
        $arrPalabras = explode(',',$palabras);
        return array_rand($arrPalabras);
    }

    private function normalize(string $text): string
    {
        return preg_replace('([^A-Za-z0-9 ])', '', $text);
    }

}

?>