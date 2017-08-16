<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Majestic extends Model
{
  protected $fillable = [
    'id',
    'item',
    'status',
    'external_backlinks',
    'external_backlinks_edu',
    'referring_domains',
    'referring_domains_edu',
    'class_c_subnets',
    'indexed_urls',
    'trust_flow',
    'citation_flow'
  ];
  public $timestamps = false;
}
