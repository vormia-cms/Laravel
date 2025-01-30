<?php

namespace App\Http\Controllers\Vrm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Helpers
use Illuminate\Support\Str;

// Models - Vrm
use App\Models\Vrm\Notify;
use App\Models\Vrm\Setting;

class Dashboard extends Controller
{

    // PRIVATE VARIABLES
    private $Table = ''; // Table name will be pluralized

    private $ThemePath = ""; //Main Theme Path starting from resources/views/
    private $MainFolder = ""; //Main Folder Name (in prural) inside the resources/views/$ThemePath/pages
    private $SubFolder = ""; //Sub Folder Name inside the resources/views/$ThemePath/pages/$MainFolder/
    private $Upload = ""; //Upload Folder Name inside the public/admin/media

    private $Access = "main"; // Access level for this controller
    private $ParentRoute = ""; // Parent Route Name Eg. vrm-settings
    private $AllowedFile = null; //Set Default allowed file extension, remember you can pass this upon upload to override default allowed file type. jpg|jpeg|png|doc|docx|

    private $New = ''; // New
    private $Save = ''; // Add New
    private $Edit = ''; // Edit
    private $Update = ''; // Update
    private $Delete = ''; // Delete
    private $Action = ''; // Multiple Entry Action

    private $HeaderName = ""; // (Optional) Name

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //

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

        //openLoad settings
        $settings = Setting::adminLoad($view_name, $passed);

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

        // Links
        $setting['links'] = (object)[
            'new' => $this->New,
            'save' => $this->Save,
            'edit' => $this->Edit,
            'update' => $this->Update,
            'delete' => $this->Delete,
            'manage' => $this->Action,
            'route' => $this->ParentRoute,
        ];

        // Other
        $setting['other'] = (object)[
            'headerName' => (!array_key_exists('headerName', $addtional_data)) ? $this->HeaderName : $addtional_data['headerName'],
        ];

        // Header
        $setting['h4_pagetitle'] = 'Dashboard';
        $setting['breadcrumb'] = [];

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
    private function show($data, $layout = 'main')
    {
        // Auth
        if (\App\Models\Vrm\Auth::auth($this->Access)) {
            // Add Layout
            $data['layoutName'] = $layout;
            //Load Page View
            return view("vrm-admin/pages/" . $data['page_name'], $data);
        } else {
            // redirect
            return redirect('/');
        }
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
        $view = 'dashboard';
        $page = Str::plural($this->MainFolder) . $this->SubFolder .  "/$view";

        // Load Settings
        $data = $this->loadSettings($page);
        $data['other']->view = $view;

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
    public function open($view, $message = '', $layout = 'main')
    {
        // Load View Page Path
        $page = Str::plural($this->MainFolder) . "/" . $this->SubFolder . $view;

        // Load Settings
        $data = $this->loadSettings($page);
        $data['other']->view = $view;

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
     * @param  required $action - (what option to validate)
     *
     * @return \Illuminate\Http\Response
     */
    public function valid(Request $request, $action = '')
    {

        $allowed_files = (is_null($this->AllowedFile)) ? 'jpg|jpeg|png|doc|docx|pdf|xls|txt' : $this->AllowedFile; //Set Allowed Files
        $upoadDirectory = $this->Upload . "/"; //Upload Location

        //Check Validation
        if ($action == 'access') {
        } else {

            // Notification
            session()->flash('notification', 'info');

            // Open Page
            return $this->index('<strong>Info:</strong> Vormia failed to respond, unknown request.');
        }
    }
}
