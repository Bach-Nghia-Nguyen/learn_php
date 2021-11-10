<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="php-elephant.png" type="image/x-icon">
  <title>PHP</title>
</head>
<body>
  <?php
    // $phrase = "To be or not to be";
    // $age = 17;
    // $gpa = 45.75;
    // $isMale = true;

    // echo substr($phrase, 8, 3);
    // echo str_replace("To be or", "Betsy", $phrase);
    // echo str_replace("To be", "LOL", $phrase);
    // echo strtoupper($phrase);
    // $num = 10;
    // $num *= 2;
    // $num += 25;

    // echo $num;
    // echo abs(-102);
    // echo pow(4, 3);
    // echo sqrt(144);
    // echo max(3, -9, 8);
    // echo min(35, -49, 18);
    // echo round(3.7);
    // echo round(3.81295);
    // echo round(0.2);
    // echo round(-3.5);
    // echo ceil(3.1);
    // echo floor(8.799);
    ?>

    <!-- <form action="site.php" method="get">
      Name: <input type="text" name="username" >
      <br>
      Age: <input type="number" name="age" > 
      <input type="submit">
    </form> -->

    <!-- <br> -->
      <?php //echo $_GET["username"] ?>
     <!-- <br> -->
     <?php //echo $_GET["age"] + 1 ?>

     <!-- Basic calculator -->
     <!-- <form action="site.php" method="get">
       <input type="number" name="num1">
       <br>
       <input type="number" name="num2">
       <input type="submit">
     </form> -->

     <?php 
      // echo $_GET["num1"] + $_GET["num2"]
     ?>

      <!-- Mat Libs Game -->
     <!-- <form action="site.php" method="get">
       Color: <input type="text" name="color"> <br>
       Plural Noun: <input type="text" name="pluralNoun"> <br>
       Celebrity: <input type="text" name="celebrity"> <br>
       <input type="submit">
     </form>
     <br> -->

     <?php
      // $color = $_GET["color"];
      // $pluralNoun = $_GET["pluralNoun"];
      // $celebrity = $_GET["celebrity"];

      // echo "Rose are $color <br>";
      // echo "$pluralNoun are blue <br>";
      // echo "I love $celebrity <br>";
     ?>

     <!-- <form action="site.php" method="get">
       Name: <input type="text" name="name"> <br>
       <input type="submit">
     </form>
     <br> -->

     <?php 
      // echo $_GET["name"];
      // echo "<br>";
      // echo $_GET["age"];
      ?>

      <!-- <form action="site.php" method="post">
        Password: <input type="password" name="password"> <br>
        <input type="submit" >
      </form>
      <br> -->

      <?php
        // echo  $_POST["password"];
      ?>

      <?php 
        // $friends = array("Kevin", "Karen", "Oscar", "Jim");
        // $friends[5] = "Chloe";
        // echo $friends[3];
        // echo count($friends);
      ?>

      <!-- <form action="site.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"> <br>
        <input type="submit" >
      </form> -->

      <?php
        // $fruits = $_POST["fruits"];
        // echo $fruits[1];
      ?>

      <!-- <form action="site.php" method="post">
        <input type="text" name="student">
        <input type="submit" >
      </form> -->

      <?php
        // $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
        // // $grades["Jim"] = "G";
        // echo $grades[$_POST["student"]];
      ?>

      <?php
        // function sayHi($name, $age) {
        //   echo "Hello $name, you are $age years old <br>";
        // }

        // sayHi("Tom", 35);
        // sayHi("Nghia", 18);
        // sayHi("Max", 27);
      ?>

      <?php
        // function cube($num) {
        //   // return $num * $num * $num;
        //   echo "Hello";
        //   return $num ** 3;
        // }

        // echo cube(3);
      ?>

      <?php
        // $isMale = false;
        // $isTall = false;

        // if ($isMale && $isTall) {
        //   echo "You are a tall male";
        // } elseif (!$isMale && $isTall) {
        //   echo "You are tall and not male";
        // } elseif ($isMale && !$isTall) {
        //   echo "You are a short male";
        // } else {
        //   echo "You are either male or tall";
        // }
      ?>

      <?php
        // function getMax($num1, $num2, $num3) {
        //   if ($num1 >= $num2 && $num1 >= $num3) {
        //     return $num1;
        //   } elseif ($num2 >= $num1 && $num2 >= $num3) {
        //     return $num2;
        //   } else {
        //     return $num3;
        //   }
        // }
        
        // echo getMax(33312, 890, 9000);
      ?>

      <!-- <form action="site.php" method="post">
        First Num: <input type="number" step="any" name="num1" > <br>
        OP: <input type="text" name="op"> <br>
        Second Num: <input type="number" step="any" name="num2" > <br>
        <input type="submit">
      </form> -->

      <?php
        // $num1 = $_POST["num1"];
        // $num2 = $_POST["num2"];
        // $op = $_POST["op"];

        // if ($op == "+") {
        //   echo $num1 + $num2;
        // } elseif ($op == "-") {
        //   echo $num1 - $num2;
        // } elseif ($op == "*") {
        //   echo $num1 * $num2;
        // } elseif ($op == "/") {
        //   echo $num1 / $num2;
        // } elseif ($op == "%") {
        //   echo $num1 % $num2;
        // } elseif ($op == "**" || $op == "^") {
        //   echo $num1 ** $num2;
        // } else {
        //   echo "Invalid Operator";
        // }
      ?>

      <!-- <form action="site.php" method="post">
        What was your grade?
        <input type="text" name="grade">
        <input type="submit">
      </form> -->

      <?php
        // $grade = $_POST["grade"];
        // switch ($grade) {
        //   case 'A':
        //     echo "You did amazing!";
        //     break;
          
        //   case "B":
        //     echo "You did pretty good";
        //     break;
          
        //   case "C":
        //     echo "You did poorly";
        //     break;

        //   case "D":
        //     echo "You did very bad";
        //     break;
          
        //   case "F":
        //     echo "YOU FAIL!";
        //     break;

        //   default:
        //     echo "Invalid Grade";
        //     break;
        // }
      ?>


      <?php
      /*
        $index = 4;
        do {
          echo "$index <br>";
          $index++;
        } while ($index <= 5);
        */
      ?>

      <?php
        // $luckyNumbers = array(4, 8, 14, 16, 23, 42);
        // for ($i = 0; $i < count($luckyNumbers); $i++) { 
        //   echo "$luckyNumbers[$i] <br>";
        // }
      ?>

      <?php
        // include "header.html"
      ?>

      <!-- <p>Hello World </p> -->
      
      <?php
        // include "footer.html"
      ?>

      <?php
        // $title = "My First Post";
        // $author = "Mike";
        // $wordCount = 400;
        // include "article-header.php";
      ?>

      <?php
        // include "useful-tools.php";
        // echo $feetInMile;
        // echo '<br>';
        // echo sayHi('Nghia');
      ?>

      <?php
        // class Book {
        //   var $title;
        //   var $author;
        //   var $pages;

        //   function __construct($aTitle, $aAuthor, $aPages) {
        //     $this->title = $aTitle;
        //     $this->author = $aAuthor;
        //     $this->pages = $aPages;
        //   }
        // }

        // $book1 = new Book("Harry Potter", "JK Rowling", 400);
        // $book1 -> title = "Hunger Games";

        // $book2 = new Book("Lord of the Rings", "Tolkien", 700);

        // echo $book1 -> title;
        // echo "<br>";
        // echo $book2 -> title;
      ?>
      
      <?php
        // class Student {
        //   var $name;
        //   var $major;
        //   var $gpa;

        //   function __construct($name, $major, $gpa) {
        //     $this -> name = $name;
        //     $this -> major = $major;
        //     $this -> gpa = $gpa;
        //   }

        //   function hasHonors() {
        //     if ($this -> gpa >= 3.5) {
        //       return "true";
        //     } else {
        //       return "false";
        //     }

        //   }
        // }

        // $student1 = new Student("Jim", "Business", 2.8);
        // $student2 = new Student("Pam", "Art", 3.6);

        // echo $student1 -> hasHonors();
        // echo "<br>";
        // echo $student2 -> hasHonors();
      ?>

      <?php
        // class Movie {
        //   public $title;
        //   private $rating;

        //   function __construct($title, $rating) {
        //     $this->title = $title;
        //     $this->setRating($rating);
        //   }

        //   function getRating() {
        //     return $this -> rating;
        //   }

        //   function setRating($rating) {
        //     $validRatingList = array("G", "PG", "PG-13", "R", "NR");
        //     if (in_array($rating, $validRatingList)) {
        //       $this->rating = $rating;
        //     } else {
        //       $this->rating = "NR";
        //     }
        //   }
        // }

        // $avengers = new Movie("Avengers", "PG-13");
        // echo $avengers->title;
        // echo "<br>";
        // // $avengers->setRating("R");
        // echo $avengers->getRating();
      ?>

      <?php
        class Chef {
          function makeChicken() {
            echo "The chef makes chicken <br>";
          }
          function makeSalad() {
            echo "The chef makes salad <br>";
          }
          function makeSpecialDish() {
            echo "The chef makes bbq ribs <br>";
          }
        }

        class ItalianChef extends Chef {
          function makePasta() {
            echo "The chef makes pasta";
          }

          function makeSpecialDish() {
            echo "The chef makes chicken parm";
          }
        }

        $chef = new Chef();
        $chef->makeSpecialDish();

        $italianChef = new ItalianChef();
        $italianChef->makeSpecialDish();
      ?>
</body>
</html>