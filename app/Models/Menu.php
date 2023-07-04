<?php

namespace App\Models;

use App\Http\Requests\MenuAPIRequest\MenuCreateCustomRequest;
use App\Http\Requests\MenuAPIRequest\MenuDeleteCustomRequest;
use App\Http\Requests\MenuAPIRequest\MenuUpdateCustomRequest;
use App\Models\Contracts\QrMenuCommandContract;
use App\Models\Contracts\QrMenuQueryContract;
use App\Traits\HasGetInstance;
use Error;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Menu extends Model implements QrMenuCommandContract, QrMenuQueryContract
{
    use HasFactory;
    use HasGetInstance;

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

    protected $visible = [
        Menu::NAME,
    ];

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

    public function createMenu(Request $request): void
    {
        if (!$request instanceof MenuCreateCustomRequest) {
//            throw new InvalidArgumentException('', 200);
            throw new Error('Richiesta errata');
        }

        $user = $request->user();

        $user_id = $user->getAuthIdentifier();

        $menuData = $request->all([
            'name_menu',
        ]);

        $name = $menuData['name_menu'];

        DB::table('menu')->insert([
            'name_menu' => $name,
            'order' => 1,
            'visible' => 1,
            'created_at' => now(),
            'user_id' => $user_id
        ]);
    }

    public function updateMenu(Request $request, $menu_id): void
    {
        if(!$request instanceof MenuUpdateCustomRequest){
//            throw new InvalidArgumentException('', 200);
            throw new Error('Richiesta errata');
        }

        $menuData = $request->all([
           'name_menu',
        ]);

        $newNameMenu = $menuData['name_menu'];

        DB::table('menu')
            ->where('id', '=', $menu_id)
            ->update(
            [
                'name_menu' => $newNameMenu,
                'updated_at'=> now()
            ]);
    }

    public function deleteMenu(Request $request, $menu_id): void
    {
        if(!$request instanceof MenuDeleteCustomRequest){
//            throw new InvalidArgumentException('', 200);
            throw new Error('Richiesta errata');
        }

        DB::table('menu')->where('id', '=', $menu_id)->delete($menu_id);

    }

    public function getOneMenu(Request $request, $id)
    {
        return Menu::findOrFail($id);
    }

    public function getAllMenu(Request $request)
    {
        return Menu::all();
    }

    public function validate()
    {

    }

    public function searchMenu()
    {
        // TODO: Implement searchMenu() method.
    }
}
