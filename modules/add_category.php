<?php

if(isset($_POST['name'])) {
    $result = $pdo->prepare('INSERT INTO categories (name) VALUES (:name)');
    $result->bindParam(':name', $_POST['name']);
    $result->execute();

    header('location: index.php?v=categories');
}

?>


<h1>Dodawanie kategorii</h1>
<form method="post">
    <div class="form-group">
        <label>Nazwa kategorii</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Zapisz</button>
    </div>
</form>