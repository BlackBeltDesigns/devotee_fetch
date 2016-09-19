<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

return array(
    'author'            => 'Brian Mallett, BBDOKC',                                                     //  This is the name of the company or individual responsible for the add-on. This value is used in the Add-On Manager for attribution as well as filtering. This a required key.
    'author_url'        => 'http://bbdokc.com',                                                         //  This is the URL associated with the add-on. This value is used in manual display for plugins, as such this is a required key for all plugins.
    'name'              => 'devot:ee Fetch',                                                            //  This is the name of the add-on. This value is used in the Add-On Manager as the display name for the add-on. This is a required key.
    'description'       => 'Fetch your developer data from devot:ee',                                   //  This is a brief description of the add-on. This value is used in the manual display for plugins, as such this is a required key for all plugins.
    'version'           => '1.0.0',                                                                     //  This is the version number of the add-on. We recommend using Semantic Versioning. This is a required key.
    'namespace'         => 'Devotee_fetch',                                                             //  This is the PHP namespace for your add-on. This is a required key.
                                                                                                        //  This key associates your add-on directory with a namespace. ExpressionEngine will look inside your add-on directory any time it encounters a class name that begins with this namespace.
    'settings_exist'    => FALSE                                                                        //  This indicates whether or not the add-on exposes settings to the Add-On Manager. The default is FALSE.
//    'docs_url'          => 'http://example.com/hello_world/docs',       //  This is an external URL for additional documentation.
//    'plugin.typography' => FALSE,                                       //  This indicates whether or not the add-on provides a plugin that should be made available as a text formatter to some Channel Fields. The default is FALSE.
//    'fieldtypes' => array(                                              //  This is an associative array of the fieldtypes the add-on contains where the key corresponds to the fieldtype, ft.hello_world.php in the above example. Each fieldtype defines its name which is used when creating or editing Channel Fields.
//        'hello_world' => array(                                         //
//            'name' => 'Hello World',                                    //
//            'compatibility' => 'text'                                   //  As of 3.1.0 fieldtypes can specify their compatibility. When editing a Channel Field the fieldtype options will be restricted to those fieldtypes that have the same compatibility. ExpressionEngine’s native fieldtypes have the following compatibilities:
//        )                                                               //  date =>	Date | file => File | grid => Grid | list => Checkboxes, Radio Buttons, Select, Multiselect | relationship => Relationships | text => Email Address, Rich Text Editor, Text Input, Textarea, URL
//    ),
//    'services' => array(                                                //  This is an associative array of services to register on the Dependency Container.
//        'MyService' => function($addon)
//        {
//            return new ServiceClass();
//        }
//    ),
//    'models' => array(                                                  //  This is an associate array of models exposed by this addon. The class name should be relative to the addon namespace. Typically addons will be in a Model directory in the addon’s folder.
//        'Name' => 'Model\ClassName'
//    )
);