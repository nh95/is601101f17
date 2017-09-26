<?php

  $obj = new main();
    $text = "my text";
      $obj->printthis($text);
        $obj->length($text);
	$obj->wordcount($text);
	 $obj->reverse($text);
	   $obj->position($text);
	$obj->replace();
	$obj->trim();
	$obj->convertStringToLowerCase();
	$obj-> covertCharacterToLowerCase();
	$obj-> explodeString();

$array = array(1,2,3,4,5,6,7);
  $obj->printArray($array);
$obj->countArray($array);
$obj->searchArray($array);
$obj-> sliceArray($array);
$obj->combineArray($array);
$obj->rangeArray($array);
$obj->diffArray($array);
$obj->fillArray($array);
$obj-> popArray($array);
$obj->randomArray($array);

class main {

    public function __construct() {

          echo 'hello i\'m an Object </br>';

	      }
	      public function printthis($text) {
	            echo '<h1>print function demo </h1>';
		          print($text);
			        echo '<hr>';
				    }

				        public function length($text) {
					      echo '<h1>Length function demo </h1>';
					            echo 'Length :'. strlen($text);
						          echo '<hr>';
							      }
							      public function wordcount($text) {
							            echo '<h1>wordcount function demo </h1>';
								          echo 'count:' . str_word_count($text);
									        echo '<hr>';
										}
										    public function reverse($text) {
										          echo '<h1>reverse function demo </h1>';
											        echo 'reverse:' . strrev($text);
												      echo '<hr>';
												          }
													  public function position($text) {
													        echo '<h1>position function demo </h1>';
														      echo 'position:' . strpos($text);
														            echo '<hr>';
															        }
																
public function replace(){
 echo '<h1>Replace function demo </h1>';
echo 'Replace : '. str_replace("hello","Good night","hello Naveen");
echo '<hr>';
}

public function trim(){
 echo '<h1>Trim function demo </h1>';
 echo  trim("Hello Naveen","Hello");
 echo '<hr>';
 }

public function convertStringToLowerCase(){
 echo '<h1>Words to lowecase function demo </h1>';
  echo  strtolower("Hello Naveen");
   echo '<hr>';
    }

public function covertCharacterToLowerCase(){
 echo '<h1>character to Lowercase function demo </h1>';
  echo lcfirst("Hello Naveen");
   echo '<hr>';
    }


public function explodeString(){
 echo '<h1>explode function demo </h1>';
 print_r (explode(" ","Hello Naveen"));
   echo '<hr>';
    }

 public function printArray($array) {
       echo '<h1>array print function</h1>';
             print_r($array);
	           echo '<hr>';
		       }

public function countArray($array) {
echo '<h1>Count function demo </h1>';
echo count($array);
echo '<hr>';
}
public function combineArray($array) {
echo '<h1>Combine function demo </h1>';
$name=array("Murali","Rakshita","Naveen");
$age=array("35","37","43");
$c=array_combine($name,$age);
print_r($c);
echo '<hr>';
}


public function searchArray($array) {
echo '<h1>search function demo </h1>';
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);
echo '<hr>';
}


public function sliceArray($array) {
echo '<h1>slice function demo </h1>';
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));
echo '<hr>';
}

public function rangeArray() {
echo '<h1>Range function demo </h1>';
$number = range(0,5);
print_r ($number);
echo '<hr>';
}


public function diffArray() {
echo '<h1>Diff function demo </h1>';
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$result=array_diff($a1,$a2);
print_r($result);
echo '<hr>';
}


public function fillArray() {
echo '<h1>Fill function demo </h1>';
$a1=array_fill(3,4,"blue");
print_r($a1);
echo '<hr>';
}

public function popArray($array) {
echo '<h1>pop function demo </h1>';
array_pop($array);
print_r($array);
echo '<hr>';
}


public function randomArray($array) {
echo '<h1>Random function demo </h1>';
$random_keys=array_rand($array,3);
echo $array[$random_keys[0]]."<br>";
echo $array[$random_keys[1]]."<br>";
echo $array[$random_keys[2]];
echo '<hr>';
}
			       public function __destruct() {

			             echo '</br> I\'m Done';

				         }


					   }

