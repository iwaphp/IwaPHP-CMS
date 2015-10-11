<?php
namespace Admin\Parts;

class Auth {

    public function getAuthInf($db) {
        return $db->query('SELECT * FROM level')->fetchAll();
    }
}