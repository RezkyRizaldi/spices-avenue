<?php

namespace App\Http\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Image;
use Intervention\Image\Constraint;

trait BaseTrait
{
    public function resizeImage(UploadedFile $file, string $path, int $width = 415, int $height = 220): void
    {
        $destinationPath = "storage/admin/{$path}";

        File::exists($destinationPath) or File::makeDirectory($destinationPath);

        Image::make($file->getRealPath())
            ->resize($width, $height, fn (Constraint $constraint) => $constraint->aspectRatio())
            ->save("{$destinationPath}/{$file->hashName()}");
    }
}
