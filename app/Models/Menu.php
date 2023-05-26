<?php

namespace App\Models;

use App\Http\Requests\MenuAPIRequest\MenuCreateCustomRequest;
use App\Http\Requests\MenuAPIRequest\MenuDeleteCustomRequest;
use App\Http\Requests\MenuAPIRequest\MenuUpdateCustomRequest;
use App\Models\Contracts\QrMenuCommandContract;
use App\Models\Contracts\QrMenuQueryContract;
use App\Traits\HasGetInstance;
use Error;
use http\Exception\InvalidArgumentException;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


/**
 * @method static create( array $array )
 */
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
        if (!$request instanceof MenuCreateCustomRequest)
            throw new InvalidArgumentException();

        $user = $request->user();

        $id = $user->getAuthIdentifier();

        $menuData = $request->all(['name_menu']);

        Menu::create([
            'name_menu' => $menuData['name_menu'],
            'order' => 1,
            'visible' => 1,
            'user_id' => $id
        ]);
    }

    public function updateMenu(Request $request): void
    {
        if(!$request instanceof MenuUpdateCustomRequest){
//            throw new InvalidArgumentException('', 200);
            throw new Error('Richiesta errata');
        }

        $menuData = $request->all([
           'id',
           'name_menu'
        ]);

        $id = $menuData['id'];

        $newNameMenu = $menuData['name_menu'];

        DB::table('menu')->where('id', '=', $id)->update(
            [
                'name_menu' => $newNameMenu,
                'updated_at'=> now()
            ]);
    }

    public function deleteMenu(Request $request): void
    {
        if(!$request instanceof MenuDeleteCustomRequest){
//            throw new InvalidArgumentException('', 200);
            throw new Error('Richiesta errata');
        }

        $menuData = $request->all([
            'id'
        ]);

        $id = $menuData['id'];

        DB::table('menu')->where('id', '=', $id)->delete($id);
    }

    public function validate()
    {

    }

    public function searchMenu()
    {
        // TODO: Implement searchMenu() method.
    }

    public function getOneMenu(Request $request, $id)
    {
        $user = $request->user();
        $idUser = $user->getAuthIdentifier();

        return Menu::where('user_id','=',$idUser)->where('id', '=',$id)->get();
    }

    public function getAllMenu(Request $request)
    {
        $user = $request->user();

        $id = $user->getAuthIdentifier();

        return Menu::where('user_id','=',$id)->get();
    }
}
