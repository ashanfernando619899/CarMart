
<?php
class suv
{
  function get_from_suv()
  {
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "lookgood1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT name, des, price, image, id, type, Horse_power, Petrol_Desel, Manufactured_year, Used_Brandnew, Milage, Engine_capacity, Manual_auto FROM vehicles WHERE type='suv'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
      echo "<table border=1><tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc())
        {



          echo "<tr id=".$row["name"].">
                  <td>".$row["des"]."</td>
                  <td>".$row["price"]."</td>

                  <td>".$row["id"]."</td>
                    <td>".$row["type"]."</td>
                      <td>".$row["Horse_power"]."</td>
                        <td>".$row["Petrol_Desel"]."</td>
                          <td>".$row["Manufactured_year"]."</td>
                            <td>".$row["Used_Brandnew"]."</td>
                              <td>".$row["Milage"]."</td>
                                <td>".$row["Engine_capacity"]."</td>
                                  <td>".$row["Manual_auto"]."</td>

                  <td>"."</td>
                  <td>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'."</td>
                  <td>".'<input type="button" name="add_cart" value="Add to cart" onclick="addToCart(3,','"kalana")">'."</td>
              </tr>";
        }
          echo "</table>";
          /*<td>".'<input type="button" name="add_cart" value="Add to cart" onclick="addToCart('.$row["id"].',"'.$row["name"].'")">'."</td>*/
    }
    if(isset($_POST['add_cart']))
    {
        echo "111111";
        /*
        $sql="insert into tbl_cart(id,name,description,price)
                values(id,'$row['name']','$row['description']','$row['price']')";

        if ($conn->query($sql) === TRUE)
        {
                echo "New record created successfully";
        } else
        {
                echo "Error: " . $sql . "<br>" . $conn->error;
        }*/
    }
    $conn->close();
  }

}

  class men_trousers
  {

    function get_from_men_trousers()
    {
      $servername = "127.0.0.1";
      $username = "root";
      $password = "";
      $dbname = "lookgood1";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }


      $sql = "SELECT id, name, description, price, image FROM men_trousers";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
       echo "<table border=1><tr><th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>




                        </tr>";
       // output data of each row
       while($row = $result->fetch_assoc()) {
        echo "<tr>
                  <td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["description"]."</td><td>".$row["price"]."</td><td>"."</td><td>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'."</td></tr>";

           //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
       }
      echo "</table>";
  }   else {
       echo "0 results";
  }
  $conn->close();

                  }

    }



    class men_shoes
    {

      function get_from_men_shoes()
      {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "lookgood1";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }


        $sql = "SELECT id, name, description, price, image FROM men_shoes";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
         echo "<table border=1><tr><th>ID</th>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Price</th>




                          </tr>";
         // output data of each row
         while($row = $result->fetch_assoc()) {
          echo "<tr>
                    <td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["description"]."</td><td>".$row["price"]."</td><td>"."</td><td>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'."</td></tr>";

             //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
         }
        echo "</table>";
    }   else {
         echo "0 results";
    }
    $conn->close();

                    }

      }



      class men_accessories
      {

        function get_from_men_accessories()
        {
          $servername = "127.0.0.1";
          $username = "root";
          $password = "";
          $dbname = "lookgood1";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }


          $sql = "SELECT id, name, description, price, image FROM men_accessories";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
           echo "<table border=1><tr><th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>




                            </tr>";
           // output data of each row
           while($row = $result->fetch_assoc()) {
            echo "<tr>
                      <td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["description"]."</td><td>".$row["price"]."</td><td>"."</td><td>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'."</td></tr>";

               //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
           }
          echo "</table>";
      }   else {
           echo "0 results";
      }
      $conn->close();

                      }

        }

        //women item displaying ==========================================================================================================================


        class women_tshirt
        {

          function get_from_women_tshirt()
          {
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "lookgood1";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }


            $sql = "SELECT id, name, description, price, image FROM women_tshirt";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
             echo "<table border=1><tr><th>ID</th>
                              <th>Name</th>
                              <th>Description</th>
                              <th>Price</th>




                              </tr>";
             // output data of each row
             while($row = $result->fetch_assoc()) {
              echo "<tr>
                        <td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["description"]."</td><td>".$row["price"]."</td><td>"."</td><td>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'."</td></tr>";

                 //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
             }
            echo "</table>";
        }   else {
             echo "0 results";
        }
        $conn->close();

                        }

          }



          class women_trousers
          {

            function get_from_women_trousers()
            {
              $servername = "127.0.0.1";
              $username = "root";
              $password = "";
              $dbname = "lookgood1";

              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }


              $sql = "SELECT id, name, description, price, image FROM women_trousers";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
               echo "<table border=1><tr><th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>




                                </tr>";
               // output data of each row
               while($row = $result->fetch_assoc()) {
                echo "<tr>
                          <td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["description"]."</td><td>".$row["price"]."</td><td>"."</td><td>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'."</td></tr>";

                   //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
               }
              echo "</table>";
          }   else {
               echo "0 results";
          }
          $conn->close();

                          }

            }



            class women_shoes
            {

              function get_from_women_shoes()
              {
                $servername = "127.0.0.1";
                $username = "root";
                $password = "";
                $dbname = "lookgood1";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }


                $sql = "SELECT id, name, description, price, image FROM women_shoes";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                 echo "<table border=1><tr><th>ID</th>
                                  <th>Name</th>
                                  <th>Description</th>
                                  <th>Price</th>




                                  </tr>";
                 // output data of each row
                 while($row = $result->fetch_assoc()) {
                  echo "<tr>
                            <td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["description"]."</td><td>".$row["price"]."</td><td>"."</td><td>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'."</td></tr>";

                     //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                 }
                echo "</table>";
            }   else {
                 echo "0 results";
            }
            $conn->close();

                            }

              }


              class women_accessories
              {

                function get_from_women_accessories()
                {
                  $servername = "127.0.0.1";
                  $username = "root";
                  $password = "";
                  $dbname = "lookgood1";

                  // Create connection
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  // Check connection
                  if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                  }


                  $sql = "SELECT id, name, description, price, image FROM women_accessories";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                   echo "<table border=1><tr><th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>




                                    </tr>";
                   // output data of each row
                   while($row = $result->fetch_assoc()) {
                    echo "<tr>
                              <td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["description"]."</td><td>".$row["price"]."</td><td>"."</td><td>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'."</td></tr>";

                       //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                   }
                  echo "</table>";
              }   else {
                   echo "0 results";
              }
              $conn->close();

                              }

                }



                  //children item displaying ==========================================================================================================================



                  class children_tshirt
                  {

                    function get_from_children_tshirt()
                    {
                      $servername = "127.0.0.1";
                      $username = "root";
                      $password = "";
                      $dbname = "lookgood1";

                      // Create connection
                      $conn = new mysqli($servername, $username, $password, $dbname);
                      // Check connection
                      if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }


                      $sql = "SELECT id, name, description, price, image FROM children_tshirt";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                       echo "<table border=1><tr><th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Price</th>




                                        </tr>";
                       // output data of each row
                       while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                  <td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["description"]."</td><td>".$row["price"]."</td><td>"."</td><td>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'."</td></tr>";

                           //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                       }
                      echo "</table>";
                  }   else {
                       echo "0 results";
                  }
                  $conn->close();

                                  }

                    }


                    class children_trousers
                    {

                      function get_from_children_trousers()
                      {
                        $servername = "127.0.0.1";
                        $username = "root";
                        $password = "";
                        $dbname = "lookgood1";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                        }


                        $sql = "SELECT id, name, description, price, image FROM children_trousers";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                         echo "<table border=1><tr><th>ID</th>
                                          <th>Name</th>
                                          <th>Description</th>
                                          <th>Price</th>




                                          </tr>";
                         // output data of each row
                         while($row = $result->fetch_assoc()) {
                          echo "<tr>
                                    <td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["description"]."</td><td>".$row["price"]."</td><td>"."</td><td>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'."</td></tr>";

                             //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                         }
                        echo "</table>";
                    }   else {
                         echo "0 results";
                    }
                    $conn->close();

                                    }

                      }


                      class children_shoes
                      {

                        function get_from_children_shoes()
                        {
                          $servername = "127.0.0.1";
                          $username = "root";
                          $password = "";
                          $dbname = "lookgood1";

                          // Create connection
                          $conn = new mysqli($servername, $username, $password, $dbname);
                          // Check connection
                          if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                          }


                          $sql = "SELECT id, name, description, price, image FROM children_shoes";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                           echo "<table border=1><tr><th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>




                                            </tr>";
                           // output data of each row
                           while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                      <td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["description"]."</td><td>".$row["price"]."</td><td>"."</td><td>".'<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>'."</td></tr>";

                               //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                           }
                          echo "</table>";
                      }   else {
                           echo "0 results";
                      }
                      $conn->close();

                                      }

                        }

                        class cart
                        {

                          function get_from_cart()
                          {
                            $servername = "127.0.0.1";
                            $username = "root";
                            $password = "";
                            $dbname = "lookgood1";

                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn->connect_error) {
                              die("Connection failed: " . $conn->connect_error);
                            }


                            $sql = "SELECT id, name, description, price FROM tbl_cart";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                             echo "<table border=1><tr><th>ID</th>
                                              <th>Name</th>
                                              <th>Description</th>
                                              <th>Price</th>




                                              </tr>";
                             // output data of each row
                             while($row = $result->fetch_assoc()) {
                              echo "<tr>
                                        <td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["description"]."</td><td>".$row["price"]."</td><td>"."</td><td>"."</td></tr>";

                                 //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                             }
                            echo "</table>";
                        }   else {
                             echo "0 results";
                        }
                        $conn->close();

                                        }

                          }



   ?>
