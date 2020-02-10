<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Console extends Model
{
    use Sushi;

    protected $rows = [
        [
            'name' => 'AWS Management Console',
            'url' => 'https://console.aws.amazon.com/',
            'provider' => 'Amazon',
        ],
        [
            'name' => 'AWS IAM Console',
            'url' => 'https://console.aws.amazon.com/iam',
            'provider' => 'Amazon',
        ],
        [
            'name' => 'Google API Console',
            'url' => 'https://console.developers.google.com/',
            'provider' => 'Google',
        ],
        [
            'name' => 'Twitter Apps',
            'url' => 'https://developer.twitter.com/en/apps',
            'provider' => 'Twitter',
        ],
        [
            'name' => 'GitHub OAuth Apps',
            'url' => 'https://github.com/settings/developers',
            'provider' => 'GitHub',
        ],
        [
            'name' => 'Pusher Dashboard',
            'url' => 'https://dashboard.pusher.com/',
            'provider' => 'Pusher',
        ]
    ];

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider', 'name');
    }
}
