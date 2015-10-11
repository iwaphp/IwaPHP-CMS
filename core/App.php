<?php
namespace IwaPHP;

class App{

    static $db = null;
    private static $title = 'IwaPHP CMS';
    private static $subtitle;

    static function getDatabase(){
        $config = Config::getInstance();
        if(!self::$db) {
            self::$db = new Database($config->get('db_user'), $config->get('db_pass'), $config->get('db_name'), $config->get('db_host'));
        }
        return self::$db;
    }

    public static function notFound() {
        header("HTTP/1.0 404 Not Found");
        header("Location:index.php?page=404");
    }

    public static function getFooter() {
        return '<div class="row">
            <div class="col-md-12">
                <div class="footer-copyright">Propulsé par IwaPHP CMS</div>
            </div>
        </div>';
    }

    public static function getTitle($db){
        $req = $db->query('SELECT * FROM config WHERE name =?', ['name_site'])->fetch();
        return (self::$subtitle != null) ? self::$subtitle . ' | ' . self::$title = $req->content : self::$title = $req->content;
    }

    public static function getNameSite(){
        return self::$title;
    }

    public static function setTitle($title){
        self::$subtitle = $title;
    }

    static function getAuth() {
        return new Auth(Session::getInstance(), ['restriction_msg' => 'Vous devez être connecté pour pouvoir accéder à cette partie du site']);
    }

    static function getFiles($dir = '') {
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if( $file != '.' && $file != '..') {
                        return $file;
                    }
                }
                closedir($dh);
            }
        }
    }

    static function getPages($get, $folder, $default = null) {
        if (!isset($_GET[$get])) {
            if (empty($default)) {
                return null;
            } else {
                if(file_exists(ROOT . 'modules/' . $folder . '/' . $default . '.php')) {
                    require ROOT . 'modules/' . $folder . '/' . $default . '.php';
                } else {
                    self::notFound();
                }
            }

        } else {
            $p = (isset($_GET[$get])) ? htmlentities($_GET[$get]) : $default;

            if(is_file(ROOT . 'modules/' . $p . '/' . $p . '.php'))  {
                require ROOT . 'modules/' . $p . '/' . $p . '.php';
            } else {
                self::notFound();
            }
        }
    }

    static function getAdminPages($get, $default = null) {
        if (!isset($_GET[$get])) {
            if (empty($default)) {
                return null;
            } else {
                if(file_exists(ROOT . 'parts/' . $default . '/' . $default . '.php')) {
                    require ROOT . 'parts/' . $default . '/' . $default . '.php';
                } else {
                    require ROOT . 'inc/404.php';
                }
            }

        } else {
            $p = (isset($_GET[$get])) ? htmlentities($_GET[$get]) : $default;

            if(is_file(ROOT . 'parts/' . $p . '/' . $p . '.php'))  {
                require ROOT . 'parts/' . $p . '/' . $p . '.php';
            } else {
                require ROOT . 'inc/404.php';
            }
        }
    }

    static function redirect($page){
        header("Location: $page");
        exit();
    }

    static function getTemplateUser($db, $user_id){
        $req = $db->query('SELECT * FROM users WHERE id =?', [$user_id])->fetch();
        return $req->template;
    }

    static function getDefaultTemplate($db){
        $req = $db->query('SELECT * FROM config WHERE name =?', ['default_template'])->fetch();
        return $req->content;
    }

}