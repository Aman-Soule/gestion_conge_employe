<?php
function getBDconnexion() {
    try {
        // ✅ Render fournit DATABASE_URL
        $dbUrl = getenv("DATABASE_URL");

        if ($dbUrl) {
            $dbopts = parse_url($dbUrl);

            $host = $dbopts["host"];
            $port = $dbopts["port"];
            $dbname = ltrim($dbopts["path"], '/');
            $user = $dbopts["user"];
            $password = $dbopts["pass"];

            $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

            $conn = new PDO($dsn, $user, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } else {
            // ✅ Fallback local (si tu testes en local sans Render)
            $host = 'localhost';
            $DBname = 'gestion_stock';
            $user = 'root';
            $password = '';

            $dsn = "mysql:host=$host;dbname=$DBname;charset=utf8";
            $conn = new PDO($dsn, $user, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
    } catch (PDOException $ex) {
        die("❌ Erreur de connexion à la base de données : " . $ex->getMessage());
    }
}
?>
