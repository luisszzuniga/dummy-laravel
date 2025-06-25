<?php

namespace App\Services;

use App\Models\IndexTitle;

class IndexTitleService
{
    public function getAll()
    {
        return IndexTitle::select('id', 'label')->get();
    }

    public function delete($id)
    {
        return IndexTitle::where('id', $id)->delete();
    }
}