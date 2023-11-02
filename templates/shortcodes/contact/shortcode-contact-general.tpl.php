<section>
    <div class="container">
        <?php if(!empty($listItems[0])): ?>
        <div class="row mt-n1-9">
            <?php foreach ($listItems as $item): ?>
            <div class="col-md-6 col-xl-4 mt-1-9 wow fadeIn">
                <div class="card-style-02 h-100">
                    <div class="d-flex">
                        <?php if(!empty($item['icon'])):?>
                        <div class="flex-shrink-0">
                            <div class="card-icon">
                                <?php echo $item['icon'] ?>
                            </div>
                        </div>
                        <?php endif ?>
                        <div class="flex-grow-1 ms-3 ms-lg-4">
                            <h3 class="h5"><?php echo !empty($item['title']) ? $item['title'] : '' ?></h3>
                            <p class="mb-0"><?php echo !empty($item['info']) ? $item['info'] : '' ?></p>
                            <p class="mb-0"><?php echo !empty($item['info1']) ? $item['info1'] : '' ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif ?>
    </div>
</section>