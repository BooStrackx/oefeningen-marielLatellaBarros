<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

<h2><?php echo $titleHeader; ?></h2>

<div class="navigation">
    <form action="<?php echo base_url();?>books">
        <button name="homeBtn" class="button" type="submit">Home</button>
    </form>
    <form action="<?php echo base_url();?>books/create">
        <button type="submit"  class="button">Add new book</button>
    </form>
</div>

<table class="center">
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Author</th>
        <th>Pages</th>
        <th>Release date</th>
    </tr>

<?php foreach ($books as $books_item): ?>
    <div class="container">
        <tr>
            <td><?php echo $books_item['id']; ?></td>
            <td><?php echo $books_item['Title']; ?></td>
            <td><?php echo $books_item['Author']; ?></td>
            <td><?php echo $books_item['Pages']; ?></td>
            <td><?php echo $books_item['ReleaseDate']; ?></td>
        </tr>

    </div>
<?php endforeach; ?>
</table>