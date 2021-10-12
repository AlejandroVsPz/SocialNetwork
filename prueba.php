<html>
   <head>
      <title>Add New Record in MySQLi Database</title>
      <link rel = "stylesheet" type = "text/css" href = "style.css">
   </head>
   
   <body>
      <div id = "main">
         <form action = "" method = "post">
            <label>Name :</label>
            <input type = "text" name = "name" id = "name" />
            <br />
            <br />
            <input type = "submit" value ="Submit" name = "submit"/>
            <br />
         </form>
      </div>
      <?php 
      include("pruebainsert.php")

       ?>
      
   </body>
</html>
