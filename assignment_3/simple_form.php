<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Simple Form',
    'items' => Array(
        'News' => 'index.php',
        'Add news item' => 'news_add.php',
        'Leap Year' => 'leapyear.php',
        'Simple Form' => 'simple_form.php'
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';


if (isset($_GET["name"]) && isset($_GET["city"])) {
    ?> <h1>Welcome <?php echo $_GET["name"]; ?> </h1> 
    <?php
    if ($_GET["city"] == "Amsterdam") {
        ?> 
        <p>You're from the capital of the Netherlands!</p> 
        <?php
    } elseif ($_GET["city"] == "Sneek") {
        ?>
        <h3>You're from Sneek, Fryslân boppe!</h3>
        <?php
    } else {
        ?>
        <p> You're from <?php echo $_GET["city"]; ?>! </p> <br> <?php
    }

}
?>

<div class="row">
    <div class="col-md-12">
        <form action="simple_form.php" method="get">
            <div class="form-group"> 
                <label for="name">Full name:</label>
                <input type="text" class="form-control" name="name" required>

            </div> 

            <div class="form-group"> 
                <label for="city">City:</label>
                <input type="text" class="form-control" name="city" required>
            </div> 
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</div>
<?php
include __DIR__ . '/tpl/body_end.php';
?>