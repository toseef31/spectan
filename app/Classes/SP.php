<?php
namespace App\Classes;
use DB;
use Session;
use Carbon\Carbon;

class SP {

  public function getUserName($id)
  {
    $user = DB::table('sp_admin')->where('id',$id)->first()->name;
    return $user;
  }
}

?>
