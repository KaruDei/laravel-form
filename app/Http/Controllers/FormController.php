<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormsRequest;
use App\Models\Form;

class FormController extends Controller
{
		public function form(FormsRequest $req)
		{
			$form = new Form();
			$form->email = $req->input('email');
			$form->password = $req->input('password');

			$form->save();

			return redirect()->route('home')->with('success', 'Данные успешно добавленны в базу данных');
		}
}
