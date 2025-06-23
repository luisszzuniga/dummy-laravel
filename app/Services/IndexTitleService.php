<?php

namespace App\Services;

use App\Models\IndexTitle;
use Illuminate\Database\Eloquent\Collection;

class IndexTitleService
{
    public function getAll(): Collection
    {
        return IndexTitle::select('id', 'label')->get();
    }

    public function delete(IndexTitle $indexTitle): void
    {
        $indexTitle->delete();
    }
}