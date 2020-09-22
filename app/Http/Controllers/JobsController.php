<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SearchEngines;
use App\datasearch;


class JobsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('jobslist.joblist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request) {

        if (!(trim($request->keyword))) {
            return redirect()
                ->back()
                ->withErrors("Please enter keyword to search");
        }

        $engine = new SearchEngines();
        $items = $engine->search(trim($request->keyword));
        $items = collect($items)->sortBy('title')->toArray();

        return view('jobslist.jobsgallery', compact('items'));
    }
}
