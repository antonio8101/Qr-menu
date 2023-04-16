<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Section extends Model
{
    use HasFactory;

    const ID = 'section_id';
    const MENU_ID = 'menu_id';
    const NAME = 'name_section';
    const ORDER = 'order';
    const VISIBLE = 'visible';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';

    protected $primaryKey = Section::ID;

    protected $table = 'sections';

    public $timestamps = false;

    protected $fillable = [
        Section::NAME
    ];
    protected $visible = [
      Section::NAME
    ];

    protected $hidden = [
        Section::ORDER,
        Section::VISIBLE,
        Section::CREATED_AT,
        Section::UPDATED_AT,
        Section::DELETED_AT,
        Section::MENU_ID
    ];

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class,Section::MENU_ID,Menu::ID);
    }

    public function product(){
        return $this->belongsToMany(Product::class,'product_section','product_id', 'product_id');
    }
}
