<?php

namespace App\Http\Controllers\Vormia;

use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Vormia\Setting;
use App\Models\Notify;

use Illuminate\Support\Str;


class SettingsController extends Controller
{
    /**
     * THE ADMIN SETTINGS CONTROLLER
     *
     * @Task
     * 1: System Settings
     * 2: Visibility Settings
     * 3: Email/Mailing Settings
     * 4: Tweaks Settings
     * 5: Security/developer Settings
     * 6: Media Settings
     * 7: SEO & Robots Settings
     * 8: Writting Settings
     * 9: Reading Settings
     * 10: Blog Settings
     */

    // PRIVATE VARIABLES
    private $Table = ''; // Table name will be pluralized
    private $AdditionalTables = []; // Additional tables to be used in this controller

    private $ThemePath = "admin"; //Main Theme Path starting from resources/views/
    private $MainFolder = "settings"; //Main Folder Name (in prural) inside the resources/views/$ThemePath/pages
    private $SubFolder = ""; //Sub Folder Name inside the resources/views/$ThemePath/pages/$MainFolder/
    private $Upload = "admin/media"; //Upload Folder Name inside the public/admin/media

    private $Access = ""; // Access level for this controller
    private $ParentRoute = "vrm-settings"; // Parent Route Name Eg. vrm-settings
    private $AllowedFile = null; //Set Default allowed file extension, remember you can pass this upon upload to override default allowed file type. jpg|jpeg|png|doc|docx|

    private $New = ''; // New
    private $Save = 'vrm-settings/save'; // Add New
    private $Edit = ''; // Edit
    private $Update = ''; // Update
    private $Delete = ''; // Delete
    private $Action = ''; // Multiple Entry Action

    private $HeaderName = "System"; // (Optional) Name

    // CONSTRUCTOR
    public function __construct()
    {
        // CHECK IF USER IS LOGGED IN

        // CHECK IF USER HAS ACCESS

        // OTHER LOAD
    }

    /**
     * Global Settings {loadSettings}
     * Method is private and not accessible via the web
     * Todo: This method Load all settings from database via the PreLoad Model:: getSettings()
     *
     * @param optional $view_name (string) Page Name (make sure to add $ThemePath/$MainFolder/$SubFolder/$page_name)
     *
     * @return \Illuminate\Http\Response
     */
    private function loadSettings($view_name = '')
    {
        // Load in Controller Settings from passedSettings method
        $passed = $this->passedSettings();

        //Load all settings from database via the PreLoad Model:: getSettings()
        $settings = [
            'viewName' => $view_name,
        ];

        // Merge all settings into one array
        $settings = array_merge($passed, $settings);

        // Return all settings
        return $settings;
    }

    /**
     * Custom Settings {passedSettings}
     * Method is private and not accessible via the web
     * Todo: This method Load all settings for this Controller only
     *
     * @param optional $addtionalData (array) any additional data to be passed on demand
     *
     * @return \Illuminate\Http\Response
     */
    private function passedSettings($addtional_data = [])
    {
        date_default_timezone_set('Africa/Nairobi'); //Time Zone
        $setting['dateTime'] = strtotime(date('Y-m-d, H:i:s')); //Current DateTime

        //Directory
        $setting['directory'] = (object)[
            'myTheme' => $this->ThemePath,
            'mainFolder' => $this->MainFolder,
            'subFolder' => $this->SubFolder,
            'myPath' => Str::plural($this->MainFolder) . "/" . $this->SubFolder,
        ];

        // Links
        $setting['links'] = (object)[
            'create' => url($this->New),
            'store' => url($this->Save),
            'edit' => url($this->Edit),
            'update' => url($this->Update),
            'destroy' => url($this->Delete),
            'manage' => url($this->Action),
            'route' => $this->ParentRoute,
        ];

        // Other
        $setting['other'] = (object)[
            'headerName' => (!array_key_exists('headerName', $addtional_data)) ? $this->HeaderName : $addtional_data['headerName'],
        ];

        // Merge all settings into one array
        $setting = array_merge($setting, $addtional_data);

        // Return all settings
        return $setting;
    }

    /**
     * Page View {show}
     * Method is private and not accessible via the web
     * Todo: This method is the only method that is accessible render the view/page visible via browser.
     *
     * @param  requred $data - (has all the values needed to render the page)
     * @param  optional $layout - (By default the layout is main)
     *
     * @return \Illuminate\Http\Response
     */
    private static function show($data, $layout = 'admin')
    {
        // Theme Folder
        $theme_path = $data['directory']->myTheme;
        $view_name = $data['viewName'];

        // Add Layout
        $data['layoutName'] = $layout;

        //Load Page View
        return view("$theme_path/pages/$view_name", $data);
    }

    /**
     * Main {Index}
     * Method is public and accessible via the web
     * Todo: This method is the main settings page.
     *
     * @param  optional  $message - notification message (By default, no message is displayed)
     *
     * @return \Illuminate\Http\Response
     */
    public function index($message = '')
    {
        // Load View Page Path
        $view = 'general';
        $page = Str::plural($this->MainFolder) . "/" . $this->SubFolder . $view;

        // Load Settings
        $data = $this->loadSettings($page);
        $data['other']->view = $view;

        // Setting
        $getSetting = Setting::getSetting();
        foreach ($getSetting as $key => $value) {
            $set_key = key($value);
            $setting[$set_key] = $value[$set_key];
        }
        // Settings
        $data['thisSettings'] = (object) $setting;

        //Notification
        $notify = Notify::notify();
        $data['notify'] = Notify::$notify($message);

        //Open Page
        return $this->show($data);
    }

