<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Se connecter / S'inscrire</title>
    <link rel="stylesheet" href="../style-tailwind/style-tailwind.css">
</head>
<body style="height: 100vh;background: linear-gradient(#3B75CD, #0D202B);">
    <header class="flex bg-gray-dark-2" style="background: #252424; display: flex; gap: 20px; color: white; padding: 20px;align-items: center;justify-content: center;">
        <form action="">
            <input class="" type="text" style="border-radius:20px;">
        </form>
        <nav class="flex" style="display: flex; flex-direction:row; gap: 20px;">
            <a class="" style="padding: 5px; padding-left: 20px; padding-right: 20px;" href="./accueil.php">ACCUEIL</a>
            <a class="" style="padding: 5px; padding-left: 20px; padding-right: 20px;" href="">FILMS</a>
            <a class="" style="padding: 5px; padding-left: 20px; padding-right: 20px;" href="">MON COMPTE</a>
            <a class="" style="padding: 5px; padding-left: 20px; padding-right: 20px;" href="">USERS</a>
        </nav>
    </header>
    <main class="bg-gradient-to-t from-blue-one to-blue-two" style="padding: 20px;height: 80vh;">
        <div class="" style="display:flex;flex-direction:column; align-items: center; justify-content: center;height: 100%;">
            <h1 style="color:white;">S'INSCRIRE ...</h1>
            <form class="" action="" style="width: 50%;display: flex;flex-direction: column;gap:20px;margin-top: 20px;">
                <div style="text-align: center;">
                    <input class="" type="text" placeholder="Saisir votre nom" style="border-radius:20px;padding: 10px;text-align: center;outline-color:white;width: 50%;">
                </div>
                <div style="text-align: center;">
                    <input class="" type="text" placeholder="Saisir votre prénom" style="border-radius:20px;padding: 10px;text-align: center;outline-color:white;width: 50%;">
                </div>
                <div style="text-align: center;">
                    <input class="" type="email" placeholder="Saisir votre email" style="border-radius:20px;padding: 10px;text-align: center;outline-color:white;width: 50%;">
                </div>
                <div style="text-align: center;">
                    <input class="" type="password" placeholder="Saisir votre mot de passe" style="border-radius:20px;padding: 10px;text-align: center;outline-color:white;width: 50%;">
                </div>
                <input class="" type="submit" value="S'inscrire" style="width:200px;margin:auto;padding:10px; padding-right: 20px;padding-left: 20px;background-color: green; color:white;margin-top: 40px;border-radius:20px;">
            </form>
        </div>
    </main>
</body>
</html>
