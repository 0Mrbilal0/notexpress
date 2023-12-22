<?php

namespace Services;

class UploadImage
{
    /**
     * Uploads an image and returns the new file name if successful.
     *
     * @param mixed $image
     * @return string | null
     */
    static public function upload(mixed $image): string|null
    {
        $dirUpload = __DIR__ . '/../../assets/images/uploads/';
        $newFileName = uniqid() . '_' . $image['name'];
        $filePath = $dirUpload . $newFileName;
        if (move_uploaded_file($image['tmp_name'], $filePath)) {
            return $newFileName;
        }
        return null;
    }
}