<?php

    // retrieve product data
    class Product{
        public $db = null;

        public function __construct(DBController $db){
            if (!isset($db->con)) return null;
            $this->db = $db;
        }
        
        // get product data
        public function getData($table='product'){
            $result = $this->db->con->query($query="SELECT * FROM {$table}");

            $resultArray = array();

            while ($item = mysqli_fetch_array($result, $resulttype=MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }

        // get product using item id
        public function getProduct($item_id=null, $table="product"){
            if(isset($item_id)){
            $result = $this->db->con->query($query="SELECT * FROM {$table} WHERE item_id={$item_id}");
            }

            $resultArray = array();

            while ($item = mysqli_fetch_array($result, $resulttype=MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }
?>