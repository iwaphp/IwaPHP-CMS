<?php
namespace IwaPHP\Modules\Home\App;

class News {

    public static function getLast($db){
        return $db->query("
            SELECT news.id, news.title, news.content, news_category.title as news_category
            FROM news
            LEFT JOIN news_category ON category_id = news_category.id
            ORDER BY news.date DESC
        ");
    }

    public static function lastByCategory($db, $category_id){
        return $db->query("
            SELECT news.id, news.title, news.content, news_category.title as news_category
            FROM news
            LEFT JOIN news_category
              ON category_id = news_category.id
            WHERE category_id = ?
            ORDER BY news.date DESC
        ", [$category_id])->fetchAll();
    }

    public static function getNews($db, $id){
        return $db->query('SELECT * FROM news WHERE id = ?', [$id])->fetch();
    }

    public function url($id){
        return 'index.php?page=home&id=' . $id;
    }

    public function excerpt($content, $id) {
        $html = '<p>' . substr($content,0 ,250) . '...</p>';
        $html .= '<p><a href="' . $this->url($id) . '">Voir la suite</a></p>';
        return $html;
    }
}