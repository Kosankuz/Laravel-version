<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

  public function getIndex() {
return view('index');

#process variable data or params
#talk to the SDO_Model_Property
#receive from the model
#compile or process data from model if needed
#pass that data to the correct view
  }
  public function  getAdmin(){
return view('admin.admin');
}
  public function getDashboard(){
   return view('dashboard.dashboard');
 }
  public function getDiscount(){
   return view('admin.discount.discount');
 }
  public function getInvestment(){
   return view('admin.investment.investment');
 }
  public function getRefund(){
   return view('admin.refund.refund');
 }
  public function getSale(){
   return view('admin.sale.sale');
 }



/*public function postSomething(){

}*/

}
