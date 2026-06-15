public function run() {
    \DB::table('dim_mahasiswas')->insert([
        ['nim' => '12345', 'nama' => 'Budi Santoso', 'prodi' => 'Teknik Informatika'],
        ['nim' => '67890', 'nama' => 'Siti Aminah', 'prodi' => 'Sistem Informasi'],
    ]);
}