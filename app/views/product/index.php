<h1>INDEX PAGE</h1>

<?php foreach ($products as $product): ?>

<p>
    <a href="/product/view?id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a>
</p>

<?php endforeach; ?>



