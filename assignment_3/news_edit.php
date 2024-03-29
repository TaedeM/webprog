<div class="pd-40"></div>
<div class="row">
    <div class="col-md-12">
        <form action="scripts/edit_item.php" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= $article_title ?>">
            </div>
            <div class="form-group">
                <label for="article">Article</label>
                <textarea class="form-control" id="article" name="article" rows="3"><?= $article_txt ?></textarea>
            </div>
            <label for="article_id">ID:</label>
            <input type="number" name="article_id" value="<?= $article_id ?>" />
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php
if (isset($_POST['id'])){
    // Read articles
    $json_file = file_get_contents("data/articles.json");
    $articles = json_decode($json_file, true);
    $articles = array_reverse($articles);
 
    // Get article information
    $article_id = '';
    $article_title = '';
    $article_txt = '';
    foreach($articles as $key => $value){
        if($value['id'] == $_POST['id']){
            $article_id = $value['id'];
            $article_title = $value['title'];
            $article_txt = $value['article'];
        }
    }
}
?>