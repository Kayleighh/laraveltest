<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
    * Get the RelationshipName that owns the Product.
    *
    * @return QueryBuilder Object
    */
    public function tags()
    {
        return $this->belongsToMany('App\Tag','product_tag','products_id','tag_id');
    }
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];
}
