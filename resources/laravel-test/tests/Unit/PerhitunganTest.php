<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\PerhitunganController;

class PerhitunganTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    
    public function testPertambahan()
    {
        $perhitungan = new PerhitunganController();
        $hasil = $perhitungan->pertambahan(2,2);
        $this->assertEquals(4,$hasil);
    }

}
