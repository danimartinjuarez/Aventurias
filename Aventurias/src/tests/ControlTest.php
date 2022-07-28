<?php
namespace Test;

use App\Models\Users;
use PHPUnit\Framework\TestCase;

class ControlTest extends TestCase {

    public function testControl (){
        $this->assertEquals(1,1);

}

    public function testGetName() {
        $newUser = new Users(null, "NameTest");
        $result = $newUser->getName();
        $this->assertEquals("NameTest", $result);
    }

    public function testGetPhone() {
        $newUser = new Users(null, "NameTest", "PhoneTest");
        $result = $newUser->getPhone();
        $this->assertEquals("PhoneTest", $result);
    }

    public function testGetEmail() {
        $newUser = new Users(null, "NameTest", "PhoneTest", "EmailTest");
        $result = $newUser->getEmail();
        $this->assertEquals("EmailTest", $result);
    }

    public function testGetPeople() {
        $newUser = new Users(null, "NameTest", "PhoneTest", "EmailTest", 999);
        $result = $newUser->getPeople();
        $this->assertEquals(999, $result);
    }

     public function testGetAdventures() {
        $newUser = new Users(null, "NameTest", "PhoneTest", "EmailTest", 999, "Picture");
        $result = $newUser->getAdventures();
        $this->assertEquals("Picture", $result);
    }

}