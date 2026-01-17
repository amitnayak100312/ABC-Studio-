<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all(); 
        
        return view('components.review', compact('reviews'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
             'name' => 'required',
             'service_type' => 'required',
             'message' => 'required|min:10'
        ]);

        Review::create($request->all());

        return back()->with('success', 'Thank you! Your testimonial has been added.');
    }
}