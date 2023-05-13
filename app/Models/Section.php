<?php

namespace App\Models;

use App\Http\Requests\MenuAPIRequest\SectionCreateCustomRequest;
use App\Http\Requests\MenuAPIRequest\SectionDeleteCustomRequest;
use App\Http\Requests\MenuAPIRequest\SectionUpdateCustomRequest;
use App\Models\Contracts\QrSectionCommandContract;
use Error;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\HasGetInstance;

class Section extends Model implements QrSectionCommandContract
{
    use HasFactory;
    use HasGetInstance;

    const ID = 'id';
    const MENU_ID = 'menu_id';
    const NAME = 'name_section';
    const ORDER = 'order';
    const VISIBLE = 'visible';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';

    protected $table = 'sections';
    protected $primaryKey = Section::ID;

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
        return $this->belongsTo(Menu::class);
    }

    public function product(){
        return $this->belongsToMany(Product::class);
    }

    public function createSection(Request $request): void
    {
        if(!$request instanceof SectionCreateCustomRequest){
//            throw new InvalidArgumentException('', 200);
            throw new Error('Richiesta errata');
        }

        $sectionData = $request->all([
            'menu_id',
            'name_section'
        ]);

        $menu_id = $sectionData['menu_id'];

        $name_section = $sectionData['name_section'];

        DB::table('sections')->insert([
            'name_section' => $name_section,
            'order'=> 1,
            'visible'=> 1,
            'created_at'=> now(),
            'menu_id'=> $menu_id
        ]);
    }

    public function updateSection(Request $request): void
    {
        if(!$request instanceof SectionUpdateCustomRequest){
//            throw new InvalidArgumentException('', 200);
            throw new Error('Richiesta errata');
        }

        $sectionData = $request->all([
            'id',
            'name_section'
        ]);

        $id = $sectionData['id'];

        $name_section = $sectionData['name_section'];

        DB::table('sections')->where('id', '=', $id)->update([
            'name_section' => $name_section
        ]);
    }

    public function deleteSection(Request $request): void
    {
        if(!$request instanceof SectionDeleteCustomRequest){
//            throw new InvalidArgumentException('', 200);
            throw new Error('Richiesta errata');
        }


        $sectionData = $request->all([
            'id'
        ]);

        $id = $sectionData['id'];

        DB::table('sections')->where('id', '=', $id)->delete($id);
    }
}
