<?php
  define('ROOT', '/php/');
  function currentPage(){
    $uri = $_SERVER['REQUEST_URI'];
    $uriArray = explode('/',$uri);
    $page = end($uriArray);
    $pageArray = explode('?',$page);
    $currentPage = $pageArray[0];
    return $currentPage;
  }

  function active($fileName){
    return (currentPage() == $fileName)? "active" : "";
  }

?>
<div class="menu">
  <ul>
    <li class="<?=active('index.php');?>"><a href="<?=ROOT?>index.php">Home</a></li>
    <li class="<?=active('echo.php');?>"><a href="<?=ROOT?>pages/echo.php">Echo</a></li>
    <li class="<?=active('variables.php');?>"><a href="<?=ROOT?>pages/variables.php">Variables</a></li>
    <li class="<?=active('operators.php');?>"><a href="<?=ROOT?>pages/operators.php">Operators</a></li>
    <li class="<?=active('if.php');?>"><a href="<?=ROOT?>pages/if.php">If Statement</a></li>
    <li class="<?=active('switch.php');?>"><a href="<?=ROOT?>pages/switch.php">Switch</a></li>
    <li class="<?=active('arrays.php');?>"><a href="<?=ROOT?>pages/arrays.php">Arrays</a></li>
    <li class="<?=active('loops.php');?>"><a href="<?=ROOT?>pages/loops.php">Loops</a></li>
    <li class="<?=active('functions.php');?>"><a href="<?=ROOT?>pages/functions.php">Functions</a></li>
    <li class="<?=active('arraySort.php');?>"><a href="<?=ROOT?>pages/arraySort.php">arraySort</a></li>
    <li class="<?=active('stringFunctions.php');?>"><a href="<?=ROOT?>pages/stringFunctions.php">string functions</a></li>
    <li class="<?=active('classvsobject.php');?>"><a href="<?=ROOT?>pages/classvsobject.php">Class vs Object</a></li>
  </ul>
</div>
