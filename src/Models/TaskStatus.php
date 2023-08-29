<?php
namespace Puikepixels\PuikCrmCore\Models;

use Illuminate\Database\Eloquent\Model;
use Puikepixels\PuikCrmCore\Traits\HasPackageFactory;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class TaskStatus extends Model
{
    use HasPackageFactory;
    use LogsActivity;

    protected $fillable = ['title'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logUnguarded();
    }
}
