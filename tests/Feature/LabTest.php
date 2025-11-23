<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Lab;
use App\Models\Mahasiswa;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LabTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function lab_can_be_created_successfully()
    {
        $lab = Lab::create([
            'lab_id' => uniqid(),
            'nomor_pc' => '10',
            'no_loker' => 'L-05',
            'ruang_lab' => 'Lab 325',
            'tanggal' => '2025-10-11',
            'monitor' => 'Baik',
            'keyboard' => 'Baik',
            'mouse' => 'Baik',
            'jaringan' => 'Baik',
            'keterangan' => 'Semua perangkat berfungsi',
            'alat' => 'PC',
            'status' => 'Aktif',
            'tanggal_status' => '2025-10-11',
        ]);

        $this->assertDatabaseHas('labs', [
            'ruang_lab' => 'Lab 325',
            'monitor' => 'Baik'
        ]);
    }

    /** @test */
    public function lab_can_be_linked_to_mahasiswa()
    {
        $mahasiswa = Mahasiswa::create([
            'nama' => 'Rezki Saputra',
            'nim' => '2355301175',
            'kelas' => '3TI-D',
            'lab_id' => uniqid()
        ]);

        $lab = Lab::create([
            'lab_id' => $mahasiswa->lab_id,
            'ruang_lab' => 'Lab 325',
            'tanggal' => '2025-10-11',
            'monitor' => 'Baik',
            'keyboard' => 'Baik',
            'mouse' => 'Baik',
            'jaringan' => 'Baik',
            'no_loker' => 'L-05',
            'nomor_pc' => '10',
            'alat' => 'PC',
        ]);

        $this->assertEquals('Lab 325', $lab->ruang_lab);
        $this->assertDatabaseHas('labs', ['ruang_lab' => 'Lab 325']);
    }

    /** @test */
    public function lab_validation_fails_with_empty_fields()
    {
        $response = $this->post('/lab', []);
        $response->assertSessionHasErrors();
    }

    
}
