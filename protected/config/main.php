<?php

// Настройки, специфичные для данной машины (например, БД), рекомендуется поместить в overrides/local.php

return array_replace_recursive(
    array(
        'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
        'name'=>'Amobile-Crm',
        'language' => 'ru',
        'theme'=>'default',
        // preloading 'log' component
        'preload'=>array(
            'log',
            'config',
        ),
		'aliases'=>array(
			'appext'=>'application.extensions',
		),
        // autoloading model and component classes
        'import'=>array(
            'application.models.*',
            'application.components.*',
            'application.behaviors.*',
        ),
        'modules'=>array(
            'admin'=>array(),
            'auth'=>array(),
            'user'=>array(
                'hash' => 'md5',
                'sendActivationMail' => true,
                'loginNotActiv' => false,
                'activeAfterRegister' => false,
                'autoLogin' => true,
                'registrationUrl' => array('/user/registration'),
                'recoveryUrl' => array('/user/recovery'),
                'loginUrl' => array('/user/login'),
                'returnUrl' => array('/user/profile'),
                'returnLogoutUrl' => array('/user/login'),
            ),
        ),
        // application components
        'components'=>array(
            'config' => array(
                'class' => 'DConfig'
            ),
            'authManager' => array(
                'class' => 'CDbAuthManager',// 'auth.components.CachedDbAuthManager',
                //'cachingDuration' => 0,
                'itemTable' => '{{authitem}}',
                'itemChildTable' => '{{authitemchild}}',
                'assignmentTable' => '{{authassignment}}',
                'behaviors' => array(
                    'auth' => array(
                        'class' => 'auth.components.AuthBehavior',
                    ),
                ),
            ),
            'user'=>array(
                'class' => 'user.components.WebUser',
            ),
            'bootstrap'=>array(
                'class'=>'appext.yiistrap.components.TbApi',
            ),
            'yiiwheels' => array(
                'class' => 'appext.yiiwheels.YiiWheels',
            ),
            'phpThumb'=>array(
                'class'=>'appext.EPhpThumb.EPhpThumb',
                'options'=>array()
            ),
            // uncomment the following to enable URLs in path-format
            'urlManager'=>array(
                'class' => 'EUrlManager',
                'showScriptName'=>false,
                'urlFormat'=>'path',
                'rules'=>array(
                    'gii'=>'gii',
                    'admin/<controller:!config>' => 'admin/<controller>/list',
                    'admin'=>'admin/config',
                    '/'=>'/admin/config',
                    '<controller:page>/<url:[\w_-]+>' => '<controller>/view',
                ),
            ),
            'clientScript'=>array(
                'class'=>'EClientScript',
				'scriptMap'=>array(
					'jquery.js'=>'http://code.jquery.com/jquery-1.11.0.js',
					'jquery.min.js'=>'http://code.jquery.com/jquery-1.11.0.min.js',
				),
            ),
            'errorHandler'=>array(
                'errorAction'=>'site/error',
            ),
        ),
        'params'=>array(),
    ),
    (file_exists(__DIR__ . '/overrides/environment.php') ? require(__DIR__ . '/overrides/environment.php') : array()),
    (file_exists(__DIR__ . '/overrides/local.php') ? require(__DIR__ . '/overrides/local.php') : array())
);