<div>

<h2>Я загадал число от 1 до 10, отгадай его</h2>
    <?php if (empty($_COOKIE['RandNumber'])): ?>
    <h3>Поиграем?</h3>
    <form action="/guess/start" method="get">
        <input type="submit" value="Да" name="yes" class="sub ok">
        <input type="submit" value="Нет" name="no" class="sub no">
    </form>
    <?php endif; ?>

    <?php if (!empty($_COOKIE['RandNumber'])): ?>
         <form action="/guess/check" method="get">
        <input type="number" name="number" class="number">
        <input type="submit" class="sub">
    </form>

    <?php endif; ?>

<div class="errors"><?=@$errors?></div>





</div>
