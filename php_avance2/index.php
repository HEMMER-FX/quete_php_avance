
<form  action="form.php"  method="post">

<div>

  <label  for="nom">Nom :</label>

  <input  type="text"  id="nom"  name="user_name">

</div>

<div>

  <label  for="prenom">Prénom :</label>

  <input  type="text"  id="lastname"  name="user_lastname">

</div>

<div>
  <label for="tel"> Téléphone : </label>

  <input type="tel" id="tel" name="tel"
        pattern="[0-9]{10}"
        required>
</div>

<div>

    <label for="object">Objet de la reqête :</label>

    <select name="object" id="object">
        <option value="">--Please choose an option--</option>
        <option value="Problème réseau">Problème réseau</option>
        <option value="pass_lost">Mot de passe perdu</option>
        <option value="mail_lost">E_mail perdu</option>
        <option value="num_lost">Numéro de téléphone perdu</option>

    </select>

</div>

<div>

  <label  for="courriel">E-mail :</label>

  <input  type="email"  id="courriel"  name="user_email">

</div>

<div>

  <label  for="message">Message :</label>

  <textarea  id="message"  name="user_message"></textarea>

</div>

<div  class="button">

  <button  name="submit_button" type="submit">Envoyer votre message</button>

</div>

</form>
<?php

?>
