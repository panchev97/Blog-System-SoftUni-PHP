<?php $this->title ='Welcome to My Blog'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<aside class="asideClass">
    <h2>Recent Posts</h2>
    <?php foreach ($this->sidebarPosts as $post) : ?>
        <a href="<?=APP_ROOT?>/home/view/<?=$post['id']?>"><?=htmlentities($post['title'])?></a>
    <?php endforeach ?>
</aside>
<table align="center">
    <main id="posts">
        <article>
            <?php foreach ($this->posts as $post) : ?>
                <center><h2 class="title"><?=htmlentities($post['title'])?></h2> </center>
                <div class="date"><i>Posted on</i>
                    <?=(new DateTime($post['date']))->format('d-M-Y') ?>
                    <i> by </i><?=htmlentities($post['full_name'])?>
                </div>
                <center><p class="content"><?=$post['content']?></p></center>
            <?php endforeach ?>
        </article>
    </main>
</table>
