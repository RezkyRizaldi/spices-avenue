<?php

namespace App\Http\Traits;

use Illuminate\Http\UploadedFile;
use Image;
use Intervention\Image\Constraint;

trait BaseTrait
{
    public function resizeImage(UploadedFile $file, string $path, int $width = 415, int $height = 220): void
    {
        $image = Image::make($file);

        $image->resize($width, $height, fn (Constraint $constraint) => $constraint->aspectRatio())->save("storage/admin/{$path}/" . md5_file($file->getRealPath()) . ".{$file->guessClientExtension()}");
    }
}
