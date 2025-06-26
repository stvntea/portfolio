<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Portfolio - TEA Steven</title>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function() {
            emailjs.init("8PSTeIxM0y7IwBr-O");
        })();
    </script>
    <script src="email.js"></script>
</head>

<body>
<header>
        <div class="mt-5">
        <ul class="flex justify-around">
            <li>
            <a class="font-bold text-2xl" href="./index.php">_TS</a>
            </li>
            <li>
            <a class="text-lg text-black-500 hover:underline mr-4" href="./à_propos.php">À propos</a>
            <a class="text-lg text-black500 hover:underline" href="./contact.php">Contact</a>
            </li>
        </ul>
        </div>
    </header>
    <div>
        <p class="txt-defilant">
            ORDER YOUR TEA ? ORDER YOUR TEA ? ORDER YOUR TEA ? ORDER YOUR TEA ? ORDER YOUR TEA ? ORDER YOUR TEA ?
        </p>
    </div>
    <div class="bg-gradient-to-b from-gray-100 to-gray-300 py-12">
        <form action="./contact.php" method="POST" class="max-w-2xl mx-auto p-8 bg-white rounded-lg shadow-lg">
            <h2 class="text-3xl font-extrabold mb-6 text-center text-gray-800">Contactez-moi</h2>
            <p class="text-center text-gray-600 mb-8">Vous avez une question ou une proposition ? Remplissez le formulaire ci-dessous et je vous répondrai dès que possible.</p>
            <div class="mb-6">
                <label for="name" class="block text-lg font-semibold text-gray-700 mb-2">Nom complet</label>
                <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Votre nom" required>
            </div>
            <div class="mb-6">
                <label for="email" class="block text-lg font-semibold text-gray-700 mb-2">Adresse email</label>
                <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Votre email" required>
            </div>
            <div class="mb-6">
                <label for="subject" class="block text-lg font-semibold text-gray-700 mb-2">Sujet</label>
                <input type="text" id="subject" name="subject" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Sujet de votre message" required>
            </div>
            <div class="mb-6">
                <label for="message" class="block text-lg font-semibold text-gray-700 mb-2">Message</label>
                <textarea id="message" name="message" rows="6" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Votre message" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-3 rounded-lg font-semibold shadow-md hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400" onclick="sendMail()">Envoyer</button>
            </div>
        </form>
    </div>
    <footer class="bg-gray-400 text-white py-6">
        <p class="text-xl font-semibold text-center mb-4">_CONTACT : anthonysteven.tea@gmail.com</p>
        <div class="container mx-auto text-center">
            <div class="flex justify-center space-x-4 mt-4">
                <a href="https://github.com/stvntea" target="_blank" class="hover:text-gray-600">
                    <i class="fab fa-github"></i> GitHub
                </a>
                <a href="https://www.linkedin.com/in/steven-tea-71b20a166/" target="_blank" class="hover:text-gray-600">
                    <i class="fab fa-linkedin"></i> LinkedIn
                </a>
            </div>
        </div>
    </footer>
</body>

</html>