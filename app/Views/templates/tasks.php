<div class="container border border-4 m-5">
<hr>
<legend>Tasks</legend>
<div class="dropdown position-relative">
    <button class="btn btn-primary dropdown-toggle position-absolute end-0 translate-middle" type="button" data-bs-toggle="dropdown">
        Tasks
    </button>
    <ul class="dropdown-menu">

    <?php foreach ($boards as $item): ?>
            <li>
                <a class="dropdown-item" href="<?php echo base_url('tasks/sub/'.$item['Id'])?>"><?=$item['Board'] ?></a>
            </li>

    <?php endforeach; ?>
    </ul>
</div>
<hr>
</div>

<div class="container d-flex border border-4 m-3 p-1">
    <div class="card m-3" style="width: 18rem;">
        <h3 class="card-title m-1 p-2 h5">
            ToDo's
        </h3>
        <small class="m-1 text-muted">
            Noch zu erledigende Todos.
        </small>
        <?php foreach ($tasks as $item): ?>
            <div class="m-2" id="spalte1" spaltenid="<?php echo $item['Taskartenid'] ?>">
            <div class="container border border-1 ">
                <a href="<?php echo base_url('tasks/edit/'.$item['Taskartenid'])?>">
                    <i class="fa-solid fa-house-chimney fa-fw" title="Besuch"></i>
                    <?php echo $item['Tasks'] ?>
                </a>
                <p>
                    <?php
                    $date=date_create($item['Erstelldatum']);
                    echo date_format($date, "d.m.Y");
                    echo '<p>';
                    foreach ($personen as $items) {
                        if ($items['Id']==$item['Personenid']){
                            echo $items['Vorname'].' '.$items['Name'];
                        }
                    }
                    echo '</p>';
                    ?>
                </p>
            </div>
        </div>
        <?php endforeach; ?>

        <div class="card-footer">
            <button class="btn btn-primary" type="button" href="<?php echo base_url('tasks/todo')?>">
                Neu
            </button>
        </div>
    </div>

    <div class="card m-3" style="width: 18rem;">
        <h3 class="card-title m-1 p-2 h5">
            Wird Erledigt
        </h3>
        <small class="m-1 text-muted">
            Aktuelle Todos.
        </small>
        <?php foreach ($tasks as $item): ?>
            <div class="m-2" id="spalte1" spaltenid="<?php echo $item['Taskartenid'] ?>">
                <div class="container border border-1 ">
                    <a href="<?php echo base_url('tasks/edit/'.$item['Taskartenid'])?>">
                        <i class="fa-solid fa-house-chimney fa-fw" title="Besuch"></i>
                        <?php echo $item['Tasks'] ?>
                    </a>
                    <p>
                        <?php
                        $date=date_create($item['Erstelldatum']);
                        echo date_format($date, "d.m.Y");
                        echo '<p>';
                        foreach ($personen as $items) {
                            if ($items['Id']==$item['Personenid']){
                                echo $items['Vorname'].' '.$items['Name'];
                            }
                        }
                        echo '</p>';
                        ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="card-footer">
            <button class="btn btn-primary" type="button" href="<?php echo base_url('tasks/todo')?>">
                Neu
            </button>
        </div>
    </div>

    <div class="card m-3" style="width: 18rem;">
        <h3 class="card-title m-1 p-2 h5">
            Erledigt
        </h3>
        <small class="m-1 text-muted">
            Erledigte Todos.
        </small>
        <?php foreach ($tasks as $item): ?>
            <div class="m-2" id="spalte1" spaltenid="<?php echo $item['Taskartenid'] ?>">
                <div class="container border border-1 ">
                    <a href="<?php echo base_url('tasks/edit/'.$item['Taskartenid'])?>">
                        <i class="fa-solid fa-house-chimney fa-fw" title="Besuch"></i>
                        <?php echo $item['Tasks'] ?>
                    </a>
                    <p>
                        <?php
                        $date=date_create($item['Erstelldatum']);
                        echo date_format($date, "d.m.Y");
                        echo '<p>';
                        foreach ($personen as $items) {
                            if ($items['Id']==$item['Personenid']){
                                echo $items['Vorname'].' '.$items['Name'];
                            }
                        }
                        echo '</p>';
                        ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="card-footer">

            <a class="btn btn-primary" type="button" href="<?php echo base_url('tasks/todo')?>">
                Neu
            </a>
        </div>
    </div>

</div>