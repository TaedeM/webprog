<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Simple Form',
    'items' => Array(
        'News' => '/WP21/assignment_3/index.php',
        'Add news item' => '/WP21/assignment_3/news_add.php',
        'Leap Year' => 'leapyear.php',
        'Simple Form' => 'simple_form.php'
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';


if (isset($_POST["name"]) && isset($_POST["city"]) && isset($_POST["age"])) {
    ?> <h1>Welcome <?php echo $_POST["name"]; ?> </h1> 
    <?php
    if ($_POST["city"] == "Amsterdam") {
        ?> 
        <p>You're from the capital of the Netherlands!</p> 
        <?php
    } elseif ($_POST["city"] == "Groningen") {
        ?>
        <h4>Nice, you're living in Groningen!</h4>
        <?php
    } elseif ($_POST["city"] == "Sneek") {
        ?>
        <h4>You're from Sneek, Fryslân boppe!</h4>
        <?php
    } else {
        ?>
        <p> You're from <?php echo $_POST["city"]; ?> </p> <br> <?php
    }

    ?>
    <div id="leapyear-table">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Year</th>
                    <th scope="col">Age</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2024</td>
                    <td><?php echo $_POST["age"] + 3?></td>
                </tr>

                <tr>
                    <td>2028</td>
                    <td><?php echo $_POST["age"] + 7?></td>
                </tr>

                <tr>
                    <td>2032</td>
                    <td><?php echo $_POST["age"] + 11?></td>
                </tr>

                <tr>
                    <td>2036</td>
                    <td><?php echo $_POST["age"] + 15?></td>
                </tr>

                <tr>
                    <!-- 2044 stond in de assignment ipv 2040, maar 2040 is wel degelijk een schrikkeljaar -->
                    <td>2040</td>
                    <td><?php echo $_POST["age"] + 19?></td>
                </tr>
            </tbody> 
        </table>
    </div>
<?php
}
?>

<div class="row">
    <div class="col-md-12">
        <form action="leapyear.php" method="post">
            <div class="form-group"> 
                <label for="name">Full name:</label>
                <input type="text" class="form-control" name="name" required>
            </div> 

            <div class="form-group"> 
                <label for="city">Age:</label>
                <input type="number" class="form-control" name="age" required>
            </div> 

            <div class="form-group"> 
                <label for="city">Email address:</label>
                <input type="email" class="form-control" name="email" required>
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