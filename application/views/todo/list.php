<?
// echo '<pre>';print_r($todos); echo '<pre>';
?>
<a href="<?= base_url("todo/create") ?>">add</a>
<table>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>description</th>
        <th>status</th>
        <th>created_at</th>
        <th>updated_at</th>
        <th>Action</th>
    </tr>
    <?php foreach ($todos as $todo) { ?>
        <tr>
            <td><?= $todo->id ?></td>
            <td><?= $todo->title ?></td>
            <td><?= $todo->description ?></td>
            <td><?= $todo->status ?></td>
            <td><?= $todo->created_at ?></td>
            <td><?= $todo->updated_at ?></td>
            <td>
                <?= $todo->updated_at ?>
                <a href="<?= base_url("todo/show/" . $todo->id) ?>">view</a>
                <a href="<?= base_url("todo/edit/" . $todo->id) ?>">edit</a>
                <a href="<?= base_url("todo/delete/" . $todo->id) ?>">delete</a>
            </td>
        </tr>
    <?php  } ?>

</table>