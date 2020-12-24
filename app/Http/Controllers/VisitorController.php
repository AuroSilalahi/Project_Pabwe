<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class VisitorController extends Controller
{
    public function index()
    {
        $buku=Book::all();
        return view('dashboard.visitor',compact('buku'));
    }
    public function detail($id){
        $buku=Book::find($id);
        return view('detail',compact('buku'));
    }
}
