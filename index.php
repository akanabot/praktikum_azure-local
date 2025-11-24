<?php

$server_name = gethostname();
$php_version = phpversion();

echo "<h1>Selamat Datang di Azure App Service!</h1>";
echo "<p>Aplikasi PHP ini berhasil dilocal deploy melalui Visual Studio Code ke Microsoft Azure.</p>";
echo "<h2>Detail Server:</h2>";
echo "<ul>";
echo "<li><strong>Server Hostname:</strong> " . htmlspecialchars($server_name) . "</li>";
echo "<li><strong>Versi PHP:</strong> " . htmlspecialchars($php_version) . "</li>";
echo "</ul>";


?>
