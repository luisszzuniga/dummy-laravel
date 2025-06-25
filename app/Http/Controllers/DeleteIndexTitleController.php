<?php

namespace App\Http\Controllers;

use App\Services\IndexTitleService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DeleteIndexTitleController extends Controller
{
    public function __invoke($id, IndexTitleService $service): RedirectResponse
    {
        $service->delete($id);
        return redirect()->back()->with('success', 'Le titre a bien été supprimé.');
    }
} 