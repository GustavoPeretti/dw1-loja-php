<?php
    namespace App\Database;

    use PDO;

    class Conexao {
        private static ?PDO $pdo = null;

        public static function get(): PDO {
            if (self::$pdo === null) {
                self::$pdo = new PDO(
                    sprintf('mysql:host=db;dbname=%s;charset=utf8mb4', getenv('DATABASE_DATABASE')),
                    'root',
                    getenv('DATABASE_PASSWORD'),
                    [
                        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    ]
                );
            }

            return self::$pdo;
        }
    }
?>
