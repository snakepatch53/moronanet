<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/preguntas.css">
    <style>
        table tr th,
        table tr td {
            border: solid 1px #ccc;
            text-align: center;
            padding: 3px 5px;
            user-select: text;
        }
    </style>
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">


        <section class="flex justify-center px-[--padding] py-10">
            <div class="container leading-10 max-w-[800px]">
                <h4 class="font-bold text-center text-2xl text-[--secondary_background] mb-8">PARÁMETROS DE CALIDAD</h4>
                <p>Optar por contratar Internet en <b>MORONANET</b> tiene ventajas importantes en relación con los otros tipos de conexiones entre las principales tenemos:</p>
                <ul class="list-disc pl-4">
                    <li>
                        <b>Servicio profesional: </b>Se brinda un servicio profesional con personal capacitado, organizado y responsable para todos nuestros clientes.
                    </li>
                    <li>
                        <b>Atención técnica especializada: </b>El soporte de atención es hecho por técnicos especializados, capaces de ayudar a resolver cualquier tipo de problema que pueda surgir.
                    </li>
                    <li>
                        <b>Gestión permanente: </b>Recibe monitoreo constante, lo que disminuye y, en algunos casos, hasta evita errores y caídas de servicio.
                    </li>
                    <li>
                        <b>Seguridad en el acceso: </b>Además de proporcionar estabilidad en la conexión, también ofrecemos más seguridad en tu navegación, requisito fundamental.
                    </li>
                </ul>
            </div>
        </section>
        <section class="flex justify-center px-[--padding] py-10">
            <div class="container flex justify-center">
                <table class="max-w-[800px] border-collapse">
                    <thead>
                        <tr>
                            <th colspan="4">PARÁMETROS DE CALIDAD PARA LA PROVISIÓN DEL SERVICIO DE ACCESO A INTERNET</th>
                        </tr>
                        <tr>
                            <th>PARÁMETRO</th>
                            <th>GRÁFICA ESTADÍSTICA</th>
                            <th>VALOR</th>
                            <th>OBSERVACIÓN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Relación con el cliente</td>
                            <td> - </td>
                            <td> 0 </td>
                            <td>Proceso de Inicio de Operaciones en Curso, por lo cual no se dispone de un valor en el parametro descrito.</td>
                        </tr>
                        <tr>
                            <td>Porcentaje de reclamos generales procedentes</td>
                            <td> - </td>
                            <td> 0 </td>
                            <td>Proceso de Inicio de Operaciones en Curso, por lo cual no se dispone de un valor en el parametro descrito.</td>
                        </tr>
                        <tr>
                            <td>Tiempo máximo de resolución de reclamos generales</td>
                            <td> - </td>
                            <td> 0 </td>
                            <td>Proceso de Inicio de Operaciones en Curso, por lo cual no se dispone de un valor en el parametro descrito.</td>
                        </tr>
                        <tr>
                            <td>Porcentaje de reclamos de facturación</td>
                            <td> - </td>
                            <td> 0 </td>
                            <td>Proceso de Inicio de Operaciones en Curso, por lo cual no se dispone de un valor en el parametro descrito.</td>
                        </tr>
                        <tr>
                            <td>Tiempo promedio de reparación de averías efectivas</td>
                            <td> - </td>
                            <td> 0 </td>
                            <td>Proceso de Inicio de Operaciones en Curso, por lo cual no se dispone de un valor en el parametro descrito.</td>
                        </tr>
                        <tr>
                            <td>Porcentaje de módems utilizados</td>
                            <td> - </td>
                            <td> 0 </td>
                            <td>NO APLICA</td>
                        </tr>
                        <tr>
                            <td>Porcentaje de reclamos por la capacidad del canal de acceso controlado por el cliente</td>
                            <td> - </td>
                            <td> 0 </td>
                            <td>Proceso de Inicio de Operaciones en Curso, por lo cual no se dispone de un valor en el parametro descrito.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </main>

    <footer id="section-footer">
        <?php include('./src/templates/public.component/footer.php') ?>
    </footer>
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
</foot>

</html>