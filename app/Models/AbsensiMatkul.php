<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiMatkul extends Model
{
    use HasFactory;

    // $table->foreignId('schedule_id')->constrained('schedules');
    // $table->foreignId('student_id')->constrained('users');
    // $table->string('kode_absensi');
    // $table->string('tahun_akademik');
    // $table->string('semester');
    // $table->string('pertemuan');
    // $table->string('status');
    // $table->string('keterangan')->nullable();
    // $table->string('latitude');
    // $table->string('longtitude');
    // $table->string('nilai')->nullable();
    // $table->string('created_by');
    // $table->string('updated_by');
    // $table->string('deleted_by')->nullable();
    protected $fillable = [
        'schedule_id',
        'student_id',
        'kode_absensi',
        'tahun_akademik',
        'semester',
        'pertemuan',
        'status',
        'keterangan',
        'latitude',
        'longtitude',
        'nilai',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function student()
    {
        return $this->belongsTo(User::class);
    }
}
