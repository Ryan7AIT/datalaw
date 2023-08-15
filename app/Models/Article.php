<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function rules() {
        return $this->hasMany(Rule::class);
    }

    public function auditArticleStatuses() {
        return $this->hasMany(AuditArticleStatus::class);
    }

    public function audits()
    {
        return $this->belongsToMany(Audit::class)->withPivot('status');
    }


}
