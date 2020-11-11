<?php 

    // php cart class
    class Cart {
        public $db = null;

        public function __construct(DBController $db){
            if(!isset($db->con)) return null;
            $this->db = $db;
        }

        //insert data into cart table
        public function insertIntoCart($params = null, $table="cart"){
            if($this->db->con != null){
                if($params != null){
                    $columns = implode($glue=',', array_keys($params));

                    $values = implode($glue=',', array_values($params));

                    // create a query
                    $query_string = sprintf($format="INSERT INTO %s(%s) VALUES (%s)", $table, $columns, $values);
                    
                    // execute the query
                    $result = $this->db->con->query($query_string);
                }
            }
        }

        // obtain user id and item id into cart table
        public function addToCart($userid, $itemid){
            if (isset($userid) && isset($itemid)){
                $params = array(
                    "user_id"=>$userid,
                    "item_id"->$itemid
                );

                //insert the passed data into cart
                $result = $this->insertIntoCart($params);

                if ($result){
                    // reloads page after adding item to cart
                    header($string="Location:".$_SERVER["PHP_SELF"]);
                }

            }
        }
    }
?>