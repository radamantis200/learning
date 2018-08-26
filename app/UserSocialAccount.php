<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UserSocialAccount
 *
 * @property-read \App\User $user
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property string $provider
 * @property string $provider_uid
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAccount whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAccount whereProviderUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAccount whereUserId($value)
 */
class UserSocialAccount extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
