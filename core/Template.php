<?php
namespace IwaPHP;

class Template {

    protected static $instance;

    protected static function getInstance(){
        if(!self::$instance){
            self::$instance = new Template();
        }
        return self::$instance;
    }

    static function getTemplate($db, $file, $ob = null) {
        if(isset($_SESSION['auth'])) {
            $content = $ob;
            require ROOT . 'templates/' . \IwaPHP\App::getTemplateUser($db, $_SESSION['auth']->id) . '/' . $file;
        } else {
            $content = $ob;
            require ROOT . 'templates/' . \IwaPHP\App::getDefaultTemplate($db) . '/' . $file;
        }
    }

    static function defaultHeadIncJs($dir) {
        return '<script src="'. $dir . 'vendor/tinymce/tinymce/tinymce.min.js"></script>';
    }

    static function initPlugins() {
        return '<script type="text/javascript">
                tinymce.init({
                   selector: "textarea",
                   plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                      ],
                   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                 });
                </script>';
    }
}