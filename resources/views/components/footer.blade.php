<style>
.footer {
   background-color: #111A3A;
   color: white;
   padding: 50px 0;
}

.footer-logo img {
   max-width: 100%;
   height: auto;
}

.footer p,
.footer a {
   color: white;
   text-decoration: none;
}

.footer a:hover {
   text-decoration: underline;
}

.footer .widget-title {
   font-size: 1.5rem;
   margin-bottom: 1rem;
}

.footer .social-icons {
   margin-top: 10px;
}

.footer .social-icon {
   width: 40px; /* Adjust the size of social icons */
   height: auto;
   margin-right: 10px;
}

.footer .address-icon {
   font-size: 1.2rem;
   margin-right: 10px;
}

.footer .footer-address div {
   margin-bottom: 10px;
}

/* Responsive styles */
@media (max-width: 767.98px) {
   .footer .widget-title {
      font-size: 1.25rem;
   }

   .footer .social-icon {
      width: 30px; /* Smaller social icons on mobile */
   }
}

</style>

<div class="footer">
   <div class="container">
      <div class="row">

         <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="footer-logo mb-3">
               <img src="{{ asset('images/Logo_fondo_balnco.png') }}" alt="colombianet">
            </div>
            <p>Colombianet Sepcom Ingeniería y Telecomunicaciones.</p>
            <p>Síguenos en nuestras redes</p>
            <div class="social-icons d-flex">
               <a target="_blank" href="https://www.facebook.com/oficialcolombianet">
                  <img src="{{ asset('images/facebook_icon.png') }}" alt="Facebook" class="social-icon">
               </a>
            </div>
         </div>

         <div class="col-12 col-md-6 col-lg-3 mb-4">
            <h2 class="widget-title">Nuestros servicios</h2>
            <ul class="list-unstyled">
               <li class="mb-1"><a href="#nuestros-servicios">Servicio de ISP</a></li>
               <li class="mb-1"><a href="#nuestros-servicios">Servicios de Conmutación y Datos</a></li>
               <li class="mb-1"><a href="#nuestros-servicios">Servicio de TV por suscripción</a></li>
               <li class="mb-1"><a href="#nuestros-servicios">Servicio de VoIP</a></li>
               <li class="mb-1"><a href="#nuestros-servicios">Servicios de Telecomunicaciones</a></li>
               <li class="mb-1"><a href="#nuestros-servicios">Construcción de Centros de Datos</a></li>
               <li class="mb-1"><a href="#nuestros-servicios">Diseño de Redes</a></li>
               <li class="mb-1"><a href="#nuestros-servicios">Servicios Eléctricos</a></li>
               <li class="mb-1"><a href="#nuestros-servicios">Ventas y alquiler de equipos y suministros</a></li>
            </ul>
         </div>

         <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="footer-address">
               <h2 class="widget-title">Información</h2>
               <p>Ofrecemos Conectividad, internet de alta velocidad por redes</p>
               <p><b>Dirección:</b> Cra.9#76N-19 Parque Empresarial Los Pinos Bodega 22, Popayán, Cauca, Colombia</p>
               <p><b>Linea gratuita:</b> 01 8000 189 098</p>
               <p><b>Correo electrónico:</b> info@sepcom.com.co</p>
            </div>
         </div>

         <div class="col-12 col-md-6 col-lg-3 mb-4">
            <h2 class="widget-title">Zona de interés</h2>
            <ul class="list-unstyled">
               <li class="mb-1"><a target="_blank" href="https://www.fiscalia.gov.co">Fiscalía general de la nación</a></li>
               <li class="mb-1"><a target="_blank" href="https://www.mintic.gov.co/portal/inicio/">Ministerio de tecnologías de la información y las comunicaciones (MinTic)</a></li>
               <li class="mb-1"><a target="_blank" href="https://www.sic.gov.co/">Superintendencia de industria y comercio (SIC)</a></li>
               <li class="mb-1"><a target="_blank" href="https://www.crcom.gov.co/es">Comisión de regulación de comunicaciones (Crc)</a></li>
            </ul>
         </div>
      </div>
   </div>
</div>
