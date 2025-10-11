<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Admin;
use App\Models\Teknisi;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Seed test data
        Admin::create([
            'id_ad' => uniqid(),
            'username' => 'admin_test',
            'password' => 'password123',
            'nama' => 'Admin Test',
            'nip' => '1234567890'
        ]);

        Teknisi::create([
            'id_tk' => uniqid(),
            'username' => 'teknisi_test',
            'password' => 'password123',
            'nama' => 'Teknisi Test'
        ]);
    }

    /**
     * Test admin can login with valid credentials
     * @test
     */
    public function admin_can_login_with_valid_credentials()
    {
        $response = $this->post('/session', [
            'username' => 'admin_test',
            'password' => 'password123'
        ]);

        $response->assertRedirect(route('admin.dashboard'));
        $this->assertNotNull(session('admin'));
    }

    /**
     * Test teknisi can login with valid credentials
     * @test
     */
    public function teknisi_can_login_with_valid_credentials()
    {
        $response = $this->post('/session', [
            'username' => 'teknisi_test',
            'password' => 'password123'
        ]);

        $response->assertRedirect(route('teknisi.index'));
        $this->assertNotNull(session('teknisi'));
    }

    /**
     * Test login fails with invalid username
     * @test
     */
    public function login_fails_with_invalid_username()
    {
        $response = $this->post('/session', [
            'username' => 'invalid_user',
            'password' => 'password123'
        ]);

        $response->assertSessionHasErrors(['username']);
        $this->assertNull(session('admin'));
        $this->assertNull(session('teknisi'));
    }

    /**
     * Test login fails with invalid password
     * @test
     */
    public function login_fails_with_invalid_password()
    {
        $response = $this->post('/session', [
            'username' => 'admin_test',
            'password' => 'wrongpassword'
        ]);

        $response->assertSessionHasErrors(['username']);
        $this->assertNull(session('admin'));
    }

    /**
     * Test login validation requires username
     * @test
     */
    public function login_validation_requires_username()
    {
        $response = $this->post('/session', [
            'password' => 'password123'
        ]);

        $response->assertSessionHasErrors(['username']);
    }

    /**
     * Test login validation requires password
     * @test
     */
    public function login_validation_requires_password()
    {
        $response = $this->post('/session', [
            'username' => 'admin_test'
        ]);

        $response->assertSessionHasErrors(['password']);
    }

    /**
     * Test login page is accessible
     * @test
     */
    public function login_page_is_accessible()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
}
