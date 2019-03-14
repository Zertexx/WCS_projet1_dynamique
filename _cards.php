<?php
$cards = [

    'guillaume',
    'maxime',
    'jimmy',
    'florent',
    'guillaume',
    'maxime',
    'jimmy',
    'florent',
    'guillaume',
    'maxime',
    'jimmy',
    'florent',
];


?>

<div class="container-fluid">
    <div class="form-title-box">
        <h2 class="form-title"><span class="form-title-bold"><span class="color-wild">T</span>rombinoscope</span></h2>
        <div class="form-underline"></div>
    </div>
    <div class="row">
        <?php
        foreach ($cards as $profile){
            ?>
        <div class="trombi-box-pict col-12 col-md-4">
            <a href="profil-<?php echo ($profile) ?>.html"><img class="trombi-pict" src="images/<?php echo ($profile) ?>.jpg" alt="photo de profil 1"></a>
            <div class="trombi-bloc-text col-12">
                <p class="trombi-text-title">Guillaume Loup</p>
                <p class="trombi-text-subtitle">Langage JS</p>
            </div>

        </div>
        <?php } ?>


