<?php
include __DIR__ .'/database.php';
$title = 'Home Page';
include __DIR__ .'/partials/header.php';

?>

<main class="container">
    <div class="row">
        <?php foreach($albums as $value){?>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img class="img-fluid" src="<?php echo $value['poster'] ?>" class="">
                    <p class="card-text"><?php echo $value['title'] ?></p>
                    <p class="card-text"><?php echo $value['author'] ?></p>
                    <p class="card-text"><?php echo $value['genre'] ?></p>
                    <a href="#" class="btn btn-primary"></a>
                </div>

            </div>
        </div>
        <?php } ?>

    </div>
</main>

<?php include './partials/footer.php' ?>