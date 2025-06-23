<?php

namespace App\Http\Controllers;

use App\Services\IndexTitleService;
use Illuminate\Http\Request;

class DeleteIndexTitleController extends Controller
{
    public function __invoke(int $id, IndexTitleService $indexTitleService)
    {
        $indexTitleService->delete($id);

        return back()->with('success', 'Le titre a bien été supprimé.');
    }
} 