<style>

*{
    font-family: 'Montserrat', sans-serif ;
}
.service-container {
    background-color: #6C696E;
    color: white;
    padding: 60px 40px 40px; /* Normal padding restored */
    border-radius: 10px;
    transition: background-color 1s ease-in-out, transform 1s ease-in-out; /* Smoother animation */
    margin-bottom: 30px;
    overflow: hidden;
    position: relative;
}

.text-content{
    padding: 5px;
    cursor: pointer;
}

.twinkle-wrapper{
    margin-right: 10px;
}

.service-container:hover {
    background-color: #4CAF4F;
}

/* Image Styling */
.service-img {
    width: 100%;
    height: 500px;
    object-fit: cover;
    border-radius: 10px;
    transition: transform 1s ease-in-out;
}

/* Text Box */
.service-text {
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
    transition: transform 1s ease-in-out;
    padding: 20px 35px 20px 55px; /* Added padding to separate from the image */
}

/* Move Text Up Smoothly on Hover */
.service-container:hover .service-text {
    transform: translateY(-20px);
}

/* Heading Animation */
.service-title {
    font-size: 36px;
    font-weight: 700;
    padding: 10px 0;
    transition: transform 1s ease-in-out;
}

.service-container:hover .service-title {
    transform: translateY(-20px);
}

/* Paragraph Animation */
.service-text p {
    transition: transform 1s ease-in-out, opacity 1s ease-in-out;
}

.service-container:hover .service-text p {
    transform: translateY(-20px);
    opacity: 1;
}

/* List Box Animation */
.service-sub-list {
    display: none;
    padding: 15px;
    border-radius: 5px;
    margin-top: 10px;
    background-color: #FFFFFF;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 1s ease-in-out, transform 1s ease-in-out;
}

.service-container:hover .service-sub-list {
    display: block;
    opacity: 1;
    transform: translateY(0);
}

/* List Items */
.service-sub-list li {
    list-style: none;
    background-color: white;
    color: #6C696E;
    border-radius: 5px;
    display: flex;
    justify-content: left;
    align-items: center;
    width: 100%;
    padding: 5px;
}

/* Hover effect for list items */
.service-sub-list li:hover .text-content {
    background-color: #FFFFFF;
    color: #4CAF4F;
    border-radius: 5px;
    width: 100%;
    display: flex;
    justify-content: left;
    align-items: center;
}

@media (max-width: 767px) {
    .service-container {
        flex-direction: column; /* Stack items in mobile */
        text-align: center; /* Center align text */
        padding: 20px 10px;
        margin: 10px;
    }
    .service-img {
        height: auto; /* Allow image to resize dynamically */
        max-height: 300px; /* Prevent excessive height */
        width: 100%; /* Ensure full width */
    }
    .service-text {
        text-align: center;
        padding: 5px !important; /* Add space between image and text */
    }
    .service-title {
        font-size: 24px;
    }
}


/* Ensure main list items are positioned properly */
.service-sub-list > li {
    position: relative;
}



/* Show sub-sub-services on hover in large screens */
@media (min-width: 768px) {
    .has-sub-services:hover .sub-sub-services {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }
}

/* Sub-Sub-Services List Items */
.sub-sub-services li {
    list-style: none;
    background: white;
    color: #6C696E;
    padding: 5px 5px !important;
    border-radius: 5px;
    transition: background-color 0.3s ease, color 0.3s ease;
    font-size: 16px;
    display: flex;
    justify-content: left;
    align-items: center;
    cursor: pointer;
}

/* Hover effect: Change background to green & show arrow */
.sub-sub-services li:hover {
    color: #4CAF4F;
}

/* Arrow appears only on hover */
.sub-sub-services li .arrow-new {
    opacity: 0;
    visibility: hidden; 
      transform: rotate(-45deg);
      font-size: 0.8rem;
    transition: opacity 0.3s ease, visibility 0s 0.3s;
}

/* On hover, show the arrow with rotation */
.sub-sub-services li:hover .arrow-new {
    opacity: 1;
    visibility: visible !important;
    margin-left: 5px;
    transition: opacity 0.3s ease, visibility 0s 0s, transform 0.3s ease;
}


