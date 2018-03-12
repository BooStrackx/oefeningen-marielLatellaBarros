
<h2><?php echo $titleHeader; ?></h2>

    <h3><?php echo $books_item['id']; ?></h3>
    <div class="main">
        <?php echo $books_item['title']; ?>
        <?php echo $books_item['author']; ?>
        <?php echo $books_item['pages']; ?>
        <?php echo $books_item['releaseDate']; ?>
    </div>

<?php echo '<h2>'.$books_item['title'].'</h2>';
echo $books_item['author'];?>

<p><a href="<?php echo site_url('books/'); ?>">Back</a></p>




