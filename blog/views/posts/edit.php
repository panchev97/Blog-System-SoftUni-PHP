<?php $this->title = 'Edit post'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<form method="post">
    <div class="second-container">
    <input type="text" name="post_title"
           value="<?=htmlspecialchars($this->post['title'])?>" class="new-form-input" placeholder="Title">
    <textarea rows="10" name="post_content" placeholder="Content"
    ><?=htmlspecialchars($this->post['content'])?></textarea>
    <input type="datetime" name="post_date" placeholder="Date"
           value="<?=htmlspecialchars($this->post['date'])?>">
    <input type="text" name="post_user_id" placeholder="Author ID"
           value="<?=htmlspecialchars($this->post['user_id'])?>">
    <div><input type="submit" value="Edit post">
        <a href="<?=APP_ROOT?>/posts">[Cancel]</a></div>
    </div>
</form>
