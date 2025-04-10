<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model {
    use HasFactory;
    protected $table='job_list';
    // instead of writing columns names in fillable we can use guarded 
    //protected $fillable=['title','salary','employer_id'];
    protected $guarded =[];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
    public function tag()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey:"job_list_id");
    }

} 