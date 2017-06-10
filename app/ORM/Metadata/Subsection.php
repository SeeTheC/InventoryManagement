<?php

namespace App\ORM\Metadata;

use Illuminate\Database\Eloquent\Model;

class Subsection extends Model
{
    protected $table = 'tbl_subsection';
	// optional : used for multiple DB
	protected $connection = 'mysql';
}
