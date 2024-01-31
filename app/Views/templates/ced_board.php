<?php ?>
<div class="container">
    <form action="<?php
    if (!empty($board)){
        echo base_url('boards/edit');
    } else {
        echo base_url('boards/new');
    }
    ?>" method="post">
        <div class="container">
            <div class="form-group col-sm-10">
                <label for="Id" class="col-sm-2 col-form-label">ID</label>
                <input type="text" readonly class="form-control" id="Id" name="Id" value="<?php
                if (!empty($board)){
                    echo $board['Id'];
                } else{
                    echo 0;
                } ?>">
            </div>
        </div>
        <div class="container">

            <div class="form-group col-sm-10">
                <label for="board" class="col-sm-2 col-form-label">Board</label>
                <input type="text"  class="form-control" id="board" name="Board" value="<?php
                if (!empty($board)){
                    echo $board['Board'];
                } else{
                    echo 0;
                } ?>">
            </div>
        </div>
        <div class="container">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-secondary" href="<?php echo base_url('boards/table_main') ?>" role="button">Abbrechen</a>
            <?php
            if (!empty($board)){
                echo view('templates/delButton_board');}
            ?>
        </div>
    </form>
</div>

