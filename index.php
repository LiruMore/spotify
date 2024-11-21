<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spotify</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/style.css" />
</head>



<body>
    <!-- ❥Songs -->
    <?php
    include 'songs.php';
    ?>

    <div class="Profile">s
        <img src="images/Profile.jpg" alt="Roberto and Danial taking a picture on a mirror">
    </div>

    <header class="D gradient">
        <img class="D album" src="images/Playlist_pic.png" alt="">

        <div>
            <p>
                Playlist
            </p>
            <p style="font-size:4.5rem; ">
                <b> Alone </b>
            </p>
            <p style="font-size:.8rem;">
                <b> Liru More</b> <span class="highlight">
                    • 2024 • ? songs, ? hrs ? mins</span>
            </p>
        </div>
    </header>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
    <div class="collum discription">

    </div>
</body>

<!--media controls-->
<footer>


</footer>

</html>