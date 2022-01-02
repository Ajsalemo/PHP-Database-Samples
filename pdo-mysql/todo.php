<?php

class Todo
{
    protected $connection;
    protected $selectAll = "SELECT * FROM todos";
    // Using a prepared statement to avoid SQL injection
    protected $createQuery = "INSERT INTO todos (todo, completed) VALUES (:todo, :completed)";
    protected $deleteQuery = "DELETE FROM todos WHERE id = (:id)";
    protected $updateQuery = "UPDATE todos SET todo = (:todo) WHERE id = (:id)";

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
            // Concat the output show as <id> <todo>
            print_r("ID: " . $row['id'] . " - Todo: " . $row['todo'] . " - " . "Completed: " . $row["completed"] . PHP_EOL);
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

    // Delete a record from the table
    public function deleteQueryMethod()
    {
        // This can be any arbitrary ID
        $idToDelete = 1;
        $delete = $this->connection->prepare($this->deleteQuery);
        // Bind the parameters for the values we want to delete
        $delete->bindParam(":id", $idToDelete);
        // Execute the delete query
        $delete->execute();
        // Close the connection after running the operation
        $delete = null;
    }

    // Update a record from the table
    public function updateQueryMethod()
    {
        // This can be any arbitrary ID
        $idToUpdate = 3;
        $updateTodo = "wash the car";
        $update = $this->connection->prepare($this->updateQuery);
        // Bind the parameters for the values we want to update
        $update->bindParam(":id", $idToUpdate);
        $update->bindParam(":todo", $updateTodo);
        // Execute the update query
        $update->execute();
        // Close the connection after running the operation
        $update = null;        
    }
}
