
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

<h2><?php echo $titleHeader; ?></h2>

<?php foreach ($books as $books_item): ?>

    <h3><?php echo $books_item['id']; ?></h3>
    <div class="main">
        <?php echo $books_item['Title']; ?>
        <?php echo $books_item['Author']; ?>
        <?php echo $books_item['Pages']; ?>
        <?php echo $books_item['ReleaseDate']; ?>
    </div>

<?php endforeach; ?>
