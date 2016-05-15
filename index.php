<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <script src="tts.js"></script>
    <script>
        $( document ).ready(function() {
            startDictation(event);
        });
    </script>
</head>
<body>

<div id="results">
    <span id="final_span" class="final"></span>
    <span id="interim_span" class="interim"></span>
</div>

<p id="text"></p>

<?php include('js/command.php'); ?>
</body>
</html>