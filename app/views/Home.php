<h2>Menus</h2>

<ul>
    <?php foreach($menus as $menu): ?>
        <li> <?php echo $menu->nome; ?> | <a href = "/menu/<?php echo $menu->menu_id; ?>"> detalhe </a> </li>
    <?php endforeach; ?>
</ul>