<?php
use \IwaPHP\Modules\Home\App;

# On affiche une news si il exsiste un get id
$post = \IwaPHP\Modules\Home\App\News::getNews($db, $_GET['id']);
$category = \IwaPHP\Modules\Home\Category\Category::find($db, $post->category_id);
if($post === false) {
    IwaPHP\App::notFound();
}
IwaPHP\App::setTitle($post->title);
?>
<div class="panel panel-default">
    <div class="panel-body">

<h1><?= $post->title ; ?></h1>

<p><em><?= $category->title ; ?></em></p>
<p><?= $post->content; ?></p>
<p><em>Posté le | [ Ajouter un commentaire ]</em></p>


    </div>
</div>