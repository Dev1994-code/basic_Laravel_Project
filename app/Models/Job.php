<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model {
    use HasFactory;
    protected $table = 'job_listing';

    protected $fillable = ['title', 'salary'];
//Using $fillable protects your application from mass assignment vulnerabilities. For example, if users pass additional data that you didn’t expect, those fields won’t be saved to the database, helping you prevent unauthorized changes or potential security issues.

public function employer() {
    return $this->belongsTo(Employer::class);
}
public function tags() {
    return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
}

}




//public static function all(): array
//{
//
//}
//
//public static function find(int $id): array
//{
//    return Arr::first(static::all(), fn($job) => $job['id'] === (string) $id) ?? abort(404);
//}
