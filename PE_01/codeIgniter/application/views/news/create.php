<!--To input data into the database you need to create a form where you can input the information to be stored.-->

<h2><?php echo $title; ?></h2>

<!--This function is provided by the "form helper and renders the form element and adds extra functionality, "
like adding a hidden CSRF prevention field. The latter is used to report errors related to form validation.-->
<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

<label for="title">Title</label>
<input type="input" name="title" /><br />

<label for="text">Text</label>
<textarea name="text"></textarea><br />

<input type="submit" name="submit" value="Create news item" />

</form>