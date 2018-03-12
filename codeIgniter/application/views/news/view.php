<!--Each news item is looped and displayed to the user. You can see we wrote our template in PHP mixed with HTML.
If you prefer to use a template language, you can use CodeIgniter’s Template Parser class-->

<h2><?php echo $title; ?></h2>

<!--    <h3>--><?php //echo $news_item['title']; ?><!--</h3>-->
<!--    <div class="main">-->
<!--        --><?php //echo $news_item['text']; ?>
<!--    </div>-->

    <?php echo '<h2>'.$news_item['title'].'</h2>';
    echo $news_item['text'];?>

    <p><a href="<?php echo site_url('news/'); ?>">Back</a></p>

<!--The news overview page is now done, but a page to display individual news items is still absent.
The model created earlier is made in such way that it can easily be used for this functionality.
You only need to add some code to the controller and create a new view.
Go back to the News controller and update view() with the following:-->


