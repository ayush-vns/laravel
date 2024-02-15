<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class ncc extends Model 
{
    protected $fillable=['id','name','items'];
    protected $table='ncc';
    protected $primarykey='id';
}