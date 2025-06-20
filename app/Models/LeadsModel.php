<?php

namespace App\Models;

use CodeIgniter\Model;

class LeadsModel extends Model
{
    protected $table            = 'leads';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company',
        'source',
        'status',
        'notes',
        'assigned_to',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function fetchAllLeads(): ?array
    {
        $leadModel = new LeadsModel();
        return $leadModel->findAll();
    }
}
