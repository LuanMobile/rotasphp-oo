<?php $this->layout('master', ['title' => $title]) ?>

<h1>Home (<?php echo $pagination->getTotal(); ?>)</h1>

<h3><?php echo $pagination->getTotalPerPage(); ?></h3>

<ul>
    <?php foreach ($users as $user):?>
        <li><?= $user->firstName?></li>
    <?php endforeach;?>
</ul>

<?php echo $pagination->links(); ?>