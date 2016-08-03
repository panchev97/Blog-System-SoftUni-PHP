<?php $this->title = $this->post['title']; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<?php
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count']++;
}
echo "Visits:" . $_SESSION['count'];
?>

<main id="posts">
    <article>
        <div class="date"><i>Posted on </i>
            <?=(new DateTime($this->post['date']))->format('d-M-Y')?><i>by </i><?=htmlentities($this->post['full_name'])?>
        </div>
        <p class="content"><?=$this->post['content']?></p>
    </article>
</main>
