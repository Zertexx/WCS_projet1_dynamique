<?php
    include ('_head.php');
?>

<body>

<?php
include ('_header.php');
?>

<div class="container-fluid">
    <div class="row">
        <div class="profil_text-title">
            <h2 class="form-title"><span class="form-title-bold"><span class="color-wild">P</span>rofil élève</span></h2>
            <div class="form-underline"></div>
        </div>
    </div>
    <div class="row">
        <div class="body_img3 col-8 col-md-2 offset-2 offset-md-8">
            <img src="https://avatars3.githubusercontent.com/u/8874047?s=200&v=4" class="logo_img3">
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col-12 col-md-6 profil-main-img">
            <img class="profil_portrait1" src="images/florent1.jpg" alt="photo profil">
        </div>
        <span class="profil_about">A  B  O  U  T <span class="profil_about2">------</span></span>
        <div class="col-12 col-md-5 profil-text-box">
            <h3 class="profil_nom">Florent Duval</h3>
            <p class="profil_text col-md-11">
					<span class="profil_text2">Âge : 34<br>
						Promo : 2019 Bordeaux<br>
					Langage choisi : PHP</span><br><br>

                Originaire de la banlieue parisienne, Florent a ensuite déménagé dans la ville de Troyes dans l'Aube.
                Il est arrivé à Bordeaux début d’année 2007 et a travaillé en tant que commercial dans les complémentaires santé, puis pour la marque Free en tant que conseiller multimédia au service résiliation depuis 12 ans.
                Il fait désormais parti de la formation développeur web full stack de la Wild Code School et entame ainsi sa reconversion professionnelle.

            </p>
            <ul class="list-unstyled list-inline text-center profil_logo">
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1"><img src="images/github.jpg" alt="amagg" class="arrond profil_btn"></a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1"><img src="images/facebook.JPG" alt="amagg" class="arrond profil_btn"></a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-li mx-1"><img src="images/twitter.JPG" alt="amagg" class="arrond profil_btn"></a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-dribbble mx-1"><img src="images/linkdin.JPG" alt="amagg" class="arrond profil_btn"></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php
    include ('_footer.php');

    ?>
</body>
</html>
