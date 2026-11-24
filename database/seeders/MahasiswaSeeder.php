<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /// Query Bulder
        DB::table('mahasiswas')->insert(
            [
                'nama' => 'M. Zainudin Al Amin',
                'nim' => 1232132132,
                'prodi' => 'TI',
                'email' => 'zz@mail.com',
                'nohp' => 628654423459,
                'foto' => 'foto/zain.jpg',
            ]
        );
        ///Eloquent
        Mahasiswa::create([
            'nama' => 'Al Aminudin Alif',
            'nim' => 1234132132,
            'prodi' => 'TI',
            'email' => 'zza@mail.com',
            'nohp' => 628676006436,
            'foto' => 'foto/zainu.jpg',
        ]);
    }
}
