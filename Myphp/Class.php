<?php 

class MyClass {
    public $property1;

      function MyMetod() {
        print ($this->property1);
      }
            function callMetod() {
             $this->MyMetod(); 
            }
}


class Primer {
  public $property;
}

$myObj = new Primer();
$myObj -> property = 1;
$myObj2 = clone $myObj;
$myObj2 -> property = 2;
print ($myObj->property);
print ($myObj2->property);




class User { 
    protected $name; 
    protected $login; 
    protected $password;
    
    public function __construct($name,$login,$password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }
    function __destruct() {
        echo"Des";
    }
    
    public function showInfo() {
        $this->obj = new User($this->name,$this->login,$this->password);
        echo "<pre>";
        print_r ($this->obj);
        echo "</pre>";
    }
}
 
$user1 = new User("Guest","guest","qwerty");
$user2 = new User("321","wweww","1998");
$user3 = new User("213","rrqwer","1999");
 
$usr1 = $user1->showInfo();
$usr2 = $user2->showInfo();
$usr3 = $user3->showInfo();


?>