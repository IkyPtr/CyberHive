<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Lab;
use App\Models\Teknisi;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TeknisiTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test teknisi can view broken equipment
     * @test
     */
    public function teknisi_can_view_broken_equipment()
    {
        // Create lab with broken monitor
        Lab::create([
            'ruang_lab' => 'Lab 301',
            'tanggal' => '2024-10-11',
            'monitor' => 'Rusak',
            'keyboard' => 'Baik',
            'mouse' => 'Baik',
            'jaringan' => 'Baik',
            'keterangan' => 'Monitor tidak menyala',
            'alat' => 'PC',
            'no_loker' => '20',
            'nomor_pc' => '10',
            'status' => '-',
            'lab_id' => uniqid()
        ]);

        // Create lab with broken keyboard
        Lab::create([
            'ruang_lab' => 'Lab 302',
            'tanggal' => '2024-10-11',
            'monitor' => 'Baik',
            'keyboard' => 'Rusak',
            'mouse' => 'Baik',
            'jaringan' => 'Baik',
            'keterangan' => 'Keyboard tidak berfungsi',
            'alat' => 'PC',
            'no_loker' => '21',
            'nomor_pc' => '11',
            'status' => '-',
            'lab_id' => uniqid()
        ]);

        $response = $this->get(route('teknisi.index'));
        $response->assertStatus(200);
        $response->assertSee('Lab 301');
        $response->assertSee('Lab 302');
    }

    /**
     * Test teknisi index does not show working equipment
     * @test
     */
    public function teknisi_index_does_not_show_working_equipment()
    {
        // Create lab with all working equipment
        Lab::create([
            'ruang_lab' => 'Lab 303',
            'tanggal' => '2024-10-11',
            'monitor' => 'Baik',
            'keyboard' => 'Baik',
            'mouse' => 'Baik',
            'jaringan' => 'Baik',
            'keterangan' => 'Semua perangkat baik',
            'alat' => 'PC',
            'no_loker' => '22',
            'nomor_pc' => '12',
            'status' => '-',
            'lab_id' => uniqid()
        ]);

        // Create lab with broken mouse
        Lab::create([
            'ruang_lab' => 'Lab 304',
            'tanggal' => '2024-10-11',
            'monitor' => 'Baik',
            'keyboard' => 'Baik',
            'mouse' => 'Rusak',
            'jaringan' => 'Baik',
            'keterangan' => 'Mouse rusak',
            'alat' => 'PC',
            'no_loker' => '23',
            'nomor_pc' => '13',
            'status' => '-',
            'lab_id' => uniqid()
        ]);

        $response = $this->get(route('teknisi.index'));
        $response->assertStatus(200);
        $response->assertDontSee('Lab 303');
        $response->assertSee('Lab 304');
    }

    /**
     * Test teknisi can update lab status to pending
     * @test
     */
    public function teknisi_can_update_lab_status_to_pending()
    {
        $lab = Lab::create([
            'ruang_lab' => 'Lab 305',
            'tanggal' => '2024-10-11',
            'monitor' => 'Rusak',
            'keyboard' => 'Baik',
            'mouse' => 'Baik',
            'jaringan' => 'Baik',
            'keterangan' => 'Monitor rusak',
            'alat' => 'PC',
            'no_loker' => '24',
            'nomor_pc' => '14',
            'status' => '-',
            'lab_id' => uniqid()
        ]);

        $response = $this->put("/teknisi/{$lab->id}", [
            'status' => 'Pending'
        ]);

        $response->assertRedirect(route('teknisi.index'));
        $this->assertDatabaseHas('labs', [
            'id' => $lab->id,
            'status' => 'Pending'
        ]);
    }

    /**
     * Test teknisi can update lab status to completed
     * @test
     */
    public function teknisi_can_update_lab_status_to_completed()
    {
        $lab = Lab::create([
            'ruang_lab' => 'Lab 306',
            'tanggal' => '2024-10-11',
            'monitor' => 'Rusak',
            'keyboard' => 'Rusak',
            'mouse' => 'Baik',
            'jaringan' => 'Baik',
            'keterangan' => 'Multiple equipment broken',
            'alat' => 'PC',
            'no_loker' => '25',
            'nomor_pc' => '15',
            'status' => 'Pending',
            'lab_id' => uniqid()
        ]);

        $response = $this->put("/teknisi/{$lab->id}", [
            'status' => 'Selesai'
        ]);

        $response->assertRedirect(route('teknisi.show'));
        $this->assertDatabaseHas('labs', [
            'id' => $lab->id,
            'status' => 'Selesai',
            'monitor' => 'Baik',
            'keyboard' => 'Baik',
            'mouse' => 'Baik',
            'jaringan' => 'Baik'
        ]);
    }

    /**
     * Test teknisi can view completed repairs
     * @test
     */
    public function teknisi_can_view_completed_repairs()
    {
        Lab::create([
            'ruang_lab' => 'Lab 307',
            'tanggal' => '2024-10-11',
            'monitor' => 'Baik',
            'keyboard' => 'Baik',
            'mouse' => 'Baik',
            'jaringan' => 'Baik',
            'keterangan' => 'Repaired',
            'alat' => 'PC',
            'no_loker' => '26',
            'nomor_pc' => '16',
            'status' => 'Selesai',
            'tanggal_status' => now(),
            'lab_id' => uniqid()
        ]);

        Lab::create([
            'ruang_lab' => 'Lab 308',
            'tanggal' => '2024-10-11',
            'monitor' => 'Rusak',
            'keyboard' => 'Baik',
            'mouse' => 'Baik',
            'jaringan' => 'Baik',
            'keterangan' => 'Not repaired',
            'alat' => 'PC',
            'no_loker' => '27',
            'nomor_pc' => '17',
            'status' => 'Pending',
            'lab_id' => uniqid()
        ]);

        $response = $this->get(route('teknisi.show'));
        $response->assertStatus(200);
        $response->assertSee('Lab 307');
        $response->assertDontSee('Lab 308');
    }

    /**
     * Test teknisi can delete lab entry
     * @test
     */
    public function teknisi_can_delete_lab_entry()
    {
        $lab = Lab::create([
            'ruang_lab' => 'Lab 309',
            'tanggal' => '2024-10-11',
            'monitor' => 'Baik',
            'keyboard' => 'Baik',
            'mouse' => 'Baik',
            'jaringan' => 'Baik',
            'keterangan' => 'To be deleted',
            'alat' => 'PC',
            'no_loker' => '28',
            'nomor_pc' => '18',
            'status' => 'Selesai',
            'lab_id' => uniqid()
        ]);

        $response = $this->delete("/teknisi/destroy/{$lab->id}");

        $response->assertRedirect();
        $this->assertDatabaseMissing('labs', ['id' => $lab->id]);
    }

    /**
     * Test teknisi can identify broken network
     * @test
     */
    public function teknisi_can_identify_broken_network()
    {
        Lab::create([
            'ruang_lab' => 'Lab 310',
            'tanggal' => '2024-10-11',
            'monitor' => 'Baik',
            'keyboard' => 'Baik',
            'mouse' => 'Baik',
            'jaringan' => 'Rusak',
            'keterangan' => 'Network error',
            'alat' => 'PC',
            'no_loker' => '29',
            'nomor_pc' => '19',
            'status' => '-',
            'lab_id' => uniqid()
        ]);

        $response = $this->get(route('teknisi.index'));
        $response->assertStatus(200);
        $response->assertSee('Lab 310');
    }
}
