<?php
namespace Admin\Parts;

class Settings {

    public function getSiteInf($db, $params) {
        $req = $db->query('SELECT * FROM config WHERE name = ?', [$params])->fetch();
        return $req->content;
    }
}