/* ✅ Large Screens: Sub-Sub-Services Inside .service-text */
.sub-sub-services {
    display: none;
    position: absolute;
    right: 0; /* Align inside .service-text */
    top: auto;
    max-width: 100%;
    background: white;
    color: #6C696E;
    padding: 10px;
    border-radius: 8px;
    width: 230px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    opacity: 0;
    transform: translateY(10px);
    transition: opacity 0.5s ease-in-out, transform 0.3s ease-in-out;
    z-index: 10;

    /* Added scrolling capability */
    max-height: 250px; /* Adjust based on your design */
    overflow-y: auto; /* Enables vertical scrolling */
}

/* Custom Scrollbar */
.sub-sub-services::-webkit-scrollbar {
    width: 6px; /* Scrollbar width */
}

/* Track (background of the scrollbar) */
.sub-sub-services::-webkit-scrollbar-track {
    background: #f1f1f1; /* Light grey background */
    border-radius: 10px; /* Rounded corners */
}

/* Handle (the draggable part of the scrollbar) */
.sub-sub-services::-webkit-scrollbar-thumb {
    background: #aaa; /* Grey color for the scrollbar handle */
    border-radius: 10px; /* Rounded corners */
}

/* Handle on hover */
.sub-sub-services::-webkit-scrollbar-thumb:hover {
    background: #888; /* Darker grey when hovered */
}

/* Show sub-sub-services on hover in large screens */
@media (min-width: 768px) {
    .has-sub-services:hover .sub-sub-services {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }
}



.sub-sub-services li a {
    text-decoration: none; /* Remove underline */
    color: #6C696E; /* Default color */
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    transition: color 0.3s ease, background-color 0.3s ease;
}

.sub-sub-services li:hover a {
    color: #4CAF4F; /* Change color on hover */
}

/* Ensure arrow-new follows the link color */
.sub-sub-services li:hover .arrow-new {
    opacity: 1;
    visibility: visible;
}

.section-heading{
    font-size: 48px;
    padding: 70px ;
}

.service-sub-list a {
    text-decoration: none; /* Remove underline */
    color: inherit; /* Ensure it uses the text color of its parent element */
}


  /* ✅ Small Screen Adjustments */
  @media (max-width: 767px) {
            .sub-sub-services {
                position: absolute !important;
                width: 100%;
                transform: none;
                opacity: 1;
                display: none;
                margin-top: 10px;
                border-radius: 8px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                background: white;
                padding: 15px;
                border: 1px solid #ddd;
                max-height: 250px;
                overflow-y: auto;
            }

            .sub-sub-services.active {
                display: block;
            }

            .sub-sub-services li {
                font-size: 16px;
                padding: 12px;
                border-bottom: none !important;
                justify-content: left;
            }

            .sub-sub-services li:last-child {
                border-bottom: none;
            }

            .section-heading{
                font-size: 32px;
                padding: 40px 0;
            }

        }




        

</style>

<section class="full-width-section">
    <img src="./assets/images/services-banner-img.webp" alt="Services">
</section>

<div class="container services-section">
    <h2 class="section-heading text-center">Services</h2>
</div>

