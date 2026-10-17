
<?php

class DBController {

    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "faculty_db";
    private $conn;

    function __construct() {
        $this->conn = $this->connectDB();
    }

    function connectDB() {
        $cnn = mysqli_connect(
            $this->host,
            $this->user,
            $this->password,
            $this->database
        );

        if (!$cnn) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        mysqli_set_charset($cnn, "utf8mb4");

        return $cnn;
    }

    function executeQuery($query) {
        $result = mysqli_query($this->conn, $query);
        $resultset = array();

        if ($result && $result instanceof mysqli_result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $resultset[] = $row;
            }
        }

        return $resultset;
    }

    function countRows($query) {
        $result = mysqli_query($this->conn, $query);

        if (!$result) {
            return 0;
        }

        return mysqli_num_rows($result);
    }

    function verifyData($data) {
        return mysqli_real_escape_string($this->conn, $data);
    }

    function executeNonQueryIUP($command) {
        return mysqli_query($this->conn, $command);
    }
}

?>
