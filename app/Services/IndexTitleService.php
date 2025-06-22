<?php

namespace App\Services;

use App\Models\IndexTitle;

class IndexTitleService
{
    public function getAll()
    {
        return IndexTitle::select('label')->get();
    }
}