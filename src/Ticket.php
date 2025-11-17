<?php 

namespace app;

class Ticket {
    private $id;
    private $created_at;
    private $updated_at;
    private $status;
    private $description;

    public function __construct()
    {
        $this->id = 2;
        $this->created_at = new \DateTime();
        $this->updated_at = new \DateTime();
        $this->status = 1;
        $this->description = 'new ticket';
    }

    public function save() {
        $servername = "db";
        $username = "tickets";
        $password = "tickets";
        $dbname = "tickets";

        try {
            $conn = new \PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $statement = $conn->prepare('INSERT INTO ticket (id, description)
                VALUES (?, ?)');

            $statement->execute([$this->id, $this->description]);

            echo "New record created successfully";
        } catch(\PDOException $e) {
            echo $e->getMessage();
        }

        $conn = null;
    }
}

?>