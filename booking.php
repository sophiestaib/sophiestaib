<?php
function h($s)
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

$submitted = false;
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $date = trim($_POST['date'] ?? '');
    $time = trim($_POST['time'] ?? '');
    $consent = isset($_POST['consent']);

    if ($name === '') $errors[] = 'Bitte Namen angeben.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Bitte gültige E-Mail angeben.';
    if (!$consent) $errors[] = 'Bitte den Datenschutz bestätigen.';

    if (empty($errors)) {
        $submitted = true;
        // In a real app, save to DB or send email. Here we simply show confirmation.
    }
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termin buchen | Salon Elegance</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen p-6">
<a href="index.php" class="text-indigo-600 hover:underline">&larr; Zurück zur Startseite</a>
<main class="max-w-2xl mx-auto bg-white p-6 rounded shadow mt-6">
    <h1 class="text-2xl font-bold mb-4">Termin buchen</h1>

    <?php if ($submitted): ?>
        <div class="p-4 bg-green-100 text-green-800 rounded">
            Danke, <?= h($name) ?>! Ihr Terminwunsch wurde erhalten. Wir kontaktieren Sie unter <?= h($email) ?> zur
            Bestätigung.
        </div>
    <?php else: ?>
        <?php if ($errors): ?>
            <div class="p-4 bg-red-100 text-red-800 rounded mb-4">
                <ul class="list-disc pl-5">
                    <?php foreach ($errors as $e): ?>
                        <li><?= h($e) ?></li><?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="post" novalidate class="space-y-4">
            <label class="block">
                <span class="text-sm font-medium">Name</span>
                <input name="name" required class="mt-1 block w-full border rounded p-2"
                       value="<?= h($_POST['name'] ?? '') ?>"/>
            </label>

            <label class="block">
                <span class="text-sm font-medium">E-Mail</span>
                <input name="email" type="email" required class="mt-1 block w-full border rounded p-2"
                       value="<?= h($_POST['email'] ?? '') ?>"/>
            </label>

            <label class="block">
                <span class="text-sm font-medium">Leistung</span>
                <select name="service" class="mt-1 block w-full border rounded p-2">
                    <option value="Haarschnitt" <?= isset($_POST['service']) && $_POST['service'] === 'Haarschnitt' ? 'selected' : '' ?>>
                        Haarschnitt
                    </option>
                    <option value="Coloration" <?= isset($_POST['service']) && $_POST['service'] === 'Coloration' ? 'selected' : '' ?>>
                        Coloration
                    </option>
                    <option value="Styling" <?= isset($_POST['service']) && $_POST['service'] === 'Styling' ? 'selected' : '' ?>>
                        Styling
                    </option>
                </select>
            </label>

            <div class="grid grid-cols-2 gap-4">
                <label class="block">
                    <span class="text-sm font-medium">Datum</span>
                    <input name="date" type="date" class="mt-1 block w-full border rounded p-2"
                           value="<?= h($_POST['date'] ?? '') ?>"/>
                </label>
                <label class="block">
                    <span class="text-sm font-medium">Uhrzeit</span>
                    <input name="time" type="time" class="mt-1 block w-full border rounded p-2"
                           value="<?= h($_POST['time'] ?? '') ?>"/>
                </label>
            </div>

            <label class="flex items-center space-x-3">
                <input type="checkbox" name="consent" <?= isset($_POST['consent']) ? 'checked' : '' ?> />
                <span class="text-sm">Ich habe die <a href="privacy.php" class="text-indigo-600 underline">Datenschutzerklärung</a> gelesen und stimme zu.</span>
            </label>

            <div>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Anfrage senden</button>
            </div>
        </form>
    <?php endif; ?>
</main>
</body>
</html>
