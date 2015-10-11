<?php
namespace Admin\Parts;

class Users {

    public function getUsersInf($db) {
        return $db->query('SELECT * FROM users')->fetchAll();
    }
}