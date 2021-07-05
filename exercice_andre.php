<?php

for ($n=1; $n<=20; $n++){
  if($n%3 === 0 && $n%5 === 0){
    echo "$n FooBar <br/>";
  }
  elseif($n%3 === 0){
     echo "$n Foo <br/>";
  }
  elseif($n%5 === 0){
      echo "$n Bar <br/>";
  }
  else{
      echo "$n <br/>";
  }
}
