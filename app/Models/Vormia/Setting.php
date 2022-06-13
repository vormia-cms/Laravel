<?php

namespace App\Models\Vormia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    // Disable Default Timestamps
    public $timestamps = false;

    // Do not allow mass assignment
    protected $guarded = ['setting_id'];


    /**
     * Get the value of the setting.
     * Todo: This method is used to retrive the stored setting value.
     *
     * @param string  $setting_type or switch the setting type
     *
     * @return array $setting
     */
    public static function getSetting($setting_type = 'general')
    {

        // Switch the setting type
        switch ($setting_type) {
            case 'system':
                $setting = self::where('setting_type', 'general')->get()->map(function ($sett) {
                    return [$sett->setting_title => $sett->setting_value];
                });
                break;
            case 'email':
                $setting = self::where('setting_type', 'email')->first();
                break;
            case 'social':
                $setting = self::where('setting_type', 'social')->first();
                break;
            case 'seo':
                $setting = self::where('setting_type', 'seo')->first();
                break;
            case 'analytics':
                $setting = self::where('setting_type', 'analytics')->first();
                break;

            default:
                $setting = self::where('setting_type', $setting_type)->get()->map(function ($sett) {
                    return [$sett->setting_title => $sett->setting_value];
                });
                break;
        }

        // Return the setting
        return $setting;
    }
}
