<?php
/* Header */
$page_title = 'Webprogramming Assignment 2';
$navigation = Array(
 'active' => 'Home',
 'items' => Array(
 'Home' => 'index.php',
 'Links' => 'links.php',
 'News' => 'news.php',
 'Future' => 'future.php'
 )
);
include __DIR__ . '/tpl/head.php';
/* Body */
include __DIR__ . '/tpl/body-start.php';
?>
<div class="col-md-12">
    <h1>Welcome to my site!</h1>
    <h3>Add links:</h3><br><br>
    <form id="addurl" method="post" action="">
        <div class="form-group">
            <label for="name">Website name</label>
            <input type="text" class="form-control" id="name" required>
        </div>
        <div class="form-group">
            <label for="url">Website url</label>
            <input type="url" class="form-control" id="url" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Submit">
    </form>
</div>
<br>
<div class="col-md-12">
<button id="fade">Click to fade in/out boxes</button>
</div>
<div id="links">
    <ul class='mylist'></ul>
</div>
<div class="col-md-12">
<button id="delete">DELETE MODE THIS CAN NOT BE UNDONE</button>
</div>
<?php
include __DIR__ . '/tpl/body-end.php';
/* Footer */
include __DIR__ . '/tpl/footer.php';
?>