<div class="row">
    <div class="col-12">
        <ol>
            <?php if ($faces): ?>
                <?php foreach ($faces as $key => $face): ?>
                    <?php
                        // Assiging Colours to each face
                        $faceColorR = random_int(0, 200);
                        $faceColorG = random_int(0, 200);
                        $faceColorB = random_int(0, 200);
                        $color = [$faceColorR, $faceColorG , $faceColorB];
                        $_SESSION['faces'][$imagetoken][$key] = json_encode($face->info()['landmarks']);
                        $_SESSION['faces']['colors'][$key] = $color;

                     ?>
                    <br><br>
                    <li>
                        <strong style="color: rgb(<?php echo "$faceColorR, $faceColorG, $faceColorB"; ?>);">Face <?php echo $key + 1 ?></strong>
                        <hr>

                        <div class="row">
                            <div class="col-6">
                                <strong>Alegre</strong>
                            </div>
                            <div class="col-6">
                                <strong><?php echo $face->info()['joyLikelihood'] ?></strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <strong>Triste</strong>
                            </div>
                            <div class="col-6">
                                <strong><?php echo $face->info()['sorrowLikelihood'] ?></strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <strong>Bravo/a</strong>
                            </div>
                            <div class="col-6">
                                <strong><?php echo $face->info()['angerLikelihood'] ?></strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <strong>Surpreso/a</strong>
                            </div>
                            <div class="col-6">
                                <strong><?php echo $face->info()['surpriseLikelihood'] ?></strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <strong>Emborrado/a</strong>
                            </div>
                            <div class="col-6">
                                <strong><?php echo $face->info()['blurredLikelihood'] ?></strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <strong>Chapéu</strong>
                            </div>
                            <div class="col-6">
                                <strong><?php echo $face->info()['headwearLikelihood'] ?></strong>
                            </div>
                        </div>
                    </li>
                <?php endforeach ?>
            <?php endif ?>
        </ol>
    </div>
</div>
