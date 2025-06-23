<?php

namespace App\Http\Controllers;

use App\Services\IndexTitleService;
use App\Models\IndexTitle;
use Illuminate\Http\RedirectResponse;

class DeleteIndexTitleController extends Controller
{
    public function __construct(private readonly IndexTitleService $indexTitleService)
    {
    }

    public function __invoke(IndexTitle $indexTitle): RedirectResponse
    {
        $this->indexTitleService->delete($indexTitle);

        return redirect()->route('index')->with('success', 'Le titre a bien été supprimé.');
    }
} 