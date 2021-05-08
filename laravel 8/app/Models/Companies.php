<?php
namespace App\Models;
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Companies extends Model{
    protected $table = 'companies';

    public function search($input){
        return self::where('company_name','like',"%".$input."%")->paginate(15);
    }
}