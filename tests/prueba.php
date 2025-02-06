
<?php
use PHPUnit\Framework\TestCase;
use App\DNI; 
class CalculadoraTest extends TestCase {
 public function testGetDNIConLetra() {
 $calc = new DNI('12345678Z');
 $this-> assertEquals('12345678Z', $calc->getDNIConLetra());
}
}