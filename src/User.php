<?php

    class User
    {
        private $db;

        function __construct($databse)
        {
            $this->db = $databse;
        }

        public function resetPasswordByEmail($password, $email)
        {
            $query = ("UPDATE user SET password=:password WHERE email=:email");
            $result = $this->db->prepare($query);
            $result->bindParam(':email', $email);
            $result->bindParam(':password', $password);
            $result->execute();
        }
    
        public function getUser()
        {
            $query = "select * from user";
            $result = $this->db->prepare($query);
            $result->execute();
            return $result->fetchAll();
        }

        public function addUser($email, $name, $password, $address, $zip_code, $city, $gender, $phone)
        {
            $query = "insert into user (email, name,  password, address, zip_code, city, gender, phone) 
            value (:email, :name,  md5(:password), :address, :zip_code, :city, :gender, :phone)";
            $result = $this->db->prepare($query);
            $result->bindParam(':email', $email);
            $result->bindParam(':name', $name);
            $result->bindParam(':password', $password);
            $result->bindParam(':address', $address);
            $result->bindParam(':zip_code', $zip_code);
            $result->bindParam(':city', $city);
            $result->bindParam(':gender', $gender);
            $result->bindParam(':phone', $phone);
            $result->execute();
        }
        
        public function getUserByEmail($email)
        {
            $query = ("SELECT * FROM user WHERE email=:email LIMIT 1");
            $result = $this->db->prepare($query);
            $result->bindParam(':email', $email);
            $result->execute();
            return $result->fetch();
        }
        
        public function updateVerifiedEmail($email)
        {
            $query = "UPDATE user SET confirm = 'verified' WHERE email = :email";
            $result = $this->db->prepare($query);
            $result->bindParam(':email', $email);
            $result->execute();
        }
        
    }
?>
