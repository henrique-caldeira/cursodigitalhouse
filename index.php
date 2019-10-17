<?php $this->layout('template', ['title' => 'User Profile']) ?>

<h1>Welcome!</h1>
<p>Hello <?=$this->e($name)?></p>

<h2>Friends</h2>
<ul>
    <?php foreach($friends as $friend): ?>
        <li>
            <a href="/profile/<?=$this->e($friend->id)?>">
                <?=$this->e($friend->name)?>
            </a>
        </li>
    <?php endforeach ?>
</ul>

<?php if ($invitations): ?>
    <h2>Invitations</h2>
    <p>You have some friend invites!</p>
<?php endif ?>