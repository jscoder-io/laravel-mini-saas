<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Request;

class Lead extends Model
{
    use HasFactory;

    private $seller_motivation = [
        1 => 'Sell without showings',
        2 => 'Avoid foreclosure',
        3 => 'Quick cash',
        4 => 'Sell by a specific date',
        5 => 'Get highest price',
        6 => 'Financial Reasons',
        7 => 'Relocating',
        8 => 'Moving closer to family',
        9 => 'Retirement elsewhere',
        10 => 'Emergency Reasons',
        11 => 'Selling a vacant property',
        12 => 'Inherited Property',
        13 => 'Downsizing',
        14 => 'Tired of being landlord',
    ];

    private $selling_timeframe = [
        1 => 'ASAP',
        2 => '2-4 Weeks',
        3 => '4-6 Weeks',
        4 => '6+ Weeks',
        5 => 'Just Browsing',
    ];

    private $exterior_cond = [
        1 => 'Like New',
        2 => 'Average',
        3 => 'Needs Work',
    ];

    private $kitchen_cond = [
        1 => 'Like New',
        2 => 'Average',
        3 => 'Needs Work',
    ];

    private $bathroom_cond = [
        1 => 'Like New',
        2 => 'Average',
        3 => 'Needs Work',
    ];

    private $yard_cond = [
        1 => 'Lush',
        2 => 'Sparse',
        3 => 'No Landscaping',
        4 => 'No Yard',
    ];

    private $agent_listed = [
        0 => 'No',
        1 => 'Yes',
    ];

    private $mortgage_options = [
        1 => 'No',
        2 => 'Yes. Payment up to date',
        3 => 'Yes. I\'m behind payment',
    ];

    public function scopeUserFilters($query)
    {
        if ($y = Request::input('y')) {
            $query->where('yard_cond', $y);
        }
        if ($b = Request::input('b')) {
            $query->where('bathroom_cond', $b);
        }
        if ($k = Request::input('k')) {
            $query->where('kitchen_cond', $k);
        }
        if ($e = Request::input('e')) {
            $query->where('exterior_cond', $e);
        }
        if ($t = Request::input('t')) {
            $query->where('selling_timeframe', $t);
        }
        if ($m = Request::input('m')) {
            $query->where('mortgage', $m);
        }
        if (! is_null(Request::input('l'))) {
            $query->where('agent_listed', Request::input('l'));
        }
        if ($st = Request::input('st')) {
            $query->whereIn('status', $st);
        }
        if ($c = Request::input('c')) {
            $query->whereIn('county_id', $c);
        }
        if ($s = Request::input('s')) {
            $ids = County::whereIn('state_id', $s)->get('id')->map(fn($m) => $m->id)->all();
            $query->whereIn('county_id', $ids);
        }
        if ($q = Request::input('q')) {
            $query->where('lead_id', 'like', $q);
        }
        return $query;
    }

    protected function mortgage(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->mortgage_options[$value] ?? null,
        );
    }

    protected function agentListed(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->agent_listed[$value] ?? null,
        );
    }

    protected function sellerMotivation(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->seller_motivation[$value] ?? null,
        );
    }

    protected function sellingTimeframe(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->selling_timeframe[$value] ?? null,
        );
    }

    protected function exteriorCond(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->exterior_cond[$value] ?? null,
        );
    }

    protected function kitchenCond(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->kitchen_cond[$value] ?? null,
        );
    }

    protected function bathroomCond(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->bathroom_cond[$value] ?? null,
        );
    }

    protected function yardCond(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->yard_cond[$value] ?? null,
        );
    }

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => (string) Date::createFromTimeString($value)->format('M j, Y g:i A'),
        );
    }

    public function county()
    {
        return $this->belongsTo(County::class);
    }
}
