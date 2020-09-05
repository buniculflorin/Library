<?php

declare(strict_types=1);

/**
 * Class ConnectionFactory
 *
 * Creates/Provides connection to database
 * This class MUST be used whenever a connection to the database is needed.
 * Implements Singleton Pattern
 */
class ConnectionFactory
{
    const MACHINE_MAC = 'mac';
    const MACHINE_LINUX = 'linux';

    /**
     * @var PDO
     */
    private $connection;

    /**
     * @param string $machine
     * @return PDO
     * @throws PDOException
     */
    public function create(string $machine = self::MACHINE_MAC): PDO
    {
        if(is_null($this->connection)) {
            $this->connection = $this->buildConnection($machine);
        }
        return $this->connection;
    }

    /**
     * @param string $machine
     * @return PDO
     * @throws PDOException
     */
    private function buildConnection(string $machine): PDO
    {
        if($machine === self::MACHINE_LINUX) {
            $dsn = 'mysql:host=localhost:3306; dbname=library;';
            return new PDO($dsn, "victortodoran","victortodoran");
        }

        $dsn = 'mysql:host=localhost:8889; dbname=library;';
        return new PDO($dsn, "root","root");
    }
}