<?php

namespace Tests\Feature\Auth;
use App\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\CreatesApplication;
use Laravel\BrowserKitTesting\TestCase as BaseTestCase;


class LoginTest extends BaseTestCase
{

    use CreatesApplication;
    public $baseUrl = 'http://localhost:8000';
    /** @test */
    public function user_yang_boleh_login()
    {
        

        // Kunjungi halaman '/login'
        $this->visit('/login');

        // Submit form login dengan email dan password yang tepat
        $this->submitForm('Login', [
            'email'    => 'rendi@gmail.com',
            'password' => '1234',
        ]);

        // Lihat halaman ridirect setelah login
        $this->seePageIs('mahasiswa/home');

        // Kita melihat halaman tulisan "rendi pada halaman itu.
        $this->seeText('rendi');
    }
}
