<?php
//include('lib/data.php');


class suv
{
  public $name;
  public $des;
  public $price;
  public $type;
  public $hp;
  public $pet;
  public $myear;
  public $condition;
  public $milage;
  public $ecapacity;
  public $manual;
  public $image;
  public $image2;
  public $image3;
  public $image4;
  public $sname;
  public $semail;
  public $stel;
  public $sinfo;
  public $status;

  function insert_into_image()
  {

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "carmart";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error)
    {

      die("Connection failed: " . $conn->connect_error);

    }


    $sql="insert into vehicles
    (name,des,price,type,Horse_power,Petrol_Desel,Manufactured_year,Used_Brandnew,Milage,Engine_capacity,Manual_auto,image,image2,image3,image4,seller_name,email,tel,extra_info,status)

    values('$this->name','$this->des','$this->price',
           '$this->type','$this->hp','$this->pet',
           '$this->myear','$this->condition',
           '$this->milage','$this->ecapacity',
           '$this->manual','$this->image',
            '$this->image2','$this->image3',
              '$this->image4','$this->sname','$this->semail','$this->stel','$this->sinfo','$this->status'


           )";


      if ($conn->query($sql) === TRUE)
      {
        echo "New record created successfully";
      }

      else
      {
         echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();

      }

  }


  class trousers
  {
    public $name;
    public $des;
    public $price;
    public $image;

    function insert_into_trousers()
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


        $sql="insert into men_trousers(name,description,price,image)
                values('$this->name','$this->des','$this->price','$this->image')";

        if ($conn->query($sql) === TRUE) {
                echo "New product added";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }

              $conn->close();

                  }


    }

    class shoes
    {
      public $name;
      public $des;
      public $price;
      public $image;

      function insert_into_shoes()
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


          $sql="insert into men_shoes(name,description,price,image)
                  values('$this->name','$this->des','$this->price','$this->image')";

          if ($conn->query($sql) === TRUE) {
                  echo "New product added";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();

                    }


      }

      class accessories
      {
        public $name;
        public $des;
        public $price;
        public $image;

        function insert_into_accessories()
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


            $sql="insert into men_accessories(name,description,price,image)
                    values('$this->name','$this->des','$this->price','$this->image')";

            if ($conn->query($sql) === TRUE) {
                    echo "New product added";
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }

                  $conn->close();

                      }


        }

        class w_tshirt
        {
          public $name;
          public $des;
          public $price;
          public $image;

          function insert_into_w_tshirt()
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


              $sql="insert into women_tshirt(name,description,price,image)
                      values('$this->name','$this->des','$this->price','$this->image')";

              if ($conn->query($sql) === TRUE) {
                      echo "New product added";
                    } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                    $conn->close();

                        }


          }


          class w_trousers
          {
            public $name;
            public $des;
            public $price;
            public $image;

            function insert_into_w_trousers()
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


                $sql="insert into women_trousers(name,description,price,image)
                        values('$this->name','$this->des','$this->price','$this->image')";

                if ($conn->query($sql) === TRUE) {
                        echo "New product added";
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }

                      $conn->close();

                          }


            }

            class w_shoes
            {
              public $name;
              public $des;
              public $price;
              public $image;

              function insert_into_w_shoes()
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


                  $sql="insert into women_shoes(name,description,price,image)
                          values('$this->name','$this->des','$this->price','$this->image')";

                  if ($conn->query($sql) === TRUE) {
                          echo "New product added";
                        } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        $conn->close();

                            }


              }


              class w_accessories
              {
                public $name;
                public $des;
                public $price;
                public $image;

                function insert_into_w_accessories()
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


                    $sql="insert into women_accessories(name,description,price,image)
                            values('$this->name','$this->des','$this->price','$this->image')";

                    if ($conn->query($sql) === TRUE) {
                            echo "New product added";
                          } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                          }

                          $conn->close();

                              }


                }


                class c_tshirt
                {
                  public $name;
                  public $des;
                  public $price;
                  public $image;

                  function insert_into_c_tshirt()
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


                      $sql="insert into children_tshirt(name,description,price,image)
                              values('$this->name','$this->des','$this->price','$this->image')";

                      if ($conn->query($sql) === TRUE) {
                              echo "New product added";
                            } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                            }

                            $conn->close();

                                }


                  }


                  class c_trousers
                  {
                    public $name;
                    public $des;
                    public $price;
                    public $image;

                    function insert_into_c_trousers()
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


                        $sql="insert into children_trousers(name,description,price,image)
                                values('$this->name','$this->des','$this->price','$this->image')";

                        if ($conn->query($sql) === TRUE) {
                                echo "New product added";
                              } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                              }

                              $conn->close();

                                  }


                    }

                    class c_shoes
                    {
                      public $name;
                      public $des;
                      public $price;
                      public $image;

                      function insert_into_c_shoes()
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


                          $sql="insert into children_shoes(name,description,price,image)
                                  values('$this->name','$this->des','$this->price','$this->image')";

                          if ($conn->query($sql) === TRUE) {
                                  echo "New product added";
                                } else {
                                  echo "Error: " . $sql . "<br>" . $conn->error;
                                }

                                $conn->close();

                                    }


                      }







 ?>
