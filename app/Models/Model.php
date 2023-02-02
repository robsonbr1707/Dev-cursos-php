<?php 

namespace App\Models;

use App\Database\Database;

abstract class Model
{
    public Database $connection;
    protected $table;

    public function __construct($table)
    {
        $this->table = $table;
    }

    public function select($where = null, $order = null, $limit = null, $fields = '*')
    {
        $connection = new Database;

        $where = strlen($where) ? 'WHERE '.$where : '';
        $order = strlen($order) ? 'ORDER BY '.$order : '';
        $limit = strlen($limit) ? 'LIMIT '.$limit : '';

        $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;
            return $connection->execute($query);
    }

    public function insert($values)
    {
        $connection = new Database;

        $fields = array_keys($values);
        $binds  = array_pad([],count($fields),'?');
        
        $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';
    
        return $connection->execute($query,array_values($values));
    }
    
    public function update($where,$values)
    {
        $connection = new Database;

        $fields = array_keys($values);
        $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;
        $connection->execute($query,array_values($values));
            return true;
    }
    
    public function delete($where)
    {
        $connection = new Database;

        $query = 'DELETE FROM '.$this->table.' WHERE '.$where;
        $connection->execute($query);
            return true;
    }

}