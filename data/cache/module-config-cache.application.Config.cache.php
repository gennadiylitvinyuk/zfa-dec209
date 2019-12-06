<?php
return array (
  'controller_plugins' => 
  array (
    'aliases' => 
    array (
      'fileprg' => 'Zend\\Mvc\\Plugin\\FilePrg\\FilePostRedirectGet',
      'FilePostRedirectGet' => 'Zend\\Mvc\\Plugin\\FilePrg\\FilePostRedirectGet',
      'filePostRedirectGet' => 'Zend\\Mvc\\Plugin\\FilePrg\\FilePostRedirectGet',
      'filepostredirectget' => 'Zend\\Mvc\\Plugin\\FilePrg\\FilePostRedirectGet',
      'Zend\\Mvc\\Controller\\Plugin\\FilePostRedirectGet' => 'Zend\\Mvc\\Plugin\\FilePrg\\FilePostRedirectGet',
      'flashmessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
      'flashMessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
      'FlashMessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
      'Zend\\Mvc\\Controller\\Plugin\\FlashMessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
    ),
    'factories' => 
    array (
      'Zend\\Mvc\\Plugin\\FilePrg\\FilePostRedirectGet' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
    ),
  ),
  'service_manager' => 
  array (
    'abstract_factories' => 
    array (
      0 => 'Zend\\Session\\Service\\ContainerAbstractServiceFactory',
      1 => 'Zend\\Cache\\Service\\StorageCacheAbstractServiceFactory',
      2 => 'Zend\\Form\\FormAbstractServiceFactory',
      3 => 'Zend\\Db\\Adapter\\AdapterAbstractServiceFactory',
      4 => 'Zend\\Log\\LoggerAbstractServiceFactory',
      5 => 'Zend\\Navigation\\Service\\NavigationAbstractServiceFactory',
    ),
    'aliases' => 
    array (
      'Zend\\Session\\SessionManager' => 'Zend\\Session\\ManagerInterface',
      'Zend\\Form\\Annotation\\FormAnnotationBuilder' => 'FormAnnotationBuilder',
      'Zend\\Form\\Annotation\\AnnotationBuilder' => 'FormAnnotationBuilder',
      'Zend\\Form\\FormElementManager' => 'FormElementManager',
      'InputFilterManager' => 'Zend\\InputFilter\\InputFilterPluginManager',
      'FilterManager' => 'Zend\\Filter\\FilterPluginManager',
      'HydratorManager' => 'Zend\\Hydrator\\HydratorPluginManager',
      'TranslatorPluginManager' => 'Zend\\I18n\\Translator\\LoaderPluginManager',
      'Zend\\Db\\Adapter\\Adapter' => 'Zend\\Db\\Adapter\\AdapterInterface',
      'HttpRouter' => 'Zend\\Router\\Http\\TreeRouteStack',
      'router' => 'Zend\\Router\\RouteStackInterface',
      'Router' => 'Zend\\Router\\RouteStackInterface',
      'RoutePluginManager' => 'Zend\\Router\\RoutePluginManager',
      'ValidatorManager' => 'Zend\\Validator\\ValidatorPluginManager',
    ),
    'factories' => 
    array (
      'Zend\\Session\\Config\\ConfigInterface' => 'Zend\\Session\\Service\\SessionConfigFactory',
      'Zend\\Session\\ManagerInterface' => 'Zend\\Session\\Service\\SessionManagerFactory',
      'Zend\\Session\\Storage\\StorageInterface' => 'Zend\\Session\\Service\\StorageFactory',
      'Zend\\Cache\\PatternPluginManager' => 'Zend\\Cache\\Service\\PatternPluginManagerFactory',
      'Zend\\Cache\\Storage\\AdapterPluginManager' => 'Zend\\Cache\\Service\\StorageAdapterPluginManagerFactory',
      'Zend\\Cache\\Storage\\PluginManager' => 'Zend\\Cache\\Service\\StoragePluginManagerFactory',
      'FormAnnotationBuilder' => 'Zend\\Form\\Annotation\\AnnotationBuilderFactory',
      'FormElementManager' => 'Zend\\Form\\FormElementManagerFactory',
      'Zend\\InputFilter\\InputFilterPluginManager' => 'Zend\\InputFilter\\InputFilterPluginManagerFactory',
      'Zend\\Filter\\FilterPluginManager' => 'Zend\\Filter\\FilterPluginManagerFactory',
      'Zend\\Hydrator\\HydratorPluginManager' => 'Zend\\Hydrator\\HydratorPluginManagerFactory',
      'Zend\\Hydrator\\StandaloneHydratorPluginManager' => 'Zend\\Hydrator\\StandaloneHydratorPluginManagerFactory',
      'Zend\\I18n\\Translator\\TranslatorInterface' => 'Zend\\I18n\\Translator\\TranslatorServiceFactory',
      'Zend\\I18n\\Translator\\LoaderPluginManager' => 'Zend\\I18n\\Translator\\LoaderPluginManagerFactory',
      'Zend\\Db\\Adapter\\AdapterInterface' => 'Zend\\Db\\Adapter\\AdapterServiceFactory',
      'Zend\\Log\\Logger' => 'Zend\\Log\\LoggerServiceFactory',
      'LogFilterManager' => 'Zend\\Log\\FilterPluginManagerFactory',
      'LogFormatterManager' => 'Zend\\Log\\FormatterPluginManagerFactory',
      'LogProcessorManager' => 'Zend\\Log\\ProcessorPluginManagerFactory',
      'LogWriterManager' => 'Zend\\Log\\WriterPluginManagerFactory',
      'Zend\\Router\\Http\\TreeRouteStack' => 'Zend\\Router\\Http\\HttpRouterFactory',
      'Zend\\Router\\RoutePluginManager' => 'Zend\\Router\\RoutePluginManagerFactory',
      'Zend\\Router\\RouteStackInterface' => 'Zend\\Router\\RouterFactory',
      'Zend\\Validator\\ValidatorPluginManager' => 'Zend\\Validator\\ValidatorPluginManagerFactory',
      'Application\\Event\\AppEventAggregate' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Market\\Form\\PostForm' => 'Market\\Form\\Factory\\PostFormFactory',
      'Market\\Form\\PostFilter' => 'Market\\Form\\Factory\\PostFilterFactory',
      'model-primary-adapter' => 'Model\\Adapter\\Factory\\PrimaryFactory',
      'model-listings-table' => 'Model\\Table\\Factory\\ListingsTableFactory',
      'model-city-codes-table' => 'Model\\Table\\Factory\\CityCodesTableFactory',
      'model-users-table' => 'Model\\Table\\Factory\\UsersTableFactory',
      'model-listings-hydrator' => 'Model\\Hydrator\\Factory\\ListingsHydratorFactory',
      'Events\\Entity\\Event' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Events\\Entity\\Registration' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Events\\Entity\\Attendee' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
    ),
    'services' => 
    array (
      'market-upload-Config' => 
      array (
        'img_size' => 
        array (
        ),
        'file_size' => 
        array (
        ),
        'rename' => 
        array (
        ),
        'img_url' => '/images',
      ),
      'model-primary-adapter-Config' => 
      array (
        'driver' => 'PDO',
        'dsn' => 'mysql:hostname=localhost;dbname=zfcourse',
        'username' => 'vagrant',
        'password' => 'vagrant',
      ),
      'events-nav-Config' => 
      array (
        0 => 
        array (
          'label' => 'Signup Form',
          'class' => 'events-label',
          'route' => 'events/signup',
          'resource' => 'menu-events-signup-label',
        ),
        1 => 
        array (
          'label' => 'Signup',
          'class' => 'btn btn-block btn-success btn-large',
          'route' => 'events/signup',
          'resource' => 'menu-events-signup',
        ),
        2 => 
        array (
          'label' => 'Admin Area',
          'class' => 'events-label',
          'route' => 'events/admin',
          'resource' => 'menu-events-admin-label',
        ),
        3 => 
        array (
          'label' => 'Admin Area',
          'class' => 'btn btn-block btn-success btn-large',
          'route' => 'events/admin',
          'resource' => 'menu-events-admin',
        ),
      ),
      'categories' => 
      array (
        0 => 'barter',
        1 => 'beauty',
        2 => 'clothing',
        3 => 'computer',
        4 => 'entertainment',
        5 => 'free',
        6 => 'garden',
        7 => 'general',
        8 => 'health',
        9 => 'household',
        10 => 'phones',
        11 => 'property',
        12 => 'sporting',
        13 => 'tools',
        14 => 'transportation',
        15 => 'wanted',
      ),
      'market-expire-days' => 
      array (
        0 => 'Never',
        1 => 'Tomorrow',
        7 => 'Week',
        30 => 'Month',
      ),
      'market-captcha-options' => 
      array (
        'expiration' => 300,
        'font' => '/home/vagrant/Zend/workspaces/DefaultWorkspace/onlinemarket.work/config/autoload/../../public/fonts/FreeSansBold.ttf',
        'fontSize' => 24,
        'height' => 50,
        'width' => 200,
        'imgDir' => '/home/vagrant/Zend/workspaces/DefaultWorkspace/onlinemarket.work/config/autoload/../../public/captcha',
        'imgUrl' => '/captcha',
      ),
      'notification-Config' => 
      array (
        'from' => 'doug@zend.com',
        'subject' => 'Item Posted Successfully',
        'transport' => 
        array (
          'type' => 'file',
          'options' => 
          array (
            'path' => false,
          ),
        ),
      ),
    ),
  ),
  'view_helpers' => 
  array (
    'aliases' => 
    array (
      'form' => 'Zend\\Form\\View\\Helper\\Form',
      'Form' => 'Zend\\Form\\View\\Helper\\Form',
      'formbutton' => 'Zend\\Form\\View\\Helper\\FormButton',
      'form_button' => 'Zend\\Form\\View\\Helper\\FormButton',
      'formButton' => 'Zend\\Form\\View\\Helper\\FormButton',
      'FormButton' => 'Zend\\Form\\View\\Helper\\FormButton',
      'formcaptcha' => 'Zend\\Form\\View\\Helper\\FormCaptcha',
      'form_captcha' => 'Zend\\Form\\View\\Helper\\FormCaptcha',
      'formCaptcha' => 'Zend\\Form\\View\\Helper\\FormCaptcha',
      'FormCaptcha' => 'Zend\\Form\\View\\Helper\\FormCaptcha',
      'captchadumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'captcha_dumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'captcha/dumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'CaptchaDumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'captchaDumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'formcaptchadumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'form_captcha_dumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'formCaptchaDumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'FormCaptchaDumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'captchafiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'captcha/figlet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'captcha_figlet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'captchaFiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'CaptchaFiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'formcaptchafiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'form_captcha_figlet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'formCaptchaFiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'FormCaptchaFiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'captchaimage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'captcha/image' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'captcha_image' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'captchaImage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'CaptchaImage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'formcaptchaimage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'form_captcha_image' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'formCaptchaImage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'FormCaptchaImage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'captcharecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'captcha/recaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'captcha_recaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'captchaRecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'CaptchaRecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'formcaptcharecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'form_captcha_recaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'formCaptchaRecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'FormCaptchaRecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'formcheckbox' => 'Zend\\Form\\View\\Helper\\FormCheckbox',
      'form_checkbox' => 'Zend\\Form\\View\\Helper\\FormCheckbox',
      'formCheckbox' => 'Zend\\Form\\View\\Helper\\FormCheckbox',
      'FormCheckbox' => 'Zend\\Form\\View\\Helper\\FormCheckbox',
      'formcollection' => 'Zend\\Form\\View\\Helper\\FormCollection',
      'form_collection' => 'Zend\\Form\\View\\Helper\\FormCollection',
      'formCollection' => 'Zend\\Form\\View\\Helper\\FormCollection',
      'FormCollection' => 'Zend\\Form\\View\\Helper\\FormCollection',
      'formcolor' => 'Zend\\Form\\View\\Helper\\FormColor',
      'form_color' => 'Zend\\Form\\View\\Helper\\FormColor',
      'formColor' => 'Zend\\Form\\View\\Helper\\FormColor',
      'FormColor' => 'Zend\\Form\\View\\Helper\\FormColor',
      'formdate' => 'Zend\\Form\\View\\Helper\\FormDate',
      'form_date' => 'Zend\\Form\\View\\Helper\\FormDate',
      'formDate' => 'Zend\\Form\\View\\Helper\\FormDate',
      'FormDate' => 'Zend\\Form\\View\\Helper\\FormDate',
      'formdatetime' => 'Zend\\Form\\View\\Helper\\FormDateTime',
      'form_date_time' => 'Zend\\Form\\View\\Helper\\FormDateTime',
      'formDateTime' => 'Zend\\Form\\View\\Helper\\FormDateTime',
      'FormDateTime' => 'Zend\\Form\\View\\Helper\\FormDateTime',
      'formdatetimelocal' => 'Zend\\Form\\View\\Helper\\FormDateTimeLocal',
      'form_date_time_local' => 'Zend\\Form\\View\\Helper\\FormDateTimeLocal',
      'formDateTimeLocal' => 'Zend\\Form\\View\\Helper\\FormDateTimeLocal',
      'FormDateTimeLocal' => 'Zend\\Form\\View\\Helper\\FormDateTimeLocal',
      'formdatetimeselect' => 'Zend\\Form\\View\\Helper\\FormDateTimeSelect',
      'form_date_time_select' => 'Zend\\Form\\View\\Helper\\FormDateTimeSelect',
      'formDateTimeSelect' => 'Zend\\Form\\View\\Helper\\FormDateTimeSelect',
      'FormDateTimeSelect' => 'Zend\\Form\\View\\Helper\\FormDateTimeSelect',
      'formdateselect' => 'Zend\\Form\\View\\Helper\\FormDateSelect',
      'form_date_select' => 'Zend\\Form\\View\\Helper\\FormDateSelect',
      'formDateSelect' => 'Zend\\Form\\View\\Helper\\FormDateSelect',
      'FormDateSelect' => 'Zend\\Form\\View\\Helper\\FormDateSelect',
      'form_element' => 'Zend\\Form\\View\\Helper\\FormElement',
      'formelement' => 'Zend\\Form\\View\\Helper\\FormElement',
      'formElement' => 'Zend\\Form\\View\\Helper\\FormElement',
      'FormElement' => 'Zend\\Form\\View\\Helper\\FormElement',
      'form_element_errors' => 'Zend\\Form\\View\\Helper\\FormElementErrors',
      'formelementerrors' => 'Zend\\Form\\View\\Helper\\FormElementErrors',
      'formElementErrors' => 'Zend\\Form\\View\\Helper\\FormElementErrors',
      'FormElementErrors' => 'Zend\\Form\\View\\Helper\\FormElementErrors',
      'form_email' => 'Zend\\Form\\View\\Helper\\FormEmail',
      'formemail' => 'Zend\\Form\\View\\Helper\\FormEmail',
      'formEmail' => 'Zend\\Form\\View\\Helper\\FormEmail',
      'FormEmail' => 'Zend\\Form\\View\\Helper\\FormEmail',
      'form_file' => 'Zend\\Form\\View\\Helper\\FormFile',
      'formfile' => 'Zend\\Form\\View\\Helper\\FormFile',
      'formFile' => 'Zend\\Form\\View\\Helper\\FormFile',
      'FormFile' => 'Zend\\Form\\View\\Helper\\FormFile',
      'formfileapcprogress' => 'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'form_file_apc_progress' => 'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'formFileApcProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'FormFileApcProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'formfilesessionprogress' => 'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'form_file_session_progress' => 'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'formFileSessionProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'FormFileSessionProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'formfileuploadprogress' => 'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'form_file_upload_progress' => 'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'formFileUploadProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'FormFileUploadProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'formhidden' => 'Zend\\Form\\View\\Helper\\FormHidden',
      'form_hidden' => 'Zend\\Form\\View\\Helper\\FormHidden',
      'formHidden' => 'Zend\\Form\\View\\Helper\\FormHidden',
      'FormHidden' => 'Zend\\Form\\View\\Helper\\FormHidden',
      'formimage' => 'Zend\\Form\\View\\Helper\\FormImage',
      'form_image' => 'Zend\\Form\\View\\Helper\\FormImage',
      'formImage' => 'Zend\\Form\\View\\Helper\\FormImage',
      'FormImage' => 'Zend\\Form\\View\\Helper\\FormImage',
      'forminput' => 'Zend\\Form\\View\\Helper\\FormInput',
      'form_input' => 'Zend\\Form\\View\\Helper\\FormInput',
      'formInput' => 'Zend\\Form\\View\\Helper\\FormInput',
      'FormInput' => 'Zend\\Form\\View\\Helper\\FormInput',
      'formlabel' => 'Zend\\Form\\View\\Helper\\FormLabel',
      'form_label' => 'Zend\\Form\\View\\Helper\\FormLabel',
      'formLabel' => 'Zend\\Form\\View\\Helper\\FormLabel',
      'FormLabel' => 'Zend\\Form\\View\\Helper\\FormLabel',
      'formmonth' => 'Zend\\Form\\View\\Helper\\FormMonth',
      'form_month' => 'Zend\\Form\\View\\Helper\\FormMonth',
      'formMonth' => 'Zend\\Form\\View\\Helper\\FormMonth',
      'FormMonth' => 'Zend\\Form\\View\\Helper\\FormMonth',
      'formmonthselect' => 'Zend\\Form\\View\\Helper\\FormMonthSelect',
      'form_month_select' => 'Zend\\Form\\View\\Helper\\FormMonthSelect',
      'formMonthSelect' => 'Zend\\Form\\View\\Helper\\FormMonthSelect',
      'FormMonthSelect' => 'Zend\\Form\\View\\Helper\\FormMonthSelect',
      'formmulticheckbox' => 'Zend\\Form\\View\\Helper\\FormMultiCheckbox',
      'form_multi_checkbox' => 'Zend\\Form\\View\\Helper\\FormMultiCheckbox',
      'formMultiCheckbox' => 'Zend\\Form\\View\\Helper\\FormMultiCheckbox',
      'FormMultiCheckbox' => 'Zend\\Form\\View\\Helper\\FormMultiCheckbox',
      'formnumber' => 'Zend\\Form\\View\\Helper\\FormNumber',
      'form_number' => 'Zend\\Form\\View\\Helper\\FormNumber',
      'formNumber' => 'Zend\\Form\\View\\Helper\\FormNumber',
      'FormNumber' => 'Zend\\Form\\View\\Helper\\FormNumber',
      'formpassword' => 'Zend\\Form\\View\\Helper\\FormPassword',
      'form_password' => 'Zend\\Form\\View\\Helper\\FormPassword',
      'formPassword' => 'Zend\\Form\\View\\Helper\\FormPassword',
      'FormPassword' => 'Zend\\Form\\View\\Helper\\FormPassword',
      'formradio' => 'Zend\\Form\\View\\Helper\\FormRadio',
      'form_radio' => 'Zend\\Form\\View\\Helper\\FormRadio',
      'formRadio' => 'Zend\\Form\\View\\Helper\\FormRadio',
      'FormRadio' => 'Zend\\Form\\View\\Helper\\FormRadio',
      'formrange' => 'Zend\\Form\\View\\Helper\\FormRange',
      'form_range' => 'Zend\\Form\\View\\Helper\\FormRange',
      'formRange' => 'Zend\\Form\\View\\Helper\\FormRange',
      'FormRange' => 'Zend\\Form\\View\\Helper\\FormRange',
      'formreset' => 'Zend\\Form\\View\\Helper\\FormReset',
      'form_reset' => 'Zend\\Form\\View\\Helper\\FormReset',
      'formReset' => 'Zend\\Form\\View\\Helper\\FormReset',
      'FormReset' => 'Zend\\Form\\View\\Helper\\FormReset',
      'formrow' => 'Zend\\Form\\View\\Helper\\FormRow',
      'form_row' => 'Zend\\Form\\View\\Helper\\FormRow',
      'formRow' => 'Zend\\Form\\View\\Helper\\FormRow',
      'FormRow' => 'Zend\\Form\\View\\Helper\\FormRow',
      'formsearch' => 'Zend\\Form\\View\\Helper\\FormSearch',
      'form_search' => 'Zend\\Form\\View\\Helper\\FormSearch',
      'formSearch' => 'Zend\\Form\\View\\Helper\\FormSearch',
      'FormSearch' => 'Zend\\Form\\View\\Helper\\FormSearch',
      'formselect' => 'Zend\\Form\\View\\Helper\\FormSelect',
      'form_select' => 'Zend\\Form\\View\\Helper\\FormSelect',
      'formSelect' => 'Zend\\Form\\View\\Helper\\FormSelect',
      'FormSelect' => 'Zend\\Form\\View\\Helper\\FormSelect',
      'formsubmit' => 'Zend\\Form\\View\\Helper\\FormSubmit',
      'form_submit' => 'Zend\\Form\\View\\Helper\\FormSubmit',
      'formSubmit' => 'Zend\\Form\\View\\Helper\\FormSubmit',
      'FormSubmit' => 'Zend\\Form\\View\\Helper\\FormSubmit',
      'formtel' => 'Zend\\Form\\View\\Helper\\FormTel',
      'form_tel' => 'Zend\\Form\\View\\Helper\\FormTel',
      'formTel' => 'Zend\\Form\\View\\Helper\\FormTel',
      'FormTel' => 'Zend\\Form\\View\\Helper\\FormTel',
      'formtext' => 'Zend\\Form\\View\\Helper\\FormText',
      'form_text' => 'Zend\\Form\\View\\Helper\\FormText',
      'formText' => 'Zend\\Form\\View\\Helper\\FormText',
      'FormText' => 'Zend\\Form\\View\\Helper\\FormText',
      'formtextarea' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'form_text_area' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'formTextarea' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'formTextArea' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'FormTextArea' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'formtime' => 'Zend\\Form\\View\\Helper\\FormTime',
      'form_time' => 'Zend\\Form\\View\\Helper\\FormTime',
      'formTime' => 'Zend\\Form\\View\\Helper\\FormTime',
      'FormTime' => 'Zend\\Form\\View\\Helper\\FormTime',
      'formurl' => 'Zend\\Form\\View\\Helper\\FormUrl',
      'form_url' => 'Zend\\Form\\View\\Helper\\FormUrl',
      'formUrl' => 'Zend\\Form\\View\\Helper\\FormUrl',
      'FormUrl' => 'Zend\\Form\\View\\Helper\\FormUrl',
      'formweek' => 'Zend\\Form\\View\\Helper\\FormWeek',
      'form_week' => 'Zend\\Form\\View\\Helper\\FormWeek',
      'formWeek' => 'Zend\\Form\\View\\Helper\\FormWeek',
      'FormWeek' => 'Zend\\Form\\View\\Helper\\FormWeek',
      'currencyformat' => 'Zend\\I18n\\View\\Helper\\CurrencyFormat',
      'currencyFormat' => 'Zend\\I18n\\View\\Helper\\CurrencyFormat',
      'CurrencyFormat' => 'Zend\\I18n\\View\\Helper\\CurrencyFormat',
      'dateformat' => 'Zend\\I18n\\View\\Helper\\DateFormat',
      'dateFormat' => 'Zend\\I18n\\View\\Helper\\DateFormat',
      'DateFormat' => 'Zend\\I18n\\View\\Helper\\DateFormat',
      'numberformat' => 'Zend\\I18n\\View\\Helper\\NumberFormat',
      'numberFormat' => 'Zend\\I18n\\View\\Helper\\NumberFormat',
      'NumberFormat' => 'Zend\\I18n\\View\\Helper\\NumberFormat',
      'plural' => 'Zend\\I18n\\View\\Helper\\Plural',
      'Plural' => 'Zend\\I18n\\View\\Helper\\Plural',
      'translate' => 'Zend\\I18n\\View\\Helper\\Translate',
      'Translate' => 'Zend\\I18n\\View\\Helper\\Translate',
      'translateplural' => 'Zend\\I18n\\View\\Helper\\TranslatePlural',
      'translatePlural' => 'Zend\\I18n\\View\\Helper\\TranslatePlural',
      'TranslatePlural' => 'Zend\\I18n\\View\\Helper\\TranslatePlural',
      'flashmessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessenger',
      'flashMessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessenger',
      'FlashMessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessenger',
      'leftLinks' => 'Market\\Helper\\LeftLinks',
      'formMultiText' => 'Events\\Helper\\FormMultiText',
    ),
    'factories' => 
    array (
      'Zend\\Form\\View\\Helper\\Form' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormButton' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormCaptcha' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\Captcha\\Dumb' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\Captcha\\Figlet' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\Captcha\\Image' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormCheckbox' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormCollection' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormColor' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDate' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDateTime' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDateTimeLocal' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDateTimeSelect' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDateSelect' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormElement' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormElementErrors' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormEmail' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormFile' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormHidden' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormImage' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormInput' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormLabel' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormMonth' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormMonthSelect' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormMultiCheckbox' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormNumber' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormPassword' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormRadio' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormRange' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormReset' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormRow' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormSearch' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormSelect' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormSubmit' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormTel' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormText' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormTextarea' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormTime' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormUrl' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormWeek' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\View\\Helper\\CurrencyFormat' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\View\\Helper\\DateFormat' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\View\\Helper\\NumberFormat' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\View\\Helper\\Plural' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\View\\Helper\\Translate' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\View\\Helper\\TranslatePlural' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessengerFactory',
      'zendviewhelperflashmessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessengerFactory',
      'Application\\Helper\\LeftLinks' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\View\\Helper\\FlashMessenger' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Market\\Helper\\LeftLinks' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Events\\Helper\\FormMultiText' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
    ),
  ),
  'input_filters' => 
  array (
    'abstract_factories' => 
    array (
      0 => 'Zend\\InputFilter\\InputFilterAbstractServiceFactory',
    ),
  ),
  'filters' => 
  array (
    'aliases' => 
    array (
      'alnum' => 'Zend\\I18n\\Filter\\Alnum',
      'Alnum' => 'Zend\\I18n\\Filter\\Alnum',
      'alpha' => 'Zend\\I18n\\Filter\\Alpha',
      'Alpha' => 'Zend\\I18n\\Filter\\Alpha',
      'numberformat' => 'Zend\\I18n\\Filter\\NumberFormat',
      'numberFormat' => 'Zend\\I18n\\Filter\\NumberFormat',
      'NumberFormat' => 'Zend\\I18n\\Filter\\NumberFormat',
      'numberparse' => 'Zend\\I18n\\Filter\\NumberParse',
      'numberParse' => 'Zend\\I18n\\Filter\\NumberParse',
      'NumberParse' => 'Zend\\I18n\\Filter\\NumberParse',
    ),
    'factories' => 
    array (
      'Zend\\I18n\\Filter\\Alnum' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\Filter\\Alpha' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\Filter\\NumberFormat' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\Filter\\NumberParse' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
    ),
  ),
  'validators' => 
  array (
    'aliases' => 
    array (
      'alnum' => 'Zend\\I18n\\Validator\\Alnum',
      'Alnum' => 'Zend\\I18n\\Validator\\Alnum',
      'alpha' => 'Zend\\I18n\\Validator\\Alpha',
      'Alpha' => 'Zend\\I18n\\Validator\\Alpha',
      'datetime' => 'Zend\\I18n\\Validator\\DateTime',
      'dateTime' => 'Zend\\I18n\\Validator\\DateTime',
      'DateTime' => 'Zend\\I18n\\Validator\\DateTime',
      'float' => 'Zend\\I18n\\Validator\\IsFloat',
      'Float' => 'Zend\\I18n\\Validator\\IsFloat',
      'int' => 'Zend\\I18n\\Validator\\IsInt',
      'Int' => 'Zend\\I18n\\Validator\\IsInt',
      'isfloat' => 'Zend\\I18n\\Validator\\IsFloat',
      'isFloat' => 'Zend\\I18n\\Validator\\IsFloat',
      'IsFloat' => 'Zend\\I18n\\Validator\\IsFloat',
      'isint' => 'Zend\\I18n\\Validator\\IsInt',
      'isInt' => 'Zend\\I18n\\Validator\\IsInt',
      'IsInt' => 'Zend\\I18n\\Validator\\IsInt',
      'phonenumber' => 'Zend\\I18n\\Validator\\PhoneNumber',
      'phoneNumber' => 'Zend\\I18n\\Validator\\PhoneNumber',
      'PhoneNumber' => 'Zend\\I18n\\Validator\\PhoneNumber',
      'postcode' => 'Zend\\I18n\\Validator\\PostCode',
      'postCode' => 'Zend\\I18n\\Validator\\PostCode',
      'PostCode' => 'Zend\\I18n\\Validator\\PostCode',
    ),
    'factories' => 
    array (
      'Zend\\I18n\\Validator\\Alnum' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\Validator\\Alpha' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\Validator\\DateTime' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\Validator\\IsFloat' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\Validator\\IsInt' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\Validator\\PhoneNumber' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\Validator\\PostCode' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
    ),
  ),
  'route_manager' => 
  array (
  ),
  'router' => 
  array (
    'routes' => 
    array (
      'application' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/application[/:action]',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\IndexController',
            'action' => 'index',
          ),
        ),
      ),
      'home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/',
          'defaults' => 
          array (
            'controller' => 'Market\\Controller\\IndexController',
            'action' => 'index',
          ),
        ),
      ),
      'market' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/market',
          'defaults' => 
          array (
            'controller' => 'Market\\Controller\\IndexController',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'post' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/post[/]',
              'defaults' => 
              array (
                'controller' => 'Market\\Controller\\PostController',
                'action' => 'index',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'lookup' => 
              array (
                'type' => 'Zend\\Router\\Http\\Segment',
                'options' => 
                array (
                  'route' => '/lookup[/]',
                  'defaults' => 
                  array (
                    'action' => 'lookup',
                  ),
                ),
              ),
            ),
          ),
          'view' => 
          array (
            'type' => 'Zend\\Router\\Http\\Literal',
            'options' => 
            array (
              'route' => '/view',
              'defaults' => 
              array (
                'controller' => 'Market\\Controller\\ViewController',
                'action' => 'index',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'slash' => 
              array (
                'type' => 'Zend\\Router\\Http\\Segment',
                'options' => 
                array (
                  'route' => '/',
                ),
              ),
              'category' => 
              array (
                'type' => 'Zend\\Router\\Http\\Segment',
                'options' => 
                array (
                  'route' => '/category[/:category]',
                  'constraints' => 
                  array (
                    'category' => '[A-Za-z0-9]*',
                  ),
                  'defaults' => 
                  array (
                    'action' => 'index',
                  ),
                ),
              ),
              'item' => 
              array (
                'type' => 'Zend\\Router\\Http\\Segment',
                'options' => 
                array (
                  'route' => '/item[/:itemId]',
                  'constraints' => 
                  array (
                    'itemId' => '[0-9]*',
                  ),
                  'defaults' => 
                  array (
                    'action' => 'item',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'events' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/events',
          'defaults' => 
          array (
            'controller' => 'Events\\Controller\\IndexController',
            'action' => 'index',
            'module' => 'Events',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'admin' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/admin[/][:eventId]',
              'defaults' => 
              array (
                'controller' => 'Events\\Controller\\AdminController',
                'action' => 'index',
              ),
              'constraints' => 
              array (
                'eventId' => '[0-9]+',
              ),
            ),
          ),
          'ajax' => 
          array (
            'type' => 'Zend\\Router\\Http\\Literal',
            'options' => 
            array (
              'route' => '/ajax',
              'defaults' => 
              array (
                'controller' => 'Events\\Controller\\AjaxController',
                'action' => 'registration',
              ),
            ),
            'may_terminate' => true,
            'child_routes' => 
            array (
              'reg' => 
              array (
                'type' => 'Zend\\Router\\Http\\Segment',
                'options' => 
                array (
                  'route' => '/reg/:eventId',
                  'defaults' => 
                  array (
                    'controller' => 'Events\\Controller\\AjaxController',
                    'action' => 'registration',
                  ),
                  'constraints' => 
                  array (
                    'eventId' => '[0-9]+',
                  ),
                ),
              ),
              'attendee' => 
              array (
                'type' => 'Zend\\Router\\Http\\Segment',
                'options' => 
                array (
                  'route' => '/attendee/:regId',
                  'defaults' => 
                  array (
                    'controller' => 'Events\\Controller\\AjaxController',
                    'action' => 'attendee',
                  ),
                  'constraints' => 
                  array (
                    'regId' => '[0-9]+',
                  ),
                ),
              ),
            ),
          ),
          'signup' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/signup[/][:eventId]',
              'defaults' => 
              array (
                'controller' => 'Events\\Controller\\SignupController',
                'action' => 'index',
              ),
              'constraints' => 
              array (
                'eventId' => '[0-9]+',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'controllers' => 
  array (
    'factories' => 
    array (
      'Application\\Controller\\IndexController' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Market\\Controller\\IndexController' => 'Market\\Controller\\Factory\\IndexControllerFactory',
      'Market\\Controller\\ViewController' => 'Market\\Controller\\Factory\\ViewControllerFactory',
      'Market\\Controller\\PostController' => 'Market\\Controller\\Factory\\PostControllerFactory',
    ),
  ),
  'listeners' => 
  array (
    0 => 'Application\\Event\\AppEventAggregate',
  ),
  'view_manager' => 
  array (
    'display_not_found_reason' => true,
    'display_exceptions' => true,
    'doctype' => 'HTML5',
    'not_found_template' => 'error/404',
    'exception_template' => 'error/index',
    'template_map' => 
    array (
      'layout/layout' => '/home/vagrant/Zend/workspaces/DefaultWorkspace/onlinemarket.work/module/Application/config/../view/layout/layout.phtml',
      'application/index/index' => '/home/vagrant/Zend/workspaces/DefaultWorkspace/onlinemarket.work/module/Application/config/../view/application/index/index.phtml',
      'error/404' => '/home/vagrant/Zend/workspaces/DefaultWorkspace/onlinemarket.work/module/Application/config/../view/error/404.phtml',
      'error/index' => '/home/vagrant/Zend/workspaces/DefaultWorkspace/onlinemarket.work/module/Application/config/../view/error/index.phtml',
    ),
    'template_path_stack' => 
    array (
      0 => '/home/vagrant/Zend/workspaces/DefaultWorkspace/onlinemarket.work/module/Application/config/../view',
      1 => '/home/vagrant/Zend/workspaces/DefaultWorkspace/onlinemarket.work/module/Market/config/../view',
      2 => '/home/vagrant/Zend/workspaces/DefaultWorkspace/onlinemarket.work/module/Events/config/../view',
    ),
  ),
  'access-control-Config' => 
  array (
    'resources' => 
    array (
      'application-index' => 'Application\\Controller\\IndexController',
      'market-index' => 'Market\\Controller\\IndexController',
      'market-view' => 'Market\\Controller\\ViewController',
      'market-post' => 'Market\\Controller\\PostController',
      'menu-market-index' => 'menu-market-index',
      'menu-market-view' => 'menu-market-view',
      'menu-market-post' => 'menu-market-post',
      'menu-events' => 'menu-events',
      'menu-events-admin' => 'menu-events-admin',
      'menu-events-signup' => 'menu-events-signup',
      'menu-events-admin-label' => 'menu-events-admin-label',
      'menu-events-signup-label' => 'menu-events-signup-label',
    ),
    'rights' => 
    array (
      'guest' => 
      array (
        'application-index' => 
        array (
          'allow' => NULL,
        ),
        'market-index' => 
        array (
          'allow' => NULL,
        ),
        'menu-events' => 
        array (
          'allow' => NULL,
        ),
        'menu-events-signup' => 
        array (
          'allow' => NULL,
        ),
        'menu-events-signup-label' => 
        array (
          'allow' => NULL,
        ),
      ),
      'user' => 
      array (
      ),
      'admin' => 
      array (
      ),
    ),
  ),
  'navigation' => 
  array (
    'default' => 
    array (
      'market-home' => 
      array (
        'label' => 'Home',
        'order' => -100,
        'route' => 'market',
        'resource' => 'menu-market-index',
      ),
      'market-post' => 
      array (
        'label' => 'Post',
        'route' => 'market/post',
        'resource' => 'menu-market-post',
      ),
      0 => 
      array (
        'label' => 'Events',
        'route' => 'events',
        'resource' => 'menu-events',
      ),
    ),
  ),
  'doctrine' => 
  array (
    'connection' => 
    array (
      'orm_default' => 
      array (
        'driverClass' => 'Doctrine\\DBAL\\Driver\\PDOMySql\\Driver',
        'params' => 
        array (
          'driver' => 'pdo_mysql',
          'host' => 'localhost',
          'dbname' => 'course',
          'user' => 'vagrant',
          'password' => 'vagrant',
          'driver_options' => 
          array (
            3 => 1,
          ),
        ),
      ),
    ),
    'configuration' => 
    array (
      'orm_default' => 
      array (
        'metadata_cache' => 'array',
        'query_cache' => 'array',
        'result_cache' => 'array',
        'hydration_cache' => 'array',
        'driver' => 'orm_default',
        'generate_proxies' => true,
        'proxy_dir' => '/home/vagrant/Zend/workspaces/DefaultWorkspace/onlinemarket.work/config/autoload/../../data/DoctrineORMModule/Proxy',
        'proxy_namespace' => 'DoctrineORMModule\\Proxy',
        'filters' => 
        array (
        ),
        'datetime_functions' => 
        array (
        ),
        'string_functions' => 
        array (
        ),
        'numeric_functions' => 
        array (
        ),
        'second_level_cache' => 
        array (
        ),
      ),
    ),
  ),
);