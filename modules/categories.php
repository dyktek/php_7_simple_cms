<h1>Categories</h1>

<?php
    $result = $pdo->query('SELECT * FROM `categories`');
    $categories = $result->fetchAll();
?>

<a href="index.php?v=add_category" class="btn btn-primary">Dodaj kategorie</a>

<table class="table table-hover">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
    foreach($categories as $category) {
    ?>

        <tr>
            <td><?php echo $category['id'];?></td>
            <td><?php echo $category['name'];?></td>
            <td>
                <a href="index.php?v=edit_category&id=<?php echo $category['id'] ?>" class="btn btn-success">Edit</a>
            </td>
            <td>
                <a href="index.php?v=delete_category&id=<?php echo $category['id'] ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>

    <?php } ?>
</table>