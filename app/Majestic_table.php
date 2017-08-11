<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Majestic_table extends Model
{
  protected $fillable = [
    'id',
    'item',
    'status',
    'external_backlinks',
    'external_backlinks_edu',
    'external_backlinks_gov',
    'referring_domains',
    'referring_domains_edu',
    'referring_domains_gov',
    'ip_addresses',
    'class_c_subnets',
    'indexed_urls',
    'trust_flow',
    'citation_flow'
  ];
  public $timestamps = false;
}
