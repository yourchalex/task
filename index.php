<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=task_test', 'task_test_user', 'task_test_password');
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}