<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Href extends Model
{
  protected $fillable = [
    'id',
    'target',
    'mode',
    'ip',
    'google_1s',
    'facebook',
    'linkedin',
    'url_rating',
    'domain_rating',
    'ahrefs_rank',
    'domains',
    'ref_gov_domains',
    'ref_edu_domains',
    'ref_ips',
    'ref_subnets',
    'linked_domains',
    'total_backlinks',
    'backlinks_text',
    'backlinks_nofollow',
    'backlinks_redirect',
    'backlinks_image',
    'backlinks_frame',
    'backlinks_form',
    'backlinks_gov',
    'backlinks_edu',
    'total_keywords',
    'total_traffic'
  ];
}
