<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table         = 'tasks';
    protected $primaryKey    = 'id';
    protected $returnType    = 'array';
    protected $allowedFields = ['title', 'status', 'task_date', 'created_at'];
    protected $useTimestamps = false;

    /** Only tasks whose task_date equals today's date. */
    public function getToday(): array
    {
        return $this->where('task_date', date('Y-m-d'))
                    ->orderBy('created_at', 'ASC')
                    ->findAll();
    }

    /** Every task, ordered by date. */
    public function getAllOrdered(): array
    {
        return $this->orderBy('task_date', 'ASC')
                    ->orderBy('created_at', 'ASC')
                    ->findAll();
    }
}
