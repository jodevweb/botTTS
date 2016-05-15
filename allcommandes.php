    /*

    Commandes du bot

    L'utilisation de replace peut être une bonne chose pour gérer des arguments.
    Pour utiliser une réponse vocale, utiliser PlayTTS('message', 'lang');

    */

    command = command.toLowerCase();
    var site = command.replace("ouvrir ", "");
    bonjour = command.indexOf('bonjour');
    bonjourperso = command.indexOf("bonjour c'est");
    var gens = command.replace("bonjour c'est ", "");
    heure = command.indexOf('quelle heure est-il');
    page = command.indexOf('ouvrir ' + site);


    if (bonjour != -1) {
        $('#text').text('Salut');
        playTTS("Salut !","fr");
        final_span.innerHTML = '';
        interim_span.innerHTML = '';
        final_transcript = '';
        interim_transcript = '';
    }

    if (bonjourperso != -1) {
    $('#text').text('Salut '+gens+' ça va ?');
    playTTS("Salut "+gens+" !","fr");
    final_span.innerHTML = '';
    interim_span.innerHTML = '';
    final_transcript = '';
    interim_transcript = '';
    }

    if (heure != -1) {
        $('#text').text('il est <?php echo date('H:i:s'); ?>');
        playTTS("il est <?php echo date('H:i:s'); ?>","fr");
        final_span.innerHTML = '';
        interim_span.innerHTML = '';
        final_transcript = '';
        interim_transcript = '';
    }

    var piste = site.split(" ");

    if (page != -1) {
        if (piste[0] != "youtube" || piste[0] != "google") {
            playTTS("ouverture de " + site,"fr");
            var x = setTimeout(function() { top.location.href = 'http://www.' + site + '.com'; }, 5000);
            final_span.innerHTML = '';
            interim_span.innerHTML = '';
            final_transcript = '';
            interim_transcript = '';
        } else {
            if (piste[0] == "youtube") {
                playTTS("ouverture de " + site,"fr");
                piste = command.replace("ouvrir youtube ", "");
                var x = setTimeout(function() { top.location.href = 'https://www.youtube.com/results?search_query='+piste; }, 5000);
                final_span.innerHTML = '';
                interim_span.innerHTML = '';
                final_transcript = '';
                interim_transcript = '';
            }
            if (piste[0] == "google") {
                playTTS("ouverture de " + site,"fr");
                search = command.replace("ouvrir google ", "");
                var x = setTimeout(function() { top.location.href = 'https://www.google.fr/#q='+search; }, 5000);
                final_span.innerHTML = '';
                interim_span.innerHTML = '';
                final_transcript = '';
                interim_transcript = '';
            }
        }
    }