<div class="container py-4">
    <div class="row align-items-center service-container">
        <!-- Image Column -->
        <div class="col-lg-6 col-12">
            <img src="./assets/images/branding-service.webp" alt="Branding" class="service-img">
        </div>
        <!-- Text Column -->
        <div class="col-lg-6 col-12 service-text">
            <h3 class="service-title">Branding</h3>
            <p>Delivering lively, powerful signage solutions (internal & external) that are suited to enthrall your audience, increase brand awareness, and clearly convey your message.</p>

            <ul class="service-sub-list">

            <li class="has-sub-services">
                    <div class="twinkle-wrapper">
                        <span class="twinkle-icon"><img src="./assets/images/twinkle.svg" alt="Twinkle"></span>
                    </div>
                    <div class="text-content">External Signages</div>
                    <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span>

                    <!-- Sub-Sub-Services Box -->
                <ul class="sub-sub-services">
                    <li> <a href="services/branding/external-signages/hoardings">Hoardings (Bill boards)</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/external-signages/fixed-signages">Fixed signages</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/external-signages/flangs">Flangs</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/external-signages/pole-mounted-signages">Pole mounted signages</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/external-signages/fabrication-and-installation">Fabrication and installation</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/external-signages/2d-signage">2D Signage</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/external-signages/3d-signage">3D Signage</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/external-signages/acrylic-signage">Acrylic Signage</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/external-signages/acp-signage">ACP Signage</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/external-signages/lollipop-signage">Lollipop Signage</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/external-signages/box-gate-arch">Box Gate Arch</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/external-signages/corporate-branding-signage">Corporate Branding Signage</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/external-signages/acp-cladding">ACP Cladding</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/external-signages/pylon-signage">Pylon Signage</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                </ul>
            </li>

            <li class="has-sub-services">
                    <div class="twinkle-wrapper">
                        <span class="twinkle-icon"><img src="./assets/images/twinkle.svg" alt="Twinkle"></span>
                    </div>
                    <div class="text-content">Internal signages</div>
                    <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span>

                <ul class="sub-sub-services">
                    <li> <a href="services/branding/internal-signages/reception-signage">Reception signage</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/internal-signages/directional-signage">Directional signage</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/internal-signages/wall-paper">Wall paper</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/internal-signages/posters">Posters</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/internal-signages/clip-on-board">Clip On Board</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/internal-signages/acrylic-signages">Acrylic Signages</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/internal-signages/ss-letters">SS Letters</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/internal-signages/acrylic-letters">Acrylic Letters</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/internal-signages/profile-board">Profile Board</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/internal-signages/titanium-letters">Titanium Letters</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/internal-signages/brass-letters">Brass Letters</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/internal-signages/profile-letters">Profile Letters</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/internal-signages/channel-letters">Channel Letters</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/internal-signages/neon-letters">Neon letters</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                </ul>
            </li>

            <li class="has-sub-services">
                    <div class="twinkle-wrapper">
                        <span class="twinkle-icon"><img src="./assets/images/twinkle.svg" alt="Twinkle"></span>
                    </div>
                    <div class="text-content">Vehicle branding</div>
                    <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span>

                <ul class="sub-sub-services">
                    <li> <a href="services/branding/vehicle-branding/fleet-branding">Fleet branding</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/vehicle-branding/vehicle-wraps">Vehicle wraps</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/vehicle-branding/partial-wraps">Partial wraps</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                </ul>
            </li>


            <li class="has-sub-services">
                    <div class="twinkle-wrapper">
                        <span class="twinkle-icon"><img src="./assets/images/twinkle.svg" alt="Twinkle"></span>
                    </div>
                    <div class="text-content">Etching letters</div>
                    <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span>

                <ul class="sub-sub-services">
                    <li> <a href="services/branding/etching-letters/titanium-etched-plate">Titanium Etched Plate</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/etching-letters/ss-etched-plate">SS Etched Plate</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                </ul>
            </li>

            <li class="has-sub-services">
                    <div class="twinkle-wrapper">
                        <span class="twinkle-icon"><img src="./assets/images/twinkle.svg" alt="Twinkle"></span>
                    </div>
                    <div class="text-content">Expo & event branding</div>
                    <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span>

                <ul class="sub-sub-services">
                    <li> <a href="services/branding/expo-and-event-branding/flags">Flags</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/expo-and-event-branding/printed-mesh-finish">Printed mesh finish</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/expo-and-event-branding/tshirts-and-head-wear">T shirts and head wear</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/expo-and-event-branding/stand-signage">Stand signage</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/expo-and-event-branding/flyers">Flyers</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/expo-and-event-branding/banners">Banners</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    
                </ul>
            </li>

            <li class="has-sub-services">
                    <div class="twinkle-wrapper">
                        <span class="twinkle-icon"><img src="./assets/images/twinkle.svg" alt="Twinkle"></span>
                    </div>
                    <div class="text-content">Interior design branding</div>
                    <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span>

                <ul class="sub-sub-services">
                    <li> <a href="services/branding/interior-design-branding/wall-paper">Wall paper</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/interior-design-branding/canvas-branding">Canvas branding</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/interior-design-branding/branding-frame">Branding Frame</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/interior-design-branding/wall-vinyls">Wall vinyls</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/interior-design-branding/frames-signages">Frames signages</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/interior-design-branding/window-films">Window films</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/interior-design-branding/frosting-and-dusted-films">Frosting and Dusted Films</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/interior-design-branding/frosted-window-vinyl">Frosted window vinyl</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                    <li> <a href="services/branding/interior-design-branding/frosted-glass-braiding">Frosted glass braiding</a> <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span></li>
                </ul>
            </li>
            </ul>
        </div>
    </div>
</div>

