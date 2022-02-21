<h1>Hello, Laravel</h1>
<h2><?= $whom_to_greet ?></h2>

<ul>
    <?php foreach ($people_to_greet as $name) : ?>
        <li><?= $name ?></li>
        <?php endforeach; ?>
</ul>

