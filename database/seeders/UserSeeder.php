<?php

namespace Database\Seeders;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     [   
        //         'name' => 'Tấn Duy',
        //         'username' => 'admin',
        //         'email' => 'ntanduy2612@gmail.com',
        //         'password' => Hash::make('6Flames@#'), 
        //         'user_role' => 1,
        //         'created_at' => Now(), 
        //         'updated_at' => Now()
        //     ],
        // ]);

        $ho = ['Nguyễn', 'Trần', 'Hoàng', 'Lê', 'Tô', 'Bùi', 'Hào', 'Huỳnh', 'Hà', 'Hoàng'];
        $dem = ['Bảo', 'Trung', 'Ngọc', 'Minh', 'Thu', 'Hương', 'Nhi', 'Tú', 'Tâm', 'Minh'];
        $ten = ['Kiệt', 'Dũng', 'Huy', 'Ái', 'Phụng', 'Vy', 'Linh', 'Hạnh', 'Hùng', 'Phong'];
        $dotmailSeed = ['@gmail.com', '@fpt.edu.vn'];
        
        for ($i = 0; $i < 5012; $i++) {
            $hoRand = Arr::random($ho);
            $demRand = Arr::random($dem);
            $tenRand = Arr::random($ten);
            $fullname = $hoRand. ' ' . $demRand . ' ' . $tenRand;
            $mail = Str::slug($hoRand).Str::slug($demRand).Str::slug($tenRand).rand(0, 99999);
            $dotmail = Arr::random($dotmailSeed);
            DB::table('users')->insert([
                [   
                    'name' => $fullname,
                    'email' => $mail.rand(0, 999).$dotmail,
                    'password' => Hash::make('6Flames@#'), 
                    'user_role' => 0,
                    'created_at' => Now(),
                    'updated_at' => Now(),
                    // 'created_at' => date('Y-m-d H:i:s', strtotime('-6 day')), 
                    // 'updated_at' => date('Y-m-d H:i:s', strtotime('-6 day')),
                ],
            ]);
        }
    }
}
