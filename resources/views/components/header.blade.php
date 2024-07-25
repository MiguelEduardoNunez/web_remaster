<style>
    .header_logo {
        width: 240px;
        height: auto;
    }

    .header_azul {
        height: 8vh;
    }

    @media (max-width: 768px) {
        .header_azul {
            display: none;
        }

        .navbar-brand img {
            width: 15px;
            height: 15px;
            margin-right: 5px;
        }

        .navbar-brand span {
            font-size: 12px;
        }
    }

    @media (min-width: 768px) {
        .navbar-brand img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        .navbar-brand span {
            font-size: 14px;
        }
    }

    @media (min-width: 1024px) {
        .header_azul {
            height: 6vh;
        }
    }
</style>

<nav class="header_azul navbar navbar-expand-lg navbar-dark" style="background-color: #004899;" aria-label="Header Azul">
    <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <a class="navbar-brand d-flex align-items-center" href="mailto:info@sepcom.com.co">
                <img src="{{ asset('images/email_icon.png') }}" alt="Email Icon" class="me-2">
                <span>info@sepcom.com.co</span>
            </a>
            <a class="navbar-brand d-flex align-items-center ms-4" href="tel: 01 8000 189 098">
                <img src="{{ asset('images/phone_icon.png') }}" alt="Phone Icon" class="me-2">
                <span>(+123) 456-7890</span>
            </a>
        </div>
        <div class="d-flex align-items-center">
            <a class="navbar-brand d-flex align-items-center" href="https://wa.me/+573183309330">
                <span class="text-white me-2">Comunicate en:</span>
                <img src="{{ asset('images/whatsapp_icon.png') }}" alt="WhatsApp Icon">
            </a>
        </div>
    </div>
</nav>