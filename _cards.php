<?php
$cards = [

        ['prenom' => 'guillaume', 'nom' => 'Loup', 'langage' => 'Langage JS'],
        ['prenom' => 'maxime', 'nom' => 'Vasseur', 'langage' => 'Langage PHP'],
        ['prenom' => 'florent', 'nom' => 'Loup', 'langage' => 'Langage JS'],
        ['prenom' => 'jimmy', 'nom' => 'Loup', 'langage' => 'Langage JS'],
        ['prenom' => 'Guillaume', 'nom' => 'Loup', 'langage' => 'Langage JS'],
        ['prenom' => 'Guillaume', 'nom' => 'Loup', 'langage' => 'Langage JS'],
];


?>

<div class="container-fluid">
    <div class="form-title-box">
        <h2 class="form-title"><span class="form-title-bold"><span class="color-wild">T</span>rombinoscope</span></h2>
        <div class="form-underline"></div>
    </div>
    <div class="row">
        <?php
        foreach ($cards as $students){
            ?>
        <div class="trombi-box-pict col-12 col-md-4">
            <a href="profil-<?php echo $students['prenom'] ?>.php"><img class="trombi-pict" src="images/<?php echo $students['prenom'] ?>.jpg" alt="photo de profil 1"></a>
            <div class="trombi-bloc-text col-12">
                <p class="trombi-text-title"><?php echo $students['prenom'] . ' ' . $students['nom'];?></p>
                <p class="trombi-text-subtitle"><?php echo $students['langage'];?></p>
            </div>

        </div>
        <?php } ?>


