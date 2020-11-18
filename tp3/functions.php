<?php
function getHeader($startSession,$title) {
  if($startSession) {
    session_start();
  }
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <title><?=$title?></title>
 </head>
 <body>
<?php
function getFooter() {

}
?>
</body>
</html>
<?php

 ?>
