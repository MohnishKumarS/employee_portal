<?php

// class car{

//     // parameter

//     public $color;
//     public $model;

//     //method

//     public function __construct($color,$model)

//     // Constructor
//     {
//         $this->color = $color;
//         $this->model = $model;
//     }

//     public function message(){


//         return "my car is " . $this->color." ". $this->model.".";
//     }


// }

// Object
// $myCar = new Car("red", "Toyota");

// echo $myCar->message();

// Inheritance
// class Car extends Vehicle {
//     public $model;
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="demoregister.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Phone:</label><br>
        <input type="number" id="phone" name="phone" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
