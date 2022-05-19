<?php

add_shortcode ('sc_evento_ricerca', 'sc_evento_ricerca');
/*
** Since 1.0.0
** Maschera di ricerca per il visitatore
*/
function sc_evento_ricerca(){

    ob_start();
    
    $arrLocalita = GetPostsArray('localita');
    $arrTipoEvento = GetCategoriesArray('evento');


    ?>
        <div class="container">
            
                <div class="row">
                    
                    <label for="localita" class="form-label col-md-2">Località</label>
                    <select name="localita" id="localita" class="col-md-4">
                        <option value="0">Tutte</option>
                        <?php
                            foreach($arrLocalita as $id=>$nome){

                                echo '<option value="'. $id .'">'. $nome .'</option>';
                            }
                        ?>
                    </select>

                    <label for="tipoEvento" class="form-label col-md-2">Tipo di Evento</label>
                    <select name="tipoEvento" id="tipoEvento" class="col-md-4">
                        <option value="0">Tutti</option>
                        <?php
                            foreach($arrTipoEvento as $id=>$nome){

                                echo '<option value="'. $id .'">'. $nome .'</option>';
                            }
                        ?>
                    </select>
                    
                </div>

                <div class="row">
                    
                    <label for="dataDal" class="form-label col-md-2">Data Dal</label>
                    <input type="date" class="col-md-4" id="dataDal" name="dataDal" value="<?php echo date('Y-m-d'); ?>">

                
                    <label for="dataAl" class="form-label col-md-2">Data Al</label>
                    <input type="date" class="col-md-4" id="dataAl" name="dataAl" value="<?php echo date('Y-m-d', strtotime(date('Y-m-d') . ' +1 month')); ?>">

                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="button" class="btn btn-primary" id="btnRicercaEvento">Ricerca</button>
                </div>
            
        </div>

        <script>

            jQuery(document).ready(function(){

                jQuery("#btnRicercaEvento").click(function(){

                    console.log(124);
                    
                })
            })
        </script>
    <?php
    return ob_get_clean();
}