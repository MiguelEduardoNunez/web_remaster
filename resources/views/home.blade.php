<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Ruta al CSS sin compilación -->
    {{-- <style>
        /* Estilos para el modal */
        .modal-body {
            overflow-x: auto;
        }

        .modal-body a {
            word-wrap: break-word;
        }

    </style> --}}
</head>

<body class="antialiased">
    <x-header />
    <x-menu />
    <x-carousel />
    <x-info />
    <x-nuestros-servicios />
    <x-zona-interes />
    <x-footer />

    <!-- Modal Dignidad Infantil -->
    <x-modal id="dignidadInfantilModal" title="Dignidad Infantil">
        <div class="modal-body" style="overflow-x: auto;">
            <ul class="list-unstyled">
                <li>
                    En COLOMBIANET Y SEPCOM INGENIERÍA Y TELECOMUNICACIONES S.A.S., tenemos la política de Cero
                    Tolerancia con la Explotación de menores de edad en Redes Electrónicas, para prevenir y contrarrestar
                    el flagelo de este fenómeno en Colombia y el mundo denuncia en:
                    <a target="_blank" href="https://www.enticconfio.gov.co">www.enticconfio.gov.co</a>
                </li>
            </ul>

            <h3 class="mt-4">Dignidad Infantil</h3>
            <ul class="list-unstyled">
                <li>
                    La Pornografía Infantil se define como toda representación, por cualquier medio, de un menor o una
                    persona con aspecto de menor entregada a actividades sexuales explícitas, reales, simuladas o
                    creadas mediante procesos de cualquier índole, así como toda representación de las partes de unos
                    menores reales, simulados o creados mediante procesos de cualquier índole con fines primordialmente
                    sexuales. Para lo cual se considerará menor a toda persona que no haya alcanzado la edad legal en la
                    cual sea definido el carácter de adulto.
                </li>
            </ul>

            <h3 class="mt-4">Normatividad</h3>
            <ul class="list-unstyled">
                <li>
                    De acuerdo con lo establecido en la Ley 679 de 2001 el Decreto 1524 de 2002, el Decreto 67 de 2003 y
                    la Ley 1336 de 2009, todas las personas deben prevenir, bloquear, combatir y denunciar la
                    explotación, alojamiento, uso, publicación, difusión de imágenes, textos, documentos, archivos
                    audiovisuales, uso indebido de redes globales de información, o el establecimiento de vínculos
                    telemáticos de cualquier clase, relacionados con material pornográfico o alusivo a actividades
                    sexuales de menores de edad, por cuanto podría generar responsabilidad penal. Si encuentra algún
                    contenido o actividad dentro de la red considerado como pornografía infantil puede denunciarlo.
                </li>
            </ul>

            <h3 class="mt-4">Internet Sano</h3>
            <ul class="list-unstyled">
                <li>
                    Otro de los aspectos que la Ley 679 de 2001 promulga, es el interés de proteger a los infantes de
                    acceder a sitios con contenido para adultos (pornografía). Pese al crecimiento y difícil control de
                    internet en este sentido, existen métodos y herramientas que pueden filtrar contenidos no deseados y
                    así proteger a los menores:
                </li>
            </ul>

            <h3 class="mt-4">Cómo configurar tu navegador para filtrar contenidos</h3>
            <ul class="list-unstyled">
                <li>
                    Programas de filtrado de contenido: Este tipo de software le permite completa funcionalidad durante
                    un periodo de tiempo (shareware). Transcurrido el cual usted (previa satisfacción) podrá comprarlo:
                    <ul class="list-unstyled ms-4">
                        <li>CyberPatrol</li>
                        <li>NetNanny</li>
                        <li>Family.net</li>
                        <li>K9 Web Protection</li>
                    </ul>
                </li>
            </ul>

            <h3 class="mt-4">¿Qué busca la Ley 679 de 2001?</h3>
            <ul class="list-unstyled">
                <li>
                    Dictar medidas de protección contra la explotación, la pornografía y el turismo sexual y demás
                    formas de abuso sexual con menores de edad, mediante el establecimiento de normas de carácter
                    preventivo y sancionatorio, y la expedición de otras disposiciones en desarrollo del artículo 44 de
                    la Constitución de Colombia.
                </li>
            </ul>

            <h3 class="mt-4">¿Dónde denunciar las páginas que tengan contenido infantil pornográfico?</h3>
            <ul class="list-unstyled">
                <li>
                    El Ministerio de Comunicaciones, a partir de las obligaciones de la Ley 679 del 3 de agosto de 2001
                    implementó dos puntos de información y denuncia. Una línea telefónica gratuita: 01 8000 912667 o en
                    la página <br>
                    <a target="_blank" href="http://www.teprotejo.org/index.php/es/denuncia-explotacion-sexual">http://www.teprotejo.org/index.php/es/denuncia-explotacion-sexual</a>
                </li>
            </ul>

            <h3 class="mt-4">¿Qué hace el Ministerio de Comunicaciones con estas denuncias?</h3>
            <ul class="list-unstyled">
                <li>
                    Las denuncias recibidas por el Ministerio de Comunicaciones sobre páginas de pornografía con menores
                    de edad en Internet, son enviadas a la Policía Nacional y/o al Departamento Administrativo de
                    Seguridad DAS. Estas entidades adelantan el proceso de verificación, análisis e investigación de las
                    URL y a su vez suministran al Ministerio de Comunicaciones un listado de URL clasificados como
                    pornografía con menores de edad en Internet. El Ministerio con este listado, expide un acto
                    administrativo exigiendo a los ISP (Proveedor de acceso a Internet) el bloqueo de estas páginas en
                    Colombia.
                    Definiciones Agenda de Conectividad Ministerio de Comunicaciones.
                </li>
            </ul>

            <h3 class="mt-4">DENUNCIE</h3>
            <ul class="list-unstyled">
                <li>
                    En los siguientes lugares de Internet podrá realizar denuncias relacionadas con sitios y contenidos
                    de pornografía de menores de edad y páginas electrónicas en las que se ofrezcan servicios sexuales
                    con niños:
                    <ul class="list-unstyled ms-4">
                        <li><b>MINISTERIO DE TECNOLOGÍAS DE LA INFORMACIÓN Y LAS COMUNICACIONES</b></li>
                        <li>Teléfono: 01 800 0912667</li>
                        <li><a target="_blank" href="https://www.enticconfio.gov.co">https://www.enticconfio.gov.co</a></li>
                        <li><b>FISCALÍA GENERAL DE LA NACIÓN</b></li>
                        <li>Teléfono: 01 800 0912280</li>
                        <li>e-mail: <a href="mailto:contacto@fiscalia.gov.co">contacto@fiscalia.gov.co</a></li>
                        <li><a target="_blank" href="https://www.fiscalia.gov.co">https://www.fiscalia.gov.co</a></li>
                        <li><b>DIRECCIÓN CENTRAL DE POLICÍA JUDICIAL - DIJIN <br> GRUPO INVESTIGATIVO DELITOS INFORMÁTICOS</b></li>
                        <li>e-mail: <a href="mailto:contacto@fiscalia.gov.co">contacto@fiscalia.gov.co</a></li>
                        <li>Carrera 77A # 45-61 Barrio Modeliza</li>
                        <li>Teléfonos: PBX: 426 6900 Ext. 6301-6302 Directo: 426 6300</li>
                        <li><a target="_blank" href="https://www.policia.gov.co/dijin">https://www.policia.gov.co/dijin</a></li>
                        <li><b>INSTITUTO COLOMBIANO DE BIENESTAR FAMILIAR</b></li>
                        <li>Teléfonos: 01 8000 918080 ó (1) 660 5520, (1) 660 5530, (1) 660 5540</li>
                        <li>Horario: lunes a viernes 07:00am a 12:00pm y de 02:00pm a 06:00pm y sábados de 08:00am a 12:00pm</li>
                        <li><a target="_blank" href="https://www.icbf.gov.co">https://www.icbf.gov.co</a></li>
                        <li>Además, en las siguientes direcciones encontrarán mecanismos de filtrado que puedan ser instalados en sus equipos:</li>
                        <li><a target="_blank" href="http://planetweb.com/ProductsServices/SpectraWorks.aspx">http://planetweb.com/ProductsServices/SpectraWorks.aspx</a></li>
                        <li><a target="_blank" href="http://www.access-control-software.com/support/home-version.html">http://www.access-control-software.com/support/home-version.html</a></li>
                        <li><a target="_blank" href="http://www.netnanny.com/support/index.html">http://www.netnanny.com/support/index.html</a></li>
                        <li><b>CENTRO CIBERNÉTICO DE LA POLICÍA</b></li>
                        <li><a target="_blank" href="https://caivirtual.policia.gov.co/">https://caivirtual.policia.gov.co/</a></li>
                        <li>Página principal y selecciona la Unidad de Infancia y Adolescencia</li>
                        <li><a target="_blank" href="https://www.policia.gov.co/">https://www.policia.gov.co/</a></li>
                        <li>Para realizar denuncias a través de Internet:</li>
                        <li><a target="_blank" href="http://www.teprotejo.org">http://www.teprotejo.org</a></li>
                        <li>Para denunciar de forma anónima:</li>
                        <li><a target="_blank" href="https://seguridadenlinea.com/denu">https://seguridadenlinea.com/denu</a></li>
                        <li><a target="_blank" href="archivos/DECRETO-1524-DE-2002.pdf">Infórmate aquí: DECRETO 1524 DE 2002.pdf</a></li>
                        <li><a target="_blank" href="archivos/LEY-679-de-2001.pdf">Infórmate aquí: LEY 679 de 2001.pdf</a></li>
                        <li><a target="_blank" href="archivos/LEY-1336-DE-2009.pdf">Infórmate aquí: LEY 1336 DE 2009.pdf</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </x-modal>


    <!-- Modal Habeas Data -->
    <x-modal id="habeasDataModal" title="Habeas Data">
        <div class="modal-body">
            <h3>HABEAS DATA</h3>

            <p>Por medio de la presente realizo la siguiente acción con mis datos personales:</p>
            <blockquote class="blockquote">
                <p class="">
                    "Autorizo a COLOMBIANET para usar mis datos personales con la finalidad de:
                </p>
                <ul class="list-unstyled mt-2">
                    <li>1. Comunicar eficientemente información propia de COLOMBIANET, así como de nuestras filiales y/o
                        aliados comerciales, sobre productos, servicios, ofertas.</li>
                    <li>2. Informar sobre nuevos productos o servicios que estén relacionados con el o los servicios
                        adquiridos.</li>
                    <li>3. Evaluar la calidad del o los servicios.</li>
                    <li>4. Informar sobre cambios de nuestros productos o servicios.</li>
                    <li>5. Participar en programas de lealtad con beneficios.</li>
                    <li>6. Realizar estudios de mercado sobre hábitos de consumo.</li>
                    <li>7. Transferir y transmitir datos personales a terceros con vínculos comerciales con COLOMBIANET.
                    </li>
                    <li>8. Las demás finalidades estrechamente asociadas y necesarias para cumplir los fines de
                        mercadeo."</li>
                </ul>
            </blockquote>
            <p>
                <a target="_blank" href="archivos/POLITICAS-DE-TRATAMIENTO-DE-LA-INFORMACION.pdf" class="btn btn-link">
                    Infórmate aquí: políticas de tratamiento de la información
                </a>
            </p>
        </div>
    </x-modal>

    <!-- Modal Centrales de Riesgo -->
    <x-modal id="centralRiesgoModal" title="Actualización o Retiro de Centrales de Riesgo">
        <div class="modal-body border border-danger">
            <p>Infórmate sobre <strong>ACTUALIZACIÓN O RETIRO DE CENTRALES DE RIESGO</strong> aquí:</p>
            <blockquote class="blockquote">
                <p class="mb-0">
                    <a target="_blank" href="archivos/ACTUALIZACION-O-RETIRO-DE-CENTRALES-DE-RIESGO.pdf">actualización oretiro de centrales de riesgo.pdf</a>
                </p>
            </blockquote>
        </div>
    </x-modal>

    <!-- Modal Normatividad 2020 / COVID-19 -->
    <x-modal id="normatividadCovidModal" title="Normatividad 2020 / COVID-19">
        <div class="modal-body">
            <h2 class="h4">NORMATIVIDAD 2020 / COVID-19</h2>
            <p>Conozca los diferentes decretos y resoluciones regulatorios con ocasión de la pandemia COVID-19:</p>
            <ul class="list-unstyled">
                <li>
                    <a class="d-block mb-2" target="_blank" href="archivos/DECRETO-555-DEL-15-DE-ABRIL-DE-2020.pdf">decreto 555 del 15 de abril de 2020</a>
                </li>
                <li>
                    <a class="d-block mb-2" target="_blank" href="archivos/DECRETO-464-DEL-23-DE-MARZO-DE-2020.pdf">decreto 464 del 23 de marzo de 2020</a>
                </li>
                <li>
                    <a class="d-block mb-2" target="_blank" href="archivos/RESOLUCION-5491-de-2020-CRC-medidas-covid-19.pdf">resolución 5491 de 2020 crc -
                        medidas covid-19</a>
                </li>
                <li>
                    <a class="d-block mb-2" target="_blank" href="archivos/RESOLUCION-5956-de-2020-CRC-.pdf">resolución
                        5956 de 2020 crc - medidas covid-19</a>
                </li>
                <li>
                    <a class="d-block mb-2" target="_blank" href="archivos/Resolucion-CRC-5951-de-2020.pdf">resolución
                        crc 5951 de 2020</a>
                </li>
                <li>
                    <a class="d-block mb-2" target="_blank" href="archivos/resolucion5969.pdf">resolución crc 5969 de
                        2020 - medidas covid-19</a>
                </li>
                <li>
                    <a class="d-block mb-2" target="_blank" href="archivos/RESOLUCION-19012-SIC.pdf">resolución 19012 de
                        2020 sic</a>
                </li>
                <li>
                    <a class="d-block mb-2" target="_blank" href="archivos/afiche-prevencion-covid.pdf">afiche
                        prevención covid</a>
                </li>
            </ul>
        </div>
    </x-modal>

    <!-- Modal Factores de Limitación de la Velocidad en Internet Fija -->
    <x-modal id="factoresLimitacionModal" title="Factores de Limitación de la Velocidad en Internet Fija">
        <div class="modal-body">
            <p>Los principales factores que limitan la velocidad efectiva de internet que usted puede experimentar y sobre los cuales COLOMBIANET y SEPCOM INGENIERÍA Y TELECOMUNICACIONES S.A.S tiene control son los relacionados con:</p>
            <ul class="list-unstyled">
                <li>Alta latencia en la red del proveedor de servicios.</li>
                <li>Congestión del canal de internet del proveedor.</li>
                <li>Congestión de las redes troncales y redes de acceso.</li>
                <li>Comportamientos anómalos de tráfico como ataques cibernéticos a equipos del proveedor.</li>
                <li>Usuarios maliciosos en infraestructura del proveedor.</li>
                <li>Problemas en la red de acceso.</li>
                <li>Fallas en las troncales de red (ruido, malas conexiones y atenuaciones), entre otros.</li>
            </ul>
            <p>Los factores que limitan la velocidad efectiva del internet fijo ajenos a COLOMBIANET y SEPCOM INGENIERÍA Y TELECOMUNICACIONES S.A.S son los relacionados con:</p>
            <ul class="list-unstyled">
                <li>Consumo excesivo del ancho de banda de aplicaciones del SUSCRIPTOR.</li>
                <li>Congestión en la red WIFI.</li>
                <li>Ataques cibernéticos a equipos del SUSCRIPTOR.</li>
                <li>Usuarios maliciosos en equipos del SUSCRIPTOR.</li>
                <li>Conexión de dispositivos adicionales como repetidores y routers inalámbricos.</li>
                <li>Fallas y congestión en las troncales internacionales de internet, entre otros.</li>
            </ul>
            <a class="btn btn-link" target="_blank" href="archivos/FACTORES-QUE-LIMITAN-LA-VELOCIDAD-DE-INTERNET.pdf">Infórmate aquí: Factores de limitación de la velocidad en internet</a>
        </div>
    </x-modal>

    <!-- Modal Gestión del Tráfico -->
    <x-modal id="gestionTraficoModal" title="Prácticas y Gestión del Tráfico">
        <div class="modal-body">
            <p>Las siguientes son las prácticas que COLOMBIANET y SEPCOM INGENIERÍA Y TELECOMUNICACIONES S.A.S. utiliza para ofrecer gestión de tráfico al usuario en cuanto a transparencia y seguridad:</p>

            <h3 class="mt-3">Seguridad y Gestión de Tráfico</h3>
            <p>Función de bloqueo de páginas web, asociadas a pornografía infantil y aquellas indicadas por el ICBF, así como páginas de juegos de azar ilegales, reportados por las autoridades. El control de seguridad en los dispositivos de los usuarios finales (Smart Phone, PC, laptop, etc.) es responsabilidad del usuario.</p>

            <h3 class="mt-3">Autenticación y Acceso</h3>
            <p>La responsabilidad del uso de internet del usuario residencial es directamente del usuario a través de su contrato de servicios. COLOMBIANET y SEPCOM INGENIERÍA Y TELECOMUNICACIONES S.A.S. no provee autenticación de aplicaciones de terceros.</p>

            <h3 class="mt-3">Prácticas de Gestión de Tráfico</h3>
            <p>COLOMBIANET y SEPCOM INGENIERÍA Y TELECOMUNICACIONES S.A.S. implementa una gestión de tráfico que garantiza la NO discriminación respecto de algún proveedor, servicio, contenido o protocolo específico. Por otra parte, COLOMBIANET y SEPCOM INGENIERÍA y TELECOMUNICACIONES S.A.S. tiene implementados procedimientos de detección y mitigación de los efectos de la congestión sobre la red, así como mecanismos que buscan garantizar la seguridad e integridad de la red y el aseguramiento de la calidad del servicio.</p>
        </div>
    </x-modal>

    <!-- Modal Mapa de Cobertura -->
    <x-modal id="mapa" title="Mapa de Cobertura">
        <iframe src="https://www.google.com/maps/d/embed?mid=1z-1Dc-OpVE3JRpi5yEM5DhGIFg3q2lOY&amp;hl=es" width="100%" height="500"></iframe>
    </x-modal>

    <!-- Modal Recomendaciones de Seguridad para Uso de Internet -->
    <x-modal id="recomendacionSeguridadModal" title="Recomendaciones de Seguridad para Uso de Internet">
        <div class="modal-body">
            <p>COLOMBIANET como proveedor del servicio de conectividad a Internet está convencido de que las relaciones con nuestros clientes se deben fortalecer desde una comunicación asertiva, sana y orientada a proporcionar las herramientas y consejos prácticos necesarios para la protección adecuada de los elementos de cómputo y los servicios asociados a la Internet. Por esta razón, COLOMBIANET pone a disposición de todos nuestros clientes y de la comunidad en general las siguientes recomendaciones, prácticas y conceptos teóricos que permitan evitar o reducir los riesgos a los que se exponen cuando se interactúa con la Internet y sus elementos asociados.</p>
            <a target="_blank" href="archivos/Seguridad-en-Internet.pdf">Infórmate aquí: Seguridad en Internet</a>
        </div>
    </x-modal>

    <!-- Modal Centro de Atención -->
    <x-modal id="centroAtencionModal" title="Centro de Atención">
        <div class="modal-body">
            <h3>Centro de Atención</h3>
            <ul>
                <li>Cra.9#76N-19 Parque Empresarial Los Pinos Bodega 22, Popayán, Cauca, Colombia</li>
            </ul>
            <h3>Horario</h3>
            <ul>
                <li>Lunes a viernes: 07:00am a 12:00pm y 02:00pm a 06:00pm</li>
                <li>Sábado: 07:00am a 12:00pm</li>
            </ul>
            <h3>Líneas telefónicas</h3>
            <ul>
                <li>Comuníquese con nosotros a través de las siguientes líneas PBX: 8353513</li>
                <li>Soporte técnico: Nivel 1 Popayán 317 4327901 - Nivel 2 Guapi 3174274601 - Nivel 2 316 2697428</li>
                <li>Línea gratuita: 01 8000 189 098</li>
                <li>Facturación: 317 5014960</li>
                <li>Área comercial: 317 3708201</li>
            </ul>
        </div>
    </x-modal>

    <!-- Modal Prevención Fraude y Riesgos Informáticos -->
    <x-modal id="prevencionFraudeModal" title="Prevención Fraude y Riesgos Informáticos">
        <div class="modal-body">
            <h3>Prevención Fraude y Riesgos Informáticos</h3>
            <ul>
                <li>Recuerde que en caso de querer ceder el servicio, se debe notificar a COLOMBIANET Y SEPCOM INGENIERÍA Y TELECOMUNICACIONES S.A.S y firmar la respectiva cesión del contrato, de lo contrario usted seguirá siendo el responsable ante COLOMBIANET sobre el uso del servicio.</li>
                <li>En caso de requerir revisión técnica, recuerde que siempre debe solicitarla directamente a COLOMBIANET Y SEPCOM INGENIERÍA Y TELECOMUNICACIONES S.A.S, en los canales habilitados PBX 8353512, Celular 3188056916 o comuníquese de manera gratuita al 018000189098, correo electrónico <a href="mailto:info@sepcom.com.co">info@sepcom.com.co</a> o <a href="mailto:info@sepcom.com.co">info@sepcom.com.co</a>, por nuestra Página Web: <a href="https://www.colombianet.tech" target="_blank">www.colombianet.tech</a> o en Facebook “Colombianet Ingeniería y Telecomunicaciones”, o acérquese a nuestro Centro de Atención autorizado Cra.9#76N-19 Parque Empresarial Los Pinos Bodega 22, Popayán, Cauca, Colombia.</li>
                <li>Absténgase de abrir mensajes de texto y abrir o ejecutar archivos, que no provengan de fuentes reconocidas.</li>
                <li>Con relación al uso de Internet recuerde que no es posible guardar registros de las direcciones de Internet que desde su móvil se acceden, por lo que no se le podrá suministrar detalle de los sitios web visitados.</li>
                <li>COLOMBIANET ofrece tan solo el medio de Acceso y la Red de Transporte para sus comunicaciones, recomendamos que en su equipo terminal (PC, Portátil, Planta PBX, TABLET, SMARTPHONE, etc) haga uso de software legal e implemente prácticas de seguridad (Antivirus, Claves Seguras, Firewalls, entre otros) con el fin de evitar posibles ataques de agentes externos, virus o cualquier intervención de terceros. El uso y/o las conexiones que el cliente haga son responsabilidad exclusiva del usuario, de tal modo que COLOMBIANET no se hace responsable de algún evento de fraude que se pudiera presentar en las líneas por un uso o conexión indebida de las mismas.</li>
                <li>No suministrar información personal por medio de correo electrónico o portales web que el cliente no conozca o sospeche que no son legales. Por eso el cliente debe recordar que ese procedimiento sólo se hace a través de la línea de servicio al cliente.</li>
                <li>Verifique que la dirección del portal de COLOMBIANET esté correctamente escrita (<a href="https://www.colombianet.tech" target="_blank">www.colombianet.tech</a>), no haga clic sobre enlaces enviados en correos electrónicos o enlaces de buscadores de internet tipo Google.</li>
                <li>Es importante crear claves difíciles de identificar, recuerde cambiarlas frecuentemente en cada uno de los portales donde tenga acceso. Memorice las claves, no las escriba ni guarde en lugares de fácil acceso. No permita que terceros vean o conozcan sus claves.</li>
                <li>COLOMBIANET se preocupa por el bienestar de sus clientes y espera que la información aquí publicada sea útil y benéfica para nuestros usuarios. Cualquier comentario y/o recomendación no dude comunicarla a través de nuestras líneas de atención.</li>
            </ul>
            <h3>Contactos</h3>
            <ul>
                <li>PBX 8353513</li>
                <li>Soporte técnico: Nivel 1 Popayán 317 4327901 - Nivel 2 Guapi 3174274601 - Nivel 2 316 2697428</li>
                <li>Línea gratuita: 01 8000 189 098</li>
            </ul>
        </div>
    </x-modal>

    <!-- Bootstrap 5.3 -->
    <!-- Bootstrap JavaScript dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
