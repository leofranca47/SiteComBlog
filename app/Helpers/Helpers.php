<?php


    function eu($path)
    {
        asset($path);
    }

    function teste()
    {
        echo "olha eu aquikkkkkkkkkkkkkkkkkkkkkkkkkkkkk";
    }

    function str_slug($string)
    {
        $caracteres_sem_acento = array(
            'Š'=>'S', 'š'=>'s', 'Ð'=>'Dj','�'=>'Z', '�'=>'z', 'À'=>'a', 'Á'=>'a', 'Â'=>'a', 'Ã'=>'a', 'Ä'=>'a',
            'Å'=>'a', 'Æ'=>'a', 'Ç'=>'C', 'È'=>'e', 'É'=>'e', 'Ê'=>'e', 'Ë'=>'e', 'Ì'=>'i', 'Í'=>'i', 'Î'=>'i',
            'Ï'=>'i', 'Ñ'=>'N', 'Ń'=>'N', 'Ò'=>'o', 'Ó'=>'o', 'Ô'=>'o', 'Õ'=>'o', 'Ö'=>'o', 'Ø'=>'o', 'Ù'=>'u', 'Ú'=>'u',
            'Û'=>'u', 'Ü'=>'u', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss','à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a',
            'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i',
            'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ń'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u',
            'ú'=>'u', 'û'=>'u', 'ü'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', 'ƒ'=>'f',
            'ă'=>'a', 'î'=>'i', 'â'=>'a', 'ș'=>'s', 'ț'=>'t', 'Ă'=>'a', 'Î'=>'i', 'Â'=>'a', 'Ș'=>'S', 'Ț'=>'T',
            'A'=>'a', 'E'=>'e','I'=>'i','O'=>'o','U'=>'u','B'=>'b','C'=>'c','D'=>'d','F'=>'f','G'=>'g','H'=>'h',
            'J'=>'j','L'=>'l','M'=>'m','N'=>'n','P'=>'p','Q'=>'q','R'=>'r','S'=>'s','T'=>'t','V'=>'v','X'=>'x',
            'Y'=>'y','Z'=>'z',
        );

        $string = preg_replace("/[^a-zA-Z0-9]/", "_", strtr($string, $caracteres_sem_acento));
        return $string;

    }
