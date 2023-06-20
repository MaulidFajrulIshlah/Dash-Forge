<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data User
        $user = [
            [
                'nama' => 'Administrator',
                'username' => 'admin',
                'password' => bcrypt('12345'),
                // 'role' => 'Admin',
                'id_jabatan' => 1,
            ],
            [
                'nama' => 'Dekan Pascasarjana',
                'username' => 'dekan.pascasarjana',
                'password' => bcrypt('12345'),
                // 'role' => 'Dekanat',
                'id_jabatan' => 2,
                'id_fakultas' => 1,
            ],
            [
                'nama' => 'Dekan Kedokteran',
                'username' => 'dekan.fk',
                'password' => bcrypt('12345'),
                // 'role' => 'Dekanat',
                'id_jabatan' => 2,
                'id_fakultas' => 2,
            ],
            [
                'nama' => 'Dekan Kedokteran Gigi',
                'username' => 'dekan.fkg',
                'password' => bcrypt('12345'),
                // 'role' => 'Dekanat',
                'id_jabatan' => 2,
                'id_fakultas' => 3,
            ],
            [
                'nama' => 'Dekan Teknologi Informasi',
                'username' => 'dekan.fti',
                'password' => bcrypt('12345'),
                // 'role' => 'Dekanat',
                'id_jabatan' => 2,
                'id_fakultas' => 4,
            ],
            [
                'nama' => 'Dekan Ekonomi dan Bisnis',
                'username' => 'dekan.feb',
                'password' => bcrypt('12345'),
                // 'role' => 'Dekanat',
                'id_jabatan' => 2,
                'id_fakultas' => 5,
            ],
            [
                'nama' => 'Dekan Hukum',
                'username' => 'dekan.fh',
                'password' => bcrypt('12345'),
                // 'role' => 'Dekanat',
                'id_jabatan' => 2,
                'id_fakultas' => 6,
            ],
            [
                'nama' => 'Dekan Psikologi',
                'username' => 'dekan.psi',
                'password' => bcrypt('12345'),
                // 'role' => 'Dekanat',
                'id_jabatan' => 2,
                'id_fakultas' => 7,
            ],
            [
                'nama' => 'Wadek 1 Pascasarjana',
                'username' => 'wadek1.pascasarjana',
                'password' => bcrypt('12345'),
                // 'role' => 'Dekanat',
                'id_jabatan' => 3,
                'id_fakultas' => 1,
            ],
            [
                'nama' => 'Wadek 1 Kedokteran',
                'username' => 'wadek1.fk',
                'password' => bcrypt('12345'),
                // 'role' => 'Dekanat',
                'id_jabatan' => 3,
                'id_fakultas' => 2,
            ],
            [
                'nama' => 'Wadek 1 Kedokteran Gigi',
                'username' => 'wadek1.fkg',
                'password' => bcrypt('12345'),
                // 'role' => 'Dekanat',
                'id_jabatan' => 3,
                'id_fakultas' => 3,
            ],
            [
                'nama' => 'Wadek 1 Teknologi Informasi',
                'username' => 'wadek1.fti',
                'password' => bcrypt('12345'),
                // 'role' => 'Dekanat',
                'id_jabatan' => 3,
                'id_fakultas' => 4,
            ],
            [
                'nama' => 'Wadek 1 Ekonomi dan Bisnis',
                'username' => 'wadek1.feb',
                'password' => bcrypt('12345'),
                // 'role' => 'Dekanat',
                'id_jabatan' => 3,
                'id_fakultas' => 5,
            ],
            [
                'nama' => 'Wadek 1 Hukum',
                'username' => 'wadek1.fh',
                'password' => bcrypt('12345'),
                // 'role' => 'Dekanat',
                'id_jabatan' => 3,
                'id_fakultas' => 6,
            ],
            [
                'nama' => 'Wadek 1 Psikologi',
                'username' => 'wadek1.psi',
                'password' => bcrypt('12345'),
                // 'role' => 'Dekanat',
                'id_jabatan' => 3,
                'id_fakultas' => 7,
            ],
            [
                'nama' => 'Tendik Pascasarjana',
                'username' => 'tendik.pascasarjana',
                'password' => bcrypt('12345'),
                // 'role' => 'Tendik',
                'id_jabatan' => 4,
                'id_fakultas' => 1,
            ],
            [
                'nama' => 'Tendik Kedokteran',
                'username' => 'tendik.fk',
                'password' => bcrypt('12345'),
                // 'role' => 'Tendik',
                'id_jabatan' => 4,
                'id_fakultas' => 2,
            ],
            [
                'nama' => 'Tendik Kedokteran Gigi',
                'username' => 'tendik.fkg',
                'password' => bcrypt('12345'),
                // 'role' => 'Tendik',
                'id_jabatan' => 4,
                'id_fakultas' => 3,
            ],
            [
                'nama' => 'Tendik Teknologi Informasi',
                'username' => 'tendik.ti',
                'password' => bcrypt('12345'),
                // 'role' => 'Tendik',
                'id_jabatan' => 4,
                'id_fakultas' => 4,
            ],
            [
                'nama' => 'Tendik Ekonomi dan Bisnis',
                'username' => 'tendik.feb',
                'password' => bcrypt('12345'),
                // 'role' => 'Tendik',
                'id_jabatan' => 4,
                'id_fakultas' => 5,
            ],
            [
                'nama' => 'Tendik Hukum',
                'username' => 'tendik.fh',
                'password' => bcrypt('12345'),
                // 'role' => 'Tendik',
                'id_jabatan' => 4,
                'id_fakultas' => 6,
            ],
            [
                'nama' => 'Tendik Psikologi',
                'username' => 'tendik.psi',
                'password' => bcrypt('12345'),
                // 'role' => 'Tendik',
                'id_jabatan' => 4,
                'id_fakultas' => 7,
            ],
            [
                'nama' => 'Kaprodi Magister Manajemen',
                'username' => 'kaprodi.mm',
                'password' => bcrypt('12345'),
                // 'role' => 'Kaprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 1,
            ],
            [
                'nama' => 'Kaprodi Magister Kenotariatan',
                'username' => 'kaprodi.mk',
                'password' => bcrypt('12345'),
                // 'role' => 'Kaprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 1,
            ],
            [
                'nama' => 'Kaprodi Magister Sains Biomedis',
                'username' => 'kaprodi.msb',
                'password' => bcrypt('12345'),
                // 'role' => 'Kaprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 1,
            ],
            [
                'nama' => 'Kaprodi Magister Administrasi Rumah Sakit',
                'username' => 'kaprodi.mars',
                'password' => bcrypt('12345'),
                // 'role' => 'Kaprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 1,
            ],
            [
                'nama' => 'Kaprodi Kedokteran',
                'username' => 'kaprodi.fk',
                'password' => bcrypt('12345'),
                // 'role' => 'Kaprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 2,
            ],
            [
                'nama' => 'Kaprodi Kedokteran Gigi',
                'username' => 'kaprodi.fkg',
                'password' => bcrypt('12345'),
                // 'role' => 'Kaprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 3,
            ],
            [
                'nama' => 'Kaprodi Teknik Informatika',
                'username' => 'kaprodi.ti',
                'password' => bcrypt('12345'),
                // 'role' => 'Kaprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 4,
            ],
            [
                'nama' => 'Kaprodi Ilmu Perpustakaan',
                'username' => 'kaprodi.ip',
                'password' => bcrypt('12345'),
                // 'role' => 'Kaprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 4,
            ],
            [
                'nama' => 'Kaprodi Manajemen',
                'username' => 'kaprodi.mnj',
                'password' => bcrypt('12345'),
                // 'role' => 'Kaprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 5,
            ],
            [
                'nama' => 'Kaprodi Akuntansi',
                'username' => 'kaprodi.akn',
                'password' => bcrypt('12345'),
                // 'role' => 'Kaprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 5,
            ],
            [
                'nama' => 'Kaprodi Hukum',
                'username' => 'kaprodi.fh',
                'password' => bcrypt('12345'),
                // 'role' => 'Kaprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 6,
            ],
            [
                'nama' => 'Kaprodi Psikologi',
                'username' => 'Kaprodi.psi',
                'password' => bcrypt('12345'),
                // 'role' => 'Kaprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 7,
            ],
            [
                'nama' => 'Sekprodi Magister Manajemen',
                'username' => 'sekprodi.mm',
                'password' => bcrypt('12345'),
                // 'role' => 'Kaprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 1,
            ],
            [
                'nama' => 'Sekprodi Magister Kenotariatan',
                'username' => 'sekprodi.mk',
                'password' => bcrypt('12345'),
                // 'role' => 'Kaprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 1,
            ],
            [
                'nama' => 'Sekprod Magister Sains Biomedis',
                'username' => 'Sekprodi.msb',
                'password' => bcrypt('12345'),
                // 'role' => 'Sekprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 1,
            ],
            [
                'nama' => 'Sekprodi Magister Administrasi Rumah Sakit',
                'username' => 'Sekprodi.mars',
                'password' => bcrypt('12345'),
                // 'role' => 'Sekprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 1,
            ],
            [
                'nama' => 'Sekprodi Kedokteran',
                'username' => 'Sekprodi.fk',
                'password' => bcrypt('12345'),
                // 'role' => 'Sekprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 2,
            ],
            [
                'nama' => 'Sekprodi Kedokteran Gigi',
                'username' => 'Sekprodi.fkg',
                'password' => bcrypt('12345'),
                // 'role' => 'Sekprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 3,
            ],
            [
                'nama' => 'Sekprodi Teknik Informatika',
                'username' => 'Sekprodi.ti',
                'password' => bcrypt('12345'),
                // 'role' => 'Sekprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 4,
            ],
            [
                'nama' => 'Sekprodi Ilmu Perpustakaan',
                'username' => 'Sekprodi.ip',
                'password' => bcrypt('12345'),
                // 'role' => 'Sekprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 4,
            ],
            [
                'nama' => 'Sekprodi Manajemen',
                'username' => 'Sekprodi.mnj',
                'password' => bcrypt('12345'),
                // 'role' => 'Sekprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 5,
            ],
            [
                'nama' => 'Sekprodi Akuntansi',
                'username' => 'Sekprodi.akn',
                'password' => bcrypt('12345'),
                // 'role' => 'Sekprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 5,
            ],
            [
                'nama' => 'Sekprodi Hukum',
                'username' => 'Sekprodi.fh',
                'password' => bcrypt('12345'),
                // 'role' => 'Sekprodi',
                'id_jabatan' => 5,
                'id_fakultas' => 6,
            ],
            [
                'nama' => 'Sekprodi Psikologi',
                'username' => 'Sekprodi.psi',
                'password' => bcrypt('12345'),
                // 'role' => 'Sekprod',
                'id_jabatan' => 5,
                'id_fakultas' => 7,
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
