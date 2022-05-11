<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class TodoModel extends Model
{
    protected $table = 'todos';
 
    protected $allowedFields = ['title', 'description'];
}


