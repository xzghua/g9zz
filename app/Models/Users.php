<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

/**
 * App\Models\Users
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $password
 * @property int $github_id
 * @property string $github_url
 * @property string $email
 * @property string $name
 * @property string $login_token
 * @property string $is_banned
 * @property string $image_url
 * @property int $topic_count
 * @property int $reply_count
 * @property int $follower_count
 * @property string $city
 * @property string $company
 * @property string $twitter_account
 * @property string $personal_website
 * @property string $introduction
 * @property string $certification
 * @property int $notification_count
 * @property string $github_name
 * @property string $real_name
 * @property string $linkedin
 * @property string $payment_qrcode
 * @property string $wechat_qrcode
 * @property string $avatar
 * @property string $login_qr
 * @property string $wechat_openid
 * @property string $wechat_unionid
 * @property string $weibo_name
 * @property string $weibo_link
 * @property bool $verified
 * @property string $verification_token
 * @property string $email_notify_enabled
 * @property string $register_source
 * @property string $last_actived_at
 * @property string $deleted_at
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereGithubId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereGithubUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereLoginToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereIsBanned($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereImageUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereTopicCount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereReplyCount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereFollowerCount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereCompany($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereTwitterAccount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users wherePersonalWebsite($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereIntroduction($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereCertification($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereNotificationCount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereGithubName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereRealName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereLinkedin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users wherePaymentQrcode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereWechatQrcode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereAvatar($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereLoginQr($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereWechatOpenid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereWechatUnionid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereWeiboName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereWeiboLink($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereVerified($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereVerificationToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereEmailNotifyEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereRegisterSource($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereLastActivedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Users whereUpdatedAt($value)
 */
class Users extends Authenticatable
{
    //
    use EntrustUserTrait;

    protected $table = 'users';

    protected $fillable = [
        'password','github_id','github_url','email',
        'name','login_token','is_banned','image_url',
        'topic_count','reply_count','follower_count','city',
        'company','twitter_account','personal_website','introduction',
        'certification','notification_count','github_name','real_name',
        'linkedin','payment_qrcode','wechat_qrcode','avatar',
        'login_qr','wechat_openid','wechat_unionid','weibo_name',
        'weibo_link','verified','verification_token','email_notify_enabled',
        'register_source','last_actived_at',
    ];



}
