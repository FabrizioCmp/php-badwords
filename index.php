<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <title>BadWords</title>
</head>
<body>
    <div class="container">
        <h1>BadWords &#129324;</h1>
        <div class="form_box">
            <form action="text.php" class="my_form" method="post">
                <label for="textarea">Testo:</label>
                <textarea name="testo" id="textarea" cols="30" rows="10" placeholder="Inserire testo.."></textarea>
                <label for="badword">Parola da censurare:</label>
                <input type="text" id="badword" placeholder="Inserire parola da censurare.." name="parola">
                <button class="my_btn">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>