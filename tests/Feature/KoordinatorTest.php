<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Koordinator;
use App\Models\Lab;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KoordinatorTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test koordinator can be created successfully
     * @test
     */
    public function koordinator_can_be_created_successfully()
    {
        $data = [
            'nama' => 'Koordinator Test',
            'nim_nip' => 'NIP123456',
            'email' => 'koordinator@test.com',
            'jumlah' => 50,
            'kegiatan' => 'Workshop Laravel',
            'tanggal_mulai' => '2024-10-15',
            'tanggal_selesai' => '2024-10-16',
            'ruang_lab' => 'Lab 201',
            'keterangan' => 'Workshop untuk mahasiswa',
            'alat' => 'Projector, PC'
        ];

        $response = $this->post('/koordinator', $data);

        $response->assertRedirect('/logkeg');
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('koordinators', [
            'nama' => 'Koordinator Test',
            'nim_nip' => 'NIP123456',
            'email' => 'koordinator@test.com',
            'status' => 'pending'
        ]);
    }

    /**
     * Test koordinator status can be updated
     * @test
     */
    public function koordinator_status_can_be_updated()
    {
        $labId = uniqid();

        $koordinator = Koordinator::create([
            'id_ko' => uniqid(),
            'nama' => 'Update Test',
            'nim_nip' => 'NIP789',
            'email' => 'update@test.com',
            'jumlah' => 30,
            'kegiatan' => 'Seminar',
            'tanggal_mulai' => '2024-10-20',
            'tanggal_selesai' => '2024-10-21',
            'keterangan_status' => '-',
            'status' => 'pending',
            'lab_id' => $labId
        ]);

        $koordinator->labs()->create([
            'ruang_lab' => 'Lab 202',
            'keterangan' => 'Test',
            'alat' => 'PC',
            'lab_id' => $labId,
            'nomor_pc' => '-',
            'no_loker' => '-',
            'tanggal' => '2024-10-20',
            'monitor' => '-',
            'keyboard' => '-',
            'mouse' => '-',
            'jaringan' => '-',
        ]);

        $response = $this->put("/koordinator/{$koordinator->id}", [
            'status' => 'approved',
            'keterangan_status' => 'Disetujui oleh admin'
        ]);

        $response->assertRedirect(route('koordinator.index'));
        $this->assertDatabaseHas('koordinators', [
            'id' => $koordinator->id,
            'status' => 'approved',
            'keterangan_status' => 'Disetujui oleh admin'
        ]);
    }

    /**
     * Test koordinator index only shows entries with lab data
     * @test
     */
    public function koordinator_index_only_shows_entries_with_lab_data()
    {
        $labId1 = uniqid();
        $labId2 = uniqid();

        // Koordinator with lab
        $koor1 = Koordinator::create([
            'id_ko' => uniqid(),
            'nama' => 'With Lab',
            'nim_nip' => 'NIP111',
            'email' => 'withlab@test.com',
            'jumlah' => 20,
            'kegiatan' => 'Event A',
            'tanggal_mulai' => '2024-10-25',
            'tanggal_selesai' => '2024-10-26',
            'status' => 'pending',
            'keterangan_status' => '-',
            'lab_id' => $labId1
        ]);

        $koor1->labs()->create([
            'ruang_lab' => 'Lab 203',
            'keterangan' => 'Test',
            'alat' => 'PC',
            'lab_id' => $labId1,
            'nomor_pc' => '-',
            'no_loker' => '-',
            'tanggal' => '2024-10-25',
            'monitor' => '-',
            'keyboard' => '-',
            'mouse' => '-',
            'jaringan' => '-',
        ]);

        // Koordinator without lab
        Koordinator::create([
            'id_ko' => uniqid(),
            'nama' => 'Without Lab',
            'nim_nip' => 'NIP222',
            'email' => 'withoutlab@test.com',
            'jumlah' => 15,
            'kegiatan' => 'Event B',
            'tanggal_mulai' => '2024-10-27',
            'tanggal_selesai' => '2024-10-28',
            'status' => 'pending',
            'lab_id' => $labId2
        ]);

        $response = $this->get('/admin/Koor');
        $response->assertStatus(200);
        $response->assertSee('With Lab');
        $response->assertDontSee('Without Lab');
    }

    /**
     * Test koordinator create form is accessible
     * @test
     */
    public function koordinator_create_form_is_accessible()
    {
        $response = $this->get('/koordinator/create');
        $response->assertStatus(200);
    }

    /**
     * Test koordinator can view print page
     * @test
     */
    public function koordinator_can_view_print_page()
    {
        $labId = uniqid();

        $koordinator = Koordinator::create([
            'id_ko' => uniqid(),
            'nama' => 'Print Test',
            'nim_nip' => 'NIP333',
            'email' => 'print@test.com',
            'jumlah' => 25,
            'kegiatan' => 'Print Event',
            'tanggal_mulai' => '2024-10-30',
            'tanggal_selesai' => '2024-10-31',
            'status' => 'approved',
            'lab_id' => $labId
        ]);

        $koordinator->labs()->create([
            'ruang_lab' => 'Lab 204',
            'keterangan' => 'Print test',
            'alat' => 'PC',
            'lab_id' => $labId,
            'nomor_pc' => '-',
            'no_loker' => '-',
            'tanggal' => '2024-10-30',
            'monitor' => '-',
            'keyboard' => '-',
            'mouse' => '-',
            'jaringan' => '-',
        ]);

        $response = $this->get("/admin/koordinator/{$koordinator->id}/print");
        $response->assertStatus(200);
        $response->assertSee('Print Test');
    }

    /**
     * Test koordinator edit form is accessible
     * @test
     */
    public function koordinator_edit_form_is_accessible()
    {
        $koordinator = Koordinator::create([
            'id_ko' => uniqid(),
            'nama' => 'Edit Test',
            'nim_nip' => 'NIP444',
            'email' => 'edit@test.com',
            'jumlah' => 40,
            'kegiatan' => 'Edit Event',
            'tanggal_mulai' => '2024-11-01',
            'tanggal_selesai' => '2024-11-02',
            'status' => 'pending',
            'lab_id' => uniqid()
        ]);

        $response = $this->get("/admin/koordinator/{$koordinator->id}/edit?status=pending");
        $response->assertStatus(200);
    }

    /**
     * Test koordinator creation validates required fields
     * @test
     */
    public function koordinator_creation_validates_required_fields()
    {
        $response = $this->post('/koordinator', []);
        $response->assertSessionHasErrors();
    }
}
