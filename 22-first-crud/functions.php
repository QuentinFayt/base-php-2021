<?php

function cuteTheText(string $text, int $length = 255): string
{
    return strlen($text) > $length ? substr($text, 0, strrpos(substr($text, 0, $length), ' ')) . " ..." : $text;
}

function frenchDate($date, $format = 1)
{

    // sortie
    $out = "";

    // Les jours en français
    $joursTab = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];

    // Les mois en français, on le fait commencer à 1, car l'expression "n" de date nous donne les mois de 1 (janvier) à 12 (décembre)
    $moisTab = [1 => "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"];

    // transformation de la date en Timestamp (secondes depuis le 1/1/1970 )
    $date = strtotime($date);

    // En switch (vérification d'égalité non stricte "==")
    switch ($format) {

        case 1:
            $out .=
                $joursTab[date("w", $date)] . " " // jour de la semaine en français
                . date("d", $date) . " " // chiffre du jour
                . $moisTab[date("n", $date)] . " " // mois en français
                . date("Y à H:i", $date); // année / heures / minutes
            break;

        case 2:
            $out .=
                // .$joursTab[date("w",$date)]." " // jour de la semaine en français
                date("d", $date) . " " // chiffre du jour
                . $moisTab[date("n", $date)] . " " // mois en français
                . date("Y à H\hi", $date); // antislash pour éviter l'interprétation de h
            break;
        case 3:
            $out .=
                $joursTab[date("w", $date)] . " " // jour de la semaine en français
                . date("d", $date) . " " // chiffre du jour
                . $moisTab[date("n", $date)] . " " // mois en français
                . date("Y à ", $date); // année
            // vérification pour le "s" de heure (si au dessus "01", récupération de l'heure, toujours unstring)
            $h = date("H", $date);
            // avec un comparaison non stricte, par défaut PHP utilise le transtypage, donc "H" qui est un string, par exemple "02" (convertit en int) sera comparé à 2 
            if ($h >= 2) {
                $out .= $h . " heures";
            } else {
                $out .= $h . " heure";
            }
            break;

            // équivalence du else (si rien n'est vrai)
        default:

            return "Format de date non reconnue";
    }


    return $out;
}
