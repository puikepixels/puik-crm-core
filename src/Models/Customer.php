<?php
namespace Puikepixels\PuikCrmCore\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Puikepixels\PuikCrmCore\Traits\HasPackageFactory;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Customer extends Model
{
    use HasPackageFactory;
    use SoftDeletes;
    use LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logUnguarded();
    }

    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'email',
        'phone',
        'mobil',
        'street',
        'street_number',
        'street_number_addition',
        'zip_code',
        'city',
        'country_id',
        'vatnumber',
        'iban',
        'customer_number',
        'chamberofcommercenumber',
        'status',
        'customer_group_id'
    ];

    protected $with = ['customerGroup'];


    public function customerGroup(): BelongsTo
    {
        return $this->belongsTo(CustomerGroup::class);
    }

    public function customerNotes()
    {
        return $this->hasMany(CustomerNote::class, 'customer_id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class, 'customer_id');
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'customer_id');
    }

}
