<?php

namespace App\ORM\Metadata;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'tbl_sections';
	// optional : used for multiple DB
	protected $connection = 'mysql';
}
