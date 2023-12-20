<?php

namespace App\Traits;

use File;
use Illuminate\Http\Request;

trait FileUploadTrait
{
    private string $path = '/uploads';
    private string $prefix = '';

    private string $defaultPath = '/default';

    public function uploadImage(Request $request, string $inputName, string $oldPath = null, string $path = null): ?string
    {

        $path = $path ?? $this->path . '/' . $inputName;

        $this->prefix = $this->prefix . $inputName . '_';

        if ($request->hasFile($inputName)) {
            $image = $request->{$inputName};

            $ext = $image->getClientOriginalExtension();

            $imageName = $this->prefix . uniqid() .  '.' . $ext;

            $image->move(public_path($path), $imageName);


            if($oldPath && file_exists(public_path($oldPath)) && strpos($oldPath, $this->defaultPath) !== 0) {
                File::delete(public_path($oldPath));
            }

            return $path . '/' . $imageName;

        }

        return null;
    }
}
