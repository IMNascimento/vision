<div class="row">
    <div class="col-6">
        <h5>Entities</h5>
        <hr>
        <ol>
            <?php foreach ($web->entities() as $key => $entity): ?>
                <li><h6><?php echo ucfirst($entity->info()['description']) ?></h6> Certeza: <strong><?php echo number_format($entity->info()['score'] * 100 , 2) ?></strong></li>
            <?php endforeach ?>
        </ol>
    </div>
    <div class="col-6">
        <h5>Imagens Correspondentes</h5>
        <hr>
        <ol>
            <?php foreach ($web->matchingImages() as $key => $matchImage): ?>
                <li><a href="<?php echo ($matchImage->info()['url']) ?>"><?php echo ($matchImage->info()['url']) ?></a></li>
            <?php endforeach ?>
        </ol>
        <br><hr><hr>
        <h5>Imagens Parcialmente Correspondentes</h5>
        <hr>
        <ol>
            <?php foreach ($web->partialMatchingImages() as $key => $partialMatchingImage): ?>
                <li><a href="<?php echo $partialMatchingImage->info()['url'] ?>"><?php echo ($partialMatchingImage->info()['url']) ?></a></li>
            <?php endforeach ?>
        </ol>
        <br><hr><hr>
        <h5>Páginas</h5>
        <hr>
        <ol>
            <?php foreach ($web->pages() as $key => $page): ?>
                <li><a href="<?php echo $page->info()['url'] ?>"><?php echo $page->info()['url']; ?></a></li>
            <?php endforeach ?>
        </ol>
    </div>
</div>
