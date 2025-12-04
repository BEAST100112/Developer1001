<?php
$a=20;
$c=15;
function myFunction(){
  $b=10;
  global $c;
  echo"<p>value of 'a' inside function
  is:$a</p>";
      echo"<p>value of 'b' inside function
  is:$b</p>";
      echo"<p>value of 'c' inside function
  is:$c</p>";
}

myFunction();
echo"<p>value of 'a' outside function is:$a</p>";
echo"<p>value of 'b' outside function is:$b</p>";
?>
    
