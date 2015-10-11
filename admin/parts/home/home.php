<div class="container-fluid">
    <div class="row">
        <?php include ROOT . 'inc/sidebar.php'; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Articles/News</h1>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Rédiger une news/billet</h3>
                </div>
                <div class="panel-body">
                    <form method="post">
                        <textarea id="tinymce"></textarea>
                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>News/Articles</th>
                        <th>Date de mise en ligne</th>
                        <th>Catégorie</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php echo null; ?>
                        <tr>
                            <td><?= 'null'; ?></td>
                            <td><?= 'null'; ?></td>
                            <td><?= 'null';  ?></td>
                            <td><?= 'null';  ?></td>
                            <td><button type="button" class="btn btn-default" aria-label="Left Align">
                                    Supprimer
                                </button>
                                <button type="button" class="btn btn-default" aria-label="Left Align">
                                    Modifier
                                </button>
                            </td>
                        </tr>
                    <?php  echo null; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
