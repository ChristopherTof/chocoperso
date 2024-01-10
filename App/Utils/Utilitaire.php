<?php

namespace App\Utils;

class Utilitaire {

    // Fonction Method pour netoyer les input d'un formulaire.
    public static function cleanInput(?string $value): ?string {
        return htmlspecialchars(strip_tags(trim($value)), ENT_NOQUOTES);
    }


    //Fonction Method pour verifier les extensions de fichiers
    public static function getFileExtension($url_image) {
        return substr(strrchr($url_image, '.'), 1);
    }

    // Fonction method Automatisation d'affichage de tableau
    public static
    function printInfo($content, $param = false) {
        echo '<pre>';
        var_dump($content);
        echo '</pre>';
        if ($param) {
            die;
        }
    }
}
