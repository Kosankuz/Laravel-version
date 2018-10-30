<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

  public function getIndex() {

//$first = 'Name';
//$last = 'Lastname';
//$full = $first ." ". $last;
//$mail = 'abc@abc.com';

// return view('index')->with("fullname", $full)->with('email', $mail);


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

  public function getDiscount(){
   return view('admin.discount.discount');
 }
  public function getInvestment(){
   return view('admin.investment.investment');
 }
  public function getAdminRefund(){
   return view('admin.refund.refund');
 }
  public function getSale(){
   return view('admin.sale.sale');
 }

 public function getDashboard(){
  return view('site.dashboard.dashboard');
}
 public function getPurchaseHist(){
  return view('site.ico.purchase_history.purchasehis');
}
 public function getPurchaseTok(){
  return view('site.ico.purchase_token.purchasetok');
}
 public function getTokenWithdraw(){
  return view('site.withdraw.withdraw');
}
 public function getGeneralSettings(){
  return view('site.settings.general.settingsgen');
}
 public function getResetpass(){
  return view('site.settings.reset_pass.reset_pass');
}
 public function getSecurity(){
  return view('site.settings.security.security');
}
 public function getLoginhistory(){
  return view('site.settings.log_history.login_his');
}
 public function getSupport(){
  return view('site.settings.support.support');
}
public function getRefund(){
 return view('site.refund.refund');
}




/*public function postSomething(){

}*/

}
