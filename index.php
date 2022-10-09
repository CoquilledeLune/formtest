<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="thanks.php" method="post">
      <div>
          <label for="Nom">Nom :</label>
          <input type="text" id="name" name="user_name">
      </div>
      <div>
          <label for="Prénom">Prénom :</label>
          <input type="text" id="prenom" name="user_prenom">
      </div>
      <div>
          <label for="mail">e-mail&nbsp;:</label>
          <input type="email" id="mail" name="user_mail">
      </div>
      <div>
          <label for="telephone">Téléphone :</label>
          <input type="text" id="telephone" name="user_phone">
      </div>
          <label for="sujet">Sujet :</label>
          <select name="sujet" id="sujet">
              <option value="Question informatique">Question informatique</option>
              <option value="Informations sur vos horaires">Informations sur vos horaires</option>
              <option value="Je souhaite réserver">Je souhaite réserver</option>
              <option value="Autres">Autres</option>
          </select>
      <div>
          <label for="msg">Message :</label>
          <textarea id="msg" name="user_message"></textarea>
      </div>
      <div  class="button">
        <button  type="submit">Envoyer votre message</button>
      </div>
  </form>

  </body>
</html>
