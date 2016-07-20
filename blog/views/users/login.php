<?php $this->title = 'Login'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>
<div class="conteiner">
<form method="post">
    <div class="form-input">
        <input type="text" name="username" placeholder="Enter Username" />
    </div>
    <div class="form-input">
        <input type="password" name="password" placeholder="Enter Password">
    </div>
    <input type="submit" name="submit" value="Login" class="btn-login"><br>
    <a href="<?=APP_ROOT?>/users/register">Go to Register</a></div>
    </div>

</form>