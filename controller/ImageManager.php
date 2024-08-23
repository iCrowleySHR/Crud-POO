<?php 

include_once __DIR__.'../../config/define.php';

class ImageManager
{
    public static function sendFileEmployee($fileArray): string
    {
        $dir = __DIR__."/../view/img/funcionario/";

        if (!is_dir($dir)) mkdir($dir, 0777, true);

        $dirImage = $dir . $fileArray['name'];

        move_uploaded_file($fileArray['tmp_name'], $dirImage);

        return $fileArray['name'];
    }
}
