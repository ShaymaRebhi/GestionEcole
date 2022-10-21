<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class CategoryController extends Controller
{
    use WithPagination;
    public function index()
    {

          return view('module.categories.index');
    }


}
