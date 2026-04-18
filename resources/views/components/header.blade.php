<style>
    .header-top {
        background-color: #004899;
        color: #ffffff;
        font-size: 14px;
        height: 3vh;
        display: flex;
        align-items: center;
    }

    .header-top a {
        color: #ffffff;
        text-decoration: none;
        transition: opacity 0.2s ease-in-out;
    }

    .header-top a:hover {
        opacity: 0.75;
    }

    .header-top img {
        width: 18px;
        height: 18px;
    }

    .header-item {
        margin-right: 25px;
        display: flex;
        align-items: center;
    }

    @media (max-width: 768px) {
        .header-top {
            text-align: center;
            padding: 10px 0;
        }

        .header-item {
            margin: 5px 0;
            justify-content: center;
        }

        .header-top img {
            width: 16px;
            height: 16px;
        }

        .header-top span {
            font-size: 13px;
        }
    }
</style>

<nav class="header-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

        <div class="d-flex align-items-center">
            <a class="header-item" href="mailto:info@sepcom.com.co">
                <img src="{{ asset('images/email_icon.png') }}" alt="Email Icon">
                <span>info@sepcom.com.co</span>
            </a>

            <a class="header-item" href="tel:018000189098">
                <img src="{{ asset('images/phone_icon.png') }}" alt="Phone Icon">
                <span>01 8000 189 098</span>
            </a>
        </div>

        <a class="header-item" href="https://wa.me/+573183309330" target="_blank">
            <span class="me-2">Comunícate en:</span>
            <img src="{{ asset('images/whatsapp_icon.png') }}" alt="WhatsApp Icon">
        </a>

    </div>
</nav>
