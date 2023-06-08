<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;
use \Illuminate\Database\Eloquent\Collection;

class TitlesController extends Controller
{
    public function index(): Collection 
    {
        return Title::with('titleLevels')
            ->where('is_active', true)
            ->orderBy('name', 'ASC')
            ->get();
    }
}