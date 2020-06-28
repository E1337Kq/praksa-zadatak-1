<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class SuscribersController extends Controller
{
    public function index()
    {
    $subscribers = Subscriber::latest()->get();

    return view('subscribers.index',['subscribers'=>$subscribers]);
    }

    public function show(Subscriber $subscribers)
    {
        return view('subscribers.show',['subscribers'=>$subscribers]);
    }

    public function create(){
    return view('subscribers.create');
    }

    public function store(){

    Request()->validate([
        'first_name'=>'required',
        'last_name'=>'required',
        'email'=>'required'
    ]);


    $subscriber = new Subscriber();
    $subscriber->first_name = request('first_name');
    $subscriber->last_name= request('last_name');
    $subscriber->email = request('email');

    $subscriber->save();
    return redirect('/');
    }

    public function edit(Subscriber $subscriber){
     return view('subscribers.edit',['subscriber'=>$subscriber]);
    }

    public function update(Subscriber $subscriber){
        $subscriber->update($this->validateArticle());

        return redirect(route('subscribers.show', $subscriber));
    }

        protected function validateArticle(){
            return request()->validate([
            'title' =>'required',
                      'title'=>'required',
                      'title'=>'required'
        ]);
    }

    public function destroy(){

    }
}
