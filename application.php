<!DOCTYPE html>
<html>
    <head>
        <title>exercice 1 tp 2</title>
        <link rel="stylesheet" href="style (1).css">
    </head>
    <body>
        <div class="container">
            <header class="header">
                <div class="logo">
                
                </div>
                <div class="titre">
                    <h1>Mon site de livraision-Nous vous livrons partout</h1>
                </div>
                <nav class="navbar">
                    <a href="www.accueil.com">Accuiel</a>
                    <a class="active" href="www.seconncter.com">Se connecter</a>
                    <a href="www.inscription.com">Inscription</a>

                </nav>
            </header>
            <main class="main">
                <section class="section">
                    <form name="inscription " action="valider.php" method="post">
                        <h2 class="titreFormulaire">Formulaire d'Inscription</h2>
                        <div class="formGroup">
                            <fieldset class="field_set">
                                <legend class="legend"><strong>Information de connexion</strong></legend>
                                <label for="">Pseaudo</label><br>
                                <input type="text" name="pseaudo" placeholder="votre pseaudo en un seile mot" size="40"><br>
                                <label for="">Mot de passe</label><br>
                                <input type="password" name="password" placeholder="votre mot de passe en 8 caractères au minimum" size="40"><br>
                                <label for="">Confirmer le mot de passe</label><br>
                                <input type="password" name="password" size="40" placeholder="confirmare le meme mot de passe"><br>
                                
                            </fieldset >

                        </div>
                        
                        <div class="formGroup">
                            <fieldset class="field_set">
                                <legend class="legend"><strong>Periode de livraison souhaitée</strong></legend><br>
                                <label for=""><input type="checkbox" name="info" value="Matin" checked="checked">Matin</label><br>
                                <label for=""><input type="checkbox" name="info" value="Midi">Midi</label> <br>
                                <label for=""><input type="checkbox" name="info" value="aprés-midi">aprés-midi</label> <br>
                                <label for=""><input type="checkbox" name="info" value="soir">Soir</label> <br>


                            </fieldset>


                        </div>
                        <div class="formGroup">
                            <fieldset class="field_set">
                                <legend class="legend"><strong>Trif souhaitée</strong></legend><br>
                                <label for=""><input type="radio" name="info" value="moin 50dh" checked="checked">Moin de 50 DH</label> <br>
                                <label for=""><input type="radio" name="info" value="entre 50 et 100">Entre 50 DH et 100 DH</label> <br>
                                <label for=""><input type="radio" name="info" value="entre 100 et 150">Entre 100 DH et 150 DH</label> <br>
                                <label for=""><input type="radio" name="info" value="indifférent">Indifférent</label> <br>
                            </fieldset>
                        </div>
                        <div class="formGroup">
                            <fieldset class="field_set">
                                <legend class="legend"><strong>Identité du client</strong></legend><br>
                                <label for="">Nom et prenom</label><br>
                                <input type="text" name="info" value="nom" size="50"><br>
                                <label for="">Cellulair/Telephone</label><br>
                                <input type="tel" name="info" value="nom" size="40"><br>
                                <label for="">Email</label><br>
                                <input type="email" name="info" value="nom" size="40"><br>
                                <label for="">Région</label><br>
                                <select name="region">
                                    <option value="0">choisir votre region</option>
                                    <option value="1">méknes</option>
                                    <option value="2">fes</option>
                                    <option value="3">casablanca</option>
                                    <option value="4">aucun</option>

                                </select>
                                <br>
                                <label for="">Adresse exacte(Quartier/Rue/N°)</label><br>
                                <textarea name="adresse" id="" cols="35" rows="4">Votre Adresse?</textarea><br>

                            </fieldset>

                        </div>
                        
                        <div class="formGroup">
                            <fieldset class="field_set">
                                <legend class="legend"><strong>Autre information</strong></legend><br>
                                <label for="">Autre précision</label><br>
                                <textarea name="inforamtion" id="" cols="35" rows="5"></textarea>

                            </fieldset>

                        </div>
                        <br>
                        <div class="bouttom">
                            <input type="submit" value="valider" >
                            <input type="reset" value="annuler">

                        </div>


                    </form>

                </section>

            </main>

        </div>
    </body>
    
    <style>
    .container{
     max-width: 850px;
     min-height: 2000px;
     background-color: antiquewhite;
     margin: auto;
     padding: 10px;


}
.header{
     display: flex;
     flex-direction: row;
     flex-wrap: wrap;
     background-color: antiquewhite;
     color: brown;
     padding: 15px 0 0 0;
     background-attachment: fixed;

}
.logo{
     width: 120px;
     margin-top: auto;
     margin-bottom: auto;
     padding: 10px;

}
.titre{
     margin:auto;
     text-align: center;
     flex: auto;

}
.navbar{
     
     display: flex;
     background-color: rgb(211, 112, 112);
     flex: 100%;
     padding: 20px 20px ;
     flex-wrap: wrap;
     justify-content: center;
}
.navbar a{
     position: sticky;
     top: 0px;
     text-decoration: blink;
     color: black;
     font-weight: bold;
     padding: 5px;
}
.navbar a:hover , .navbar >.active{
     text-decoration: underline;
     background-color: antiquewhite;
}
.main{
     margin: 0;
     background-color: antiquewhite;
     padding: 5px;
}
.section{
     display: flex;
     flex-direction: row;
     background-color: rgb(118, 40, 190);
     background-color: aqua;
     background-color: salmon;
     background-color:
}
.section form{
     display: flex;
     flex-wrap: wrap;
     flex-direction: row;
}
.section .formGroup{
     flex: 40px;
     flex-direction: column;
}
fieldset{
     border-width:2px ;
     border-radius: 5px;
     border-color: rgb(231, 124, 105);
     border-style: solid;
}
fieldset legend{
     color: brown;
     font-weight: bold;
}
.section form .titreFormulaire{
     flex: 100%;
     padding: 10px;
     margin: 0px;
}
.section form select{
     line-height: 1.5em;
     padding: 5px;
     border-radius:10px ;
     font-weight:bold ;
     margin-bottom:10px ;
     margin-top: 5px;

}
.section form input:focus{
     border-color: darksalmon;
     color: peachpuff;
     background-color:rgb(194, 111, 111);
}
.section form input[ type="radio"] , .section form input[type="checkbox"]{
     margin: 8.5px;
     font-weight: bold;
}
label{
     font-style: oblique;
     color: rgb(59, 4, 4);
     font-weight: bold;
     padding-bottom: 50px;
}
.section form textarea{
     line-height: 1.5em;
     padding: 5px;
     border-radius:10px ;
     font-weight:bold ;
     margin-bottom:10px ;
     margin-top: 5px;

}
.section form textarea:focus{
     border-color: brown;
     color: crimson;
     background-color: crimson;
}
.section form .bouttom{
     text-align: center;
     padding: 15px;
     flex: 100%;
     background-color: brown;
     color: black;
}
input[type="submit"],input[type="reset"]{
     background-color: rgb(253, 242, 198);
}
form input::placeholder {
     font-style: italic;
     color: rgb(211, 112, 112);
   
}
@media all and (max-width:700px) {
     .section form{
         flex-direction: column;
         width: 100%;
     }
     .section .fromGroup{
         width: 100%;
     }
 }
 @media all and (max-width:700px){
     .header{
         flex-direction: column;
     }
     .grande{
         flex: 100%;
     }
 }
 @media all and (max-width:600px){
     .navbar{
         flex-direction: column-reverse;
     }
      a{
         text-align: center;
     }
     .section form .titreFormulaire{
          text-align: center;
     }
 }















    </style>














</html>
