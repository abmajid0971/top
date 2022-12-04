<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    use HasFactory;
    protected $fillable = ['Rank', 'Name', 'Icon', 'Promo_Text_TOP', 'Promo_text_1', 'Promo_text_2', 'Promo_text_3', 'Score', 'Stars', 'Ages', 'Visit_Site_Click_URL', 'text_below_click_url'];
}
