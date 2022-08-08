<?php
    class MyFunction{
        private $conn;
        function __construct(){
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname = 'bdrmg';

            $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
            if(!$this->conn){
                die('Database connection error...');
            }
        }

        /*---------Display all member from member.php-----------*/ 
        function displayAllMember(){
            $query = "SELECT * FROM member_info";
            if(mysqli_query($this->conn,$query)){
                $get_all_row = mysqli_query($this->conn,$query);
                return $get_all_row;
            }
        }
        /*---------Display member by association name from member.php-----------*/
        function displayData_associationName($data_association_name){
            $association_name = $data_association_name['association_name'];
            $query = "SELECT * FROM member_info WHERE association_name LIKE'%$association_name%' ";
            if(mysqli_query($this->conn,$query)){
                $get_all_row = mysqli_query($this->conn,$query);
                return $get_all_row;
            }
        }
        /*---------Display member by region from member.php-----------*/
        function displayData_region($data_region){
            $region = $data_region['region'];
            $query = "SELECT * FROM member_info WHERE region LIKE'%$region%' ";
            if(mysqli_query($this->conn,$query)){
                $get_all_row = mysqli_query($this->conn,$query);
                return $get_all_row;
            }
        }
        /*---------Display member by product type from member.php-----------*/
        function displayData_productType($data_product_type){
            $product_type = $data_product_type['product_type'];
            $query = "SELECT * FROM member_info WHERE product_type LIKE'%$product_type%' ";
            if(mysqli_query($this->conn,$query)){
                $get_all_row = mysqli_query($this->conn,$query);
                return $get_all_row;
            }
        }

        function memberDetails($memberId){
            $query = "SELECT * FROM member_info WHERE member_id = $memberId";
            if(mysqli_query($this->conn,$query)){
                $get_all_data = mysqli_query($this->conn,$query);
                $get_single_data = mysqli_fetch_assoc($get_all_data);
                return $get_single_data;
            }
        }

        function searchMemberDetails($searchMemberId){
            $query = "SELECT * FROM member_info WHERE member_id = $searchMemberId";
            if(mysqli_query($this->conn,$query)){
                $get_all_data_search = mysqli_query($this->conn,$query);
                $get_single_data_search = mysqli_fetch_assoc($get_all_data_search);
                return $get_single_data_search;
            }
        }
    }
?>