<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'reference' => 'e8c4cac86fbabc609f0d529d5e5df8aedd4923b7',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'e8c4cac86fbabc609f0d529d5e5df8aedd4923b7',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'johnpbloch/wordpress-core' => array(
            'pretty_version' => '6.6.2',
            'version' => '6.6.2.0',
            'reference' => 'dbb5f96e78905e26cbfb4c4796d9d5b92c451a81',
            'type' => 'wordpress-core',
            'install_path' => __DIR__ . '/../johnpbloch/wordpress-core',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wordpress/core-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '6.6.2',
            ),
        ),
    ),
);
