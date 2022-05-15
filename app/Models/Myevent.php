<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myevent extends Model
{
    use HasFactory;
    protected $table='events';
    protected $primaryKey='eventid';
    protected $fillable= ['event','id','name','place','date','endDate'];
    public $timestamps=false;
    protected $dates = ['endDate', 'date'];
    
}
