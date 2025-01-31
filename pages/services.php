<style>

        .card {
            margin-bottom: 75px;
            border: none;
        }
        .card img {
            width: 100%; 
            height: auto; 
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            transition: transform 0.6s ease;
        }
        .card .black-line {
            width: 100%;
            height: 10px;
            background-color: #6C696E;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            transition: transform 0.6s ease;
        }
        .card .card-body {
            text-align: center;
            transition: color 0.6s ease;
        }
        .services-section .row:last-child {
            justify-content: center; 
        }

        .section-heading{
            font-size: 48px;
            font-weight: 700;
            line-height: 30.63px;
            text-align: center;
            padding: 75px 0
        }
        
        .card-title{
            font-family: 'Montserrat', sans-serif;
            font-size: 36px;
            font-weight: 700;
            line-height: 30.63px;
            text-align: center;
            padding: 20px 0;
            text-underline-position: from-font;
            text-decoration-skip-ink: none;
            color: #6C696E;
        }

        .card-text{
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 19.5px;
            text-align: center;
            text-underline-position: from-font;
            text-decoration-skip-ink: none;
            color: #6C696E;
        }

        .card:hover img {
            transform: translateY(-10px); 
        }

        .card:hover .black-line {
            transform: translateY(-10px); 
            background-color:  #4CAF4F; 
        }

        .card:hover .card-title {
            color: #4CAF4F; 
        }

          /* Responsive styles */
          @media (max-width: 767.98px) {
            .section-heading {
                font-size: 32px;
                padding: 40px 0;
            }

            .card-title {
                font-size: 24px;
                padding: 15px 0;
            }

            .card-text {
                font-size: 14px;
            }

            .card {
                margin-bottom: 50px;
            }
        }
</style>

<section class=" full-width-section">
        <img src="./assets/images/services-banner-img.svg" alt="Services">
</section>

<div class="container services-section">
        <h2 class="section-heading text-center" >Services</h2>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <a href="services/branding">
                        <img src="./assets/images/branding-service.svg" alt="Branding">
                    </a>
                    <div class="black-line"></div>
                    <div class="card-body">
                        <h5 class="card-title">Branding</h5>
                        <p class="card-text">Delivering lively, powerful signage solutions (internal & external) that are suited to enthral your audience, increase brand awareness, and clearly convey your message.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <a href="services/signages">
                        <img src="./assets/images/signages-service.svg" alt="Signages">
                    </a>
                    <div class="black-line"></div>
                    <div class="card-body">
                        <h5 class="card-title">Signages</h5>
                        <p class="card-text">Delivering lively, powerful signage solutions (internal & external) that are suited to enthral your audience, increase brand awareness, and clearly convey your message.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <a href="services/acoustic-cutting-panels">
                        <img src="./assets/images/acoustic-cutting-panels-service.svg" alt="Acoustic Cutting Panels">
                    </a>
                    <div class="black-line"></div>
                    <div class="card-body">
                        <h5 class="card-title">Acoustic Cutting Panels</h5>
                        <p class="card-text">Delivering lively, powerful signage solutions (internal & external) that are suited to enthral your audience, increase brand awareness, and clearly convey your message.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <a href="services/digital-signages">
                        <img src="./assets/images/digital-signages-service.svg" alt="Digital Signages">
                    </a>
                    <div class="black-line"></div>
                    <div class="card-body">
                        <h5 class="card-title">Digital Signages</h5>
                        <p class="card-text">Delivering lively, powerful signage solutions (internal & external) that are suited to enthral your audience, increase brand awareness, and clearly convey your message.</p>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <a href="services/skylit">
                        <img src="./assets/images/skylit-service.svg" alt="Skylit">
                    </a>
                    <div class="black-line"></div>
                    <div class="card-body">
                        <h5 class="card-title">Skylit</h5>
                        <p class="card-text">Delivering lively, powerful signage solutions (internal & external) that are suited to enthral your audience, increase brand awareness, and clearly convey your message.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <a href="services/braille-signages">
                        <img src="./assets/images/braille-signages-service.svg" alt="Braille Signages">
                    </a>
                    <div class="black-line"></div>
                    <div class="card-body">
                        <h5 class="card-title">Braille Signages</h5>
                        <p class="card-text">Delivering lively, powerful signage solutions (internal & external) that are suited to enthral your audience, increase brand awareness, and clearly convey your message.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <a href="services/environmental-graphics">
                        <img src="./assets/images/environmental-graphics-service.svg" alt="Environmental Graphics">
                    </a>
                    <div class="black-line"></div>
                    <div class="card-body">
                        <h5 class="card-title">Environmental Graphics</h5>
                        <p class="card-text">Delivering lively, powerful signage solutions (internal & external) that are suited to enthral your audience, increase brand awareness, and clearly convey your message.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>