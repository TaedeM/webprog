<form action="scripts/add_item.php" method="POST">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="article">Article</label>
        <textarea class="form-control" id="article" name="article" rows="3"></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>