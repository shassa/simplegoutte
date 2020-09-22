<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller {
    /**
     * @var \App\Contact
     */
    private $model;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.contact');
    }

    public function __construct(Contact $model) {
        $this->model = $model;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        Contact::create($request->only([
            'first_name',
            'last_name',
            'email',
            'subject',
            'message'
        ]));

        return redirect()
            ->route('contact.index')
            ->withSuccess('Thank you for reaching us, We will check your request and back to you soon.');
    }

    public function displayAllContacts() {
        $items = $this->model->all();

        return view('admin.contactMassage', compact('items'));
    }

    public function destroy($id) {
        DB::beginTransaction();
        $user = Contact::find($id)->delete();
        return redirect()
            ->route('dashbaord.contacts')
            ->withSuccess('Contact successfully deleted.');
    }
}
