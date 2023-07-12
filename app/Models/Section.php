<?php

namespace App\Models;

use App\Http\Requests\MenuAPIRequest\SectionCreateCustomRequest;
use App\Http\Requests\MenuAPIRequest\SectionDeleteCustomRequest;
use App\Http\Requests\MenuAPIRequest\SectionUpdateCustomRequest;
use App\Models\Contracts\QrSectionCommandContract;
use App\Models\Contracts\QrSectionQueryContract;
use Error;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\HasGetInstance;

class Section extends Model implements QrSectionCommandContract, QrSectionQueryContract
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

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public function createSection(Request $request, $menu_id): void
    {
        if(!$request instanceof SectionCreateCustomRequest){
//            throw new InvalidArgumentException('', 200);
            throw new Error('Richiesta errata');
        }

        $sectionData = $request->all([
            'name_section'
        ]);

        $name_section = $sectionData['name_section'];

        DB::table('sections')->insert([
            'name_section' => $name_section,
            'order'=> 1,
            'visible'=> 1,
            'created_at'=> now(),
            'menu_id'=> $menu_id
        ]);
    }

    public function updateSection(Request $request, $menu_id, $section_id): void
    {
        if(!$request instanceof SectionUpdateCustomRequest){
//            throw new InvalidArgumentException('', 200);
            throw new Error('Richiesta errata');
        }

        $sectionData = $request->all([
            'name_section'
        ]);

        $name_section = $sectionData['name_section'];

        DB::table('sections')
            ->where('id', '=', $section_id)
            ->where('menu_id', '=', $menu_id)
            ->update(
            [
                'name_section' => $name_section
            ]);
    }

    public function deleteSection(Request $request, $menu_id, $section_id): void
    {
        if(!$request instanceof SectionDeleteCustomRequest){
//            throw new InvalidArgumentException('', 200);
            throw new Error('Richiesta errata');
        }

        DB::table('sections')
            ->where('id', '=', $section_id)
            ->where('menu_id', '=', $menu_id)
            ->delete();
    }

    public function getOneSection(Request $request, $menu_id, $section_id):mixed
    {
        return Section::where('menu_id', '=',$menu_id)->where('id', '=',$section_id)->get();
    }

    public function getAllSection(Request $request, $menu_id): mixed
    {
        return Section::with('menu')->where('menu_id', '=', $menu_id)->get();
    }

    public function addProducts(Request $request, Section $section, $menu_id, $section_id): string
    {
//        dd($section_id);
        $section->products()->attach($request->products);

        return 'Attached';
    }

    public function searchSection()
    {
        //TODO: Implement searchSection() method.
    }
}
