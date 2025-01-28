<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TestModel extends Model
{
    use HasFactory;
    protected $table = 'test';
    protected $connection = 'sqlsrv';
    protected $primaryKey = 'test_id';
    public $incrementig = true;
    public $timestamps = true;
    protected $attributes = ['test_attribute1', 'test_attribute2'];
}
