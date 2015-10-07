<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datum extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'datums';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'more', 'amount', 'type'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['user_id'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['user'];


    /**
     * Get the phone record associated with the user.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
