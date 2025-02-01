<style>
  .footer {
    background-color: #1A1A2E;
    color: #EAEAEA;
    padding: 60px 0;
    font-size: 0.9rem;
  }

  .footer-logo img {
    max-width: 200px;
    height: auto;
  }

  .footer p,
  .footer a {
    color: #EAEAEA;
    text-decoration: none;
  }

  .footer a:hover {
    color: #fcbf00;
    text-decoration: underline;
  }

  .footer .widget-title {
    font-size: 1.75rem;
    font-weight: bold;
    margin-bottom: 1.5rem;
    color: #fcbf00;
  }

  .footer .social-icons {
    margin-top: 15px;
  }

  .footer .social-icon {
    width: 35px;
    height: 35px;
    margin-right: 15px;
    transition: transform 0.3s;
  }

  .footer .social-icon:hover {
    transform: scale(1.1);
  }

  .footer .footer-address div {
    margin-bottom: 15px;
  }

  .footer .footer-link {
    display: inline-block;
    margin-bottom: 10px;
  }

  .footer hr {
    border-top: 1px solid #444;
    margin: 20px 0;
  }

  .icon {
    margin-left: 5px;
  }

  /* Responsive styles */
  @media (max-width: 767.98px) {
    .footer {
      text-align: center;
    }

    .footer .social-icons {
      justify-content: center;
    }

    /* Ocultar la sección "Nuestros servicios" en dispositivos móviles */
    .ocultar {
      display: none;
    }
  }
</style>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="footer-logo mb-3">
                    <img src="{{ asset('images/Logo_fondo_balnco.png') }}" alt="Colombianet">
                </div>
                <p>Colombianet Sepcom Ingeniería y Telecomunicaciones.</p>
                <p>Síguenos en nuestras redes</p>
                <div class="social-icons d-flex">
                    <a target="_blank" href="https://www.facebook.com/oficialcolombianet">
                      <img src="{{ asset('images/facebook_icon.png') }}" alt="Facebook" class="social-icon">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4 ocultar">
                <h2 class="widget-title">Nuestros servicios</h2>
                <ul class="list-unstyled">
                    <li class="footer-link"><a href="#servicio-isp">Servicio de ISP</a></li>
                    <li class="footer-link"><a href="#conmutacion-datos">Servicios de Conmutación y Datos</a></li>
                    <li class="footer-link"><a href="#servicio-tv">Servicio de TV por suscripción</a></li>
                    <li class="footer-link"><a href="#servicio-voip">Servicio de VoIP</a></li>
                    <li class="footer-link"><a href="#telecomunicaciones">Servicios de Telecomunicaciones</a></li>
                    <li class="footer-link"><a href="#construccion-datos">Construcción de Centros de Datos</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <h2 class="widget-title">Contacto</h2>
                <div class="footer-address">
                    <div><i class="bi bi-geo-alt-fill address-icon"></i><b class="icon">Dirección:</b> Cra.9#76N-19 Parque Empresarial Los Pinos Bodega 22, Popayán, Cauca, Colombia</div>
                    <div><i class="bi bi-telephone-fill address-icon"></i><b class="icon">Linea Gratuita:</b> 01 8000 189 098</div>
                    <div><i class="bi bi-envelope-fill address-icon"></i><b class="icon">Correo electrónico:</b> info@sepcom.com.co</div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-1">
                <h2 class="widget-title">Enlaces rápidos</h2>
                <ul class="list-unstyled">
                    <li class="footer-link"><a href="https://www.fiscalia.gov.co" target="blanck">Fiscalía general de la nación</a></li>
                    <li class="footer-link"><a href="https://www.mintic.gov.co/portal/inicio/" target="blanck">Ministerio de tecnologías de la información y las comunicaciones (MinTic)</a></li>
                    <li class="footer-link"><a href="https://www.sic.gov.co/" target="blanck">Superintendencia de industria y comercio (SIC)</a></li>
                    <li class="footer-link"><a href="https://www.crcom.gov.co/es" target="blanck">Comisión de regulación de comunicaciones (Crc)</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="text-center">&copy; 2024 Colombianet Sepcom Ingeniería y Telecomunicaciones. Todos los derechos reservados.</div>
    </div>
</div>
