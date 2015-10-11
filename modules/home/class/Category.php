<?php
namespace IwaPHP\Modules\Home\Category;

class Category {

    protected static $table = 'news_category';

    public static function all($db) {
        return $db->query("SELECT * FROM " . self::$table);
    }

    public function url($id){
        return 'index.php?page=home&cat=' . $id;
    }

    public static function find($db, $id) {
        return $db->query("SELECT * FROM " . self::$table . " WHERE id = ?", [$id])->fetch();
    }

}