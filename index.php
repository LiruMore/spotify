<!DOCTYPE html>
<html lang="en">

<?php
include 'songs.php';

function duration_to_secs($time_stamp)
{
    $ts_components = explode(":", $time_stamp);
    $minutes = intval($ts_components[0]);
    $seconds = intval($ts_components[1]);
    $seconds_in_a_minute = 60;

    return ($minutes * $seconds_in_a_minute) + $seconds;
}

function timestamp_from_secs(...$seconds)
{
    $total_secs = array_sum($seconds);
    $seconds_in_an_hour = 60 * 60;
    $seconds_in_a_minute = 60;

    $hours = floor($total_secs / $seconds_in_an_hour);
    $remaining_seconds = $total_secs % $seconds_in_an_hour;
    $minutes = floor($remaining_seconds / $seconds_in_a_minute);

    $hour_unit = $hours <= 1 ? "hr" : "hrs";
    $timestamp = "$hours $hour_unit $minutes mins";

    return $timestamp;
}
?>
<div class="searchbar">
    <img src="images/Searchbar.png" alt="I was out of bruh">
</div>

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
                <img class="me-2" id="profile-pic" src="images/profile.png" alt="Daniel and Roberto selfie">
                <b> Liru More</b>
                <span class="highlight">
                    <?php
                    $num_songs = count($songs);
                    $songs_unit = $num_songs <= 1 ? "song" : "songs";

                    $song_duration_secs = array_map(function ($song) {
                        return duration_to_secs($song['duration']);
                    }, $songs);

                    $timestamp = timestamp_from_secs(...$song_duration_secs);

                    echo "• 2024 • $num_songs $songs_unit • $timestamp"
                    ?>
                </span>
            </p>
        </div>
    </header>

    <main class="container-fluid">
        <!-- ❥Songs -->
        <?php
        for ($i = 0; $i < count($songs); $i++) {
            $song = $songs[$i];
            $song_number = $i + 1;
            $song_title = $song['title'];
            $song_cover = $song['cover'];
            $song_artist = $song['artist'];
            $song_album = $song['album'];
            $song_duration = $song['duration'];
            echo "<div class=\"row text-center text-white mt-3 p-2 border-bottom\">";
            echo "  <p class=\"col\">$song_number</p>";
            echo "  <img class=\"col-1\" src=\"$song_cover\">";
            echo "  <p class=\"col\">$song_title</p>";
            echo "  <p class=\"col\">$song_artist</p>";
            echo "  <p class=\"col\">$song_album</p>";
            echo "  <p class=\"col\">$song_duration</p>";
            echo "</div>";
        }

        ?>
    </main>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>
    <div class="collum discription">

    </div>
    <!--media controls-->
    <footer>

    </footer>
</body>

</html>