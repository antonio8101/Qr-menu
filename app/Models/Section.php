<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Section extends Model
{
    use HasFactory;

    const ID = 'id';
    const NAME = 'name';
    const ORDER = 'order';
    const VISIBLE = 'visible';
    const MENU_ID = 'menu_id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';

    protected $primaryKey = Section::ID;

    protected $table = 'section';

    public $timestamps = false;

    protected $fillable = [
        Section::NAME
    ];

    protected $hidden = [

        Section::ORDER,
        Section::VISIBLE,
        Section::CREATED_AT,
        Section::UPDATED_AT,
        Section::DELETED_AT
    ];

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class,Menu::ID,self::MENU_ID);
    }

}
