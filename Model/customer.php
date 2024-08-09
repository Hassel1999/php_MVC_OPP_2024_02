<?php
    
    class CustomerModelo {
        private $DB;
        private $customers;

        function __construct() {
            $this->DB = Database::connect();
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        function get() {
            $sql = 'SELECT * FROM Customers ORDER BY CustomerID ASC';
            $fila = $this->DB->query($sql);
            $this->customers = $fila;
            return $this->customers;
        }

        function create($data) {
            $sql = "INSERT INTO Customers (FirstName, LastName, Email, Phone) VALUES (?, ?, ?, ?)";
            $query = $this->DB->prepare($sql);
            $query->execute(array($data['FirstName'], $data['LastName'], $data['Email'], $data['Phone']));
        }

        function get_id($id) {
            $sql = "SELECT * FROM Customers WHERE CustomerID = ?";
            $q = $this->DB->prepare($sql);
            $q->execute(array($id));
            $data = $q->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        function update($data) {
            $sql = "UPDATE Customers SET FirstName = ?, LastName = ?, Email = ?, Phone = ? WHERE CustomerID = ?";
            $q = $this->DB->prepare($sql);
            $q->execute(array($data['FirstName'], $data['LastName'], $data['Email'], $data['Phone'], $data['CustomerID']));
        }

        function delete($id) {
            $sql = "DELETE FROM Customers WHERE CustomerID = ?";
            $q = $this->DB->prepare($sql);
            $q->execute(array($id));
        }

        function __destruct() {
            Database::disconnect();
        }
    }
?>
