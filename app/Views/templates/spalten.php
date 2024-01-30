<div class="container">
    <legend>Spalten</legend>
    <div>
        <a class="btn btn-primary m-1" href="edit/0">
            <i class="fa fa-plus"> Neu</i>
        </a>
    </div>
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
                <td><?= $row['Board'] ?></td>
                <td><?= $row['SortId'] ?></td>
                <td><?= $row['Spalte'] ?></td>
                <td><?= $row['Spaltenbeschreibung'] ?></td>
                <td>
                    <div>
                        <a href="edit/<?php echo $row['Id'] ?>">
                            <i class="fa fa-bars"> Bearbeiten</i>
                            <i class="fa fa-trash"> Löschen</i>
                        </a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>