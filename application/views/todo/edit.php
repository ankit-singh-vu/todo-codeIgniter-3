<form action="<?= site_url("todo/update/" . $todo->id) ?>" method="POST">
    <input type="text" name="title" value="<?= $todo->title ?>">
    <input type="text" name="description" value="<?= $todo->description ?>">
    <input type="submit">
</form>