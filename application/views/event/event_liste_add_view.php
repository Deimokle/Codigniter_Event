<?php foreach ($all_evenement as $event): ?>
    <?php echo $event('titre') ?>
    <?php echo $event->info ?>
<?php endforeach; ?>