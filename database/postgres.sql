CREATE DATABASE pdo;

CREATE TABLE todos (
    id SERIAL PRIMARY KEY NOT NULL,
    todo VARCHAR(255) NOT NULL,
    completed BOOLEAN NOT NULL
);

INSERT INTO todos (
    todo,
    completed
) VALUES 
('sweep the floor', false),
('clean the car', false),
('mow the grass', true),
('vacuum the carpet', true);