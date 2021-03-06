<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;


class ContactController extends Controller
{
    public function submit(ContactRequest $req) {
      #dd($req);выводит нам весь класс request (кучу параметров)
      #dd($req->input('subject'));#выводим только наш subject

      /*$validation = $req->validate([
        'subject' => 'required|min:5|max:50',
        'message' => 'required'
      ]);*/ #cтарый вариант валидации

      $contact = new Contact();
      $contact->name = $req->input('name');
      $contact->email = $req->input('email');
      $contact->subject = $req->input('subject');
      $contact->message = $req->input('message');

      $contact->save();

      return redirect()->route('home')->with('success' , 'Сообщение было добавлено');
    }
}
