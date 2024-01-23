<?php ?>

<div class="container pb-4">
    <div class="card mt-4">
        <legend class="card-header bg-white">
            <div class="d-flex justify-content-between">
                <div class="h5"><strong>Boards</strong></div>
            </div>
        </legend>
        <div class="card-body">


            <div class="bootstrap-table bootstrap5">
                <div class="fixed-table-toolbar"><div class="bs-bars float-left"><div class="toolbar">

                            <a href="https://uebung.wi1cm.uni-trier.de/public/boards/board/0/0/">
                                <button type="button" class="btn btn-primary" onclick="">Erstellen</button>
                            </a>
                        </div></div><div class="columns columns-right btn-group float-right"><button class="btn btn-secondary" type="button" name="toggle" aria-label="" title=""><i class="fa bi-toggle-off"></i> </button><div class="keep-open btn-group">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-label="Spalten" title="Spalten">
                                <i class="fa bi-list-ul"></i>

                                <span class="caret"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end"><label class="dropdown-item dropdown-item-marker"><input type="checkbox" data-field="id" value="0" checked="checked"> <span>ID</span></label><label class="dropdown-item dropdown-item-marker"><input type="checkbox" data-field="board" value="1" checked="checked"> <span>Board</span></label><label class="dropdown-item dropdown-item-marker"><input type="checkbox" data-field="2" value="2" checked="checked"> <span>Bearbeiten</span></label></div></div></div>
                    <div class="float-right search btn-group">
                        <input class="form-control search-input" type="search" aria-label="Suchen" placeholder="Suchen" autocomplete="off">
                    </div>
                </div>

                <div class="fixed-table-container" style="padding-bottom: 0px;">
                    <div class="fixed-table-header" style="display: none;"><table></table></div>
                    <div class="fixed-table-body">
                        <div class="fixed-table-loading table table-bordered table-hover" style="top: 50px;">
      <span class="loading-wrap">
      <span class="loading-text" style="font-size: 32px;">Lade, bitte warten</span>
      <span class="animation-wrap"><span class="animation-dot"></span></span>
      </span>

                        </div>
                        <table class="table table-responsive table-striped table-hover table-borderless table-bordered" id="tblgelaende" data-show-columns="true" data-unique-id="id" data-show-toggle="true" data-toggle="table" data-search="true" data-ajax="getTableData" data-cookie="true" data-cookie-id-table="tblboards" data-icons-prefix="fa" data-icons="icons" data-mobile-responsive="true" data-check-on-init="true" data-sort-stable="true" data-toolbar=".toolbar">
                            <thead><tr><th style="" data-field="id"><div class="th-inner ">ID</div><div class="fht-cell"></div></th><th style="" data-field="board"><div class="th-inner sortable both">Board</div><div class="fht-cell"></div></th><th style="" data-field="2"><div class="th-inner ">Bearbeiten</div><div class="fht-cell"></div></th></tr></thead>
                            <tbody><tr data-index="0" data-uniqueid="1"><td>1</td><td>Home Todos</td><td><div class="btn-group"><button title="Bearbeiten" class="btn" onclick="javascript:window.location='https://uebung.wi1cm.uni-trier.de/public//boards/board/1/1 ';"><i style="font-size: 1.25em;" class="fas fa-edit text-primary"></i></button><button title="Löschen" class="btn" onclick="javascript:window.location='https://uebung.wi1cm.uni-trier.de/public//boards/board/1/2 ';"><i style="font-size: 1.25em;" class="fas fa-trash text-primary"></i></button></div></td></tr><tr data-index="1" data-uniqueid="3"><td>3</td><td>IT Todos</td><td><div class="btn-group"><button title="Bearbeiten" class="btn" onclick="javascript:window.location='https://uebung.wi1cm.uni-trier.de/public//boards/board/3/1 ';"><i style="font-size: 1.25em;" class="fas fa-edit text-primary"></i></button><button title="Löschen" class="btn" onclick="javascript:window.location='https://uebung.wi1cm.uni-trier.de/public//boards/board/3/2 ';"><i style="font-size: 1.25em;" class="fas fa-trash text-primary"></i></button></div></td></tr><tr data-index="2" data-uniqueid="4"><td>4</td><td>Random</td><td><div class="btn-group"><button title="Bearbeiten" class="btn" onclick="javascript:window.location='https://uebung.wi1cm.uni-trier.de/public//boards/board/4/1 ';"><i style="font-size: 1.25em;" class="fas fa-edit text-primary"></i></button><button title="Löschen" class="btn" onclick="javascript:window.location='https://uebung.wi1cm.uni-trier.de/public//boards/board/4/2 ';"><i style="font-size: 1.25em;" class="fas fa-trash text-primary"></i></button></div></td></tr><tr data-index="3" data-uniqueid="5"><td>5</td><td>Vögel</td><td><div class="btn-group"><button title="Bearbeiten" class="btn" onclick="javascript:window.location='https://uebung.wi1cm.uni-trier.de/public//boards/board/5/1 ';"><i style="font-size: 1.25em;" class="fas fa-edit text-primary"></i></button><button title="Löschen" class="btn" onclick="javascript:window.location='https://uebung.wi1cm.uni-trier.de/public//boards/board/5/2 ';"><i style="font-size: 1.25em;" class="fas fa-trash text-primary"></i></button></div></td></tr><tr data-index="4" data-uniqueid="6"><td>6</td><td>1</td><td><div class="btn-group"><button title="Bearbeiten" class="btn" onclick="javascript:window.location='https://uebung.wi1cm.uni-trier.de/public//boards/board/6/1 ';"><i style="font-size: 1.25em;" class="fas fa-edit text-primary"></i></button><button title="Löschen" class="btn" onclick="javascript:window.location='https://uebung.wi1cm.uni-trier.de/public//boards/board/6/2 ';"><i style="font-size: 1.25em;" class="fas fa-trash text-primary"></i></button></div></td></tr><tr data-index="5" data-uniqueid="7"><td>7</td><td>123</td><td><div class="btn-group"><button title="Bearbeiten" class="btn" onclick="javascript:window.location='https://uebung.wi1cm.uni-trier.de/public//boards/board/7/1 ';"><i style="font-size: 1.25em;" class="fas fa-edit text-primary"></i></button><button title="Löschen" class="btn" onclick="javascript:window.location='https://uebung.wi1cm.uni-trier.de/public//boards/board/7/2 ';"><i style="font-size: 1.25em;" class="fas fa-trash text-primary"></i></button></div></td></tr><tr data-index="6" data-uniqueid="8"><td>8</td><td>TEST</td><td><div class="btn-group"><button title="Bearbeiten" class="btn" onclick="javascript:window.location='https://uebung.wi1cm.uni-trier.de/public//boards/board/8/1 ';"><i style="font-size: 1.25em;" class="fas fa-edit text-primary"></i></button><button title="Löschen" class="btn" onclick="javascript:window.location='https://uebung.wi1cm.uni-trier.de/public//boards/board/8/2 ';"><i style="font-size: 1.25em;" class="fas fa-trash text-primary"></i></button></div></td></tr></tbody></table></div>
                    <div class="fixed-table-footer"></div>
                </div>
                <div class="fixed-table-pagination" style="display: none;"></div>
            </div><div class="clearfix"></div>
        </div>
    </div>
</div>