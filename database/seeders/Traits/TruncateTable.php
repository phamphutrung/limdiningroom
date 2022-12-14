<?php

namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

trait TruncateTable
{
    /**
     * @param string $table
     *
     * @return bool|void
     */
    protected function truncate(string $table)
    {
        switch (DB::getDriverName()) {
            case 'mysql':
                return DB::table($table)->truncate();

            case 'pgsql':
                return DB::statement('TRUNCATE TABLE ' . $table . ' RESTART IDENTITY CASCADE');

            case 'sqlite':
            case 'sqlsrv':
                return DB::statement('DELETE FROM ' . $table);
        }

        return false;
    }

    /**
     * @param array $tables
     * @return void
     */
    protected function truncateMultiple(array $tables): void
    {
        foreach ($tables as $table) {
            $this->truncate($table);
        }
    }
}