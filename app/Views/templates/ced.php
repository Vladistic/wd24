<?php echo '<hr>';
//var_dump($spalte);
echo '<hr>';
//var_dump($spalten);
echo '<hr>';
var_dump($boards);
echo '<hr>';

?>
<div class="container">
    <form action="<?php
    if (!empty($spalte)){
        echo base_url('spalten/edit');
    } else {
        echo base_url('spalten/new');
    }
    ?>" method="post">
        <div class="container">
            <div class="form-group col-sm-10">
                <label for="Id" class="col-sm-2 col-form-label">ID</label>
                <input type="text" readonly class="form-control" id="Id" name="Id" value="<?php
                if (!empty($spalte)){
                    echo $spalte['Id'];
                } else{
                    echo 0;
                } ?>">
            </div>
        </div>
    <div class="container">

        <div class="form-group">
            <label for="<?php
            if (!empty($spalte)){
               echo $spalte['BoardsId'];
            } else{
                echo 0;
            }
            ?>">Boards</label>
            <select class="form-control" id="<?php
            if (!empty($spalte)){
                echo $spalte['BoardsId'];
            } else{
                echo 0;
            }
            ?>" name="boardsId">
                <?php foreach ($boards as $item): ?>
                    <option><?= $item['Id']?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="container">

        <div class="form-group col-sm-10">
            <label for="sortId" class="col-sm-2 col-form-label">Sort ID</label>
            <input type="text"  class="form-control" id="sortId" name="sortId" value="<?php
            if (!empty($spalte)){
                echo $spalte['SortId'];
            } else{
                echo 0;
            } ?>">
        </div>
    </div>
    <div class="container">
        <label for="spalte" class="col-sm-2 col-form-label">Spalte</label>
        <div class="form-group col-sm-10">
            <input type="text" class="form-control" id="spalte" name="spalte" value="<?php
            if (!empty($spalte)){
                echo $spalte['Spalte'];
            } else{
                echo 'Bitte ausfüllen';
            } ?>">
        </div>
    </div>
    <div class="container">
        <label for="spaltenbeschreibung" class="col-sm-2 col-form-label">Spaltenbeschreibung</label>
        <div class="form-group col-sm-10">
            <textarea class="form-control" id="spaltenbeschreibung" name="spaltenbeschreibung" rows="3"><?php
                if (!empty($spalte)){
                    echo $spalte['Spaltenbeschreibung'];
                } else{
                    echo 'Bitte ausfüllen';
                } ?>
            </textarea>
        </div>
    </div>
    <div class="container">
        <button type="submit" class="btn btn-primary">Save</button>
        <a class="btn btn-secondary" href="<?php echo base_url('spalten/spalten') ?>" role="button">Abbrechen</a>
        <?php
        if (!empty($spalte)){
            echo view('templates/abbrechenButton');}
        ?>
    </div>
    </form>
</div>
<script>

</script>
