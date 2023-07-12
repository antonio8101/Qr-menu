<?php

namespace App\Models;

use App\Http\Requests\MenuAPIRequest\ProductCreateCustomRequest;
use App\Http\Requests\MenuAPIRequest\ProductDeleteCustomRequest;
use App\Http\Requests\MenuAPIRequest\ProductUpdateCustomRequest;
use App\Models\Contracts\QrProductCommandContract;
use App\Models\Contracts\QrProductQueryContract;
use Error;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Http\Request;
use App\Traits\HasGetInstance;
use Illuminate\Support\Facades\DB;

class Product extends Model implements QrProductCommandContract, QrProductQueryContract
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

   public function sections(): BelongsToMany
   {
       return $this->belongsToMany(Section::class);
   }

    public function createProduct(Request $request, $menu_id, $section_id): void
    {
        if(!$request instanceof ProductCreateCustomRequest){
//            throw new InvalidArgumentException('', 200);
            throw new Error('Richiesta errata');
        }

        $sectionData = $request->all([
            'name_dish',
            'description'
        ]);

        $name_product = $sectionData['name_dish'];
        $description = $sectionData['description'];

        DB::table('products')->insert([
            'name_dish' => $name_product,
            'description' => $description,
            'created_at'=> now(),
        ]);
    }

    public function updateProduct(Request $request, $menu_id, $section_id, $product_id): void
    {
        if(!$request instanceof ProductUpdateCustomRequest){
//            throw new InvalidArgumentException('', 200);
            throw new Error('Richiesta errata');
        }

        $productData = $request->all([
            'name_dish',
            'description'
        ]);

        $nameDish = $productData['name_dish'];
        $description = $productData['description'];

        DB::table('products')
            ->where('id', '=', $product_id)
            ->update(
                [
                    'name_dish' => $nameDish,
                    'description' => $description
                ]);
    }

    public function deleteProduct(Request $request, $menu_id, $section_id, $product_id): void
    {
        if(!$request instanceof ProductDeleteCustomRequest){
//            throw new InvalidArgumentException('', 200);
            throw new Error('Richiesta errata');
        }

        DB::table('products')
            ->where('id', '=', $product_id)
            ->delete();
    }

    public function getOneProduct(Request $request, $menu_id, $section_id, $product_id):mixed
    {
        return Product::with('section')->where('id', '=',$product_id)->get();
    }

    public function getAllProduct(Request $request, $menu_id, $section_id): mixed
    {
        return Section::with('product')->where('id', '=', $section_id)->get();
    }

    public function searchProduct()
    {
        //TODO: Implement searchProduct() method.
    }
}
