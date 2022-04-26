<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\ContactCompany
 *
 * @property int $id
 * @property string|null $company_name
 * @property string|null $company_address
 * @property string|null $company_website
 * @property string|null $company_email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|ContactCompany advancedFilter($data)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactCompany newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactCompany newQuery()
 * @method static \Illuminate\Database\Query\Builder|ContactCompany onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactCompany query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactCompany whereCompanyAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactCompany whereCompanyEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactCompany whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactCompany whereCompanyWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactCompany whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactCompany whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactCompany whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactCompany whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ContactCompany withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ContactCompany withoutTrashed()
 * @mixin \Eloquent
 */
class ContactCompany extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'contact_companies';

    public $orderable = [
        'id',
        'company_name',
        'company_address',
        'company_website',
        'company_email',
    ];

    public $filterable = [
        'id',
        'company_name',
        'company_address',
        'company_website',
        'company_email',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'company_name',
        'company_address',
        'company_website',
        'company_email',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
