<?php

namespace App\Models;

use App\Http\Requests\MenuAPIRequest\ProductCreateCustomRequest;
use App\Models\Contracts\QrProductCommandContract;
use Error;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Http\Request;
use App\Traits\HasGetInstance;
use Illuminate\Support\Facades\DB;

class Product extends Model implements QrProductCommandContract
{
    use HasFactory;
    use HasGetInstance;

    const ID = 'id';
    const NAME = 'name_dish';
    const DESCRIPTION = 'description';
    const FEATURED = 'featured';
    const STARRED = 'starred';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';

    protected $table = 'products';
    protected $primaryKey = Product::ID;

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

   public function section(): BelongsToMany
   {
       return $this->belongsToMany(Section::class);
   }

    public function createProduct(Request $request): void
    {
        if(!$request instanceof ProductCreateCustomRequest){
//            throw new InvalidArgumentException('', 200);
            throw new Error('Richiesta errata');
        }



        $productData = $request->all([
            'section_id',
            'name_dish'
        ]);

        $section_id = $productData['section_id'];

        $name_product = $productData['name_dish'];

        DB::table('product_section')->insert([
           'section_id' => $section_id,
           'product_id' => $this->id
        ]);

        DB::table('products')->insert([
            'name_dish' => $name_product,
            'created_at'=> now(),
            'description' => 'descrizione piatto'

        ]);
    }

    public function updateProduct(Request $request): void
    {

    }

    public function deleteProduct(Request $request): void
    {

    }
}
