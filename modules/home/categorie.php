<?php
use \IwaPHP\Modules\Home\App;
use \IwaPHP\Modules\Home\Category;

$category = \IwaPHP\Modules\Home\Category\Category::find($db, $_GET['cat']);
if($category === false){
    IwaPHP\App::notFound();
}
$news = \IwaPHP\Modules\Home\App\News::lastByCategory($db, $_GET['cat']);
$app = new \IwaPHP\Modules\Home\App\News();
?>

<h1><?= $category->title ?></h1>
<div class="row">
    <div class="col-sm-8">
        <?php foreach ($news as $post): ?>

            <h2><a href="<?= $app->url($post->id); ?>"><?= $post->title; ?></a></h2>

            <p><em><?= $post->news_category; ?></em></p>

            <p><?= $app->excerpt($post->content, $post->id); ?></p>

        <?php endforeach; ?>
    </div>
    <div class="col-sm-4">
        <ul>
            <?php foreach(\IwaPHP\Modules\Home\Category\Category::all($db) as $category):?>
                <li><a href="index.php?page=home&cat=<?= $category->id ?>"><?= $category->title; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>