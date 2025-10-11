<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Mahasiswa;
use App\Models\Lab;
use App\Models\Matakuliah;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MahasiswaTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test mahasiswa can be created successfully
     * @test
     */
    public function mahasiswa_can_be_created_successfully()
    {
        $data = [
            'nama' => 'John Doe',
            'nim' => '12345678',
            'kelas' => '3A',
            'ruang_lab' => 'Lab 101',
            'tanggal' => '2024-10-11',
            'monitor' => 'baik',
            'keyboard' => 'baik',
            'mouse' => 'baik',
            'jaringan' => 'baik',
            'keterangan' => 'Semua perangkat berfungsi',
            'alat' => 'PC',
            'no_loker' => '10',
            'nomor_pc' => '5',
            'matakuliah' => 'Pemrograman Web',
            'dosen' => 'Dr. Ahmad',
            'jam_masuk' => '08:00',
            'jam_keluar' => '10:00'
        ];

        $response = $this->post('/mahasiswa', $data);

        $response->assertRedirect('/');
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('mahasiswas', [
            'nama' => 'John Doe',
            'nim' => '12345678',
            'kelas' => '3A'
        ]);
    }

    /**
     * Test duplicate mahasiswa entry is prevented
     * @test
     */
    public function duplicate_mahasiswa_entry_is_prevented()
    {
        $labId = uniqid();

        $mahasiswa = Mahasiswa::create([
            'nama' => 'Jane Doe',
            'nim' => '87654321',
            'kelas' => '3B',
            'lab_id' => $labId
        ]);

        $mahasiswa->labs()->create([
            'ruang_lab' => 'Lab 102',
            'tanggal' => '2024-10-11',
            'monitor' => 'baik',
            'keyboard' => 'baik',
            'mouse' => 'baik',
            'jaringan' => 'baik',
            'keterangan' => 'Test',
            'alat' => 'PC',
            'no_loker' => '11',
            'nomor_pc' => '6',
            'status' => '-',
            'lab_id' => $labId
        ]);

        $mahasiswa->matakuliahs()->create([
            'matakuliah' => 'Database',
            'dosen' => 'Dr. Budi',
            'jam_masuk' => '10:00',
            'jam_keluar' => '12:00',
            'lab_id' => $labId
        ]);

        // Try to create duplicate
        $data = [
            'nama' => 'Jane Doe',
            'nim' => '87654321',
            'kelas' => '3B',
            'ruang_lab' => 'Lab 102',
            'tanggal' => '2024-10-11',
            'monitor' => 'baik',
            'keyboard' => 'baik',
            'mouse' => 'baik',
            'jaringan' => 'baik',
            'keterangan' => 'Test',
            'alat' => 'PC',
            'no_loker' => '11',
            'nomor_pc' => '6',
            'matakuliah' => 'Database',
            'dosen' => 'Dr. Budi',
            'jam_masuk' => '10:00',
            'jam_keluar' => '12:00'
        ];

        $response = $this->post('/mahasiswa', $data);
        $response->assertRedirect('/');
        $response->assertSessionHas('error');
    }

    /**
     * Test mahasiswa can be deleted
     * @test
     */
    public function mahasiswa_can_be_deleted()
    {
        $labId = uniqid();

        $mahasiswa = Mahasiswa::create([
            'nama' => 'Test Delete',
            'nim' => '99999999',
            'kelas' => '3C',
            'lab_id' => $labId
        ]);

        Lab::create([
            'ruang_lab' => 'Lab 103',
            'tanggal' => '2024-10-11',
            'monitor' => 'baik',
            'keyboard' => 'baik',
            'mouse' => 'baik',
            'jaringan' => 'baik',
            'keterangan' => 'Test',
            'alat' => 'PC',
            'no_loker' => '12',
            'nomor_pc' => '7',
            'status' => '-',
            'lab_id' => $labId
        ]);

        Matakuliah::create([
            'matakuliah' => 'Testing',
            'dosen' => 'Dr. Test',
            'jam_masuk' => '13:00',
            'jam_keluar' => '15:00',
            'lab_id' => $labId
        ]);

        $response = $this->delete("/mahasiswa/{$mahasiswa->nim}");

        $response->assertRedirect(route('admin.search'));
        $this->assertDatabaseMissing('mahasiswas', ['nim' => '99999999']);
        $this->assertDatabaseMissing('labs', ['lab_id' => $labId]);
        $this->assertDatabaseMissing('matakuliahs', ['lab_id' => $labId]);
    }

    /**
     * Test mahasiswa index page shows all data
     * @test
     */
    public function mahasiswa_index_shows_all_data()
    {
        $labId = uniqid();

        $mahasiswa = Mahasiswa::create([
            'nama' => 'Index Test',
            'nim' => '11111111',
            'kelas' => '3D',
            'lab_id' => $labId
        ]);

        $mahasiswa->labs()->create([
            'ruang_lab' => 'Lab 104',
            'tanggal' => '2024-10-11',
            'monitor' => 'baik',
            'keyboard' => 'baik',
            'mouse' => 'baik',
            'jaringan' => 'baik',
            'keterangan' => 'Index test',
            'alat' => 'PC',
            'no_loker' => '13',
            'nomor_pc' => '8',
            'status' => '-',
            'lab_id' => $labId
        ]);

        $response = $this->get('/mahasiswa');
        $response->assertStatus(200);
        $response->assertSee('Index Test');
    }

    /**
     * Test mahasiswa create form is accessible
     * @test
     */
    public function mahasiswa_create_form_is_accessible()
    {
        $response = $this->get('/mahasiswa/create');
        $response->assertStatus(200);
    }

    /**
     * Test mahasiswa creation validates required fields
     * @test
     */
    public function mahasiswa_creation_validates_required_fields()
    {
        $response = $this->post('/mahasiswa', []);
        $response->assertSessionHasErrors();
    }
}
