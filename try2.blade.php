<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VintageVan - Noleggio Furgoncino California per Eventi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function(){
            emailjs.init({
                publicKey: "6QRdhJVgGlXm4ojynT3Ay",
            });
        })();
    </script>
    <style>
        :root {
            --primary: #e85d04;
            --secondary: #457b9d;
            --light: #f8f9fa;
            --dark: #1d3557;
            --accent: #ffb703;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 15px 0;
            position: fixed;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary);
        }

        .logo span {
            color: var(--secondary);
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: var(--primary);
        }

        .mobile-menu {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/background.jpeg');
            background-position: center;
            background-size: cover;
            display: flex;
            align-items: center;
            position: relative;
        }

        .hero-content {
            color: white;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
            padding-top: 80px;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            animation: fadeInUp 1s ease;
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 30px;
            animation: fadeInUp 1.3s ease;
        }

        .btn {
            display: inline-block;
            background-color: var(--primary);
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            animation: fadeInUp 1.6s ease;
        }

        .btn:hover {
            background-color: #c84d00;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid white;
        }

        .btn-outline:hover {
            background-color: white;
            color: var(--primary);
        }

        /* Gallery */
        .gallery {
            padding: 100px 0;
            background-color: var(--light);
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .section-title .divider {
            width: 80px;
            height: 4px;
            background-color: var(--primary);
            margin: 0 auto;
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 20px;
        }

        .gallery-item {
            height: 300px;
            overflow: hidden;
            position: relative;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.3s;
        }

        .gallery-item:hover {
            transform: scale(1.03);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        /* Why Choose Us */
        .features {
            padding: 100px 0;
        }

        .features-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 40px;
        }

        .feature {
            text-align: center;
            padding: 30px;
            border-radius: 10px;
            transition: all 0.3s;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
        }

        .feature:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .feature i {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .feature h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        /* Services */
        .services {
            padding: 100px 0;
            background-color: var(--light);
        }

        .services-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .service-info {
            flex: 1;
            min-width: 300px;
            padding-right: 40px;
        }

        .service-info h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .service-info p {
            margin-bottom: 25px;
        }

        .service-list {
            flex: 1;
            min-width: 300px;
        }

        .service-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .service-item:hover {
            transform: translateX(10px);
        }

        .service-item i {
            font-size: 2rem;
            color: var(--primary);
            margin-right: 20px;
        }

        /* Testimonials */
        .testimonials {
            padding: 100px 0;
        }

        .testimonials-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 40px;
        }

        .testimonial {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
            position: relative;
        }

        .testimonial:before {
            content: '\201C';
            font-size: 80px;
            position: absolute;
            top: -10px;
            left: 20px;
            color: rgba(232, 93, 4, 0.1);
            font-family: serif;
        }

        .testimonial p {
            margin-bottom: 20px;
            font-style: italic;
        }

        .client {
            display: flex;
            align-items: center;
        }

        .client-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }

        .client-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .client-info h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        .client-info p {
            font-size: 0.9rem;
            margin: 0;
            color: #6c757d;
        }

        /* Contact */
        .contact {
            padding: 100px 0;
            background-color: var(--light);
        }

        .contact-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .contact-info {
            flex: 1;
            min-width: 300px;
            padding-right: 40px;
        }

        .contact-info h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .contact-details {
            margin-top: 30px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .contact-item i {
            font-size: 1.5rem;
            color: var(--primary);
            margin-right: 15px;
            width: 30px;
        }

        .contact-form {
            flex: 1;
            min-width: 300px;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 80px 0 20px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 40px;
            margin-bottom: 60px;
        }

        .footer-col h4 {
            font-size: 1.3rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-col h4:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background-color: var(--primary);
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 15px;
        }

        .footer-col ul li a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-col ul li a:hover {
            color: var(--primary);
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 10px;
            color: white;
            text-decoration: none;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background-color: var(--primary);
            transform: translateY(-5px);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #aaa;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            overflow: auto;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            display: block;
            max-width: 80%;
            max-height: 80%;
            margin: auto;
        }

        .close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero-content h1 {
                font-size: 2.8rem;
            }

            .hero-content p {
                font-size: 1.1rem;
            }

            .services-container, .contact-container {
                flex-direction: column;
            }

            .service-info, .contact-info {
                padding-right: 0;
                margin-bottom: 40px;
            }
        }

        @media (max-width: 768px) {
            .mobile-menu {
                display: block;
            }

            nav {
                position: absolute;
                top: 70px;
                left: 0;
                background-color: white;
                width: 100%;
                padding: 20px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
                transition: clip-path 0.4s ease;
            }

            nav.active {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }

            nav ul {
                flex-direction: column;
            }

            nav ul li {
                margin: 15px 0;
            }

            .hero-content h1 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>
<body>
<!-- Header -->
<header>
    <div class="container header-container">
        <div class="logo">Vintage<span>Van</span></div>
        <div class="mobile-menu" id="mobileMenu">
            <i class="fas fa-bars"></i>
        </div>
        <nav id="nav">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#gallery">Galleria</a></li>
                <li><a href="#features">Perché Noi</a></li>
                <li><a href="#services">Servizi</a></li>
                <li><a href="#contact">Contatti</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="container hero-content">
        <h1>Noleggia il nostro Furgoncino California per il tuo Evento Perfetto!</h1>
        <p>Un tocco vintage e un'esperienza indimenticabile per matrimoni, feste, eventi aziendali e molto altro.</p>
        <div>
            <a href="#contact" class="btn">Prenota Ora</a>
            <a href="#gallery" class="btn btn-outline">Scopri di Più</a>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="gallery" id="gallery">
    <div class="container">
        <div class="section-title">
            <h2>La Nostra Galleria</h2>
            <div class="divider"></div>
        </div>
        <div class="gallery-container">
            <div class="gallery-item" onclick="openModal('/images/foto2.jpeg')">
                <img src="/images/foto2.jpeg" alt="Furgoncino California">
            </div>
            <div class="gallery-item" onclick="openModal('/images/foto4.jpeg')">
                <img src="/images/foto4.jpeg" alt="Furgoncino California">
            </div>
            <div class="gallery-item" onclick="openModal('/images/foto5.jpeg')">
                <img src="/images/foto5.jpeg" alt="Furgoncino California">
            </div>
            <div class="gallery-item" onclick="openModal('/images/foto6.jpeg')">
                <img src="/images/foto6.jpeg" alt="Furgoncino California">
            </div>
            <div class="gallery-item" onclick="openModal('/images/foto7.jpeg')">
                <img src="/images/foto7.jpeg" alt="Furgoncino California">
            </div>
            <div class="gallery-item" onclick="openModal('/images/foto3.jpeg')">
                <img src="/images/foto3.jpeg" alt="Furgoncino California">
            </div>
        </div>
    </div>
</section>

<!-- Modal for Gallery -->
<div id="imageModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="modalImg">
</div>

<!-- Features Section -->
<section class="features" id="features">
    <div class="container">
        <div class="section-title">
            <h2>Perché Scegliere Noi</h2>
            <div class="divider"></div>
        </div>
        <div class="features-container">
            <div class="feature">
                <i class="fas fa-star"></i>
                <h3>Design Vintage Iconico</h3>
                <p>Il nostro furgoncino California originale aggiunge un tocco di stile vintage inconfondibile al tuo evento, garantendo foto memorabili.</p>
            </div>
            <div class="feature">
                <i class="fas fa-heart"></i>
                <h3>Massimo Comfort</h3>
                <p>Interni rinnovati con cura, mantenendo l'aspetto originale ma offrendo tutti i comfort per un'esperienza indimenticabile.</p>
            </div>
            <div class="feature">
                <i class="fas fa-calendar-alt"></i>
                <h3>Perfetto per Ogni Evento</h3>
                <p>Matrimoni, compleanni, eventi aziendali o shooting fotografici: il nostro furgoncino si adatta perfettamente a qualsiasi occasione.</p>
            </div>
            <div class="feature">
                <i class="fas fa-user-tie"></i>
                <h3>Servizio Personalizzato</h3>
                <p>Ogni dettaglio verrà curato in base alle tue esigenze, con un team dedicato che ti seguirà dall'inizio alla fine.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services" id="services">
    <div class="container">
        <div class="section-title">
            <h2>I Nostri Servizi</h2>
            <div class="divider"></div>
        </div>
        <div class="services-container">
            <div class="service-info">
                <h3>Opzioni di Noleggio Flessibili</h3>
                <p>Il nostro furgoncino California è disponibile per noleggi giornalieri o per più giorni, con tariffe personalizzate in base alle tue esigenze. Offriamo diverse opzioni di personalizzazione per rendere il tuo evento davvero speciale.</p>
                <p>Il noleggio include sempre un autista professionista, carburante, assicurazione e la possibilità di decorare il van secondo il tema del tuo evento.</p>
                <a href="#contact" class="btn">Richiedi un Preventivo</a>
            </div>
            <div class="service-list">
                <div class="service-item">
                    <i class="fas fa-ring"></i>
                    <div>
                        <h4>Matrimoni</h4>
                        <p>Un'entrata o uscita indimenticabile per gli sposi, sessioni fotografiche uniche e un elemento di stile per la location.</p>
                    </div>
                </div>
                <div class="service-item">
                    <i class="fas fa-birthday-cake"></i>
                    <div>
                        <h4>Compleanni e Feste</h4>
                        <p>Sorprendi i tuoi ospiti con un'esperienza originale per celebrare in modo memorabile.</p>
                    </div>
                </div>
                <div class="service-item">
                    <i class="fas fa-building"></i>
                    <div>
                        <h4>Eventi Aziendali</h4>
                        <p>Lancia prodotti, organizza team building o eventi promozionali con un tocco di originalità.</p>
                    </div>
                </div>
                <div class="service-item">
                    <i class="fas fa-camera"></i>
                    <div>
                        <h4>Shooting Fotografici</h4>
                        <p>Perfetto per servizi fotografici, campagne pubblicitarie e contenuti per social media.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials" id="testimonials">
    <div class="container">
        <div class="section-title">
            <h2>Dicono di Noi</h2>
            <div class="divider"></div>
        </div>
        <div class="testimonials-container">
            <div class="testimonial">
                <p>Il furgoncino California ha reso il nostro matrimonio ancora più speciale! Gli ospiti sono impazziti e le foto sono venute magnifiche. Il team è stato professionale e disponibile dal primo contatto.</p>
                <div class="client">
                    <div class="client-img">
                        <img src="/api/placeholder/100/100" alt="Cliente">
                    </div>
                    <div class="client-info">
                        <h4>Laura e Marco</h4>
                        <p>Matrimonio a Firenze</p>
                    </div>
                </div>
            </div>
            <div class="testimonial">
                <p>Abbiamo noleggiato il furgoncino per il lancio del nostro nuovo prodotto e l'impatto visivo è stato incredibile. Ha catturato l'attenzione di tutti e ha generato tantissimi contenuti per i nostri social. Servizio impeccabile!</p>
                <div class="client">
                    <div class="client-img">
                        <img src="/api/placeholder/100/100" alt="Cliente">
                    </div>
                    <div class="client-info">
                        <h4>Giovanni Rossi</h4>
                        <p>Marketing Manager, Brand XYZ</p>
                    </div>
                </div>
            </div>
            <div class="testimonial">
                <p>Per la festa dei 18 anni di mia figlia ho voluto sorprenderla con qualcosa di speciale e il furgoncino California è stato perfetto! Tutti i ragazzi sono rimasti entusiasti e hanno fatto mille foto. Un successo garantito!</p>
                <div class="client">
                    <div class="client-img">
                        <img src="/api/placeholder/100/100" alt="Cliente">
                    </div>
                    <div class="client-info">
                        <h4>Francesca Bianchi</h4>
                        <p>Festa di compleanno</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact" id="contact">
    <div class="container">
        <div class="section-title">
            <h2>Contattaci</h2>
            <div class="divider"></div>
        </div>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Prenota il Tuo Evento Speciale</h3>
                <p>Vuoi rendere il tuo evento indimenticabile con il nostro furgoncino California? Compila il form oppure contattaci direttamente tramite telefono o WhatsApp. Saremo felici di rispondere a tutte le tue domande e fornirti un preventivo personalizzato.</p>
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <p>+39 333 1234567</p>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-whatsapp"></i>
                        <p>+39 333 1234567</p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <p>davidecerpe@gmail.com</p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Via delle Rose 123, Milano</p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form id="bookingForm">
                    <div class="form-group">
                        <input type="text" id="name_surname" name="name_surname" class="form-control" placeholder="Nome e Cognome *" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="mail" name="mail" class="form-control" placeholder="Email *" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="tel" name="tel" class="form-control" placeholder="Telefono *" required>
                    </div>
                    <div class="form-group">
                        <input type="date" id="date" name="date" class="form-control" placeholder="Data dell'evento *" required>
                    </div>
                    <div class="form-group">
                        <select class="form-control" required>
                            <option value="" disabled selected>Tipo di evento *</option>
                            <option value="wedding">Matrimonio</option>
                            <option value="birthday">Compleanno</option>
                            <option value="corporate">Evento Aziendale</option>
                            <option value="photoshoot">Shooting Fotografico</option>
                            <option value="other">Altro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" class="form-control" placeholder="Descrivi brevemente il tuo evento *" required></textarea>
                    </div>
                    <button type="submit" class="btn">Richiedi un Preventivo</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-container">
            <div class="footer-col">
                <h4>VintageVan</h4>
                <p>Rendiamo speciale ogni evento con il nostro autentico furgoncino California, un'icona di stile vintage per momenti indimenticabili.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Link Rapidi</h4>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#gallery">Galleria</a></li>
                    <li><a href="#features">Perché Noi</a></li>
                    <li><a href="#services">Servizi</a></li>
                    <li><a href="#testimonials">Testimonianze</a></li>
                    <li><a href="#contact">Contatti</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Servizi</h4>
                <ul>
                    <li><a href="#services">Matrimoni</a></li>
                    <li><a href="#services">Feste di Compleanno</a></li>
                    <li><a href="#services">Eventi Aziendali</a></li>
                    <li><a href="#services">Shooting Fotografici</a></li>
                    <li><a href="#services">Addii al Nubilato/Celibato</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contatti</h4>
                <ul>
                    <li><a href="tel:+393331234567">+39 333 1234567</a></li>
                    <li><a href="mailto:info@vintagevan.it">info@vintagevan.it</a></li>
                    <li><a href="#">Via delle Rose 123, Milano</a></li>
                    <li><a href="#">P.IVA: 12345678901</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2025 VintageVan - Tutti i diritti riservati | Web Design by Creative Agency</p>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script>
    // Mobile Menu Toggle
    const mobileMenu = document.getElementById('mobileMenu');
    const nav = document.getElementById('nav');

    mobileMenu.addEventListener('click', () => {
        nav.classList.toggle('active');
    });

    // Modal Gallery
    function openModal(imgSrc) {
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImg');

        modal.style.display = 'flex';
        modalImg.src = imgSrc;
    }

    function closeModal() {
        document.getElementById('imageModal').style.display = 'none';
    }

    // Smooth Scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute('href'));

            window.scrollTo({
                top: target.offsetTop - 70,
                behavior: 'smooth'
            });

            // Close mobile menu if open
            if (nav.classList.contains('active')) {
                nav.classList.remove('active');
            }
        });
    });

    // Form Submission
    const bookingForm = document.getElementById('bookingForm');

    bookingForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Here you would typically send the form data to a server
        // For this demo, we'll just show an alert
        let params = {
            name: document.getElementById("name_surname").value,
            message : document.getElementById("message").value,
        }

        emailjs.send("service_snx1x28","template_fb665ts",params).then(alert("Mail spedita!"));

        alert('Grazie per la tua richiesta! Ti contatteremo al più presto.');
        bookingForm.reset();
    });

    // Reveal animations on scroll
    window.addEventListener('scroll', revealOnScroll);

    function revealOnScroll() {
        const reveals = document.querySelectorAll('.feature, .service-item, .testimonial, .gallery-item');

        reveals.forEach(element => {
            const windowHeight = window.innerHeight;
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                element.style.opacity = 1;
                element.style.transform = 'translateY(0)';
            }
        });
    }

    // Initialize
    window.onload = function() {
        revealOnScroll();
    }
</script>
