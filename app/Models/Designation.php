<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;
class Designation extends Model
{
    use HasFactory;

    protected $guard = [];

    static public function getRecord($request)
    {
        $return = self::select('designations.*')->orderBy('id', 'desc');

        if(!empty(Request::get('id')))
        {
        $return = $return->where('designations.id', '=', Request::get('id').'%');
        }
        if(!empty(Request::get('designation_name')))
        {
        $return = $return->where('designations.designation_name','like','%' .Request::get('designation_name'));
        }
        $return = $return->paginate(5);
        return $return;
    }
    // public function developer()
    // {
    //     return $this->hasMany(Developer::class);
    // }
}
