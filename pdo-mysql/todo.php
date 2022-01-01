<?php

class Todo
{
    protected $connection;
    protected $selectAll = "SELECT * FROM pluralsighttodos";
    // Using a prepared statement to avoid SQL injection
    protected $createQuery = "INSERT INTO pluralsighttodos (todo, completed) VALUES (:todo, :completed)";

    public function connect($connection)
    {
        // Create the connection
        $this->connection = $connection;
    }

    // Select all from the table
    public function selectAllQueryMethod()
    {
        $selectAllQuery = $this->connection->query($this->selectAll);

        // Print out the result
        foreach ($selectAllQuery as $row) {
            print_r($row['todo'] . PHP_EOL);
        }
        // Close the connection after running the operation
        $selectAllQuery = null;
    }

    // Insert (create) a record in the database
    public function createQueryMethod()
    {
        // Set the data we want to add as variables
        $createTodo = "unpack the house";
        $createCompleted = false;
        // Prepare the statement
        $create = $this->connection->prepare($this->createQuery);
        // Bind the parameters for the values we want to add
        $create->bindParam(":todo", $createTodo);
        $create->bindParam(":completed", $createCompleted);
        // Execute the insert query
        $create->execute();
        // Close the connection after running the operation
        $create = null;
    }
}
