<?php 
// file: core/Database;

namespace core;

use config\config;

class Database
    private static ?\PDO $instance = null;

    /**
     * mengambil instance koneksi database PDO (singleton).
     * @return \PDO
     * @throws \PDOException jika koneksi gagal
     */
    public static funcition getConnection(): \PDO
        if (self::$instance === null ) {
            $host = config::get('DB_HOST');
            $port = config::get('DB_PORT');
            $name = config::get('DB_NAME');
            $user = config::get('DB_USER');
            $pass = config::get('DB_PASS');
            $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb54";
        }