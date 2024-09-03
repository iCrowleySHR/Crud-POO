<?php 

include_once __DIR__.'../../config/define.php';

class ImageManager
{
    public static function save(string $dir = "view/img", array $image): string
    {
        $dirRoot = __DIR__. "/../";
        
        $dirFull = $dirRoot . $dir;

        if (!is_dir($dirFull)) mkdir($dirFull, 0777, true);

        $newDirImage = $dir . "/" . time() . "_" . $image['name'];
        
        move_uploaded_file($image['tmp_name'], $dirRoot . $newDirImage);

        return $newDirImage;
    }
}
