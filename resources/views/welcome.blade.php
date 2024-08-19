<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Imran Raja</title>

    <link rel="icon" href="{{ url('favicon.jpg') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        :root {
            --almost-black: #151515;
            --green-blue: #4CE19D;
            --dark-green-blue: #46a178;

            --silver: #dedede;
            --pale-grey: #ECECEC;
            --dark-grey: #242424;

            --body-padding-hor: 1em;

            --h3-font-size: 35px;
            --h4-font-size: 28px;

            --project-preview-height: 250px;

            /* Animation units */
            --slide-distance-width: 2.5vw;
            --slide-distance-height: 2.5vh;
            --anim-duration: 1.5s;
            --anim-duration-secondary: 2s;
        }

        @media screen and (min-width: 600px) {
            :root {
                --body-padding-hor: 2em;

                --h3-font-size: 43px;


            }
        }

        @media screen and (min-width: 1200px) {
            :root {
                --body-padding-hor: 20%;

                --h3-font-size: 80px;
                --project-preview-height: 400px;
            }
        }

        /* Animations */
        @keyframes slideLeft {
            from {
                translate: var(--slide-distance-width) 0;
            }

            to {
                translate: 0 0;
            }
        }

        @keyframes slideRight {
            from {
                translate: calc(var(--slide-distance-width) * -1) 0;
            }

            to {
                translate: 0 0;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(var(--slide-distance-height));
            }

            to {
                transform: translateY(0);
            }
        }

        @keyframes slideDown {
            from {
                transform: translateY(calc(var(--slide-distance-height) * -1));
            }

            to {
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes scaleOut {
            from {
                scale: 95%;
            }

            to {
                scale: 100%;
            }
        }

        * {
            box-sizing: border-box;
        }

        html {
            background-color: var(--almost-black);
            color: silver;

            font-family: "Space Grotesk", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-size: 15px;

        }

        body {
            margin: 2em 0 0;
        }

        h3,
        h4 {
            font-weight: 700;
            color: white;
        }

        h3 {
            font-size: var(--h3-font-size);
        }

        h4 {
            font-size: var(--h4-font-size);
        }


        button,
        .btn {
            background-color: transparent;
            color: white;
            padding: 1em 0;
            text-transform: uppercase;
            border: none;
            border-bottom: 2px solid var(--green-blue);

            font-weight: 700;
            font-size: 17px;

            cursor: pointer;
        }

        button:hover,
        button:active,
        .btn:hover,
        .btn:active {
            color: silver;
            border-color: var(--dark-green-blue);
        }

        .input {
            border: none;
            border-bottom: 2px solid silver;
            outline: none;
            color: white;
            background: transparent;
            font-weight: 700;

            width: 100%;
            padding: 1.5em;

            font-size: 12px;
        }

        .input:focus {
            border-bottom-color: white;
        }

        ::placeholder {
            color: silver;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .nav-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 1em;

            margin: 0 var(--body-padding-hor);
        }

        .nav-list {
            display: flex;
            flex-direction: row;
            gap: 1em;
            justify-content: space-between;
        }

        .logo {
            font-size: 25px;
            font-weight: 700;

            color: white;
        }

        .logo:hover,
        .logo:active {
            color: silver;
        }

        .nav-icon {
            filter: invert(100%);
            width: 25px;
        }

        .nav-icon:hover,
        .nav-icon:active {
            filter: invert(75%);
        }

        main {
            margin: 1em var(--body-padding-hor) 3em;
        }

        main,
        #profile,
        #profile-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        #profile {
            gap: 1em;
        }

        main {
            gap: 5em;
        }

        #profile-info {
            text-align: center;
        }

        .fancy-underline {
            border-bottom: 4px solid var(--green-blue);
        }

        #profile-photo {
            width: 15em;
            /* position: relative;
            bottom: 5em;
            z-index: -1; */
            /* mask-image: linear-gradient(rgba(0, 0, 0, 0) 25%, rgba(0, 0, 0, 1)); */
        }

        #skills {
            border-top: 2px solid silver;
            border-bottom: 2px solid silver;

            padding: 4em 0;

            display: flex;
            flex-direction: column;
            gap: 4em;
        }

        .skill {
            text-align: center;

            display: grid;
            grid-template-rows: 100px 1fr 1fr;
            align-items: center;
            justify-items: center;

            gap: 1em;
        }

        .skill-img {
            max-height: 100%;
        }

        .android-img {
            max-width: 100px;
        }

        .skill-name {
            margin: .5em 0;
        }

        .skill-duration {
            align-self: self-start;
        }

        #projects-header {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;

            width: 100%;
        }

        #projects-body {
            display: flex;
            flex-direction: column;

            gap: 3em;
        }

        .project {
            display: grid;
            grid-template-rows: var(--project-preview-height) 1fr auto auto;
            align-items: start;

            /* display: flex;
            flex-direction: column; */
            gap: 0.5em;
        }

        .project-preview {
            max-width: 100%;
            height: 260px;

            transition: transform .3s;
        }

        .project-preview:hover,
        .project-preview:active {
            transform: scale(105%);
        }

        .project-name {
            font-weight: 700;
            font-size: var(--h4-font-size);

            margin: 0.5em 0;

            transition: text-decoration 1s;
        }

        .project-name:hover {
            text-decoration: underline;
        }

        .project-tools,
        .project-links {
            display: flex;
            flex-flow: row wrap;
            gap: 1em;
        }

        .project-links {
            gap: 2em;
        }

        footer,
        #contact,
        #contact-form,
        #contact-label {
            display: flex;
            flex-direction: column;
        }

        footer {
            align-items: center;

            margin: 0;
            padding: 0 var(--body-padding-hor);
            background-color: var(--dark-grey);

            gap: 5em;
        }

        #contact {
            padding: 1em 0;

            gap: 2em;
        }

        #contact-label {
            text-align: center;
        }

        #contact-form {
            width: 100%;

            justify-content: center;
            align-items: center;
            gap: 1em;
        }

        #contact-form button {
            align-self: flex-end;
            font-size: 15px;
        }

        footer .nav-container {
            border-top: 2px solid silver;
            padding: 2em 0;
            width: 100%;
        }

        @media screen and (max-width: 600px) {
            main *.animate {
                animation-name: fadeIn, slideUp;
                animation-duration: var(--anim-duration);
            }
        }

        @media screen and (min-width: 600px) {

            .nav-container {
                flex-direction: row;
                justify-content: space-between;
            }

            #profile {
                flex-direction: row-reverse;
                justify-content: space-between;

                /* justify-items: start; */
            }

            #profile-info {
                align-items: flex-start;
                text-align: left;
                max-width: 50%;
            }

            #profile * {
                grid-column: 1;
            }

            #profile-info *.animate {
                animation-name: fadeIn, slideRight;
                animation-duration: var(--anim-duration);
            }

            #skills *.animate,
            #projects-section *.animate {
                animation-name: fadeIn, slideUp;
                animation-duration: var(--anim-duration);
            }

            #profile-photo {
                grid-column: 2;
                grid-row-start: 1;
                grid-row-end: -1;
            }

            #profile-photo.animate {
                animation-duration: var(--anim-duration);
                animation-name: fadeIn, slideLeft;
            }

            #skills {
                display: grid;
                grid-template-columns: 1fr 1fr;

            }

            .skill-img {
                max-height: 130px;
            }

            #projects-body {
                display: grid;
                grid-template-columns: 1fr 1fr;
            }

            #contact {
                max-width: 50%;
            }
        }

        @media screen and (min-width: 1200px) {
            #profile-info {
                max-width: 70%;
            }

            #profile-photo {
                /* width: fit-content;
                max-width: 30%; */
            }

            #skills {
                grid-template-columns: repeat(3, 1fr);
            }

            #contact {
                padding: 5em 0;

                width: 100%;
                max-width: 100%;

                flex-direction: row;
                justify-content: space-between;
                align-items: flex-start;
            }

            #contact>* {
                max-width: 40%;
            }

            #contact-label {
                text-align: left;
                gap: 2em;
                /* justify-self: flex-start; */
            }

            #contact-heading {
                margin: 0;
            }

            .project-preview {
                width: 100%;
                height: fit-content;
            }
        }
    </style>
