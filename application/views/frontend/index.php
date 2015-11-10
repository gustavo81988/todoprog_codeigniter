<section class="contenido">
    <?php
        foreach ($articulos as $item):
            #$url = "articulo/".$item->id_articulo."/";
            #$url = "articulo/";
            #$url.= url_title(convert_accented_characters($item->nombre_articulo),'-',TRUE);
    ?>

    <h3>
        <?php echo anchor('articulo/' . $item->url_articulo, $item->nombre_articulo); ?>
    </h3>
    
    <strong>Fecha de publicación: </strong><?php echo $item->fecha_articulo; ?>
    <p><?php echo $item->contenido_articulo; ?></p>
    <hr>
    
    <?php endforeach; ?>
    
</section>