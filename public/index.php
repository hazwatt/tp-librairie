<?php
// On inclus le fichier header.php sur la page
include(__DIR__.'/../partials/header.php');
?>

<div class="container">
<?php $query = $db->query('SELECT * FROM book');
$books = $query->fetchAll();

foreach($books as $book){
?>
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header"><?php $book['title'] ?></div>
            <div class="card-body">
                <h5 class="card-title"><?php $book['release_date'] ?></h5>
                <p class="card-text"></p>
            </div>
        </div>
    </div>
<?php } ?>

    
</div>

<?php
include(__DIR__.'/../partials/footer.php');
?>