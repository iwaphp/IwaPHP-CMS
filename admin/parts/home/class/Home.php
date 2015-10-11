<?php
namespace Admin\Parts;

class Home {
    public function getNewsInf($db) {
        return $db->query('SELECT * FROM news')->fetchAll();
    }
}