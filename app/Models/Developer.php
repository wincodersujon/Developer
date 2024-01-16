<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class Developer extends Model
{
    use HasFactory;

    protected $guard = [];

    static public function getRecord($request)
    {
        $return = self::select('developers.*', 'designations.designation_name')
            ->join('designations', 'designations.id', '=', 'developers.designation_id')
            ->orderBy('id', 'desc');

        if (!empty(Request::get('id'))) {
            $return = $return->where('developers.id', '=', Request::get('id') . '%');
        }
        if (!empty(Request::get('name'))) {
            $return = $return->where('developers.name', 'like', '%' . Request::get('name'));
        }
        if (!empty(Request::get('designation_name'))) {
            $return = $return->where('designations.designation_name', 'like', '%' . Request::get('designation_name'));
        }
        $return = $return->paginate(5);
        return $return;
    }
    public function designation()
    {
        return $this->belongsTo(Designation::class, 'designation_id');
    }
}
