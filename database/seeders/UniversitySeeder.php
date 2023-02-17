<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        University::create(
            [
                'nama_universitas' => 'University of California, Berkeley',
                'alamat' => 'Berkeley',
                'no_telp' => '123123',
                'email' => 'USA@gmail.com',
                'website' => 'berkeley.edu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        University::create(
            [
                'nama_universitas' => 'Universitas Catur Insan Cendekia',
                'alamat' => 'Jl.Kesambi',
                'no_telp' => '087877006780',
                'email' => 'asds@asa.com',
                'website' => 'mycic.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
    }
}
