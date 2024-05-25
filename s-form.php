<?php require_once ('layout/client/header.php'); ?>

<div id="search234" style="margin-top: 500px">
    <button type="button" class="close">×</button>
    <form method="POST" action="search.php">
        <input type="search" name="keyword" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Searchs</button>
    </form>
</div>

<?php require_once ('layout/client/footer.php'); ?>