    /**
     * Page {open}
     * Method is public and accessible via the web
     * @Todo:
     * This method is used to open a specific view/page (you can pass the view name/full_path and open will call show() method to render the view/page)
     *
     * @param required $view - (the view name/full_path to be rendered)
     * @param  optional $message - notification message (By default, no message is displayed)
     * @param  optional $layout - (By default the layout is main)
     *
     * @return \Illuminate\Http\Response
     */
    public function open($view, $message = '', $layout = 'admin')
    {
        // Load View Page Path
        $page = Str::plural($this->MainFolder) . "/" . $this->SubFolder . $view;

        // Load Settings
        $data = $this->loadSettings($page);
        $data['other']->view = $view;

        // Setting
        $getSetting = Setting::getSetting($view);
        foreach ($getSetting as $key => $value) {
            $set_key = key($value);
            $setting[$set_key] = $value[$set_key];
        }
        // Settings
        $data['thisSettings'] = (object) $setting;

        //Notification
        $notify = Notify::notify();
        $data['notify'] = Notify::$notify($message);

        //Open Page
        return $this->show($data, $layout);
    }

    /**
     * Validation {valid}
     * Method is public and accessible via the web
     * Todo: This method is used to validate the form data.
     *
     * @param  \Illuminate\Http\Request  $request - (the request object)
     * @param  required $state - (what option to validate)
     *
     * @return \Illuminate\Http\Response
     */
    public function valid(Request $request, $state = '')
    {

        // Previus Page/Route/URI
        // session()->flash('previous-route', $request->path());

        $allowed_files = (is_null($this->AllowedFile)) ? 'jpg|jpeg|png|doc|docx|pdf|xls|txt' : $this->AllowedFile; //Set Allowed Files
        $upoadDirectory = $this->Upload . "/"; //Upload Location

        //Check Validation
        if ($state == 'save') {

            // View Name
            $view_name = $request->input('view_name');
            $request->request->remove('view_name');

            // Validate Form Data
            $validator = Validator::make($request->all(), [
                'setting_type' => "required|max:15|nullable",
                'site_title' => "required|max:100",
                'site_title_append' => "required|max:10",
                'site_slogan' => "required|max:200",
                'site_url' => "required|max:500|url",
                'home_page_url' => "required|max:500|url",
                'base_url' => "required|max:500|url",
                'global_encryption_key' => "required|min:32|max:40",
                'encryption_key' => "required|min:32|max:40",
                'token_key' => "required|min:5|max:20",
            ]);

            // On Validation Fail
            if ($validator->fails()) {
                session()->flash('notification', 'valid');
                $error = Notify::error('Please check the form for errors.');

                // Return Error Message
                return redirect("$this->ParentRoute/$view_name")
                    ->withErrors($validator)
                    ->withInput()
                    ->with(['valid' => $error]);
            }

            // Validate Form Data
            $validated = $validator->validated();
            $setting_type = $validated['setting_type'];
            unset($validated['setting_type']);

            // Loop through all the validate data
            foreach ($validated as $key => $value) {
                // Save to the database
                $saveData = [
                    'setting_type' => $setting_type,
                    'setting_title' => $key,
                    'setting_value' => $value,
                    'setting_created_at' => date('Y-m-d H:i:s'),
                ];

                // Call the store method to save the data
                $this->update($saveData);
            }

            // Notification
            session()->flash('notification', 'success');

            // Open Page
            return $this->open($view_name, 'Updated Successfully');
        } else {

            dd($state);
            // Notification
            session()->flash('notification', 'info');

            // Open Page
            return $this->index('<strong>Info:</strong> Vormia failed to respond, unknown request.');
        }
    }

    /**
     * Save {store}
     * Method is private and not accessible via the web
     * Todo: This method is used to save the form data. It utilizes the valid() method to validate the form data and Vormia\Setting Model
     *
     * @param  requred $insertData
     *
     * @return \Illuminate\Http\Response
     * - Success (True) or Failed (False)
     */
    private function store($insertData)
    {

        // Save Form Data
        if (Setting::create($insertData)) {
            // Return Success
            return true;
        }

        // Return Failed
        return false;
    }

    /**
     * Update {update}
     * Method is private and not accessible via the web
     * Todo: This method is used to update the form data. It utilizes the valid() method to validate the form data and Vormia\Setting Model
     *
     * @param  requred $updateData
     *
     * @return \Illuminate\Http\Response
     * - Success (True) or Failed (False)
     */
    private function update($updateData)
    {
        // Update Form Data
        if (Setting::where('setting_title', $updateData['setting_title'])->update($updateData)) {
            // Return Success
            return true;
        }

        // Return Failed
        return false;
    }

    /**
     * Delete {destroy}
     * Method is private and not accessible via the web
     * Todo: This method is used to delete the stored data.
     *
     * @param  required $id - (the id of the data to be deleted) or you can pass as array of ids | match the column name => value
     *
     * @return \Illuminate\Http\Response
     * - Success (True) or Failed (False)
     */
    private function destroy($id)
    {
        // Delete Form Data
        if (Setting::destroy($id)) {
            // Return Success
            return true;
        }

        // Return Failed
        return false;
    }
}
