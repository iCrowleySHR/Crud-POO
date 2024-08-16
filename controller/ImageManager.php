<?php 

include_once __DIR__.'../../config/define.php';

class ImageManager
{
    public static function sendFile($fileArray): string
    {
        $dir = __DIR__."/../view/img/funcionario/";

        if (!is_dir($dir)) return "Erro diretório: '{$dir}' não existente!";

        $dirImage = $dir . $fileArray['name'];

        move_uploaded_file($fileArray['tmp_name'], $dirImage);

        return $fileArray['name'];
    }
}