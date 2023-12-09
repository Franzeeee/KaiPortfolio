<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kai Noveda</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
    <nav>
        <ul>
            <li id="home-link" class="selected" onclick="navigateToSection('home')">home</li>
            <li id="about-link" onclick="navigateToSection('about')">About Me</li>
            <li id="bio-link" onclick="navigateToSection('biography')">Biography</li>
            <li id="edu-link" onclick="navigateToSection('education')">Education</li>
            <li id="skills-link" onclick="navigateToSection('skills')">Skills</li>
            <li id="works-link" onclick="navigateToSection('works')">Works</li>
            <li id="hobbies-link" onclick="navigateToSection('hobbies')">Hobbies</li>
            <li id="likes-link" onclick="navigateToSection('likes')">Likes and Dislikes</li>
            <li id="contact-link" onclick="navigateToSection('contact')">Contact</li>
        </ul>
    </nav>
    <section id="home">
        <h1>Home</h1>
    </section>
    <section id="about">
        <h1>About Me</h1>
    </section>
    <section id="biography">
        <h1>Biography</h1>
    </section>
    <section id="education">
        <h1>Education</h1>
    </section>
    <section id="skills">
        <h1>Skills</h1>
    </section>
    <section id="works">
        <h1>Works</h1>
    </section>
    <section id="hobbies">
        <h1>Hobbies</h1>
    </section>
    <section id="likes">
        <h1>Likes And Dislikes</h1>
    </section>
    <section id="contact">
        <h1>Contact</h1>
    </section>

    <script defer src="{{ asset('js/index.js') }}"></script>
</body>
</html>
