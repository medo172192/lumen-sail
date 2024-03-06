<?php 

namespace App\Logic\Auth;
use App\Traits\LifeCycle;
use App\Interfaces\LifeCycleInterface;

class registerLogic  implements LifeCycleInterface{
    use LifeCycle;

    public static $data;

    /**
     * @return Self
    */
    public static function validation() : self
    {
        if(self::hasErrors()) return self::next();
        $request = self::$request;
        $validation = self::$_this->validate($request,[]);
        $validation  =new self;
        return $validation ;
    }


    /**
     * @return Self
    */
    public static function prepare() : self
    {
        if(self::hasErrors()) return self::next();
        $globalData = [

        ];

        self::$data  = $globalData;
        return new self;
    }


    /**
     * @return Self
    */
    public static function register() : self
    {
        if(self::hasErrors()) return self::next();
        User::create(self::$data);
        return new self;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
    */
    public static function response()
    {

        if(self::hasErrors()){
            return responseError("register failed",401,self::getErrors());
        }         
        return responseSuccess("user is created successfuly");

    }


}