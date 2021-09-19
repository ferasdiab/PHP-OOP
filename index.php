<?php 

echo "hello";
echo "<br>";

//// testing  



// class User{
 
//     private $userName;
//     public $email;
//     private $password;
 
//    function __construct($userName, $email, $pass){
//         $this->userName= $userName;
//         $this->email= $email;
//         $this->password = $pass;
//     }
//     function getUserName () {
//         return $this->userName;
//     }
// }

// $userOne = new User("Firas", "Firas@mail.com" , "123");

// echo($userOne->getUserName()) . '<br>' ;


// class Admin extends User {
//     public $role = "admin";
// }

// $adminOne = new Admin("omar", "omar@mail.com" , "123");

// print_r($adminOne->getUserName());

// print_r($adminOne->userName);

class Fruit {
    public $color;
    public $price;
    function __construct ($color , $price) {
        $this->price = $price ;
        $this->color = $color ;
    }
    function setPrice ($newPrice) {
        $this->price=$newPrice;
    }
    function getPrice() {
        return $this->price;
    }
    function getColor() {
        return $this->color;
    }
}


class Apple  extends Fruit {
    public $shape;
    function __construct($color , $price , $shape) {
        $this->shape =$shape ;
        $this->price = $price ;
        $this->color = $color ;
    }

}

$apple_1 = new Apple ("red" , 50 , "curcular");
$fruit_1 = new Fruit ("red" , 50);

// print_r($apple_1);
// echo("<br>");
// print_r($fruit_1);

//////////////////////////////////////

class Info {
    private $email ;
    private $password ;
    function __construct($email , $password) {
        $this->email = $email;
        $this->password = $password;
    }
    public function getEmail (){
        return $this->email;
    }
    public function setEmail ($newEmail){
        $this->email = $newEmail ;
    }
}

$firas = new Info( "dfiras@gmail.com", "123456");

// you cant access a private property 
// echo($firas->email) . "<br>";
// echo($firas->password) . "<br>";

echo($firas->getEmail()) . "<br>";  //  => dfiras@gmail.com
$firas->setEmail("omar@gmail.com");
echo($firas->getEmail()) . "<br>";  //  => omar@gmail.com



?>


