<?php
namespace Admin\Parts\Users\Entity;

class Users {

    private $id;

    private $nom;

    private $email;

    private $level;

    private $template;

    public function getAllUser($db) {
        return $db->query('SELECT * FROM users')->fetchAll();
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNom($nom, $db) {
        $this->nom = $nom;
        $db->query('UPDATE users SET username = ? WHERE id = '. $this->getId(), $nom);
    }

    public function setEmail($email, $db) {
        $this->email = $email;
        $db->query('UPDATE users SET email = ? WHERE id = '. $this->getId(), $email);

    }

    public function setLevel($level, $db) {
        $this->level = $level;
        $db->query('UPDATE users SET level = ? WHERE id = '. $this->getId(), $level);
    }

    public function setTemplate($template, $db) {
        $this->template = $template;
        $db->query('UPDATE users SET template = ? WHERE id = '. $this->getId(), $template);
    }

    public function getId() {
        $db->query('SELECT id FROM users');

        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getLevel() {
        return $this->level;
    }

    public function getTemplate() {
        return $this->template;
    }


}