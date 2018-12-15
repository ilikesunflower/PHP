
<html>
   <body>
      
      <form  method="POST">
         Họ tên: <input type="text" name="name" />
         Tuổi: <input type="text" name="age" />
         <input type="submit" />
      </form>
      
   </body>
</html>
<?php
   if( $_REQUEST["name"] || $_REQUEST["age"] )
   {
      echo "Chào mừng ". $_REQUEST['name']. "<br />";
      echo "Bạn ". $_REQUEST['age']. " tuổi.";
      exit();
   }
?>