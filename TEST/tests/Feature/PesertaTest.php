<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Peserta;
use App\Models\Lab;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PesertaTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test peserta can be created successfully
     * @test
     */
    public function peserta_can_be_created_successfully()
    {
        $data = [
            'nama' => 'Peserta Test',
            'nim_nip' => 'NIP123456',
            'ruang_lab' => 'Lab 401',
            'tanggal' => '2024-10-12',
            'monitor' => 'Baik',
            'keyboard' => 'Baik',
            'mouse' => 'Baik',
            'jaringan' => 'Baik',
            'keterangan' => 'Test peserta baru',
            'alat' => 'PC',
            'nomor_pc' => '5',
        ];

        $response = $this->post('/peserta', $data);

        // Cek redirect & session success
        $response->assertRedirect('/logkeg');
        $response->assertSessionHas('success', 'SELAMAT DATA ANDA SEBAGAI PESERTA BERHASIL DISIMPAN');

        // Pastikan data peserta dan lab tercatat
        $this->assertDatabaseHas('pesertas', [
            'nama' => 'Peserta Test',
            'nim_nip' => 'NIP123456',
        ]);

        $this->assertDatabaseHas('labs', [
            'ruang_lab' => 'Lab 401',
            'monitor' => 'Baik',
        ]);
    }

    /**
     * Test peserta index page shows data
     * @test
     */
    public function peserta_index_shows_data()
    {
        $peserta = Peserta::create([
            'id_ps' => uniqid(),
            'nama' => 'Index Test',
            'nim_nip' => 'NIP999',
            'lab_id' => uniqid()
        ]);

        $peserta->labs()->create([
            'ruang_lab' => 'Lab 402',
            'tanggal' => '2024-10-12',
            'monitor' => 'Baik',
            'keyboard' => 'Baik',
            'mouse' => 'Baik',
            'jaringan' => 'Baik',
            'alat' => 'PC',
            'no_loker' => '1',
            'nomor_pc' => '5',
            'lab_id' => $peserta->lab_id
        ]);

        $response = $this->get('/peserta');
        $response->assertStatus(200);
        $response->assertSee('Index Test');
    }

    /**
     * Test peserta creation validates required fields
     * @test
     */
    public function peserta_creation_validates_required_fields()
    {
        $response = $this->post('/peserta', []);
        $response->assertSessionHasErrors();
    }

    /**
     * Test peserta can be deleted successfully
     * @test
     */
    public function peserta_can_be_deleted_successfully()
    {
        $peserta = Peserta::create([
            'id_ps' => uniqid(),
            'nama' => 'Delete Test',
            'nim_nip' => 'NIP777',
            'lab_id' => uniqid()
        ]);

        $peserta->labs()->create([
            'ruang_lab' => 'Lab 403',
            'tanggal' => '2024-10-12',
            'monitor' => 'Rusak',
            'keyboard' => 'Baik',
            'mouse' => 'Baik',
            'jaringan' => 'Baik',
            'alat' => 'PC',
            'no_loker' => '2',
            'nomor_pc' => '10',
            'lab_id' => $peserta->lab_id
        ]);

        $response = $this->delete("/peserta/{$peserta->id}");
        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseMissing('pesertas', ['id' => $peserta->id]);
        $this->assertDatabaseMissing('labs', ['lab_id' => $peserta->lab_id]);
    }
}
