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

    function setPrice ($newPrice) {
        $this->price=$newPrice;
    }
    function getPrice() {
        return $this->price;
    }
}


class Apple  extends Fruit {
    public $shape 
}


?>


