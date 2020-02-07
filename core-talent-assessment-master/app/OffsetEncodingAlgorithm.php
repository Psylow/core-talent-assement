<?php

/**
 * Class OffsetEncodingAlgorithm
 */
class OffsetEncodingAlgorithm implements EncodingAlgorithm
{
    /**
     * Lookup string
     */
    const CHARACTERS = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    /**
     * @var int
     */
    private $offset;

    /**
     * @param int $offset
     */
    public function __construct($offset = 13)
    {
        $this->offset = $offset;
    }

    /**
     * Encodes text by shifting each character (existing in the lookup string) by an offset (provided in the constructor)
     * Examples:
     *      offset = 1, input = "a", output = "b"
     *      offset = 2, input = "z", output = "B"
     *      offset = 1, input = "Z", output = "a"
     *
     * @param string $text
     * @return string
     */
    public function encode($text)
    {
        /**
         * @TODO: Implement it
         */


        for($i = 0; $i < strlen($text); $i++){
            $result = strpos(CHARACTERS, $text[$i]);
            $result += $this->offset;
            $text[$i] = $this->CHARACTERS[$result];
        }

        echo "this is so cool : \n";
        echo $text;
        return $text;
        // on cherche l'index correspondant à la lettre dans CHARACTERS par exemple a = 0 et b = 1
        // résultat + $this->offset = new index
        // $text[i] = CHARACTERS[new_index]
    }
}

$new = new OffsetEncodingAlgorithm;


// mettre limite CHARACTERS
// gestion d'erreur 