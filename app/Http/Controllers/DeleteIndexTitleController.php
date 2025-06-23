<?php

namespace App\Http\Controllers;

use App\Services\IndexTitleService;
use Illuminate\Http\RedirectResponse;

class DeleteIndexTitleController extends Controller
{
    public function __construct(private readonly IndexTitleService $indexTitleService)
    {
    }

    public function __invoke(int $id): RedirectResponse
    {
        $this->indexTitleService->delete($id);

        return back()->with('success', 'Le titre a bien été supprimé.');
    }
} 