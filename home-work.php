<?php 
//Variables and Types
//Exercise

//Part 1

//Define the variables name and age so that a line would be printed out saying the following sentence:

//Hello Jake. You are 20 years old.

$name = 'Jake';
$age = 20;

echo "Hello $name. You are $age years old. \n";

// Part 2: sum up the variables x and y and
// put the result in the sum variable.
$x = 195793;
$y = 256836;
$sum = $x + $y;

echo "The sum of $x and $y is $sum." . "\n";
echo "-----------------------------\n";

//--------------------------------------------------------

//Simple arrays

// TODO: add the even_numbers array here

$even_numbers = [2,4,6,8,10];

$male_names = ["Jake", "Eric", "John"];
$female_names = ["Jessica", "Beth", "Sandra"];

// TODO: join the male and female names to one array
$names = array_merge($male_names, $female_names);

print_r($even_numbers);
print_r($names);
echo "-----------------------------\n";

//--------------------------------------------------------
//Arrays with keys
/*Add a number to the phone book for Eric, with the number 415-874-7659, 
either by adding it to the array definition, or as a separate code line.*/

$phone_numbers = [
    "Alex" => "415-235-8573",
    "Jessica" => "415-492-4856",
];

$phone_numbers["Eric"]="415-874-7659";
  
print_r($phone_numbers);
echo "-----------------------------\n";

//--------------------------------------------------------
//Multidimensional arrays
//Complete the code below to sum all the numbers in all inner arrays and print the result in a new line.

$matrix = [ 
    [1, 2, 3], 
    [4, 5, 6], 
    [7, 8, 9], 
];

foreach ($matrix as $numbers) {
    $sum = 0;

    foreach ($numbers as $item) {
        $sum += $item;
    }

    echo "{$sum}\n";
}



function sumAllNumbers()
{
    $matrix = [ 
        [1, 2, 3], 
        [4, 5, 6], 
        [7, 8, 9], 
    ];

    $sum = 0;

    foreach($matrix as $numbers) {


        foreach($numbers as $item){
            $sum += $item;
        }
        
    }

    return $sum;
}

echo sumAllNumbers() ;
echo "\n";
echo "-----------------------------\n";

//--------------------------------------------------------
//Strings
//Split string that contains the list of numbers into a new array called number_list.

$numbers = "38,42,58,48,33,59,87,17,20,8,98,14,62,66,14,62,97,66,74,78,66,2,79,29,72,6,3,71,46,68,48,4,12,52,66,48,14,39,63,69,81,61,21,77,10,44,39,82,19,77,100,98,53,95,30,17,30,96,68,47,81,52,82,11,13,83,10,14,49,96,27,73,42,76,71,15,81,36,77,38,17,2,29,100,26,86,22,18,38,64,82,51,39,7,88,53,82,30,98,86";
$number_list = explode( ",", $numbers);

print_r($number_list);
echo "-----------------------------\n";

//--------------------------------------------------------
//For loops
/*Print out all numbers inside the array, one by one, using the \n newline character
sequence to separate between results.*/

$even_numbers = [2,4,6,8,10,12,14,16,18,20];

for ($i = 0; $i < count($even_numbers); $i++){
    echo "{$even_numbers[$i]}\n";
}
echo "-----------------------------\n";



//--------------------------------------------------------
//While loops
/* Use a while loop to print all odd numbers in an array. Use the continue statement to skip 
loops and avoid printing even numbers.

Remember - you will need to use the \n character sequence at the end of the echo statement to continue to the next line.

Tip: to test whether a number is even, check if the number modulus 2 is equal to zero ($number % 2 == 0). */

$numbers = [56, 65, 26, 86, 66, 34, 78, 74, 67, 18, 34, 73, 45, 67, 75, 10, 60, 80, 74, 16, 86, 34, 12, 23, 42, 72, 36, 3, 73, 9, 92, 81, 94, 54, 97, 74, 45, 55, 70, 94, 96, 81, 86, 86, 84, 4, 32, 8, 96, 86, 87, 18, 84, 87, 59, 48, 32, 90, 17, 22, 82, 79, 66, 28, 17, 14, 80, 83, 66, 36, 21, 89, 68, 2, 51, 65, 20, 87, 48, 5, 1, 16, 60, 53, 84, 90, 16, 2, 37, 73, 57, 70, 57, 69, 68, 1, 24, 40, 72, 97];

// TODO: Print odd numbers only
$acc = 0;
while( $acc < count( $numbers ) )
{
    $item = $numbers[$acc];
    ++$acc;

    if( $item % 2 == 0 )
        continue;

    echo "$item\n";
}

echo "-----------------------------\n";

//--------------------------------------------------------
//Functions

function squared_sum($numbers) {
    $acc = 0;

    foreach ($numbers as $item) {
        $acc += $item * $item;
    }

    return $acc;
}

echo squared_sum([
    56, 65, 26, 86, 66, 34, 78, 74, 67, 18, 34, 73, 45, 67, 75,
     10, 60, 80, 74, 16, 86, 34, 12, 23, 42, 72, 36, 3, 73, 9, 92, 
     81, 94, 54, 97, 74, 45, 55, 70, 94, 96, 81, 86, 86, 84, 4, 32,
      8, 96, 86, 87, 18, 84, 87, 59, 48, 32, 90, 17, 22, 82, 79, 66, 28, 
      17, 14, 80, 83, 66, 36, 21, 89, 68, 2, 51, 65, 20, 87, 48, 5, 1, 16, 60, 
      53, 84, 90, 16, 2, 37, 73, 57, 70, 57, 69, 68, 1, 24, 40, 72, 97,
]);
echo "\n";
echo "-----------------------------\n";

//--------------------------------------------------------
//Objects
/* Create a class called Car with a constructor that receives the brand and make 
year of the car, and a function called print_details that prints out the details of the car.

For example, for a 2006 Toyota car, the following line would be printed out:

This car is a 2006 Toyota. */

class Car {
    public function __construct($brand, $year)
    {
        $this->brand = $brand;
        $this->year = $year;
    }

    public function print_details(){
        echo "This car is a {$this->year} {$this->brand}.\n";
    }

}

$car = new Car("Toyota", 2006);
$car->print_details();

echo "-----------------------------\n";

//--------------------------------------------------------
/*Use a try-catch-finally block to first catch the exception and print
out Exception caught! and then finally print out Done!. Your final output
should look like: Exception caught! Done!*/



function throw_exception() {
    throw new Exception("Exception!");
  }
  
  try {
    throw_exception();
  } catch (Exception $e) {
    echo "Exception caught!\n";
  } finally {
    echo "Done!";
  }
echo "\n";
echo "-----------------------------\n";

?>