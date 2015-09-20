<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * App\Rule
 *
 * @property integer $rule_id
 * @property string $type
 * @property integer $university_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\University $university
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Action[] $actions
 * @method static \Illuminate\Database\Query\Builder|\App\Rule whereRuleId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Rule whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Rule whereUniversityId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Rule whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Rule whereUpdatedAt($value)
 */
class Rule extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rules';

    /**
     * Column of the key used by the Model.
     *
     * @var string
     */
    protected $primaryKey = "rule_id";


    /**
     * Get the university that owns the rule.
     */
    public function university()
    {
        return $this->belongsTo('App\University');
    }

    /**
     * Get the actions for the rule.
     */
    public function actions()
    {
        return $this->hasMany('App\Action');
    }
}
