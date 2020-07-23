<?php
namespace App\Facade; //created 'facade' folder in app directory
use Illuminate\Support\Facades\Facade;

class SP extends Facade{
    protected static function getFacadeAccessor() {
        return 'SP'; //'TestFacades' alias name for the façade class declare in the class 'NewFacadeServiceProvider'
    }
}
?>
