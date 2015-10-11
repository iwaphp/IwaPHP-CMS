<?php
namespace IwaPHP;

class Content {

    public static function panel($content, $title = false) {
        if($title != false) {
            $html = '<div class="panel-heading"><h3 class="panel-title">' . $title . '</h3></div>';
        } else {
            $html = null;
        }
        return '<div class="panel panel-default">'.$html.'<div class="panel-body">'.$content.'</div></div>';
    }

    public static function row() {

    }

    public static function col($responsive, $size) {

    }
}