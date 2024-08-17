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
            --silver: #dedede;
            --pale-grey: #ECECEC;
            --dark-grey: #242424;

            --body-padding-hor: 1em;
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
            margin: 2em 0;
        }

        h3 {
            font-weight: 700;
            font-size: 35px;
            color: white;
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

            /* position: absolute;
            width: 100%; */
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
        .nav-icon:hover {
            filter: invert(75%);
        }

        main {
            margin: 1em var(--body-padding-hor) 3em;
        }

        main,
        .profile {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        main {
            gap: 5em;
        }

        .profile {
            text-align: center;
        }

        .fancy-underline {
            border-bottom: 4px solid var(--green-blue);
        }

        .profile-photo {
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
        }

        .skill-img {
            width: 100%;
            max-height: 200px;
            /* max-width: 200px; */
        }

        .android-img {
            max-width: 100px;
        }

        .skill-name {
            margin: .5em 0;
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
            display: flex;
            flex-direction: column;
            gap: 1em;
        }

        .project-preview {
            max-width: 100%;
            max-height: 300px;

            transition: transform .3s;
        }

        .project-preview:hover,
        .project-preview:active {
            transform: scale(105%);
        }

        .project-name {
            font-weight: 700;
            font-size: 28px;

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
        #contact-form {
            display: flex;
            flex-direction: column;
        }

        footer {
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
        <div class="profile">
            <img class="profile-photo" src="{{ url('assets/me.jpg') }}" />
            <h3 class="profile-heading">Nice to meet you!<br />I'm <span class="fancy-underline">Imran Raja</span>.</h3>
            <a href="#" class="btn">contact me</a>
        </div>


        <div id="skills">
            <div class="skill">
                <img class="skill-img" src="{{ url('assets/html-css-js.png') }}" />
                <h3 class="skill-name">HTML/CSS/Javascript</h3>
                <div class="skill-duration">4 Years Experience</div>
            </div>

            <div class="skill">
                <img class="skill-img" src="{{ url('assets/vue.svg') }}" />
                <h3 class="skill-name">Vue.js</h3>
                <div class="skill-duration">3 Years Experience</div>
            </div>

            <div class="skill">
                <img class="skill-img" src="{{ url('assets/laravel.svg') }}" />
                <h3 class="skill-name">Laravel</h3>
                <div class="skill-duration">3 Years Experience</div>
            </div>

            <div class="skill">
                <img class="skill-img" src="{{ url('assets/spring.svg') }}" />
                <h3 class="skill-name">Java Spring Boot</h3>
                <div class="skill-duration">2 Years Experience</div>
            </div>

            <div class="skill">
                <img class="skill-img" src="{{ url('assets/angular.png') }}" />
                <div class="skill-duration">1 Year Experience</div>
            </div>

            <div class="skill">
                <img class="skill-img android-img" class="skill-img" src="{{ url('assets/android.png') }}" />
                <h3 class="skill-name">Android</h3>
                <div class="skill-duration">2 Year Experience</div>
            </div>
        </div>

        <div id="projects-section">
            <div id="projects-header">
                <h3 id="projects-heading">Projects</h3>
                <a href="#" class="btn">Contact Me</a>
            </div>

            <div id="projects-body">
                <div class="project">
                    <a href="https://audiophile.imranraja.net/public/" target="_blank" rel="noopener noreferrer">
                        <img class="project-preview" src="{{ url('assets/previews/audiophile.jpg') }}" />
                    </a>
                    <a href="https://audiophile.imranraja.net/public/" class="project-name" target="_blank"
                        rel="noopener noreferrer">AUDIOPHILE E-COMMERCE
                        WEBSITE</a>
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
                        rel="noopener noreferrer">DESIGNO DEVELOPMENT AGENCY
                        WEBSITE</a>
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
                        WEBSITE</a>
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
                        rel="noopener noreferrer">FEEDBACK BOARD WEB APP</a>
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
            <form id="contact-form">
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
