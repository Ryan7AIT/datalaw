<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function process() {
        return $this->belongsTo(Process::class);
    }

    public function auditArticleStatuses() {
        return $this->hasMany(AuditArticleStatus::class);
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class)->withPivot('status');
    }

}