</head>

<body>
    <header class="nav-container">
        <a href="{{ route('index') }}" class="logo">imranraja</a>
        <nav class="nav-list">
            <a href="https://github.com/imran94" target="_blank" rel="noopener noreferrer">
                <img class="nav-icon" src="{{ url('assets/github.svg') }}" />
            </a>
            <a href="https://www.linkedin.com/in/imran-raja-5911011b6/" target="_blank" rel="noopener noreferrer">
                <img class="nav-icon" src="{{ url('assets/linkedin.svg') }}" />
            </a>
        </nav>
    </header>
    <main>
        <div id="profile">
            <img id="profile-photo" src="{{ url('assets/me.jpg') }}" />
            <div id="profile-info">
                <h3 class="profile-heading">Nice to meet you!<br />I'm <span class="fancy-underline">Imran Raja</span>.
                </h3>
                <p>
                    Based in Pakistan, I'm a full-stack web developer and mobile app developer passionate about building
                    applications that users love.
                </p>
                <p>
                    I always seek perfection in what I make, and continually strive to be at the cutting-edge in the
                    field of
                    app development.
                    Believing in not just doing the bare minimum work required for a project, but
                    creating
                    something
                    that provides a truly pleasant experience for the end user.
                </p>
                <p>
                    I believe communication is key to a successful app development process. To facilitate this, I make
                    myself perpetually available to clients during development, via their preferred choice of
                    communication, be it text chat
                    or video call. With my development experience and
                    fluency in English, I'm able to accurately gauge the requirements of the project.
                </p>
                <a href="#contact" class="btn">contact me</a>
            </div>
        </div>

        <div id="skills">
            <div class="skill">
                <img class="skill-img" src="{{ url('assets/html-css-js.png') }}" />
                <h4 class="skill-name">HTML/CSS/Javascript</h4>
                <div class="skill-duration">4 Years Experience</div>
            </div>

            <div class="skill">
                <img class="skill-img" src="{{ url('assets/vue.svg') }}" />
                <h4 class="skill-name">Vue.js</h3>
                    <div class="skill-duration">3 Years Experience</div>
            </div>

            <div class="skill">
                <img class="skill-img" src="{{ url('assets/laravel.svg') }}" />
                <h4 class="skill-name">Laravel</h3>
                    <div class="skill-duration">3 Years Experience</div>
            </div>

            <div class="skill">
                <img class="skill-img" src="{{ url('assets/spring.svg') }}" />
                <h4 class="skill-name">Spring Boot</h3>
                    <div class="skill-duration">2 Years Experience</div>
            </div>

            <div class="skill">
                <img class="skill-img" src="{{ url('assets/angular.png') }}" />
                <div class="skill-duration">1 Year Experience</div>
            </div>

            <div class="skill">
                <img class="skill-img android-img" class="skill-img" src="{{ url('assets/android.png') }}" />
                <h4 class="skill-name">Android</h4>
                <div class="skill-duration">2 Years Experience</div>
            </div>
        </div>

        <div id="projects-section">
            <div id="projects-header">
                <h3 id="projects-heading">Projects</h3>
                <a href="#contact" class="btn">Contact Me</a>
            </div>

            <div id="projects-body">
                <div class="project">
                    <a href="https://audiophile.imranraja.net/public/" target="_blank" rel="noopener noreferrer">
                        <img class="project-preview" src="{{ url('assets/previews/audiophile.jpg') }}" />
                    </a>
                    <a href="https://audiophile.imranraja.net/public/" class="project-name" target="_blank"
                        rel="noopener noreferrer">AUDIOPHILE E-COMMERCE
                        WEBSITE (DEMO)</a>
                    <div class="project-tools">
                        <div class="project-tool">HTML</div>
                        <div class="project-tool">CSS</div>
                        <div class="project-tool">JAVASCRIPT</div>
                        <div class="project-tool">PHP</div>
                        <div class="project-tool">LARAVEL</div>
                    </div>
                    <div class="project-links">
                        <a href="https://audiophile.imranraja.net/public/" class="btn" target="_blank"
                            rel="noopener noreferrer">view project</a>
                        <a href="https://github.com/imran94/audiophile-ecommerce-website" class="btn" target="_blank"
                            rel="noopener noreferrer">view code</a>
                    </div>
                </div>

                <div class="project">
                    <a href="https://imran94.github.io/designo/" target="_blank" rel="noopener noreferrer">
                        <img class="project-preview" src="{{ url('assets/previews/designo.jpg') }}" />
                    </a>
                    <a href="https://imran94.github.io/designo/" class="project-name" target="_blank"
                        rel="noopener noreferrer">DESIGNO
                        WEBSITE (DEMO)</a>
                    <div class="project-tools">
                        <div class="project-tool">HTML</div>
                        <div class="project-tool">CSS</div>
                        <div class="project-tool">JAVASCRIPT</div>
                    </div>
                    <div class="project-links">
                        <a href="https://imran94.github.io/designo/" class="btn" target="_blank"
                            rel="noopener noreferrer">view project</a>
                        <a href="https://github.com/imran94/designo/" class="btn" target="_blank"
                            rel="noopener noreferrer">view code</a>
                    </div>
                </div>

                <div class="project">
                    <a href="https://imran94.github.io/space-tourism-website/" target="_blank"
                        rel="noopener noreferrer">
                        <img class="project-preview" src="{{ url('assets/previews/space.jpg') }}" />
                    </a>
                    <a href="https://imran94.github.io/space-tourism-website/" class="project-name" target="_blank"
                        rel="noopener noreferrer">SPACE TOURISM
                        WEBSITE (DEMO)</a>
                    <div class="project-tools">
                        <div class="project-tool">HTML</div>
                        <div class="project-tool">CSS</div>
                        <div class="project-tool">JAVASCRIPT</div>
                        <div class="project-tool">VUE.JS</div>
                    </div>
                    <div class="project-links">
                        <a href="https://imran94.github.io/space-tourism-website/" class="btn" target="_blank"
                            rel="noopener noreferrer">view project</a>
                        <a href="https://github.com/imran94/space-tourism-website" class="btn" target="_blank"
                            rel="noopener noreferrer">view code</a>
                    </div>
                </div>

                <div class="project">
                    <a href="https://feedback.imranraja.net" target="_blank" rel="noopener noreferrer">
                        <img class="project-preview" src="{{ url('assets/previews/feedback.jpg') }}" />
                    </a>
                    <a href="https://feedback.imranraja.net" class="project-name" target="_blank"
                        rel="noopener noreferrer">FEEDBACK BOARD WEB APP (DEMO)</a>
                    <div class="project-tools">
                        <div class="project-tool">HTML</div>
                        <div class="project-tool">CSS</div>
                        <div class="project-tool">JAVASCRIPT</div>
                        <div class="project-tool">VUE.JS</div>
                        <div class="project-tool">PHP</div>
                        <div class="project-tool">LARAVEL</div>
                    </div>
                    <div class="project-links">
                        <a href="https://feedback.imranraja.net" class="btn" target="_blank"
                            rel="noopener noreferrer">view project</a>
                        <a href="https://github.com/imran94/laravel-vue-feedback-app" class="btn" target="_blank"
                            rel="noopener noreferrer">view code</a>
                    </div>
                </div>

                <div class="project">
                    <a href="https://play.google.com/store/apps/details?id=com.symplified.order&pli=1" target="_blank"
                        rel="noopener noreferrer">
                        <img class="project-preview" src="{{ url('assets/previews/merchant.jpg') }}" />
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.symplified.order&pli=1"
                        class="project-name" target="_blank" rel="noopener noreferrer">SYMPLIFIED MERCHANT APP</a>
                    <div class="project-tools">
                        <div class="project-tool">ANDROID</div>
                        <div class="project-tool">JAVA</div>
                    </div>
                    <div class="project-links">
                        <a href="https://play.google.com/store/apps/details?id=com.symplified.order&pli=1"
                            class="btn" target="_blank" rel="noopener noreferrer">view project</a>
                    </div>
                </div>

                <div class="project">
                    <a href="https://play.google.com/store/apps/details?id=com.symplified.ordertaker&pli=1"
                        target="_blank" rel="noopener noreferrer">
                        <img class="project-preview" src="{{ url('assets/previews/pos.jpg') }}" />
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.symplified.ordertaker&pli=1"
                        class="project-name" target="_blank" rel="noopener noreferrer">SYMPLIFIED POINT-OF-SALE
                        APP</a>
                    <div class="project-tools">
                        <div class="project-tool">ANDROID</div>
                        <div class="project-tool">KOTLIN</div>
                    </div>
                    <div class="project-links">
                        <a href="https://play.google.com/store/apps/details?id=com.symplified.ordertaker&pli=1"
                            class="btn" target="_blank" rel="noopener noreferrer">view project</a>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <footer>
        <section id="contact">
            <div id="contact-label">
                <h3 id="contact-heading">Contact</h3>
                <div id="contact-text">I would love to hear about your project and how I could help. Please fill in the
                    form, and I'll get back to you as soon as possible.</div>
            </div>
            <form id="contact-form" method="POST" action="{{ route('submitContactForm') }}">
                @csrf
                <input class="input" id="name" name="name" placeholder="NAME" required />
                <input class="input" type="email" id="email" name="email" placeholder="EMAIL" required />
                <textarea class="input" id="message" name="message" rows="5" placeholder="MESSAGE"></textarea>
                <button type="submit">send message</button>
            </form>
        </section>

        <div class="nav-container">
            <a href="{{ route('index') }}" class="logo">imranraja</a>
            <nav class="nav-list">
                <a href="https://github.com/imran94" target="_blank" rel="noopener noreferrer">
                    <img class="nav-icon" src="{{ url('assets/github.svg') }}" />
                </a>
                <a href="https://www.linkedin.com/in/imran-raja-5911011b6/" target="_blank"
                    rel="noopener noreferrer">
                    <img class="nav-icon" src="{{ url('assets/linkedin.svg') }}" />
                </a>
            </nav>
        </div>
    </footer>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const status = '{{ session('status') }}';
    if (status) {
        Swal.fire({
            title: status,
            toast: true,
            timer: 5000,
            position: 'top',
            showConfirmButton: false
            // icon: 'success'
        });
    }

    const startAnimation = (entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                if (!entry.target.classList.contains("animate")) {
                    entry.target.classList.add("animate");
                }
                observer.unobserve(entry.target);
            }
        });
    };

    const observer = new IntersectionObserver(startAnimation);
    const options = {
        root: null,
        rootMargin: "0px",
        threshold: 1.0
    };

    document
        .querySelectorAll("main *")
        .forEach((el) => observer.observe(el, options));
</script>
