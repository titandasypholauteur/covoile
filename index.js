var html =  '<!DOCTYPE html>'+
'<html lang="fr-FR">'+
'<head>'+
'    <meta charset="utf-8">'+
'    <title>covoile</title>'+
'    <link rel="stylesheet" href="style.css">'+
'    <script>'+
'        function validateForm(formId) {'+
'            const form = document.getElementById(formId);'+
'            const password = form.querySelector(\'input[name="password"]\').value;'+
'            const confirmPassword = form.querySelector(\'input[name="confirm_password"]\').value;'+
'            if (password !== confirmPassword) {'+
'                alert("Les mots de passe ne correspondent pas.");'+
'                return false;'+
'            }'+
'            return true;'+
'        }'+
'    </script>'+
'</head>'+
'<body>'+
'    <main>'+
'        <h1><center>covoile</center></h1><br />'+
'        <p>Tu adoreras naviguer, faire du voilier, peut-être même être skippeur/skippeuse. Navigue en toute sécurité avec des skippeurs/skippeuses professionnel.le.s.</p><br />'+
'        <h2>Connexion</h2><br />'+
'        <form id="connexion" class="formulaire" method="post" action="." onsubmit="return validateForm(\'connexion\')">'+
'            <fieldset>'+
'                <p class="champ">'+
'                    <label for="pseudo">Pseudo</label>'+
'                    <input id="pseudo" name="pseudo" value="" class="" required />'+
'                </p>'+
'                <p class="champ">'+
'                    <label for="pass">Mot de passe</label>'+
'                    <input type="password" id="pass" name="password" minlength="8" required />'+
'                </p>'+
'            </fieldset>'+
'            <section>'+
'                <button type="submit">Connecte-toi</button>'+
'            </section>'+
'        </form>'+
''+
'        <h2>Inscription</h2><br />'+
'        <form id="inscription" class="formulaire" method="post" action="." onsubmit="return validateForm(\'inscription\')">'+
'            <fieldset>'+
'                <p class="champ">'+
'                    <label for="pseudo">Pseudo</label>'+
'                    <input id="pseudo" name="pseudo" value="" class="" required />'+
'                </p>'+
'                <p class="champ">'+
'                    <label for="telephone">Numéro de téléphone</label>'+
'                    <input id="telephone" name="telephone" value="" class="" required />'+
'                </p>'+
'                <p class="champ">'+
'                    <label for="email">Courriel</label>'+
'                    <input id="email" name="courriel" value="" class="" required />'+
'                </p>'+
'                <p class="champ">'+
'                    <label for="social">Réseaux sociaux'+
'                        <select name="reseausocial" class="">'+
'                            <option value=""></option>'+
'                            <option value="x">X</option>'+
'                            <option value="tiktok">TikTok</option>'+
'                            <option value="youtube">YouTube</option>'+
'                            <option value="insta">Instagram</option>'+
'                        </select>'+
'                    </label>'+
'                </p>'+
'                <p class="champ">'+
'                    <label for="pass">Mot de passe</label>'+
'                    <input type="password" id="pass" name="password" minlength="8" required />'+
'                </p>'+
'                <p class="champ">'+
'                    <label for="confirm_pass">Confirme ton mot de passe</label>'+
'                    <input type="password" id="confirm_pass" name="confirm_password" minlength="8" required />'+
'                </p>'+
'            </fieldset>'+
'            <section>'+
'                <button type="submit">Inscris-toi</button>'+
'            </section>'+
'        </form>'+
'    </main>'+
'</body>'+
'</html>';