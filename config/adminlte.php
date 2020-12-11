<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
    */

    'title' => 'AdminLTE 3',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-favicon
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-logo
    |
    */

    'logo' => '<b>Admin</b>LTE',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'AdminLTE',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-user-menu
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#71-layout
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#721-authentication-views-classes
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#722-admin-panel-classes
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#73-sidebar
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#74-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-urls
    |
    */

    'use_route_url' => false,

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#92-laravel-mix
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#8-menu-configuration
    |
    */

    'menu' => [        
        ['header' => 'admiINSCRIPCIÓN'],
        [
            'text'    => 'admiSector Publico y Privado',
            'icon'    => 'fas fa-school',
            'submenu' => [
                [
                    'text' => 'admiSolicitud para tramitar SS',
                    'url'=>'solicitudServicio'
                ],
                [
                    'text' => 'admiDatos del Prestador',
                    'url'  => 'datosPrestador'
                ],
                [
                    'text' => 'admiRegistro de Autorizacion',
                    'url'  => 'registroAutorizacion'
                ],
            ],
        ],
        [
            'text'    => 'admiSector Privado',
            'icon'    => 'fas fa-industry',
            'submenu' => [
                [
                    'text' => 'admiAnexo Tecnico',
                    'url'  => 'anexoTecnico'
                ],
                [
                    'text' => 'admiSolicitud Sector Privado',
                    'icon'    => 'fas fa-share',
                    'submenu' => [
                        [
                            'text' => 'admi  Para 1 Persona',
                            'url'  => 'solicitudPrivado1'
                        ],
                        [
                            'text' => 'admi  Para 2 Personas',
                            'url'  => 'solicitudPrivado2'
                        ],
                        [
                            'text' => 'admi  Para 3 o mas Personas',
                            'url'  => 'solicitudPrivado3'
                        ],
                    ]
                ],
            ],
        ],
        [
            'text' => 'admiReportes',
            'icon' => 'fas fa-fw fa-lock',
            'submenu' => [
                [
                    'text' => 'admi  Bimestral',
                    'url'  => 'bimestral'
                ],
                [
                    'text' => 'admi  Trimestral',
                    'url'  => 'trimestral'
                ],
            ]
        ],

        ['header' => 'admiADMINISTRACION'],
        [
            'text' => 'admiSeguimiento',
            'icon' => 'fas fa-fw fa-lock',
            'submenu' => [
                [
                    'text' => 'admi  Principal',
                    'url'  => 'seguimiento/principal'
                ],
                [
                    'text' => 'admi  Inscripcion',
                    'url'  => 'seguimiento/inscripcion'
                ],
                [
                    'text' => 'admi  Bajas',
                    'url'  => 'seguimiento/bajas'
                ],
                [
                    'text' => 'admi  Por concluir',
                    'url'  => 'seguimiento/porConcluir'
                ],
                [
                    'text' => 'admi  Liberacion',
                    'url'  => 'seguimiento/liberaciones'
                ],
            ]
        ],
        [
            'text' => 'admiArchivos historicos',
            'icon' => 'fas fa-fw fa-lock',
            'submenu' => [
                [
                    'text' => 'admi  Ver',
                    'url'  => 'archivos/ver'
                ],
                [
                    'text' => 'admi  Agregar',
                    'url'  => 'archivos/agregar'
                ],
            ]
        ],
        [
            'text' => 'admiConstancias',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-lock',
            'url' => 'constancias/generar'
        ],
        [
            'text' => 'admiUsuarios',
            'icon' => 'fas fa-fw fa-lock',
            'submenu' => [
                [
                    'text' => 'admi  Ver Usuarios',
                    'url'  => 'usuarios/ver'
                ],
                [
                    'text' => 'admi  Crear cuentas',
                    'url'  => 'usuarios/crear'
                ],
                [
                    'text' => 'admi  Recuperacion',
                    'url'  => 'usuarios/recuperar'
                ],
                [
                    'text' => 'admi  Importar',
                    'url'  => 'usuarios/importar'
                ],
            ]
        ],
        ['header' => 'admiAJUSTES DE LA CUENTA'],
        [
            'text' => 'admiPerfil',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-user',
        ],
        [
            'text' => 'admiCambiar Contraseña',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-lock',
        ],
        ['header' => 'userINSCRIPCIÓN'],
        [
            'text'    => 'userSector Publico y Privado',
            'icon'    => 'fas fa-school',
            'submenu' => [
                [
                    'text' => 'userSolicitud para tramitar SS',
                    'url'=>'solicitudServicio'
                ],
                [
                    'text' => 'userDatos del Prestador',
                    'url'  => 'datosPrestador'
                ],
                [
                    'text' => 'userRegistro de Autorizacion',
                    'url'  => 'registroAutorizacion'
                ],
            ],
        ],
        [
            'text'    => 'userSector Privado',
            'icon'    => 'fas fa-industry',
            'submenu' => [
                [
                    'text' => 'userAnexo Tecnico',
                    'url'  => 'anexoTecnico'
                ],
                [
                    'text' => 'userSolicitud Sector Privado',
                    'icon'    => 'fas fa-share',
                    'submenu' => [
                        [
                            'text' => 'user  Para 1 Persona',
                            'url'  => 'solicitudPrivado1'
                        ],
                        [
                            'text' => 'user  Para 2 Personas',
                            'url'  => 'solicitudPrivado2'
                        ],
                        [
                            'text' => 'user  Para 3 o mas Personas',
                            'url'  => 'solicitudPrivado3'
                        ],
                    ]
                ],
            ],
        ],

        [
            'text' => 'userReportes',
            'icon' => 'fas fa-fw fa-lock',
            'submenu' => [
                [
                    'text' => 'user  Bimestral',
                    'url'  => 'bimestral'
                ],
                [
                    'text' => 'user  Trimestral',
                    'url'  => 'trimestral'
                ],
            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#83-custom-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#91-plugins
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#93-livewire
    */

    'livewire' => false,

    
        'name' => 'AdminLTE-Components-DG',
        'active' => true,
        'files' => [
            [
                'type' => 'css',
                'asset' => true,
                'location' => '/vendor/dg-plugins/select2/css/select2.min.css',
            ],
            [
                'type' => 'css',
                'asset' => true,
                'location' => '/vendor/dg-plugins/select2/css/select2-bootstrap4.min.css',
            ],
            [
                'type' => 'js',
                'asset' => true,
                'location' => '/vendor/dg-plugins/select2/js/select2.min.js',
            ],
            [
                'type' => 'js',
                'asset' => true,
                'location' => '/vendor/dg-plugins/bs-custom-file-input/bs-custom-file-input.min.js',
            ],
            [
                'type' => 'js',
                'asset' => true,
                'location' => '/vendor/dg-plugins/moment/moment.min.js',
            ],
            [
                'type' => 'css',
                'asset' => true,
                'location' => '/vendor/dg-plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
            ],
            [
                'type' => 'js',
                'asset' => true,
                'location' => '/vendor/dg-plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
            ],
            [
                'type' => 'css',
                'asset' => true,
                'location' => '/vendor/dg-plugins/summernote/summernote-bs4.css',
            ],
            [
                'type' => 'js',
                'asset' => true,
                'location' => '/vendor/dg-plugins/summernote/summernote-bs4.min.js',
            ],
            [
                'type' => 'css',
                'asset' => true,
                'location' => '/vendor/dg-plugins/bs-select/css/bootstrap-select.min.css',
            ],
            [
                'type' => 'js',
                'asset' => true,
                'location' => '/vendor/dg-plugins/bs-select/js/bootstrap-select.min.js',
            ],
            [
                'type' => 'css',
                'asset' => true,
                'location' => '/vendor/dg-plugins/bootstrap-tags-input/bootstrap-tagsinput.css',
            ],
            [
                'type' => 'js',
                'asset' => true,
                'location' => '/vendor/dg-plugins/bootstrap-tags-input/bootstrap-tagsinput.js',
            ],
            [
                'type' => 'js',
                'asset' => true,
                'location' => '/vendor/dg-plugins/daterangepicker/daterangepicker.js',
            ],
            [
                'type' => 'css',
                'asset' => true,
                'location' => '/vendor/dg-plugins/daterangepicker/daterangepicker.css',
            ],
            [
                'type' => 'css',
                'asset' => true,
                'location' => '/vendor/dg-plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css',
            ],
            [
                'type' => 'js',
                'asset' => true,
                'location' => '/vendor/dg-plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js',
            ],
            [
                'type' => 'css',
                'asset' => true,
                'location' => '/vendor/dg-plugins/bootstrap-slider/css/bootstrap-slider.min.css',
            ],
            [
                'type' => 'js',
                'asset' => true,
                'location' => '/vendor/dg-plugins/bootstrap-slider/js/bootstrap-slider.min.js',
            ],
        ],
];
