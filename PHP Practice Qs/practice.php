
<?php
                        // echo "<h1>PHP Array Exercises</h1>";
// echo "1. Write code to count even numbers in an array.<br>";
// $nums = [10,10,13,14,2,6,7];
// $evennums = [];
// $count = 0;
// foreach($nums as $n) {
// 	if ( $n % 2 == 0 and !in_array($n, $evennums) ) {
//     	$count += 1;
//         $evennums[] = $n;
//     }
// }
// echo $count."<br>" ; 
// echo count($evennums);

// echo "2. Write code to reverse an array without using array_reverse()<br>";
// $nums = [10,10,13,14,2,6,7];
// //  print_r(array_reverse(array: $nums));  simple way 

// // without using array_reverse()
// $reversed = [];
// for($i = count($nums) - 1 ; $i > 0 ; $i-- ) {
//     $reversed[] = $nums[$i];
// }
// print_r($reversed);

// echo "3. Create a multidimensional array of students and display all names.<br>";
// $marks = array(
//     "john" => array( "passout_year" => 2025,  "cgpa" => 7.5 ),
//     "arshad" => array( "passout_year" => 2025,  "cgpa" => 8)
// );

// print_r(array_keys($marks));
// echo "<br>";

// foreach($marks as $s => $details) {
//     echo $s . " : Passout: " . $details["passout_year"] . ", CGPA: " . $details["cgpa"] . "<br>";
// }

// echo "4. Write code to check if a value exists in an array..<br>";
// $color = array("red", "green", "blue", "yellow", "black");
// $c = "purple";
// if (in_array($c, $color)) {
//   echo "exists";
// } else {
//   echo "not exists ";
// }

// echo "5. Write code to merge two arrays manually (without array_merge())<br>";
// $color = array("red", "green", "blue", "yellow", "black");
// $color2 = array("white", "orange", "pink");
// $merged = [];
// foreach($color as $c) {
//     $merged[] = $c;
// }
// foreach($color2 as $c2) {
//     $merged[] = $c2;
// }

// print_r($merged);

// echo " 6.Write code to count even numbers in an array.<br>";
// $nums = [10,10,13,14,2,6,7];
// $evennums = [];
// $count = 0;
// foreach($nums as $n) {
// 	if ( $n % 2 == 0 and !in_array($n, $evennums) ) {
//     	$count += 1;
//         $evennums[] = $n;
//     }
// }
// echo $count."<br>" ; 
// echo count($evennums);

                             // echo "<h1>PHP Variadic Functions</h1>";

// echo "1 Write a function that accepts any number of integers and returns their sum.<br>";
// function totalsum(...$nums) {
//     $sum = 0;
//     foreach($nums as $n) {
//         $sum += $n;
//     }
//     return $sum;
// }

// $res = totalsum(10,20,30,40,50);
// echo "Total Sum: " . $res;

// echo "2 Write a function that accepts unlimited strings and returns them as a single string.<br>";
// function concatenate(...$s) {
//   $sentence = "";
//   foreach( $s as $word ) {
//     $sentence .= $word . " ";
//   }
//   return $sentence;
// }

// echo concatenate("my","name","is","arshad");

// echo " 3.Write a variadic function and call it with zero arguments.<br>";

// function test(...$args) {
//     if (count($args) == 0) {
//         return "No arguments passed";
//     } else {
//         return "Arguments passed: " . implode(",", $args);
//     }
// }

// echo test()."<br>";

// echo " 4.Write a function that accepts a name and unlimited scores, then returns the average score.<br>";

// function average($name,...$args) {
//     $sum = 0;
//     foreach($args as $n) {
//         $sum += $n;
//     }
//     echo "NAME : $name <br> Average Score :". round($sum / count($args));
// }

// average("Arshad",33,33,34);

// echo " 5.Write a function that checks if all arguments are numbers..<br>";

