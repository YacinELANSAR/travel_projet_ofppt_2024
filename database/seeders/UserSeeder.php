<?php 
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nom' => 'Admin',
            'prenom' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'role' => 'ADM',
            'genre'=>'homme',
            'telephone' => '0707294197',
            'messageParAdmin'=>'You are admin (No message)',
            'hotel_id'=>null,
            'restaurant_id'=>null,
            'password' => Hash::make('yacin@2003'),
        ]);
    }
}

?>