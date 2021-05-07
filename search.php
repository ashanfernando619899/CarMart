<?php

$<?php

$connection = mysql_connect("localhost","root","");

mysql_select_db("blog1")or die(mysql_error());

$safe_value = mysql_real_escape_string($_POST['search']);

$result = mysql_query("SELECT name, des, price, image, type, Horse_power, Petrol_Desel, Manufactured_year, Used_Brandnew, Milage,
  Engine_capacity, Manual_auto,image,image2,image3,image4,seller_name,email,tel,extra_info,id FROM vehicles WHERE 'type' LIKE %$safe_value%");
  while ($row = mysql_fetch_assoc($result)) {
echo "<div id='link' onClick='addText(\"".$row['name']."\");'>" . $row['price'] . "</div>";
 }
