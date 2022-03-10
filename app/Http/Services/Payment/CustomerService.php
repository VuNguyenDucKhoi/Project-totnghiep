<?php

namespace App\Http\Services\Payment;
use App\Models\Customer;

class CustomerService
{

    public function getAll(){
        return Customer::orderbyDesc('id')->get();
    }
    public function destroy($request){
        $customer = Customer::where('id', $request->input('id'))->first();
        if($customer){
            return Customer::where('id', $request->input('id'))->delete();
        }
        return false;
    }

}
