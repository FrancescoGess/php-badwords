<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Badwords Php</title>
</head>
<body>

    <h1>
        Form Parola da ***Censurare***
    </h1>
    <form action="./censored.php" method="POST">
        <label for="paragraph">Paragrafo</label>
        <textarea name="paragraph" id="paragraph" cols="30" rows="10" placeholder="Inserisci del testo..."></textarea>
        <label for="word">Censura sulla parola:</label>
        <input type="text" name="censura" id="word">
        <input type="submit" value="invia">
    </form>
    
</body>
</html>