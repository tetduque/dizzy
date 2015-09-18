<h2><?php echo $title; ?></h2>

<?php foreach ($classifications as $classifications_item): ?>

        <h3><?php echo $classifications_item['title']; ?></h3>
        <div class="main">
                <?php echo $classifications_item['name']; ?>
        </div>

<?php endforeach; ?>