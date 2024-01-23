<div class="container">
    <legend>Spalten</legend>
    <table class="table table-bordered ">
        <thead class="table-primary">
        <tr>
            <th> ID</th>
            <th>Board</th>
            <th>SortId</th>
            <th>Spalte</th>
            <th>Spaltenbeschreibung</th>
            <th>Bearbeiten</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($spalten as $row): ?>
            <tr>
                <td><?= $row['Id'] ?></td>
                <td><?= $row['BoardsId'] ?></td>
                <td><?= $row['SortId'] ?></td>
                <td><?= $row['Spalte'] ?></td>
                <td><?= $row['Spaltenbeschreibung'] ?></td>
                <td>
                    <div>
                        <a href="edit/<?php echo $row['Id'] ?>">
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