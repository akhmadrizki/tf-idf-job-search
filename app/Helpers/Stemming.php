<?php

namespace App\Helpers;

class Stemming {
    protected static $word;

    public static function get($word)
    {
        $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
        $stemmer  = $stemmerFactory->createStemmer();

        return $stemmer->stem($word);
    }
}