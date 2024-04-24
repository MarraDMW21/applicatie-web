<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
<header>
    <h1>Website voor oudere mensen met dyslexie</h1>
</header>
<main>
    <h2>Welkom op mijn website</h2>
    <p>Hier vindt u informatie en hulpmiddelen voor oudere mensen met dyslexie.</p>
    <h2>Wat is dyslexie?</h2>
    <p>Dyslexie is een leerstoornis die het lezen, schrijven en rekenen kan beïnvloeden. Het is geen teken van domheid, maar een andere manier van denken en leren.</p>
    <h2>Hoe kunnen we helpen?</h2>
    <p>We bieden informatie en hulpmiddelen om het lezen en schrijven makkelijker te maken. We bieden ook trainingen en workshops aan voor oudere mensen met dyslexie.</p>
    <h2>Dyslexie mode</h2>
    <p>Klik hier om de dyslexie mode in te schakelen: <a href="#" onclick="toggleDyslexiaMode()">Dyslexie mode</a></p>

    <!-- Form for text-to-speech conversion -->
    <form id="textToSpeechForm" action="/" method="post">
        <label for="text">Tekst om voor te lezen:</label><br>
        <textarea id="text" name="text" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Tekst naar spraak omzetten">
    </form>

    <!-- Div to display the generated audio file -->
    <div id="audioPlayer"></div>
</main>
<footer>
    <p> Bedankt!</p>
</footer>
<script>
    function toggleDyslexiaMode() {
        document.body.classList.toggle('dyslexia-mode');
    }

    // JavaScript function to display generated audio file
    function displayAudio(audioURL) {
        var audioPlayer = document.getElementById('audioPlayer');
        audioPlayer.innerHTML = '<audio controls><source src="' + audioURL + '" type="audio/wav"></audio>';
    }
</script>
</body>
</html>
