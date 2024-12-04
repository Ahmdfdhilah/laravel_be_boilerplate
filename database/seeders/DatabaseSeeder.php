<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelanggan;
use App\Models\Barang;
use App\Models\Penjualan;
use App\Models\ItemPenjualan;
use Database\Factories\UserFactory;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PelangganSeeder::class,
            BarangSeeder::class,
            PenjualanSeeder::class,
            ItemPenjualanSeeder::class,
        ]);

        (new UserFactory)->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => 'admin',
        ]);
    }
}

class PelangganSeeder extends Seeder
{
    public function run()
    {
        $pelanggans = [
            ['id_pelanggan' => '1', 'nama' => 'ANDI', 'domisili' => 'JAK-UT', 'jenis_kelamin' => 'L'],
            ['id_pelanggan' => '2', 'nama' => 'BUDI', 'domisili' => 'JAK-BAR', 'jenis_kelamin' => 'L'],
            ['id_pelanggan' => '3', 'nama' => 'JOHAN', 'domisili' => 'JAK-SEL', 'jenis_kelamin' => 'L'],
            ['id_pelanggan' => '4', 'nama' => 'SINTHA', 'domisili' => 'JAK-TIM', 'jenis_kelamin' => 'P'],
            ['id_pelanggan' => '5', 'nama' => 'ANTO', 'domisili' => 'JAK-UT', 'jenis_kelamin' => 'L'],
            ['id_pelanggan' => '6', 'nama' => 'BUJANG', 'domisili' => 'JAK-BAR', 'jenis_kelamin' => 'L'],
            ['id_pelanggan' => '7', 'nama' => 'JOWAN', 'domisili' => 'JAK-SEL', 'jenis_kelamin' => 'L'],
            ['id_pelanggan' => '8', 'nama' => 'SINTIA', 'domisili' => 'JAK-TIM', 'jenis_kelamin' => 'P'],
            ['id_pelanggan' => '9', 'nama' => 'BUTET', 'domisili' => 'JAK-BAR', 'jenis_kelamin' => 'P'],
            ['id_pelanggan' => '10', 'nama' => 'JONNY', 'domisili' => 'JAK-SEL', 'jenis_kelamin' => 'P'],
        ];

        foreach ($pelanggans as $pelanggan) {
            Pelanggan::create($pelanggan);
        }
    }
}

class BarangSeeder extends Seeder
{
    public function run()
    {
        $barangs = [
            ['kode' => '1', 'nama' => 'PEN', 'kategori' => 'ATK', 'harga' => 15000, 'stok'=> 150 ],
            ['kode' => '2', 'nama' => 'PENSIL', 'kategori' => 'ATK', 'harga' => 10000,  'stok'=> 100],
            ['kode' => '3', 'nama' => 'PAYUNG', 'kategori' => 'RT', 'harga' => 70000,  'stok'=>200],
            ['kode' => '4', 'nama' => 'PANCI', 'kategori' => 'MASAK', 'harga' => 110000,  'stok'=>50],
            ['kode' => '5', 'nama' => 'SAPU', 'kategori' => 'RT', 'harga' => 40000,  'stok'=>100],
            ['kode' => '6', 'nama' => 'KIPAS', 'kategori' => 'ELEKTRONIK', 'harga' => 200000,  'stok'=>200],
            ['kode' => '7', 'nama' => 'KUALI', 'kategori' => 'MASAK', 'harga' => 120000,  'stok'=>245],
            ['kode' => '8', 'nama' => 'SIKAT', 'kategori' => 'RT', 'harga' => 30000,  'stok'=>230],
            ['kode' => '9', 'nama' => 'GELAS', 'kategori' => 'RT', 'harga' => 25000,  'stok'=>220],
            ['kode' => '10', 'nama' => 'PIRING', 'kategori' => 'RT', 'harga' => 35000,  'stok'=>200],
        ];

        foreach ($barangs as $barang) {
            Barang::create($barang);
        }
    }
}

class PenjualanSeeder extends Seeder
{
    public function run()
    {
        $penjualans = [
            ['id_nota' => '1', 'tgl' => '2018-01-01', 'kode_pelanggan' => '1', 'subtotal' => 50000],
            ['id_nota' => '2', 'tgl' => '2018-01-01', 'kode_pelanggan' => '2', 'subtotal' => 200000],
            ['id_nota' => '3', 'tgl' => '2018-01-01', 'kode_pelanggan' => '3', 'subtotal' => 430000],
            ['id_nota' => '4', 'tgl' => '2018-01-02', 'kode_pelanggan' => '7', 'subtotal' => 120000],
            ['id_nota' => '5', 'tgl' => '2018-01-02', 'kode_pelanggan' => '4', 'subtotal' => 70000],
            ['id_nota' => '6', 'tgl' => '2018-01-03', 'kode_pelanggan' => '8', 'subtotal' => 230000],
            ['id_nota' => '7', 'tgl' => '2018-01-03', 'kode_pelanggan' => '9', 'subtotal' => 390000],
            ['id_nota' => '8', 'tgl' => '2018-01-03', 'kode_pelanggan' => '5', 'subtotal' => 65000],
            ['id_nota' => '9', 'tgl' => '2018-01-04', 'kode_pelanggan' => '2', 'subtotal' => 40000],
        ];

        foreach ($penjualans as $penjualan) {
            Penjualan::create($penjualan);
        }
    }
}

class ItemPenjualanSeeder extends Seeder
{
    public function run()
    {
        $itemPenjualans = [
            ['nota' => '1', 'kode_barang' => '1', 'qty' => 2],
            ['nota' => '1', 'kode_barang' => '2', 'qty' => 2],
            ['nota' => '2', 'kode_barang' => '6', 'qty' => 1],
            ['nota' => '3', 'kode_barang' => '4', 'qty' => 1],
            ['nota' => '3', 'kode_barang' => '7', 'qty' => 1],
            ['nota' => '3', 'kode_barang' => '6', 'qty' => 1],
            ['nota' => '4', 'kode_barang' => '9', 'qty' => 2],
            ['nota' => '4', 'kode_barang' => '10', 'qty' => 2],
            ['nota' => '5', 'kode_barang' => '3', 'qty' => 1],
            ['nota' => '6', 'kode_barang' => '7', 'qty' => 1],
            ['nota' => '6', 'kode_barang' => '5', 'qty' => 1],
            ['nota' => '6', 'kode_barang' => '3', 'qty' => 1],
            ['nota' => '7', 'kode_barang' => '5', 'qty' => 1],
            ['nota' => '7', 'kode_barang' => '6', 'qty' => 1],
            ['nota' => '7', 'kode_barang' => '7', 'qty' => 1],
            ['nota' => '7', 'kode_barang' => '8', 'qty' => 1],
            ['nota' => '8', 'kode_barang' => '5', 'qty' => 1],
            ['nota' => '8', 'kode_barang' => '9', 'qty' => 1],
            ['nota' => '9', 'kode_barang' => '5', 'qty' => 1],
        ];

        foreach ($itemPenjualans as $item) {
            ItemPenjualan::create($item);
        }
    }
}
