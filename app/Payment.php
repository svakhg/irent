<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Payment extends Model
{
    use Sortable;
    protected $table = 'payments';
    protected $fillable = ['name','description','method','amount','apartment_id','house_id','user_id','status'];
    public $sortable = ['name','description','method','amount','apartment_id','house_id','user_id'];

    public function house()
    {
        return $this->belongsTo('App\House', 'house_id');
    }
    public function apartment()
    {
        return $this->belongsTo('App\Apartment', 'apartment_id');
    }
    public function photos()
    {
        return $this->hasMany('App\PaymentPhoto');
    }
}
