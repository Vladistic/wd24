<?php echo '<hr>';
//var_dump($spalte);
echo '<hr>';
//var_dump($spalten);
echo '<hr>';
//var_dump($boards);
echo '<hr>';

?>
<div class="container">
    <form action="<?php echo base_url('spalten/edit')?>" method="post">
    <div class="form-group row">

        <div class="form-group col-sm-10">
            <label for="id" class="col-sm-2 col-form-label">ID</label>
            <input type="text" readonly class="form-control-plaintext" id="id" name="id" value="<?php
            if (!empty($spalte)){
                echo $spalte['Id'];
            } else{
                echo 0;
            } ?>">
        </div>
    </div>
    <div class="container">

        <div class="form-group col-sm-10">
            <label for="boardsId" class="col-sm-2 col-form-label">Boards</label>
            <input type="text" readonly class="form-control-plaintext" id="boardsId" name="boardsId" value="            <?php
            if (!empty($spalte)){
                echo $boards[$spalte['BoardsId']-1]['Board'];
            } else{
                echo 0;
            } ?>">
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
