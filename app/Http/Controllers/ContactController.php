<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function submit(ContactRequest $req) {
      #dd($req);выводит нам весь класс request (кучу параметров)
      #dd($req->input('subject'));#выводим только наш subject


      /*$validation = $req->validate([
        'subject' => 'required|min:5|max:50',
        'message' => 'required'
      ]);*/ #cтарый вариант валидации
    }
}
