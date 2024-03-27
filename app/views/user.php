<?php $this->layout('master', ['title' => $title]) ?>


<h1>User</h1>
<?php echo flash('created'); ?>

<form action="/user/update" method="post">
    <?php echo flash('firstName', 'color:red'); ?>
    <input type="text" name="firstName" value="Luan">
    <?php echo flash('lastName', 'color:red'); ?>
    <input type="text" name="lastName" value="Henrique">
    <?php echo getToken(); ?>
    <?php echo flash('email', 'color:red'); ?>
    <input type="text" name="email" value="luanhenrique@gmail.com">
    <?php echo flash('password', 'color:red'); ?>
    <input type="password" name="password" value="123456">

    <button type="submit">Atualizar</button>
</form>