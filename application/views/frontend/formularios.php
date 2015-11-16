<article class="contenido">
    <?= validation_errors(); ?>
    <form method="post" action="<?= base_url(); ?>formularios/validar">
        <table>
            <tr>
                <td><label for="nombre"></label>Nombre:</td>
                <td><input type="text" name="nombre" id="nombre" value="<?=  set_value('nombre');?>"></td>
            </tr>

            <tr>
                <td><label for="email"></label>Correo Electrónico</td>
                <td><input type="text" name="email" id="email" value="<?=  set_value('email');?>"></td>
            </tr>

            <tr>
                <td><label for="mensaje">Mensaje:</label></td>
                <td><textarea name="mensaje" id="mensaje" cols="35" rows="10"><?=  set_value('mensaje');?> </textarea></td>
            </tr>

            <tr>
                <td><label for="opciones">Opciones</label></td>
                <td>
                    <select name="opciones" id="opciones">
                        <option value="" selected="selected">SELECCIONE</option>
                        <option value="1" <?= set_select('opciones','1');?>>Opción 1</option>
                        <option value="2" <?= set_select('opciones','2');?>>Opción 2</option>
                        <option value="3" <?= set_select('opciones','3');?>>Opción 3</option>
                    </select>
                </td>
            </tr>


            <tr>
                <td>Colores:</td>
                <td>
                    <input type="checkbox" name="colores[]" id="rojo" value="rojo" <?= set_checkbox('colores[]','rojo');?>>
                    <label for="rojo">Rojo</label>
                    <input type="checkbox" name="colores[]" id="verde" value="verde" <?= set_checkbox('colores[]','verde');?>>
                    <label for="verde">Verde</label>
                    <input type="checkbox" name="colores[]" id="azul" value="azul" <?= set_checkbox('colores[]','azul');?>>
                    <label for="azul">Azul</label>
                </td>
            </tr>

            <tr>
                <td>Idioma:</td>
                <td>
                    <input type="radio" name="idiomas" id="espanol" value="espanol" <?= set_radio('idiomas','espanol');?>>
                    <label for="espanol">Español</label>
                    <input type="radio" name="idiomas" id="ingles" value="ingles" <?= set_radio('idiomas','ingles');?>>
                    <label for="ingles">Inglés</label>
                    <input type="radio" name="idiomas" id="italiano" value="italiano" <?= set_radio('idiomas','italiano');?>>
                    <label for="italiano">Italiano</label>
                </td>
            </tr>
            <td colspan="2"><input type="submit" name="enviar" value="Enviar Mensaje"></td>
        </table>
    </form>
</article>