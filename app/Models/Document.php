<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'documents';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_id',
        'firstName',
        'middleName',
        'lastName',
        'requestedDocument',
        'purpose',
        'orNumber',
        'status',
    ];

    /**
     * The employee associated with the document.
     */
    public function employee()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }
}
