<?php $title = "Lucie Castel"; ?>

<?php ob_start(); ?>

<h1>Contact</h1>

<h3>Ma vie mon oeuvre</h3>
<p>Lucie Castel naît en Charente-Maritime. 
    Après des études de graphisme et de cinéma d'animation, elle intègre les Éditions FLBLB. 
    Elle participe au collectif Afghanistan, récits de guerre (2011) et exerce comme coloriste pour plusieurs ouvrages, comme Petite Histoire des colonies françaises, Bart O'Poil en tournage, 
    Petite Histoire de la Révolution française, Le Profil de Jean Melville, Des milliards de miroirs… Elle est illustratrice pour des périodiques comme Alter Échos, Médor
</p>

<h3>Me contacter</h3>
<form action="index.php?action=mail" method="post">
    <div>
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" placeholder="Votre nom">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Votre email">
    </div>
    <div>
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Votre message"></textarea>
    </div>
    <button type="submit">Envoyer</button>
</form>


<?php 
$content = ob_get_clean();
require('layout.php');