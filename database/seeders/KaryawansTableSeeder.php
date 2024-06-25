<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $karyawans = [
            ['name' => 'John Smith', 'email' => 'john.smith@example.com', 'jenis_kelamin' => 'male', 'telephone' => '9876543210', 'status' => 'active', 'jabatan_id' => 1, 'ktp' => '1234567890123450', 'NPWP' => '9876543210987650', 'total_kontak' => 3],
            ['name' => 'Alice Johnson', 'email' => 'alice.johnson@example.com', 'jenis_kelamin' => 'female', 'telephone' => '9876543211', 'status' => 'active', 'jabatan_id' => 2, 'ktp' => '1234567890123451', 'NPWP' => '9876543210987651', 'total_kontak' => 4],
            ['name' => 'Bob Brown', 'email' => 'bob.brown@example.com', 'jenis_kelamin' => 'male', 'telephone' => '9876543212', 'status' => 'active', 'jabatan_id' => 3, 'ktp' => '1234567890123452', 'NPWP' => '9876543210987652', 'total_kontak' => 2],
            ['name' => 'Carol White', 'email' => 'carol.white@example.com', 'jenis_kelamin' => 'female', 'telephone' => '9876543213', 'status' => 'active', 'jabatan_id' => 4, 'ktp' => '1234567890123453', 'NPWP' => '9876543210987653', 'total_kontak' => 5],
            ['name' => 'David Green', 'email' => 'david.green@example.com', 'jenis_kelamin' => 'male', 'telephone' => '9876543214', 'status' => 'active', 'jabatan_id' => 5, 'ktp' => '1234567890123454', 'NPWP' => '9876543210987654', 'total_kontak' => 3],
            ['name' => 'Eve Black', 'email' => 'eve.black@example.com', 'jenis_kelamin' => 'female', 'telephone' => '9876543215', 'status' => 'active', 'jabatan_id' => 6, 'ktp' => '1234567890123455', 'NPWP' => '9876543210987655', 'total_kontak' => 4],
            ['name' => 'Frank Grey', 'email' => 'frank.grey@example.com', 'jenis_kelamin' => 'male', 'telephone' => '9876543216', 'status' => 'active', 'jabatan_id' => 7, 'ktp' => '1234567890123456', 'NPWP' => '9876543210987656', 'total_kontak' => 2],
            ['name' => 'Grace Pink', 'email' => 'grace.pink@example.com', 'jenis_kelamin' => 'female', 'telephone' => '9876543217', 'status' => 'active', 'jabatan_id' => 8, 'ktp' => '1234567890123457', 'NPWP' => '9876543210987657', 'total_kontak' => 5],
            ['name' => 'Hank Blue', 'email' => 'hank.blue@example.com', 'jenis_kelamin' => 'male', 'telephone' => '9876543218', 'status' => 'active', 'jabatan_id' => 9, 'ktp' => '1234567890123458', 'NPWP' => '9876543210987658', 'total_kontak' => 3],
            ['name' => 'Ivy Purple', 'email' => 'ivy.purple@example.com', 'jenis_kelamin' => 'female', 'telephone' => '9876543219', 'status' => 'active', 'jabatan_id' => 10, 'ktp' => '1234567890123459', 'NPWP' => '9876543210987659', 'total_kontak' => 4],
            ['name' => 'Jack White', 'email' => 'jack.white@example.com', 'jenis_kelamin' => 'male', 'telephone' => '9876543220', 'status' => 'active', 'jabatan_id' => 1, 'ktp' => '1234567890123460', 'NPWP' => '9876543210987660', 'total_kontak' => 2],
            ['name' => 'Karen Brown', 'email' => 'karen.brown@example.com', 'jenis_kelamin' => 'female', 'telephone' => '9876543221', 'status' => 'active', 'jabatan_id' => 2, 'ktp' => '1234567890123461', 'NPWP' => '9876543210987661', 'total_kontak' => 5],
            ['name' => 'Liam Red', 'email' => 'liam.red@example.com', 'jenis_kelamin' => 'male', 'telephone' => '9876543222', 'status' => 'active', 'jabatan_id' => 3, 'ktp' => '1234567890123462', 'NPWP' => '9876543210987662', 'total_kontak' => 3],
            ['name' => 'Mona Grey', 'email' => 'mona.grey@example.com', 'jenis_kelamin' => 'female', 'telephone' => '9876543223', 'status' => 'active', 'jabatan_id' => 4, 'ktp' => '1234567890123463', 'NPWP' => '9876543210987663', 'total_kontak' => 4],
            ['name' => 'Nick Blue', 'email' => 'nick.blue@example.com', 'jenis_kelamin' => 'male', 'telephone' => '9876543224', 'status' => 'active', 'jabatan_id' => 5, 'ktp' => '1234567890123464', 'NPWP' => '9876543210987664', 'total_kontak' => 2],
            ['name' => 'Olivia Green', 'email' => 'olivia.green@example.com', 'jenis_kelamin' => 'female', 'telephone' => '9876543225', 'status' => 'active', 'jabatan_id' => 6, 'ktp' => '1234567890123465', 'NPWP' => '9876543210987665', 'total_kontak' => 5],
            ['name' => 'Paul Black', 'email' => 'paul.black@example.com', 'jenis_kelamin' => 'male', 'telephone' => '9876543226', 'status' => 'active', 'jabatan_id' => 7, 'ktp' => '1234567890123466', 'NPWP' => '9876543210987666', 'total_kontak' => 3],
            ['name' => 'Quincy Pink', 'email' => 'quincy.pink@example.com', 'jenis_kelamin' => 'female', 'telephone' => '9876543227', 'status' => 'active', 'jabatan_id' => 8, 'ktp' => '1234567890123467', 'NPWP' => '9876543210987667', 'total_kontak' => 4],
            ['name' => 'Rachel White', 'email' => 'rachel.white@example.com', 'jenis_kelamin' => 'female', 'telephone' => '9876543228', 'status' => 'active', 'jabatan_id' => 9, 'ktp' => '1234567890123468', 'NPWP' => '9876543210987668', 'total_kontak' => 2],
            ['name' => 'Steve Brown', 'email' => 'steve.brown@example.com', 'jenis_kelamin' => 'male', 'telephone' => '9876543229', 'status' => 'active', 'jabatan_id' => 10, 'ktp' => '1234567890123469', 'NPWP' => '9876543210987669', 'total_kontak' => 5],
        ];

        foreach ($karyawans as $karyawan) {
            Karyawan::create($karyawan);
        }

    }
}