<div class="container py-4">
    <div class="row align-items-center service-container">
        <div class="col-lg-6 col-12">
            <img src="./assets/images/acoustic-cutting-panels-service.webp" alt="Branding" class="service-img">
        </div>
        <div class="col-lg-6 col-12 service-text">
            <h3 class="service-title">Acoustic Cutting Panels</h3>
            <p>Delivering lively, powerful signage solutions (internal & external) that are suited to enthral your audience, increase brand awareness, and clearly convey your message.</p>
            <ul class="service-sub-list">
            <li class="has-sub-services">
                    <div class="twinkle-wrapper">
                        <span class="twinkle-icon"><img src="./assets/images/twinkle.svg" alt="Twinkle"></span>
                    </div>
                    <div class="text-content"> <a href="services/acoustic-cutting-panels/pet-panels"> Pet Panels </a> </div>
                    <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span>

            </li>
            <li class="has-sub-services">
                    <div class="twinkle-wrapper">
                        <span class="twinkle-icon"><img src="./assets/images/twinkle.svg" alt="Twinkle"></span>
                    </div>
                    <div class="text-content"> <a href="services/acoustic-cutting-panels/cutting"> Cutting </a> </div>
                    <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span>

            </li>
            <li class="has-sub-services">
                    <div class="twinkle-wrapper">
                        <span class="twinkle-icon"><img src="./assets/images/twinkle.svg" alt="Twinkle"></span>
                    </div>
                    <div class="text-content"> <a href="services/acoustic-cutting-panels/printing"> Printing </a> </div>
                    <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span>

            </li>
            </ul>
        </div>
    </div>
</div>

<div class="container py-4">
    <div class="row align-items-center service-container">
        <div class="col-lg-6 col-12">
            <img src="./assets/images/digital-signages-service.webp" alt="Branding" class="service-img">
        </div>
        <div class="col-lg-6 col-12 service-text">
            <h3 class="service-title">Digital Signages</h3>
            <p>Delivering lively, powerful signage solutions (internal & external) that are suited to enthral your audience, increase brand awareness, and clearly convey your message.</p>
            <ul class="service-sub-list">
            <li class="has-sub-services">
                    <div class="twinkle-wrapper">
                        <span class="twinkle-icon"><img src="./assets/images/twinkle.svg" alt="Twinkle"></span>
                    </div>
                    <div class="text-content"> <a href="services/digital-signages/led-video-wall"> LED Video wall </a> </div>
                    <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span>

            </li>
            <li class="has-sub-services">
                    <div class="twinkle-wrapper">
                        <span class="twinkle-icon"><img src="./assets/images/twinkle.svg" alt="Twinkle"></span>
                    </div>
                    <div class="text-content"> <a href="services/digital-signages/led-standee">LED standee</a> </div>
                    <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span>

            </li>
            </ul>
        </div>
    </div>
</div>

<div class="container py-4">
    <div class="row align-items-center service-container">
        <div class="col-lg-6 col-12">
            <img src="./assets/images/skylit-service.webp" alt="Branding" class="service-img">
        </div>
        <div class="col-lg-6 col-12 service-text">
            <h3 class="service-title">Skylit</h3>
            <p>Our skylights brighten spaces naturally, reducing energy costs while enhancing well-being. Perfect for homes, offices, and commercial spaces, they create a bright, eco-friendly atmosphere.</p>
           
        </div>
    </div>
</div>

