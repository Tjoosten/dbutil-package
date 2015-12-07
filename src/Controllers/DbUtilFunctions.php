<?php

namespace Hopp\DbUtil\Controllers;

class DbUtilFunctions
{
    /**
     * Drop a table.
     *
     * @param   string  $table
     * @return  void
     */

    public static function drop($table, $connection = null)
    {
        \DB::connection($connection)->getPdo()->query('drop table '.$table);
    }
    /**
     * Truncate a table.
     *
     * @param   string  $table
     * @return  void
     */

    public static function truncate($table, $connection = null)
    {
        \DB::connection($connection)->getPdo()->query('truncate '.$table);
    }
    /**
     * Optimize a table.
     *
     * @param   string  $table
     * @return  void
     */

    public static function optimize($table, $connection = null)
    {
        \DB::connection($connection)->getPdo()->query('optimize table '.$table);
    }
    /**
     * Get array of tables columns.
     *
     * @param   string  $table
     * @param   string  $connection
     * @return  array
     */
    public static function columns($table, $connection = null)
    {
        // query the pdo
        $result = \DB::connection($connection)->getPdo()->query('show columns from '.$table);
        // build array
        $columns = array();
        while ($row = $result->fetch(\PDO::FETCH_NUM))
        {
            $columns[] = $row[0];
        }
        // return
        return $columns;
    }

    /**
     * Get array of database tables.
     *
     * @param   string  $connection
     * @return  array
     */
    public static function tables($connection = null)
    {
        // capture pdo
        $pdo = \DB::connection($connection)->getPdo();
        // run query
        $result = $pdo->query('show tables');
        // build array
        $tables = array();
        while ($row = $result->fetch(\PDO::FETCH_NUM))
        {
            $tables[] = $row[0];
        }
        // return
        return $tables;
    }

    /**
     * Check if table exists.
     *
     * @param   string  $table
     * @return  boolean
     */
    public static function exists($table)
    {
        return in_array($table, static::tables());
    }
}