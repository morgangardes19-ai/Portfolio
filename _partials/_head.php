<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morgan Gardès | Portfolio</title>
    <link href="../assets/styles/style.css" rel="stylesheet">
    <script src="../assets/scripts/overlay-menu-burger-mobile.js" defer></script>
    <link rel="icon" href="../assets/images/bulles-favicon-32px.png">
    <!-- Police d'écriture : JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <!-- Police d'écriture : Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>

<body class="relative flex flex-col px-4 bg-bg-page-tempo">
    <header class="fixed flex flex-row gap-32 items-center justify-between border border-border-header rounded-[50px] backdrop-blur-xl top-4 left-4 right-4 px-4 py-2">
        <!-- Ici : photo de profil -->
        <div class="flex flex-row gap-4 items-center ">
            <img src="../assets/images/photo-temporaire.jpg" class="rounded-[50%] border border-blue-500 w-10 h-10" alt="photo de profil">
            <a href=""></a>
            <p class="hidden text-nom-profil-header lg:flex">Morgan Gardès</p>
        </div>
        <!-- Partie droite header version Mobile -->
        <nav class="flex lg:hidden flex-row gap-2 ">
            <img id="logo-burger" src="../assets/images/menu-burger.png" alt="menu hamburger">
            <div id="overlay-burger" class="fixed transition-all duration-300 translate-x-full top-16.5 -right-4 flex flex-col items-center gap-6 px-16 py-14 text-boutons-header text-[16px] inter-regular bg-black/80 rounded-md tracking-[10%] text-center">
                <img id="croix-menu-burger" class="absolute top-6 right-6" src="../assets/images/croix-32px.png" alt="logo croix">
                <a class="text-gris-texte-header hover:text-bleu-texte-hover-header" href="">Profil</a>

                <p class="text-gris-texte-header hover:text-bleu-texte-hover-header">Compétences</p>

                <p class="text-gris-texte-header hover:text-bleu-texte-hover-header">Projets</p>

                <p class="text-gris-texte-header hover:text-bleu-texte-hover-header">Contact</p>
            </div>
        </nav>
        <!-- Partie droite header version PC -->
        <nav class="hidden lg:flex flex-row gap-2">
            <div>
                <a class="text-gris-texte-header hover:text-bleu-texte-hover-header" href="">Profil</a>
            </div>
            <div>
                <p class="text-gris-texte-header hover:text-bleu-texte-hover-header">Compétences</p>
            </div>
            <div>
                <p class="text-gris-texte-header hover:text-bleu-texte-hover-header">Projets</p>
            </div>
            <div>
                <p class="text-gris-texte-header hover:text-bleu-texte-hover-header">Contact</p>
            </div>
        </nav>
    </header>