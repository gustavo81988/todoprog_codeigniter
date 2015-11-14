<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Plantilla - Curso CI</title>
        <link href="<?= base_url()?>assets/css/estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <section class="contenedor">
                <h1>Curso de CodeIgniter</h1>
                <p>Plantilla de ejemplo para el curso de CodeIgniter</p>
            </section>
        </header>
        <nav>
            <section class="contenedor">
                <ul>
                    <li><?= anchor(base_url(),'Inicio')?></li>
                    <li><?= anchor('productos','Productos')?></li>
                    <li><?= anchor('calendario','Calendario')?></li>
                    <li><?= anchor('encriptacion','Encriptación')?></li>
                    <li><?= anchor('emails','Enviar emails')?></li>
                </ul>
            </section>
        </nav>

        <section class="contenedor">