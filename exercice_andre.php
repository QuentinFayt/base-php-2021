<?php

for ($n=1; $n<=20; $n++){
  if($n%3 === 0 && $n%5 === 0){
    echo "$n FooBar <br/>";
  }
  else if($n%3 === 0){
     echo "$n Foo <br/>";
  }
  else if($n%5 === 0){
      echo "$n Bar <br/>";
  }
  else{
      echo "$n <br/>";
  }
}
