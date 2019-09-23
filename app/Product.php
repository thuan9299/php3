<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = "products";
	public function category(){
		return $this->belongsTo('App\Category', 'cate_id', 'id');
	}
	
	protected $fillable = [
		'name', 'slug', 'description','price',
		'cate_id', 'status'
	];
}
