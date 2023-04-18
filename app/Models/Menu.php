<?php

namespace App\Models;

use App\Http\Controllers\MenuAPI\Contracts\QrMenuCommandContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model implements QrMenuCommandContract
{
    use HasFactory;

    const ID = 'id';
    const USER_ID = 'user_id';
    const NAME = 'name_menu';
    const ORDER = 'order';
    const VISIBLE = 'visible';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';

    protected $table = 'menu';

    protected $primaryKey = Menu::ID;

    public $timestamps = false;

    protected $fillable = [
        Menu::NAME,
        Menu::ORDER,
        Menu::VISIBLE,
    ];

    /*protected $visible = [
        Menu::NAME,
    ];*/

      protected $hidden = [
            Menu::ID,
            Menu::ORDER,
            Menu::VISIBLE,
            Menu::CREATED_AT,
            Menu::UPDATED_AT,
            Menu::DELETED_AT,
            Menu::USER_ID
        ];

    public function section(): HasMany
    {
        return $this->hasMany(Section::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function create(): void
    {
        // TODO: Implement create() method.
    }

    public function updateModel(): void
    {
        // TODO: Implement update() method.
    }

    public function delete(): void
    {
        // TODO: Implement delete() method.
    }
}
