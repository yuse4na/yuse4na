<?php 
function catalog($products){

?>
 <div class="container">
    <div class="card">
        <a href="tovar.html ">
        
        <img class="susu"  src="https://i.ebayimg.com/images/g/MYkAAOSwKWhkPQPC/s-l500.jpg" alt="img"></a>
        <h2>Футболка Radio Head</h2>
        <button class="buuut">В корзину</button>
    </div>
    <?php
    include_once 'filters.php';
    ?>
 </div>
 <div class="catalog__cards"><?php
 foreach($products as $items){
    include 'templates/catalogCard.php';
 }
 ?>
 </div>
</div>
<?php
}
?>
<div class="card__front">
    <h3 class="card__reversed"><?=$item['name']?></h3>
</div>
<h3 class="card__title" data-id="<?= $item['ID'] ?>"><?= $item['name'] ?></h3>
<script src="../public/js/jquery-3.3.1.min.js"></script>