// function numchecker(...$args) {
//     foreach($args as $n) {
//         if(is_int(($n)) == false) {
//             return "All ARGUMENTS ARE NOT NUMERIC ";
//         }
//     }
//     return "ALL ARGUMENTS ARE NUMERIC ";
// }

// echo numchecker(10,20,"30");

                             // echo "<h1>Debugging </h1>";

// echo " 1. Create variables of different types and inspect them using var_dump().<br>";

// function analyzer(...$vars) {
//     foreach($vars as $var) {
//         echo var_dump($var)."<br>";
//     }
// }

// analyzer(10, "Hello", 3.14, true, array(1,2,3));

// echo " 2. Write code that shows the difference between echo and var_dump()..<br>";

// echo "1. ECHO IS USED TO PRINT STRINGS AND VARIABLES IN A READABLE FORMAT JUST LIKE A PRINT() IN PYTHON";
// echo "2. VAR_DUMP() GIVES SOME EXTRA INFORMATION ABOUT THE VARIABLE LIKE TYPE AND LENGTH ALONG WITH THE VALUE ITSELF";

// echo " 3. Use var_dump() to inspect a multidimensional array..<br>";

// $stu_info = array(
//                  "Arshad" => array("course" => "bca", "year" => 2025, "cgpa" => 8.0),
//                  "johnsows" => array("course" => "bsc nursing", "year" => 2026, "cgpa" => 4.5),
//             );
// var_dump($stu_info);

// echo " 4. Debug why a function is returning NULL.<br>";

// function debugger($a) {
//     return $a;
// }      
//  debugger(3);

//  echo "return is not same as echo like displaying value.";


echo "3 . Create a class Rectangle constructor takes length and width destructor returns area <br>";

class rectangle {
    private $length;
    private $width;
    public function __construct($l,$w) {
        $this->length = $l;
        $this->width = $w;
    }
    public function __destruct() {
        echo "Area of rectangle: " . ($this->length * $this->width);
    }

}

$test = new rectangle (5,10);


echo "<h3>4. Logic-based (OOP use case) Create a class Order
properties: items (array of prices)
constructor accepts the array
method getTotal() returns total price
method applyDiscount() applies 10% discount if total > 1000
👉 (Uses array + logic + class)</h3> <br>";

class order{
    private $items;

    function __construct($arr)
    {
        $this->items = $arr;
    }

    function getTotal() {
        $sum = 0 ;
        foreach($this->items as $i) {
            $sum += $i;
        }
        return $sum;
    }

    function applyDiscount() {
        if( $this->getTotal() > 1000) {
            return "Final bill after discount".$this -> getTotal() * 0.90;
        } else {
            return "Discount not applicable. Final bill: ".$this -> getTotal();
        }
    }
 
}

$test = new order([100,200,400,310]);
echo "TOTAL BILL :".$test->getTotal()."<br>";
echo $test->applyDiscount();


echo "5. Shopping Cart System (Medium-Hard Logic) Problem. Create a class Cart. Requirements:
            Property items (array) Method addItem(name, price, qty) Method getTotal(): 
            Calculate total price Method applyCoupon(code):
            If code = SAVE10, apply 10% discount Return final total
            (Cart logic used in every ecommerce website)<br>";


class cart {
    public $items;

    public function addItem($name,$price,$qty) {
        $this->items[] = [
            "name" => $name,
            "price" => $price,
            "qty" => $qty
        ];
        
    }

    public function getTotal() {
        $total = 0 ;

        if (!empty($this->items)) {

        foreach ($this->items as $item) {
            
            $total += $item['price'] * $item['qty'];

        }

        return $total;
    }
    }

    public function applyCoupon($code) {
        if($code == "SAVE10") {
            $amt = $this -> getTotal();
            $amt = $amt * 0.90;
            return $amt;
        } else {
            return $this-> getTotal();
        }

    }
}


$test = new cart();
$test->addItem("Pizza",200,4);
echo $test->getTotal()."<br>";
echo $test->applyCoupon("SAVE10");

?>
