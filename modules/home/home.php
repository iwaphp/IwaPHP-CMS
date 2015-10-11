<?php
use \IwaPHP\Modules\Home\App;
use \IwaPHP\Modules\Home\Category;

$db = \IwaPHP\App::getDatabase();
require ROOT . 'modules/home/class/App.php';
require ROOT . 'modules/home/class/Category.php';

if (isset($_GET['id'])) {
    require ROOT . 'modules/home/news.php';

} elseif (isset($_GET['cat'])) {
    require ROOT . 'modules/home/categorie.php';

} else {
    $news = new \IwaPHP\Modules\Home\App\News();
    $category = new \IwaPHP\Modules\Home\Category\Category();
?>
<div class="row">
    <div class="col-sm-8"><?php
        # On liste les news
        foreach (\IwaPHP\Modules\Home\App\News::getLast($db) as $post):
        ?>
             <h2><?= $post->title ?></h2>Catégorie : <a href="<?= $news->url($post->id) ?>"><?= $post->news_category ?></a><p><?= $news->excerpt($post->content, $post->id) ?></p>

        <?php endforeach; ?>
    </div>
    <div class="col-sm-4">
        <h2>Catégories</h2>
            <ul><?php
            foreach(\IwaPHP\Modules\Home\Category\Category::all($db) as $category):?>
                <li><a href="index.php?page=home&cat=<?= $category->id ?>"><?= $category->title; ?></a></li>
            <?php endforeach; ?>
            </ul>

    </div>
</div>
<?php }