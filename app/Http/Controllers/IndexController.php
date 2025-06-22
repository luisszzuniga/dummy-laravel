<?php

namespace App\Http\Controllers;

use App\Services\IndexTitleService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(IndexTitleService $indexTitleService)
    {
        return view('index', [
            'titles' => $indexTitleService->getAll(),
        ]);
    }
}
