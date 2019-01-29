<?php

namespace Lzh\test;

use Lzh\UploadFile;

class Test
{
    public function test()
    {
        $uploadFile = new UploadFile();
        $uploadFile->upload();
    }
}
