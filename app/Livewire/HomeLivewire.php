<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Vrm\Notify;
use App\Models\Vrm\Setting;
use Illuminate\Support\Str;

class HomeLivewire extends Component
{

    // PRIVATE VARIABLES
    private $MainFolder = ""; //Main Folder Name (in prural) inside the resources/views/$ThemePath/pages
    private $SubFolder = ""; //Sub Folder Name inside the resources/views/$ThemePath/pages/$MainFolder/
    private $Upload = ""; //Upload Folder Name inside the public/admin/media

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
     * Todo: All of your public variables for storing data will be here on top
     * 
     * ? By default we have created $data_form for storing form data
     * ? You can add yours
     */
    public $passed_data = [];
    public $form_data = [];

    // Example
    public $tokenName;

    /**
     * Todo: Mounted Data
     * 
     * ? This method is used to mount data to the component
     */
    public function mount($covertype)
    {
        // Mount previous data from session
        $this->passed_data = session('passed-data', []);

        // Mount Token Name
        $this->tokenName = Str::random(10);
    }


    /**
     * Todo: Validation Rules
     * 
     * ? All of your validation rules will be here
     */
    protected $rules = [
        'mail' => "required|email|min:2|exists:users,email",
    ];

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
        $settings = Setting::preLoad($view_name, $passed);

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
        $setting['h4_pagetitle'] = '';
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
    public function render()
    {

        // Load View Page Path
        $view = 'home';
        $page = Str::plural($this->MainFolder) . $this->SubFolder .  "/$view";

        // Load Settings
        $data = $this->loadSettings($page);
        $data['other']->view = $view;

        //Notification
        $notify = Notify::notify();
        $data['notify'] = Notify::$notify();

        // This page & layout
        $_this_page = $data['theme_dir'] . '/pages/' . $data['page_name'];
        $_this_layout = $data['theme_dir'] . '/layouts/main';

        // Render
        return view($_this_page, $data)->layout($_this_layout, Setting::preLoad());
    }

    /**
     * Todo: Demo Saving Data
     *
     * ? This method is used to save data to the database
     * ? Is a demo method that will validate and save data to the user_tokens
     * 
     * ? What you need is a valid user email and token name
     */
    public function store()
    {
        // Validate Data
        $this->validate();

        // Get mounted data
        $token_name = strtolower(trim($this->tokenName));

        // Failing validation will automatically redirect back with errors
        if (strlen($token_name) > 5) {
            // Notification
            session()->flash('notification', 'error');

            // Open Page
            return redirect()->back()->with('message', '<strong>Error:</strong> Token is short long. Force error message');
        }

        // Generate Token
        $_token = Str::random(10);

        // Assign Token to Form Data
        $this->form_data['token'] = $_token;

        // Add data to session incase you wish to pass to next component
        $validated = array_merge($this->passed_data, $this->form_data);
        session()->put('passed-data', $this->validated);

        // Notification
        session()->flash('notification', 'success');

        // Open Page
        return redirect()->back()->with('message', '<strong>Success:</strong> Action was successful');

        // Redirect to the next step
        $this->redirectRoute('home'); // Ensure route is defined
    }
}
