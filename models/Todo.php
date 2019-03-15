<?php 
class Todo
{ 
    private $conn;
    private $table = 'tbltodo';   

    public $id;
    public $name;
    public $creationDate;

    // Constructor with db
    public function __construct($db)
    {
    $this->conn = $db;   
    }
    
    public function read(){

        $query = "select * from ".$this->table." ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    public function read_single(){
        $query = "select * from ".$this->table." where id = ?";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1,$this->id);
        
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // return $stmt;
        $this->name = $row["name"];
        $this->creationDate = $row["creationDate"];
        
    }

    public function create(){

        $query ='INSERT INTO '. $this->table .'
        SET
         name = :name
        ';
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":name",$this->name);

        if($stmt->execute()){
            return true;
        }
        
        printf("Error:%s. \n",$stmt->error);
        return false;
    }

    public function update(){
        $query ='UPDATE '. $this->table .'
        SET
         name = :name
        WHERE
         id = :id';
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":name",$this->name);
        $stmt->bindParam(":id",$this->id);

        if($stmt->execute()){
            return true;
        }
        
        printf("Error:%s. \n",$stmt->error);
        return false;
    }
    public function delete(){
        $query = 'DELETE FROM '.$this->table.' WHERE id = :id';
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id",$this->id);
        
        if($stmt->execute()){
            return true;
        }
        
        printf("Error:%s. \n",$stmt->error);
        return false;
    }
}
 