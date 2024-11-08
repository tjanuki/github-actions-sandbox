<?php

namespace App;

use Illuminate\Container\Attributes\Storage;
use Illuminate\Contracts\Filesystem\Filesystem;

class Avatar
{

    public function __construct(#[Storage('public')] protected Filesystem $filesystem)
    {
    }

    public function save(): void
    {
        $path = 'https://ui-avatars.com/api/?name=John+Doe&size=200';

//        Storage::disk('public')->put('avatars/avatar.jpg', file_get_contents($path));
        $this->filesystem->put('avatars/avatar.jpg', file_get_contents($path));
    }

}