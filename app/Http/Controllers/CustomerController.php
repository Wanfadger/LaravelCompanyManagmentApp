<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request ;
use App\Events\NewCustomerEvent;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');//->except(['index']);
  }


  public function index(){
       
        $customers = Customer::all();
        // $activeCustomers = Customer::active()->get();
        // $inActiveCustomers = Customer::inactive()->get();
        // $companies = Company::all();
      
        // dd($customers);
         return view('customers.index' , compact('customers'));
  }

  public function create(){
    $companies = Company::all();
    $customer = new Customer();
    return view("customers.create" ,compact('companies' , 'customer'));
  }

  public function store(){

    // dd($data);
    $customer =  Customer::create($this->validateRequestData());
  //creating new customer event
  event(new NewCustomerEvent($customer));
    // return redirect("/customers");
  }

public function show(Customer $customer){
  //dd($customer);
  //through route binding laravel fetches the record for us
  //$customer = Customer::findOrFail($customer);
  return view('customers.show' , compact('customer'));
}


public function edit(Customer $customer){
  $companies = Company::all();
 return view("customers.edit" , compact('customer' , 'companies'));
}

public function update(Customer $customer){
  $customer->update($this->validateRequestData());
  return redirect("/customers");

  //   $companies = Company::all();
//  return view("customers.edit" , compact('customer' , 'companies'));

}

public function delete(Customer $customer){
  $customer->delete();
  return back();
}

private function validateRequestData(){
  return  request()->validate([
    'name' => "required|min:3", 
    'email' => "required|email" ,
    "active" => "required" ,
    "company_id" => 'required'
  ]);
  //return $data;
}

}
