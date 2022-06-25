<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = [
        'agility', 'team_work', 'leadership_skill','time_management' ,'presentation_skills' ,
        'oral_expression', 'quality_of_the_answers' , 'business_ethics' ,'evaluation' , 'user_id' , 'note' , 'is_published'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
