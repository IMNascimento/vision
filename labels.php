<div class="row">
    <div class="col-12">
        <ol>
            <?php foreach ($labels as $key => $label): ?>
                <li><h6> <?php echo ucfirst($label->info()['description']) ?></h6>  Certeza: <strong><?php echo number_format($label->info()['score'] * 100 , 2) ?>%</strong><br><br></li>
            <?php endforeach ?>
        </ol>
    </div>
</div>
