<div class="container">
    <legend> Boards </legend>
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
            <a href="edit">
                    <i class="fa fa-bars"> Bearbeiten</i>
            </a>
            </div>
            <div>
            <a href="delete">
                <i class="fa fa-trash"> Löschen</i>
            </a>
            </div>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>