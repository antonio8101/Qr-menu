<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Menu;
use App\Models\Product;
use App\Models\Section;
use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $userUuid = fake()->uuid();
        $userName = fake()->name();
        $userEmail = fake()->unique()->safeEmail();
        $timeStamp = now();
        $userPassword = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $rememberToken = Str::random(10);

        User::factory()->create([

            'id' => $userUuid,
            'name' => $userName,
            'email' => $userEmail,
            'email_verified_at' => $timeStamp,
            'password' => $userPassword,
            'remember_token' => $rememberToken,
        ]);

        $menuId = 1;
        Menu::factory()->create([
            'id'=> $menuId,
            'user_id'=> $userUuid,
            'name_menu'=> 'mezzogiorno',
            'order' => 1,
            'visible'=> true,
            'created_at'=> now()
        ]);

        $sectionId = 1;
        Section::factory()->create([
            'id'=> $sectionId,
            'menu_id'=> $menuId,
            'name_section'=> 'primi',
            'order'=> 1,
            'visible'=>true,
            'created_at'=> now()
        ]);

        $productId = 1;
        Product::factory()->create([
            'id'=> $productId,
            'name_dish'=> 'pasta al pomodoro',
            'description'=>Str::random(20),
            'created_at'=>now()
        ]);

        DB::table('product_section')->insert([
            'product_id'=>$productId,
            'section_id'=>$sectionId
        ]);
    }
}
