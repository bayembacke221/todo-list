<?php

namespace service;

class TodoService
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM todos";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM todos WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$id]);
        $result = $statement->fetch();
        return $result;
    }

    public function create($title, $description)
    {
        $sql = "INSERT INTO todos (title, description) VALUES (?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$title, $description]);
        return $statement->rowCount();
    }

    public function update($id, $title, $description,$status)
    {
        $sql = "UPDATE todos SET title = ?, description = ?,status=? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$title, $description,$status, $id]);
        return $statement->rowCount();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM todos WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$id]);
        return $statement->rowCount();
    }

}