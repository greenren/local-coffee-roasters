<p> At <?= $when->format('g:i a') ?>, here is what's available: </p>
<ul>
    <?php foreach ($what as $item) { ?>
    <li><?= $item ?></li>
    <?php } ?>
</ul>
