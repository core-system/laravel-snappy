<?php

return array(


    'pdf'   => array(
        'enabled'     => true,
        'binary'      => '/usr/local/bin/wkhtmltopdf',
        'timeout'     => false,
        'options'     => array(),
        'env'         => array(),
        'temp-folder' => null,
    ),
    'image' => array(
        'enabled'     => true,
        'binary'      => '/usr/local/bin/wkhtmltoimage',
        'timeout'     => false,
        'options'     => array(),
        'env'         => array(),
        'temp-folder' => null,
    ),


);
