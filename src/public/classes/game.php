<?php

declare(strict_types=1);

final class Game {
    private string $word;
    private int $maxAttempts;
    private array $usedLetters;
    private array $state;


    public function __construct(
        string $word, 
        int $maxAttempts = 6, 
        ?array $state = null,
        array $usedLetters 
    ) {}

    public static function guessLetter(string $letter): void{
        if (isset($_POST['letra'])) {
            $letra = strtoupper($_POST['letra']);
            if (!in_array($letra, $_SESSION['letras_usadas'])) {
                $_SESSION['letras_usadas'][] = $letra;
                if (strpos($_SESSION['palabra'], $letra) === false) {
                    $_SESSION['intentos']--;
                }
            }
        }
    }

    public function getMaskedWord(): string {
        $mostrar = "";
        foreach (str_split($_SESSION['palabra']) as $letra) {
            $mostrar .= in_array($letra, $_SESSION['letras_usadas']) ? $letra : "_";
        }
        return $mostrar;
    }

    public function getAttemptsLeft(): int {
        $_SESSION['intentos'];
    }

    public function getUsedLetters(): array{
        return $this->usedLetters;
    }

    public function isWon(): bool{
        if ($this->getMaskedWord() === $_SESSION['palabra']) {
            return true;
        }
        return false;
    }

    public function isLost(): bool{
        if ($_SESSION['intentos'] <= 0) {
            return true;
        }
        return false;
    }

    public function getWord(): string{
        return $this->word;
    }

    public function toState(): array{

    }

}


?>