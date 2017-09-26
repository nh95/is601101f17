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
		           
			       public function __destruct() {

			             echo '</br> I\'m Done';

				         }


					   }