<div class="container py-4">
    <div class="row align-items-center service-container">
        <div class="col-lg-6 col-12">
            <img src="./assets/images/braille-signages-service.webp" alt="Branding" class="service-img">
        </div>
        <div class="col-lg-6 col-12 service-text">
            <h3 class="service-title">Braille Signages</h3>
            <p>Prismhue’s braille signs blend style and functionality, ensuring accessibility in workplaces, retail spaces, and public buildings. Designed for inclusivity, they foster independence and a welcoming environment.</p>
            <ul class="service-sub-list">
            <li class="has-sub-services">
                <div class="twinkle-wrapper">
                    <span class="twinkle-icon"><img src="./assets/images/twinkle.svg" alt="Twinkle"></span>
                </div>
                <div class="text-content"> <a href="services/braille-signages/restroom-signages"> Restroom Signages </a> </div>
                <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span>
            </li>
            <li class="has-sub-services">
                <div class="twinkle-wrapper">
                    <span class="twinkle-icon"><img src="./assets/images/twinkle.svg" alt="Twinkle"></span>
                </div>
                <div class="text-content"> <a href="services/braille-signages/name-plates"> Name plates </a> </div>
                <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span>
            </li>
            <li class="has-sub-services">
                <div class="twinkle-wrapper">
                    <span class="twinkle-icon"><img src="./assets/images/twinkle.svg" alt="Twinkle"></span>
                </div>
                <div class="text-content"> <a href="services/braille-signages/meeting-room"> Meeting room </a> </div>
                <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span>
            </li>
            <li class="has-sub-services">
                <div class="twinkle-wrapper">
                    <span class="twinkle-icon"><img src="./assets/images/twinkle.svg" alt="Twinkle"></span>
                </div>
                <div class="text-content"> <a href="services/braille-signages/fire-safety-signages"> Fire safety signages </a> </div>
                <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span>
            </li>
            <li class="has-sub-services">
                <div class="twinkle-wrapper">
                    <span class="twinkle-icon"><img src="./assets/images/twinkle.svg" alt="Twinkle"></span>
                </div>
                <div class="text-content"> <a href="services/braille-signages/evaluvation-maps"> Evaluvation maps </a> </div>
                <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span>
            </li>
            </ul>
        </div>
    </div>
</div>

<div class="container py-4">
    <div class="row align-items-center service-container">
        <div class="col-lg-6 col-12">
            <img src="./assets/images/environmental-graphics-service.webp" alt="Branding" class="service-img">
        </div>
        <div class="col-lg-6 col-12 service-text">
            <h3 class="service-title">Environmental Graphics</h3>
            <p>We turn your walls, windows, and floors into eye-catching designs that speak to people. With eco-friendly inks, we create unique, vibrant displays that bring life to workplaces, stores, and public spaces.</p>
            <ul class="service-sub-list">
            <li class="has-sub-services">
                <div class="twinkle-wrapper">
                    <span class="twinkle-icon"><img src="./assets/images/twinkle.svg" alt="Twinkle"></span>
                </div>
                <div class="text-content"> <a href="services/environmental-graphics/internal-3d-letters"> Internal 3D Letters </a> </div>
                <span class="arrow-new"><i class="fa-solid fa-arrow-right"></i></span>
            </li>
            </ul>
        </div>
    </div>
</div>









<script>
document.addEventListener("DOMContentLoaded", function () {
    const serviceContainers = document.querySelectorAll(".service-container");

    serviceContainers.forEach((container) => {
        container.addEventListener("mouseenter", function () {
            // Animate heading
            const title = this.querySelector(".service-title");
            title.classList.add("animate__animated", "animate__fadeInUp");
            title.style.animationDelay = "0.4s"; // Small delay for smooth effect

            // Animate paragraph
            const paragraph = this.querySelector("p");
            paragraph.classList.add("animate__animated", "animate__fadeInUp");
            paragraph.style.animationDelay = "0.4s"; // Delayed for fluid feel

            // Animate list box
            const subList = this.querySelector(".service-sub-list");
            subList.classList.add("animate__animated", "animate__fadeInUp");
            subList.style.animationDelay = "0.4s"; // Appears last
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const serviceContainers = document.querySelectorAll(".service-container");

    serviceContainers.forEach((container) => {
        const serviceItems = container.querySelectorAll(".has-sub-services");

        serviceItems.forEach((item) => {
            item.addEventListener("click", function (event) {
                const subMenu = this.querySelector(".sub-sub-services");

                // Toggle only in mobile view
                if (window.innerWidth <= 767) {
                    // Close all other open sub-menus
                    serviceItems.forEach((otherItem) => {
                        const otherSubMenu = otherItem.querySelector(".sub-sub-services");
                        if (otherSubMenu !== subMenu) {
                            otherSubMenu.classList.remove("active");
                        }
                    });

                    // Toggle the clicked sub-menu
                    subMenu.classList.toggle("active");
                    event.stopPropagation(); // Prevent propagation to document click event
                }
            });
        });
    });

    // Close all sub-menus if clicked outside
    document.addEventListener("click", function (event) {
        const serviceItems = document.querySelectorAll(".has-sub-services");
        serviceItems.forEach((item) => {
            const subMenu = item.querySelector(".sub-sub-services");
            if (!item.contains(event.target)) {
                subMenu.classList.remove("active");
            }
        });
    });
});



</script>