<?php

namespace App\Http\Controllers;

use App\User;
use App\Contact;
use App\Company;
use App\Courses;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return redirect()->route('jobs.index');
    }

    public function about() {
        return view('admin.about');
    }

    public function dashboard() {
        $contact = Contact::all();
        $user = User::all();
        $company = Company::all();
        $courses = Courses::all();

        return view('admin.dashboard', compact('contact', 'user', 'company', 'courses'));
    }

    public function services() {
        return view('admin.service');
    }

    public function users() {
        $user = User::all();
        return view('admin.users', compact('user'));
    }

    public function destrMas($id) {
        $contact = Contact::find($id)->delete();
        return back();
    }

    public function deleteUser($id) {
        $user = user::find($id)->delete();
        return redirect()
            ->route('users')
            ->withSuccess('User successfully deleted.');
    }
}
