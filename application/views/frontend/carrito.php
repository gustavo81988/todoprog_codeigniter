<article class="contenido">
    <?= anchor('productos','Volver al listado')?>
    <hr>
    <form action="<? echo base_url();?>productos/actualizar_carrito" method="post">
        <table class="carrito">
            <tr>
                <th>Nombre del producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
            
            <?#= "<pre>".print_r($this->cart->contents(),true)."</pre>";?>
            
            
            <?
                $i = 1;
                foreach ($this->cart->contents() as $item):
            ?>
                <input type="hidden" name="<?php echo $i?>[rowid]" value="<?php echo $item['rowid']; ?>">
                <tr>
                    <td>
                        <?
                        echo $item['name'];
                        if ($this->cart->has_options($item['rowid']) === TRUE):
                            ?>
                            <p>
                                <?
                                foreach ($this->cart->product_options($item['rowid']) as $option_name => $option_value):
                                    ?>
                                    <strong><? echo $option_name; ?>:</strong> <? echo $option_value; ?><br />
                                <? endforeach; ?>
                            </p>
                        <? endif; ?>
                    </td>
                    
                    <td>Bs.F. <? echo number_format($item['price'],2,',','.'); ?></td>
                    
                    <td>
                        <input type="text" name="<?php echo $i?>[qty]" value="<?php echo $item['qty']; ?>" maxlength="3" size="5">
                    </td>
                    <td>Bs.F. <? echo number_format($item['subtotal'],2,',','.'); ?></td>
                </tr>
            <?
                $i++;
                endforeach;
            
            ?>
            <tr>
                <td colspan="2">
                    <input type="submit" name="actualizar" value="Actualizar Carrito">
                    <? echo anchor('productos/vaciar_carrito', 'Vaciar Carrito'); ?>
                </td>
                <td>Total:</td>
                <td>Bs.F. <? echo number_format($this->cart->total(),2,',','.'); ?></td>
            </tr>
        </table>
    </form>
    <br><br>
</article>