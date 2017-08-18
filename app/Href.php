<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Href extends Model
{
  protected $fillable = [
    'id',
    'target',
    'domains',
    'ref_edu_domains',
    'ref_ips',
    'ref_subnets',
    'linked_domains',
    'total_backlinks',
    'total_traffic',
    'bahasa'
  ];
}
