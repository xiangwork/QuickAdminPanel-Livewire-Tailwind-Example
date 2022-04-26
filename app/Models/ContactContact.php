<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\ContactContact
 *
 * @property int $id
 * @property string|null $contact_first_name
 * @property string|null $contact_last_name
 * @property string|null $contact_phone_1
 * @property string|null $contact_phone_2
 * @property string|null $contact_email
 * @property string|null $contact_skype
 * @property string|null $contact_address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int $company_id
 * @property-read \App\Models\ContactCompany|null $company
 * @method static \Illuminate\Database\Eloquent\Builder|ContactContact advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactContact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactContact newQuery()
 * @method static \Illuminate\Database\Query\Builder|ContactContact onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactContact query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactContact whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactContact whereContactAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactContact whereContactEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactContact whereContactFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactContact whereContactLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactContact whereContactPhone1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactContact whereContactPhone2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactContact whereContactSkype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactContact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactContact whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactContact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactContact whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ContactContact withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ContactContact withoutTrashed()
 * @mixin \Eloquent
 */
class ContactContact extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'contact_contacts';

    public $orderable = [
        'id',
        'company.company_name',
        'contact_first_name',
        'contact_last_name',
        'contact_phone_1',
        'contact_phone_2',
        'contact_email',
        'contact_skype',
        'contact_address',
    ];

    public $filterable = [
        'id',
        'company.company_name',
        'contact_first_name',
        'contact_last_name',
        'contact_phone_1',
        'contact_phone_2',
        'contact_email',
        'contact_skype',
        'contact_address',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'company_id',
        'contact_first_name',
        'contact_last_name',
        'contact_phone_1',
        'contact_phone_2',
        'contact_email',
        'contact_skype',
        'contact_address',
    ];

    public function company()
    {
        return $this->belongsTo(ContactCompany::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
