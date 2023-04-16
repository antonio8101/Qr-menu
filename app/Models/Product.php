<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const ID = 'product_id';
    const NAME = 'name_dish';
    const DESCRIPTION = 'description';
    const FEATURED = 'featured';
    const STARRED = 'starred';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';

    protected $primaryKey = Product::ID;

    protected $table = 'products';

    public $timestamps = false;

    protected $fillable = [
        Product::NAME,
        Product::DESCRIPTION,
    ];

    protected $visible = [
      Product::NAME,
      Product::DESCRIPTION
    ];

    protected $hidden = [
        Product::FEATURED,
        Product::STARRED,
        Product::CREATED_AT,
        Product::UPDATED_AT,
        Product::DELETED_AT
    ];

   public function section(){
       return $this->belongsToMany(Section::class,'product_section','section_id', 'section_id');
   }
}
