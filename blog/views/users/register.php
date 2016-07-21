<?php $this->title = 'Register New User'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>

<form method="post">
    <div class="conteiner">
    <div class="register-form-input">
        <input type="text" name="username" placeholder="Enter Username" />
    </div>
    <div class="register-form-input">
        <input type="password" name="password" placeholder="Enter Password">
    </div>
    <div class="register-form-input">
        <input type="text" name="fullname" placeholder="Enter Full Name">
        <input type="submit" name="submit" value="Register" class="btn-login"><br>
    </div>
    </div>
</form>
