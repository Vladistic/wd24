<div class="container">
    <legend> Boards </legend>
    <div>
        <a class="btn btn-primary m-1" href="edit/0">
            <i class="fa fa-plus"> Neu</i>
        </a>
    </div>
<table data-toggle="table">
    <thead>
    <tr>
        <th> ID</th>
        <th>Board</th>
        <th>Bearbeiten</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($boards as $item): ?>
    <tr>
        <td><?= $item['Id'] ?></td>
        <td><?= $item['Board'] ?></td>
        <td>
            <div>
            <a href="<?php echo base_url("boards/edit/").$item['Id'] ?>">
                <i class="fa fa-bars"> Bearbeiten/Löschen</i><i class="fa fa-trash"></i>
            </a>
            </div>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>