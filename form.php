<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My test page</title>
</head>

<body>
    <p>Formulaire de contact</p>
    <form action="thanks.php" method="post">
        <div>
            <label for="firstname">Prénom :</label>
            <input type="text" id="name" name="user_firstname">
        </div>
        <div>
            <label for="lastname">Nom :</label>
            <input type="text" id="name" name="user_lastname">
        </div>
        <div>
            <label for="email">E-mail&nbsp;:</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="phone">Téléphone:</label>
            <input type="numbers" id="phone" name="user_phone">
        </div>
        <div>
            <label for="subject">Sujet:</label>
            <select name="category" id="category-select" required="true">
                <option value="">  Merci de selectionner un sujet  </option>
                <option value="register">Inscription</option>
                <option value="technical">Problème technique</option>
                <option value="contribution">Contribuer</option>
                <option value="other">Autre</option>
            </select>   
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>
</html>