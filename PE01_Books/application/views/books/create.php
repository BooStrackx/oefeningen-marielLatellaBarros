<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

<h2><?php echo $titleHeader; ?></h2>


<?php echo validation_errors(); ?>

<?php echo form_open('books/create'); ?> <!-- form_open() inserts hidden csrf-->
<table>

    <tr>
        <td><label for="title">Title:</label></td>
        <td><input type="text" name="title" /></td>
    </tr>

    <tr>
        <td><label for="author">Author:</label></td>
        <td><input type="text" name="author" /></td>
    </tr>

    <tr>
        <td><label for="pages">Pages:</label></td>
        <td><input type="number" name="pages" /></td>
    </tr>

    <tr>
        <td><label for="releaseDate">Release Date:</label></td>
        <td><input type="date" name="releaseDate" /></td>
    </tr>
</table>


<input type="submit" name="submit" value="Create books item" />

</form>