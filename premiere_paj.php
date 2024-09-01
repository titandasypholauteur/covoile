<?php
$string =  '<!DOCTYPE html>'.
'<html lang="fr-FR">'.
'<head>'.
'    <meta charset="utf-8">'.
'    <title>Cocamional</title>'.
'    <link rel="stylesheet" href="style.css">'.
'    <script>'.
'        document.addEventListener(\'DOMContentLoaded\', function() {'.
'            // Exemple de script pour montrer une alerte lors du clic sur un bouton'.
'            document.getElementById(\'profileButton\').addEventListener(\'click\', function() {'.
'                alert(\'Tu vas être redirigé vers ton profil\');'.
'            });'.
''.
'            // Exemple de script pour changer dynamiquement le texte du bouton'.
'            document.getElementById(\'logoutButton\').addEventListener(\'mouseover\', function() {'.
'                this.textContent = \'Es-tu sûr de vouloir te déconnecter ?\';'.
'            });'.
''.
'            document.getElementById(\'logoutButton\').addEventListener(\'mouseout\', function() {'.
'                this.textContent = \'Te déconnecter\';'.
'            });'.
'        });'.
'    </script>'.
'</head>'.
'<body>'.
'    <h1 style="text-align: center;">Cocamional</h1>'.
'    <br />'.
''.
'    <section style="text-align: center;">'.
'        <button>'.
'            <a href="cocamional_questcequecest.html">Cocamional, qu\'est-ce que c\'est ?</a>'.
'        </button>'.
'    </section>'.
''.
'    <section style="text-align: right;">Invitations DM Notifications</section>'.
''.
'    <section style="text-align: right;">'.
'        <button>'.
'            <a href="parametres.html">Paramètres</a>'.
'        </button>'.
'    </section>'.
''.
'    <section style="text-align: center;">'.
'        <button id="profileButton">'.
'            <a href="mon_profil.html">Ton profil</a>'.
'        </button>'.
'    </section>'.
''.
'    <section style="text-align: center;">'.
'        <button>'.
'            <a href="mes_trajets.html">Mes trajets</a>'.
'        </button>'.
'    </section>'.
''.
'    <section style="text-align: center;">'.
'        <button>'.
'            <a href="ports.html">Trajets possibles et ports</a>'.
'        </button>'.
'    </section>'.
''.
'    <main>'.
'        <p>Nous t\'aidons à trouver le skippeur/la skippeuse et/ou les passager.e.s grâce à qui tu vivras une aventure unique.</p>'.
'        <br />'.
''.
'        <p class="champ">'.
'            <label for="departure">Port de départ</label>'.
'            <input id="departure" name="departure" />'.
'        </p>'.
''.
'        <p class="champ">'.
'            <label for="destination">Port de destination</label>'.
'            <input id="destination" name="destination" />'.
'        </p>'.
''.
'        <div>'.
'            <label for="ctrinteret">Centres d\'intérêt</label>'.
'            <input type="text" id="ctrinteret" name="ctrinteret" minlength="4" required />'.
'        </div>'.
'        <br />'.
''.
'        <table>'.
'            <tr>'.
'                <td><img src="" alt="image 1" width="400" height="341" title="image 1" /></td>'.
'                <td><img src="" alt="image 2" width="400" height="341" title="image 2" /></td>'.
'                <td><img src="" alt="image 3" width="400" height="341" title="image 3" /></td>'.
'                <td><img src="" alt="image 4" width="400" height="341" title="image 4" /></td>'.
'            </tr>'.
'            <tr>'.
'                <td>Pseudo</td>'.
'                <td>Pseudo</td>'.
'                <td>Pseudo</td>'.
'                <td>Pseudo</td>'.
'            </tr>'.
'            <tr>'.
'                <td>Expérience en voilier</td>'.
'                <td>Expérience en voilier</td>'.
'                <td>Expérience en voilier</td>'.
'                <td>Expérience en voilier</td>'.
'            </tr>'.
'        </table>'.
'        <br />'.
''.
'        <section style="text-align: center;">'.
'            <button id="logoutButton">Te déconnecter</button>'.
'        </section>'.
''.
'    </main>'.
'</body>'.
'</html>';

 echo $string; 
?>