<?php
$register = array(
    'id' => array(
        'type'=>'hidden',
        'label'=>'',
        'name'=>'',
        'value'=>array(),
        'decorator'=>'',
        'hint'=>'',
        'id'=>'',
        'errors'=>array(),    
    ),
    'name' => array(
        'type'=>'text',
        'label'=>'',
        'name'=>'',
        'value'=>array(),
        'decorator'=>'',
        'hint'=>'',
        'id'=>'',
        'errors'=>array(),
    ),
    'password' => array(
        'type'=>'password',
        'label'=>'',
        'name'=>'',
        'value'=>array(),
        'decorator'=>'',
        'hint'=>'',
        'id'=>'',
        'errors'=>array(),
    ),
    'email' => array(
        'type'=>'text',
        'label'=>'',
        'name'=>'',
        'value'=>array(),
        'decorator'=>'',
        'hint'=>'',
        'id'=>'',
        'errors'=>array(),
    ),
    'description' => array(
        'type'=>'textarea',
        'label'=>'',
        'name'=>'',
        'value'=>array(),
        'decorator'=>'',
        'hint'=>'',
        'id'=>'',
        'errors'=>array(),
    ),
    'city' => array(
        'type'=>'select',
        'label'=>'',
        'name'=>'',
        'options'=>array('bcn'=>'Barcelona', ),
        'defaults'=>array('bcn', 'grn'),
        'decorator'=>array('class'=>''),
        'hint'=>'',
        'id'=>'',
        'filters'=>array('space','tags'),
        'validation'=>array(            
                    array(
                            'type'=>'inarray',
                            'error'=>'No esta en la lista de ciudades',
                            'options'=>array()
                        ),
                    array(
                        'type'=>'strlen',
                        'error'=>'Maximo numero de caracteres (n) superado',
                        'options'=>array('size'=>10)
                    ),
        ),
        'errors'=>array('inarray','strlen'),
        
    ),
    'languages' => array(
        'type'=>'selectmultiple',
        'label'=>'',
        'name'=>'',
        'value'=>array(),
        'decorator'=>'',
        'hint'=>'',
        'id'=>'',
        'errors'=>array(),
    ),
    'gender' => array(
        'type'=>'radio',
        'label'=>'',
        'name'=>'',
        'value'=>array(),
        'decorator'=>'',
        'hint'=>'',
        'id'=>'',
        'errors'=>array(),
    ),
    'transports' => array(
        'type'=>'checkbox',
        'label'=>'',
        'name'=>'',
        'value'=>array(),
        'decorator'=>'',
        'hint'=>'',
        'id'=>'',
        'errors'=>array(),
    ),
);