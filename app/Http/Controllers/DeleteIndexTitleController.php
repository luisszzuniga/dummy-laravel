<?php

namespace App\Http\Controllers;

use App\Services\IndexTitleService;
use Illuminate\Http\Request;

class DeleteIndexTitleController extends Controller
{
    protected $indexTitleService;

    public function __construct(IndexTitleService $indexTitleService)
    {
        $this->indexTitleService = $indexTitleService;
    }

    public function delete($id)
    {
        $this->indexTitleService->delete($id);

        return back()->with('success', 'Index title deleted successfully.');
    }
} 