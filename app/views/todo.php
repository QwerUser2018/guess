<h2>TODO</h2>

<?php foreach ($notes as $note):?>
<div class="note">
    <div class="title"><?=$note["name"]?></div>
    <div class="text"><?=$note["text"]?></div>
    <a href="/todo/del?id=<?=$note["id"]?>" class="del">x</a>
</div>
<?php endforeach; ?>

<form action="/todo/add" method="post">
    <dl>
        <dt>name</dt>
        <dd><input type="text" name="name"></dd>
        <dt>text</dt>
        <dd><textarea name="text"></textarea></dd>
    </dl>
    <input type="submit">
</form>