<?php

namespace Config;

use CodeIgniter\Database\Config;

/**
 * Database Configuration
 */
class Database extends Config
{
    /**
     * The directory that holds the Migrations and Seeds directories.
     */
    public string $filesPath = APPPATH . 'Database' . DIRECTORY_SEPARATOR;

    /**
     * Lets you choose which connection group to use if no other is specified.
     */
    public string $defaultGroup = 'default';

    /**
     * The default database connection.
     *
     * @var array<string, mixed>
     */
    public array $default = [
        'DSN'          => '',
        'hostname'     => 'db.eemmyvvarwewlwslayvp.supabase.co',
        'username'     => 'postgres',
        'password'     => 'svp_Proyectodegrado',
        'database'     => 'postgres',
        'DBDriver'     => 'postgre', // Modificado a minúsculas
        'DBPrefix'     => '',
        'pConnect'     => false,
        'DBDebug'      => true,
        'charset'      => 'utf8',
        'DBCollat'     => '',
        'swapPre'      => '',
        'encrypt'      => false,
        'compress'     => false,
        'strictOn'     => false,
        'failover'     => [],
        'port'         => 6543,      // Forzado a 6543 por defecto
        'numberNative' => false,
        'foundRows'    => false,
        'dateFormat'   => [
            'date'     => 'Y-m-d',
            'datetime' => 'Y-m-d H:i:s',
            'time'     => 'H:i:s',
        ],
    ];

    /**
     * This database connection is used when running PHPUnit database tests.
     *
     * @var array<string, mixed>
     */
    public array $tests = [
        'DSN'          => '',
        'hostname'     => '127.0.0.1',
        'username'     => '',
        'password'     => '',
        'database'     => ':memory:',
        'DBDriver'     => 'SQLite3',
        'dbprefix'     => 'db_',
        'pConnect'     => false,
        'DBDebug'      => true,
        'charset'      => 'utf8',
        'DBCollat'     => '',
        'swapPre'      => '',
        'encrypt'      => false,
        'compress'     => false,
        'strictOn'     => true,
        'failover'     => [],
        'port'         => 3306,
        'foreignKeys' => true,
        'busyTimeout' => 1000,
        'synchronous' => null,
        'dateFormat'   => [
            'date'     => 'Y-m-d',
            'datetime' => 'Y-m-d H:i:s',
            'time'     => 'H:i:s',
        ],
    ];

    public function __construct()
    {
        parent::__construct();

        if (ENVIRONMENT === 'testing') {
            $this->defaultGroup = 'tests';
        }

        // CORREGIDO PARA VERCEL: Ahora lee tanto el formato clásico como el formato con doble guion bajo (__).
        if ($this->defaultGroup === 'default') {
            $this->default['hostname'] = env('database__default__hostname', env('database.default.hostname', $this->default['hostname']));
            $this->default['username'] = env('database__default__username', env('database.default.username', $this->default['username']));
            $this->default['password'] = env('database__default__password', env('database.default.password', $this->default['password']));
            $this->default['database'] = env('database__default__database', env('database.default.database', $this->default['database']));
            $this->default['DBDriver'] = env('database__default__DBDriver', env('database.default.DBDriver', $this->default['DBDriver']));
            $this->default['port']     = env('database__default__port', env('database.default.port', $this->default['port']));
        }
    }
}
