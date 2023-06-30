<?php
namespace Test;
use PHPUnit\Framework\TestCase;
use App\MayTinh;
class MayTinhTest extends TestCase {
    public function test_cong_case_1(){
        $objMayTinh = new MayTinh();
        $a = 2;
        $b = 3;

        $expected_output    = 5;
        $your_output        = $objMayTinh->cong($a,$b);

        // So sanh bang
        $this->assertEquals($your_output,$expected_output);
    }
}