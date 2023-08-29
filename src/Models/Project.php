<?php
namespace Puikepixels\PuikCrmCore\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Puikepixels\PuikCrmCore\Traits\HasPackageFactory;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Project extends Model
{
    use HasPackageFactory;
    use LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logUnguarded();
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

}
