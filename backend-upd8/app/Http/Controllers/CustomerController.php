<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{  
    protected $perPage          = 10;

    function store(Request $request) {

        $customer = Customer::where('document', $request->document)->first();
        if($customer) {
            return response("CPF já cadastrado", 403);
        }
        return Customer::create([
            'document'  => $request->document,
            'name'  => $request->name,
            'birthday'  => $request->birthday,
            'gender'  => $request->gender,
            'address'  => $request->address,
            'state'  => $request->state,
            'city'  => $request->city,
        ]);
    }

    function index() {
      $customer = Customer::orderBy('id', 'DESC')
      ->when( request()->document , function ($q) {
        $q->Where('document', 'like', '%' .request()->document . '%');
      })
      ->when( request()->name , function ($q) {
        $q->Where('name', 'like', '%' .request()->name . '%');
      })
      ->when( request()->birthday , function ($q) {
        $q->Where('birthday', 'like', '%' .request()->birthday . '%');
      })

      ->when( request()->gender , function ($q) {
        $q->Where('gender', 'like', '%' .request()->gender . '%');
      })

      ->when( request()->state , function ($q) {
        $q->Where('state', 'like', '%' .request()->state . '%');
      })
      ->when( request()->city , function ($q) {
        $q->Where('city', 'like', '%' .request()->city . '%');
      })->select()->paginate( request()->perpage ? request()->perpage : $this->perPage);
      return $customer;
    }

    function update(Request $request, $id) {

        $customer = Customer::where('id', $id)->first();
        if($customer) {
            $customer->update([
                'document' => $request->document,
                'name' => $request->name,
                'birthday' => $request->birthday,
                'gender' => $request->gender,
                'address' => $request->address,
                'state' => $request->state,
                'city' => $request->city,
            ]);
        }else {
            return response("Cliente não encontrado", 404);
        }
        return $customer;
    }

    function destroy($id) {
        $customer = Customer::where('id', $id)->first();
        if($customer) {
            return $customer->delete();
        }else {
            return response("Cliente não encontrado", 404);
        }
    }
}
