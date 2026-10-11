<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portofolio Dhefira Zahira Nur Syofa</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #080b14;
            --bg-secondary: #101522;
            --card: rgba(255, 255, 255, 0.055);
            --text: #f5f7ff;
            --text-secondary: #a9afc3;
            --primary: #7c5cff;
            --secondary: #00d4ff;
            --border: rgba(255, 255, 255, 0.1);
            --shadow: 0 25px 80px rgba(0, 0, 0, 0.35);
        }

        body.light {
            --bg: #f5f7fb;
            --bg-secondary: #ffffff;
            --card: rgba(255, 255, 255, 0.8);
            --text: #111827;
            --text-secondary: #5f6675;
            --border: rgba(0, 0, 0, 0.1);
            --shadow: 0 25px 70px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Inter", sans-serif;
            background: var(--bg);
            color: var(--text);
            overflow-x: hidden;
            transition: background .4s ease, color .4s ease;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        /* Background */

        .background-shape {
            position: fixed;
            width: 450px;
            height: 450px;
            border-radius: 50%;
            filter: blur(120px);
            opacity: .15;
            pointer-events: none;
            z-index: -1;
        }

        .shape-1 {
            background: #7c5cff;
            top: -150px;
            left: -150px;
        }

        .shape-2 {
            background: #00d4ff;
            right: -150px;
            bottom: 10%;
        }

        /* Navbar */

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            background: rgba(8, 11, 20, .7);
            border-bottom: 1px solid var(--border);
        }

        .light .navbar {
            background: rgba(255, 255, 255, .75);
        }

        .nav-container {
            max-width: 1150px;
            height: 75px;
            margin: auto;
            padding: 0 25px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-family: "Poppins", sans-serif;
            font-size: 20px;
            font-weight: 800;
        }

        .logo span {
            color: var(--primary);
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            color: var(--text-secondary);
            font-size: 14px;
            transition: .3s;
        }

        .nav-links a:hover {
            color: var(--text);
        }

        .theme-toggle {
            width: 40px;
            height: 40px;
            border: 1px solid var(--border);
            border-radius: 50%;
            background: var(--card);
            color: var(--text);
            cursor: pointer;
            transition: .3s;
        }

        .theme-toggle:hover {
            transform: rotate(20deg) scale(1.1);
        }

        /* Hero */

        .hero {
            min-height: 100vh;
            max-width: 1150px;
            margin: auto;
            padding: 150px 25px 100px;

            display: grid;
            grid-template-columns: 1.1fr .9fr;
            align-items: center;
            gap: 70px;
        }

        .hero-label {
            color: var(--secondary);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-family: "Poppins", sans-serif;
            font-size: clamp(38px, 5.5vw, 68px);
            line-height: 1.1;
            margin-bottom: 25px;
            text-transform: uppercase;
        }

        .gradient-text {
            display: block;
            background: linear-gradient(
                90deg,
                var(--primary),
                var(--secondary)
            );
            -webkit-background-clip: text;
            color: transparent;
        }

        .hero-description {
            max-width: 570px;
            color: var(--text-secondary);
            font-size: 17px;
            line-height: 1.8;
            margin-bottom: 35px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 14px 24px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
            transition: .3s;
        }

        .btn-primary {
            background: linear-gradient(
                135deg,
                var(--primary),
                #9a68ff
            );

            box-shadow: 0 10px 30px rgba(124, 92, 255, .3);
        }

        .btn-primary:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 35px rgba(124, 92, 255, .45);
        }

        .btn-outline {
            border: 1px solid var(--border);
            background: var(--card);
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, .1);
            transform: translateY(-4px);
        }

        .social-mini {
            margin-top: 35px;
            display: flex;
            gap: 25px;
        }

        .social-mini a {
            color: var(--text-secondary);
            font-size: 13px;
            border-bottom: 1px solid transparent;
            transition: .3s;
        }

        .social-mini a:hover {
            color: var(--secondary);
            border-color: var(--secondary);
        }

        /* Profile */

        .hero-image {
            display: flex;
            justify-content: center;
        }

        .profile-card {
            position: relative;
            width: 330px;
            padding: 18px;

            border: 1px solid var(--border);
            border-radius: 25px;

            background: var(--card);
            backdrop-filter: blur(20px);

            box-shadow: var(--shadow);

            transform: rotate(3deg);
            transition: .5s;
        }

        .profile-card:hover {
            transform: rotate(0deg) translateY(-10px);
        }

        .profile-card img {
            width: 100%;
            height: 390px;
            object-fit: cover;
            border-radius: 18px;
            display: block;
        }

        .status {
            position: absolute;
            top: 35px;
            left: 35px;

            padding: 8px 12px;
            border-radius: 50px;

            background: rgba(0, 0, 0, .6);
            backdrop-filter: blur(10px);

            font-size: 11px;
            font-weight: 600;
            z-index: 2;
        }

        .status span {
            display: inline-block;
            width: 7px;
            height: 7px;
            background: #35e888;
            border-radius: 50%;
            margin-right: 5px;
        }

        .profile-info {
            padding: 18px 5px 5px;
        }

        .profile-info h3 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .profile-info p {
            color: var(--text-secondary);
            font-size: 13px;
        }

        /* Section */

        .section {
            max-width: 1050px;
            margin: auto;
            padding: 110px 25px;
        }

        .section-heading {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 50px;
        }

        .section-heading span {
            color: var(--primary);
            font-family: monospace;
            font-size: 14px;
        }

        .section-heading h2 {
            font-family: "Poppins", sans-serif;
            font-size: 36px;
        }

        /* About & Activities */

        .about-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 50px;
            align-items: start;
        }

        .about-text p {
            color: var(--text-secondary);
            line-height: 1.9;
            margin-bottom: 20px;
        }

        .activities-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .activity-card {
            border-radius: 18px;
            border: 1px solid var(--border);
            background: var(--card);
            overflow: hidden;
            transition: .35s ease;
            display: flex;
            flex-direction: column;
        }

        .activity-card:hover {
            border-color: var(--primary);
            transform: translateY(-6px);
            box-shadow: 0 15px 35px rgba(124, 92, 255, 0.15);
        }

        .activity-img-wrapper {
            width: 100%;
            height: 180px;
            overflow: hidden;
            position: relative;
        }

        .activity-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .5s ease;
        }

        .activity-card:hover .activity-img-wrapper img {
            transform: scale(1.08);
        }

        .activity-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .activity-content h4 {
            color: var(--secondary);
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 8px;
            font-family: "Poppins", sans-serif;
        }

        .activity-content p {
            font-size: 13px;
            color: var(--text-secondary);
            line-height: 1.6;
            margin-bottom: 0;
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 30px;
        }

        .skills span {
            padding: 8px 14px;
            border-radius: 50px;

            background: rgba(124, 92, 255, .1);
            border: 1px solid rgba(124, 92, 255, .2);

            color: #a994ff;
            font-size: 12px;
            font-weight: 600;
        }

        .quote-card {
            padding: 35px;
            border-radius: 20px;

            background: linear-gradient(
                145deg,
                rgba(124, 92, 255, .15),
                rgba(0, 212, 255, .05)
            );

            border: 1px solid var(--border);
            box-shadow: var(--shadow);
            margin-top: 20px;
        }

        .quote-icon {
            color: var(--primary);
            font-family: Georgia;
            font-size: 60px;
            line-height: .5;
            margin-bottom: 25px;
        }

        .quote-card blockquote {
            font-family: "Poppins", sans-serif;
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .quote-card cite {
            color: var(--text-secondary);
            font-size: 13px;
            font-style: normal;
        }

        /* Timeline */

        .timeline {
            position: relative;
            padding-left: 35px;
        }

        .timeline::before {
            content: "";
            position: absolute;
            left: 5px;
            top: 0;
            bottom: 0;
            width: 1px;

            background: linear-gradient(
                var(--primary),
                var(--secondary)
            );
        }

        .timeline-item {
            position: relative;
            margin-bottom: 35px;
        }

        .timeline-dot {
            position: absolute;
            left: -35px;
            top: 28px;

            width: 11px;
            height: 11px;
            border-radius: 50%;

            background: var(--primary);

            box-shadow:
                0 0 0 5px rgba(124, 92, 255, .12),
                0 0 20px var(--primary);
        }

        .experience-card {
            padding: 30px;
            border: 1px solid var(--border);
            border-radius: 18px;
            background: var(--card);
            transition: .3s;
        }

        .experience-card:hover {
            transform: translateX(8px);
            border-color: rgba(124, 92, 255, .4);
        }

        .experience-header {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 18px;
        }

        .year {
            color: var(--secondary);
            font-size: 12px;
            font-weight: 700;
        }

        .experience-card h3 {
            margin-top: 7px;
            font-family: "Poppins", sans-serif;
            font-size: 21px;
        }

        .company {
            color: var(--text-secondary);
            font-size: 13px;
        }

        .experience-card p {
            color: var(--text-secondary);
            line-height: 1.8;
            font-size: 14px;
        }

        /* Hobbies */

        .hobby-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .hobby-card {
            padding: 30px;
            border-radius: 18px;
            border: 1px solid var(--border);
            background: var(--card);
            transition: .35s;
        }

        .hobby-card:hover {
            transform: translateY(-8px);

            background: linear-gradient(
                145deg,
                rgba(124, 92, 255, .12),
                rgba(0, 212, 255, .05)
            );

            border-color: rgba(124, 92, 255, .35);
        }

        .hobby-icon {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .hobby-card h3 {
            margin-bottom: 8px;
        }

        .hobby-card p {
            color: var(--text-secondary);
            font-size: 13px;
            line-height: 1.7;
        }

        /* Media */

        .media-grid {
            display: grid;
            grid-template-columns: .8fr 1.2fr;
            gap: 25px;
        }

        .media-card {
            padding: 30px;
            border: 1px solid var(--border);
            border-radius: 20px;
            background: var(--card);
        }

        .media-icon {
            font-size: 35px;
            margin-bottom: 20px;
        }

        .media-card h3 {
            margin-bottom: 8px;
        }

        .media-card p {
            color: var(--text-secondary);
            font-size: 13px;
            margin-bottom: 25px;
        }

        audio {
            width: 100%;
        }

        .video-wrapper {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9;
            overflow: hidden;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        .video-wrapper iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Contact */

        .contact-section {
            max-width: 1050px;
            margin: 50px auto 100px;
            padding: 80px 30px;

            text-align: center;

            border-radius: 30px;

            background:
                radial-gradient(
                    circle at top left,
                    rgba(124, 92, 255, .3),
                    transparent 50%
                ),
                radial-gradient(
                    circle at bottom right,
                    rgba(0, 212, 255, .2),
                    transparent 50%
                );

            border: 1px solid var(--border);
        }

        .contact-label {
            color: var(--secondary);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 3px;
        }

        .contact-section h2 {
            max-width: 700px;
            margin: 20px auto;

            font-family: "Poppins", sans-serif;
            font-size: clamp(30px, 5vw, 50px);
        }

        .contact-section h2 span {
            color: var(--primary);
        }

        .contact-section p {
            color: var(--text-secondary);
            margin-bottom: 30px;
        }

        .contact-buttons {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .contact-btn {
            padding: 13px 22px;

            border: 1px solid var(--border);
            border-radius: 10px;

            background: var(--card);

            font-size: 13px;
            font-weight: 600;

            transition: .3s;
        }

        .contact-btn:hover {
            background: var(--primary);
            transform: translateY(-4px);
        }

        /* Footer */

        footer {
            border-top: 1px solid var(--border);
            padding: 40px 25px;
        }

        .footer-content {
            max-width: 1050px;
            margin: auto;

            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .footer-content h3 {
            font-family: "Poppins", sans-serif;
        }

        .footer-content p {
            color: var(--text-secondary);
            font-size: 12px;
        }

        /* Back to top */

        .back-to-top {
            position: fixed;
            right: 25px;
            bottom: 25px;

            width: 45px;
            height: 45px;

            border: 1px solid var(--border);
            border-radius: 50%;

            background: var(--primary);
            color: white;

            font-size: 18px;

            cursor: pointer;

            opacity: 0;
            visibility: hidden;

            transform: translateY(20px);

            transition: .3s;

            z-index: 500;
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* Scroll reveal */

        .reveal {
            opacity: 0;
            transform: translateY(50px);

            transition:
                opacity .8s ease,
                transform .8s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive */

        @media (max-width: 850px) {

            .nav-links {
                display: none;
            }

            .hero {
                grid-template-columns: 1fr;
                text-align: center;
                padding-top: 130px;
            }

            .hero-description {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-buttons,
            .social-mini {
                justify-content: center;
            }

            .hero-image {
                order: -1;
            }

            .profile-card {
                width: 280px;
            }

            .profile-card img {
                height: 340px;
            }

            .about-grid {
                grid-template-columns: 1fr;
            }

            .activities-grid {
                grid-template-columns: 1fr;
            }

            .hobby-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .media-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 550px) {

            .section {
                padding: 80px 20px;
            }

            .section-heading h2 {
                font-size: 28px;
            }

            .hero {
                padding-left: 20px;
                padding-right: 20px;
            }

            .hero h1 {
                font-size: 32px;
            }

            .hobby-grid {
                grid-template-columns: 1fr;
            }

            .experience-header {
                flex-direction: column;
            }

            .footer-content {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <!-- Background -->
    <div class="background-shape shape-1"></div>
    <div class="background-shape shape-2"></div>


    <!-- NAVBAR -->
    <nav class="navbar">

        <div class="nav-container">

            <a href="#" class="logo">
                <span>&lt;</span>Portfolio<span>/&gt;</span>
            </a>

            <div class="nav-links">
                <a href="#about">Tentang</a>
                <a href="#experience">Pengalaman</a>
                <a href="#hobbies">Hobi</a>
                <a href="#media">Media</a>
                <a href="#contact">Kontak</a>
            </div>

            <button
                id="themeToggle"
                class="theme-toggle"
                aria-label="Ganti tema">
                🌙
            </button>

        </div>

    </nav>


    <main>

        <!-- HERO -->
        <section class="hero">

            <div class="hero-content">

                <p class="hero-label">
                    👋 SELAMAT DATANG DI PORTOFOLIO SAYA
                </p>

                <h1>
                    HALO, SAYA
                    <span class="gradient-text">
                        DHEFIRA ZAHIRA NUR SYOFA
                    </span>
                </h1>

                <p class="hero-description">
                    Saya adalah seorang mahasiswa aktif jurusan Informatika, Fakultas Teknologi Informasi, Universitas Sebelas April yang bersemangat dalam mengembangkan website modern, interaktif, dan berorientasi pada pengalaman pengguna.
                </p>

                <div class="hero-buttons">

                    <a href="#about" class="btn btn-primary">
                        Kenali Saya
                        <span>↓</span>
                    </a>

                    <a href="#contact" class="btn btn-outline">
                        Hubungi Saya
                    </a>

                </div>

                <div class="social-mini">

                    <a
                        href="https://www.instagram.com/dhefiraazns?dlrf=aG51dG16eWNoYXd3"
                        target="_blank" rel="noopener noreferrer">
                        Instagram
                    </a>

                    <a
                        href="https://www.linkedin.com/in/dhefira-zahira-nur-syofa-a84741355"
                        target="_blank" rel="noopener noreferrer">
                        LinkedIn
                    </a>

                    <a
                        href="https://www.youtube.com/@dhefirazahirans5850"
                        target="_blank" rel="noopener noreferrer">
                        YouTube
                    </a>

                </div>

            </div>


            <!-- FOTO -->
            <div class="hero-image">

                <div class="profile-card">

                    <div class="status">
                        <span></span>
                        Available to work
                    </div>

                    <!-- Sesuaikan fungsi {{ asset('profil.jpg') }} jika menggunakan Laravel -->
                    <img src="images/profil.jpeg" alt="Foto Profil Dhefira Zahira Nur Syofa">

                    <div class="profile-info">

                        <h3>
                            Informatika Student
                        </h3>

                        <p>
                            FTI • Universitas Sebelas April
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- ABOUT -->
        <section
            id="about"
            class="section reveal">

            <div class="section-heading">
                <span>01</span>
                <h2>Tentang Saya</h2>
            </div>

            <div class="about-grid">

                <div class="about-text">

                    <p>
                        Selamat datang di portofolio saya! Saya adalah seorang mahasiswa aktif jurusan Informatika di Fakultas Teknologi Informasi, Universitas Sebelas April. Saya memiliki minat besar pada pengembangan perangkat lunak, pemrograman web, serta dunia teknologi informasi secara keseluruhan.
                    </p>

                    <p>
                        Selama berkuliah, saya aktif mengembangkan diri tidak hanya melalui akademis, tetapi juga dengan terlibat dalam berbagai organisasi dan kegiatan kampus:
                    </p>

                    <!-- Kolom Kegiatan & Organisasi Bergambar -->
                    <div class="activities-grid">

                        <!-- CARD 1: HIMA INFORMATIKA -->
                        <div class="activity-card">
                            <div class="activity-img-wrapper">
                             <img src="images/hima.jpeg"
                                alt="Kegiatan HIMA Informatika">
                            </div>
                            <div class="activity-content">
                                <h4>🏛️ HIMA Informatika</h4>
                                <p>Aktif dalam kepengurusan dan kegiatan Himpunan Mahasiswa Informatika untuk memperluas jaringan dan mengasah kemampuan berorganisasi.</p>
                            </div>
                        </div>

                        <!-- CARD 2: UKM PHOTOGRAPHY UNSAP -->
                        <div class="activity-card">
                            <div class="activity-img-wrapper">
                                <img src="images/ukm.jpeg"
                                    alt="UKM Photography UNSAP">
                            </div>
                            <div class="activity-content">
                                <h4>📷 UKM Photography UNSAP</h4>
                                <p>Berpartisipasi aktif dalam kegiatan fotografi, liputan dokumentasi acara kampus, dan mengasah keterampilan seni visual media.</p>
                            </div>
                        </div>

                        <!-- CARD 3: MENJADI MENTOR PKKMB 2026 -->
                        <div class="activity-card">
                            <div class="activity-img-wrapper">
                               <img src="images/lainnya.jpeg"
                                alt="Menjadi Mentor PKKMB 2026">
                            </div>
                            <div class="activity-content">
                                <h4>🚀 Menjadi Mentor PKKMB 2026</h4>
                                <p>Menjadi mentor untuk mendampingi, membimbing, dan membantu adaptasi mahasiswa baru dalam merangkai perjalanan akademik di lingkungan kampus.</p>
                            </div>
                        </div>

                    </div>

                    <div class="skills">

                        <span>HTML / CSS</span>
                        <span>JavaScript</span>
                        <span>PHP / Laravel</span>
                        <span>Responsive Design</span>
                        <span>UI/UX Design</span>
                        <span>Git & GitHub</span>

                    </div>

                </div>


                <div class="quote-card">

                    <div class="quote-icon">
                        “
                    </div>

                    <blockquote>
                        Kreativitas adalah intelijensi yang bersenang-senang.
                    </blockquote>

                    <cite>
                        — Albert Einstein
                    </cite>

                </div>

            </div>

        </section>


        <!-- EXPERIENCE -->
        <section
            id="experience"
            class="section reveal">

            <div class="section-heading">
                <span>02</span>
                <h2>Pengalaman & Organisasi</h2>
            </div>

            <div class="timeline">

                <div class="timeline-item">

                    <div class="timeline-dot"></div>

                    <div class="experience-card">

                        <div class="experience-header">

                            <div>

                                <span class="year">
                                    Aktif
                                </span>

                                <h3>
                                    Pengurus & Anggota HIMA Informatika
                                </h3>

                            </div>

                            <span class="company">
                                HIMTKA UNSAP
                            </span>

                        </div>

                        <p>
                            Mengelola dan menyelenggarakan berbagai program kerja himpunan, diskusi teknologi, serta mempererat solidaritas antar mahasiswa Informatika Universitas Sebelas April.
                        </p>

                    </div>

                </div>


                <div class="timeline-item">

                    <div class="timeline-dot"></div>

                    <div class="experience-card">

                        <div class="experience-header">

                            <div>

                                <span class="year">
                                    Aktif
                                </span>

                                <h3>
                                    Anggota UKM Photography UNSAP
                                </h3>

                            </div>

                            <span class="company">
                                UKM Photography
                            </span>

                        </div>

                        <p>
                            Terlibat langsung dalam agenda liputan acara, eksekusi pameran karya visual, dan kepanitiaan dalam lingkungan UKM.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- HOBI -->
        <section
            id="hobbies"
            class="section reveal">

            <div class="section-heading">
                <span>03</span>
                <h2>Hobi Saya</h2>
            </div>

            <div class="hobby-grid">

                <div class="hobby-card">
                    <div class="hobby-icon">📚</div>
                    <h3>Membaca</h3>
                    <p>
                        Menambah wawasan melalui buku, artikel teknologi, dan dokumentasi pemrograman.
                    </p>
                </div>

                <div class="hobby-card">
                    <div class="hobby-icon">🏃</div>
                    <h3>Olahraga</h3>
                    <p>
                        Menjaga stamina tubuh agar tetap fit dan pikiran tetap jernih.
                    </p>
                </div>

                <div class="hobby-card">
                    <div class="hobby-icon">📷</div>
                    <h3>Fotografi</h3>
                    <p>
                        Mengabadikan momen dan keindahan melalui sudut pandang kamera.
                    </p>
                </div>

                <div class="hobby-card">
                    <div class="hobby-icon">💻</div>
                    <h3>Coding & Web</h3>
                    <p>
                        Mencoba framework baru dan mengeksplorasi tren desain web modern.
                    </p>
                </div>

                <div class="hobby-card">
                    <div class="hobby-icon">✍️</div>
                    <h3>Menulis</h3>
                    <p>
                        Menuangkan catatan belajar, ide, serta pengalaman ke dalam tulisan.
                    </p>
                </div>

                <div class="hobby-card">
                    <div class="hobby-icon">🎨</div>
                    <h3>Melukis & Desain</h3>
                    <p>
                        Menyalurkan daya imajinasi dan estetika visual lewat karya seni.
                    </p>
                </div>

            </div>

        </section>


        <!-- MEDIA -->
        <section
            id="media"
            class="section reveal">

            <div class="section-heading">
                <span>04</span>
                <h2>Media & Channel</h2>
            </div>

            <div class="media-grid">

                <!-- AUDIO -->

                <div class="media-card">

                    <div class="media-icon">
                        🎵
                    </div>

                    <h3>
                        What If I Call
                    </h3>

                    <p>
                        Dengarkan musik yang menemani saya saat koding.
                    </p>

                    <audio controls>
                        <source
                            src="audio/What If I Call.mp3" type="audio/mpeg">

                        Browser Anda tidak mendukung audio.
                    </audio>

                </div>


                <!-- YOUTUBE VIDEO -->

                <div class="media-card">

                    <div class="video-wrapper">

                        <!-- Ganti VIDEO_ID dengan ID video Youtube kamu (contoh: embed/dQw4w9WgXcQ) -->
                        <iframe
                            src="https://www.youtube.com/embed/iZZTnaEBeBc"
                            title="Channel YouTube Dhefira Zahira"
                            allowfullscreen>
                        </iframe>

                    </div>

                    <h3>
                        YouTube Channel
                    </h3>

                    <p>
                        Tonton konten, karya, atau dokumentasi kegiatan saya di YouTube.
                    </p>

                </div>

            </div>

        </section>


        <!-- CONTACT -->

        <section
            id="contact"
            class="contact-section reveal">

            <div class="contact-content">

                <span class="contact-label">
                    LET'S CONNECT
                </span>

                <h2>
                    Mari terhubung & berkolaborasi
                    <span>
                        bersama saya.
                    </span>
                </h2>

                <p>
                    Silakan kunjungi media sosial dan channel saya untuk informasi lebih lanjut.
                </p>

                <div class="contact-buttons">

                    <a
                        href="https://www.instagram.com/dhefiraazns?dlrf=aG51dG16eWNoYXd3"
                        target="_blank"
                        class="contact-btn">
                        Instagram ↗
                    </a>

                    <a
                        href="https://www.linkedin.com/in/dhefira-zahira-nur-syofa-a84741355"
                        target="_blank"
                        class="contact-btn">
                        LinkedIn ↗
                    </a>

                    <a
                        href="https://www.youtube.com/@dhefirazahirans5850"
                        target="_blank"
                        class="contact-btn">
                        YouTube ↗
                    </a>

                </div>

            </div>

        </section>

    </main>


    <!-- FOOTER -->

    <footer>

        <div class="footer-content">

            <div>

                <h3>
                    &lt;Portfolio/&gt;
                </h3>

                <p>
                    Dhefira Zahira Nur Syofa • FTI Universitas Sebelas April
                </p>

            </div>

            <p>
                © <span id="year"></span>
                Portofolio Pribadi.
            </p>

        </div>

    </footer>


    <!-- BACK TO TOP -->

    <button
        id="backToTop"
        class="back-to-top">
        ↑
    </button>


    <!-- JAVASCRIPT -->

    <script>

        // ==============================
        // DARK / LIGHT MODE
        // ==============================

        const themeToggle =
            document.getElementById("themeToggle");

        const savedTheme =
            localStorage.getItem("theme");

        if (savedTheme === "light") {

            document.body.classList.add("light");

            themeToggle.textContent = "☀️";

        }


        themeToggle.addEventListener("click", () => {

            document.body.classList.toggle("light");

            const isLight =
                document.body.classList.contains("light");

            themeToggle.textContent =
                isLight ? "☀️" : "🌙";

            localStorage.setItem(
                "theme",
                isLight ? "light" : "dark"
            );

        });


        // ==============================
        // SCROLL REVEAL
        // ==============================

        const revealElements =
            document.querySelectorAll(".reveal");

        const observer =
            new IntersectionObserver(
                (entries) => {

                    entries.forEach((entry) => {

                        if (entry.isIntersecting) {

                            entry.target.classList.add(
                                "active"
                            );

                            observer.unobserve(
                                entry.target
                            );

                        }

                    });

                },
                {
                    threshold: 0.15
                }
            );


        revealElements.forEach((element) => {

            observer.observe(element);

        });


        // ==============================
        // BACK TO TOP
        // ==============================

        const backToTop =
            document.getElementById("backToTop");


        window.addEventListener("scroll", () => {

            if (window.scrollY > 500) {

                backToTop.classList.add("show");

            } else {

                backToTop.classList.remove("show");

            }

        });


        backToTop.addEventListener("click", () => {

            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });

        });


        // ==============================
        // CURRENT YEAR
        // ==============================

        document.getElementById("year")
            .textContent =
            new Date().getFullYear();


        // ==============================
        // SMOOTH NAVIGATION
        // ==============================

        document
            .querySelectorAll('a[href^="#"]')
            .forEach(link => {

                link.addEventListener(
                    "click",
                    function(event) {

                        const target =
                            document.querySelector(
                                this.getAttribute("href")
                            );

                        if (target) {

                            event.preventDefault();

                            target.scrollIntoView({
                                behavior: "smooth",
                                block: "start"
                            });

                        }

                    }
                );

            });


        // ==============================
        // 3D PROFILE EFFECT
        // ==============================

        const profileCard =
            document.querySelector(".profile-card");


        if (profileCard) {

            profileCard.addEventListener(
                "mousemove",
                (event) => {

                    const rect =
                        profileCard.getBoundingClientRect();

                    const x =
                        event.clientX - rect.left;

                    const y =
                        event.clientY - rect.top;

                    const centerX =
                        rect.width / 2;

                    const centerY =
                        rect.height / 2;

                    const rotateX =
                        ((y - centerY) / centerY) * -5;

                    const rotateY =
                        ((x - centerX) / centerX) * 5;

                    profileCard.style.transform =
                        `rotateX(${rotateX}deg)
                         rotateY(${rotateY}deg)`;

                }
            );


            profileCard.addEventListener(
                "mouseleave",
                () => {

                    profileCard.style.transform =
                        "rotate(3deg)";

                }
            );

        }

    </script>

</body>
</html>