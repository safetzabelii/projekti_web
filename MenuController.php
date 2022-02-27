<?php 
require_once 'Database.php';

class MenuController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //Krijimi i crudd qe na nevojitet
    public function readData(){
        $query = $this->db->pdo->query('SELECT * from projektiweb');
        return $query->fetchAll();
    }

    public function insert($request){
        $query = $this->db->pdo->prepare('INSERT INTO projektiweb(Firstname, Lastname, Email, Password)
        VALUES (:Firstname, :Lastname, :Email, :Password)');
        
        $query->bindParam(':Firstname', $request['name']);
        $query->bindParam(':Lastname', $request['surname']);
        $query->bindParam(':Email', $request['email']);
        $query->bindParam(':Password', $request['password']);
        $query->execute();
        

        return header('Location: MenuController.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from projektiweb Where id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }
    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE projektiweb SET Firstname = :Firstname
        Lastname = :Lastname, Email = :Email, Password = :Password where id = :id');
        $query-> bindParam(':Firstname', $request['Firstname']);
        $query-> bindParam(':Lastname', $request['Lastname']);
        $query-> bindParam(':Email', $request['Email']);
        $query-> bindParam(':Password', $request['Password']);
        $query->execute();
        return header('Location: MenuController.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from projektiweb WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: MenuController.php');
        
    }
}
?>