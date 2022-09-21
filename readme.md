To create a destop app, first download PHP Desktop package.
Delete all the contents inside the www folder of PHP Desktop package.
Edit the settings.json:

{
    "application": {
        "single_instance_guid": "",
        "dpi_aware": true
    },
    "debugging": {
        "show_console": false,
        "subprocess_show_console": false,
        "log_level": "DEBUG4",
        "log_file": "debug.log"
    },
    "main_window": {
        "title": "মাদ্রাসা ডাটাবেজ",
        "icon": "C:/wamp64/www/madrasha/favicon.ico",
        "default_size": [800, 600],
        "minimum_size": [640, 480],
        "maximum_size": [0, 0],
        "disable_maximize_button": false,
        "center_on_screen": true,
        "start_maximized": false,
        "start_fullscreen": false,
        "always_on_top": false,
        "minimize_to_tray": false,
        "minimize_to_tray_message": "Minimized to tray"
    },
    "popup_window": {
        "icon": "",
        "fixed_title": "",
        "center_relative_to_parent": true,
        "default_size": [800, 600]
    },
    "web_server": {
        "listen_on": ["127.0.0.1", 8000],
        "www_directory": "/www/public/index.php",
        "index_files": ["index.php"],
        "cgi_interpreter": "php/php-cgi.exe",
        "cgi_extensions": ["php"],
        "cgi_temp_dir": "",
        "404_handler": "/pretty-urls.php",
        "hide_files": []
    },
    "chrome": {
        "log_file": "debug.log",
        "log_severity": "default",
        "cache_path": "webcache",
        "external_drag": true,
        "external_navigation": true,
        "reload_page_F5": true,
        "devtools_F12": true,
        "remote_debugging_port": 0,
        "command_line_switches": {},
        "enable_downloads": true,
        "context_menu": {
            "enable_menu": true,
            "navigation": true,
            "print": true,
            "view_source": true,
            "open_in_external_browser": true,
            "devtools": true
        }
    }
}
