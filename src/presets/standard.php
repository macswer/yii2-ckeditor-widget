<?php
/**
 *
 * standard preset returns the basic toolbar configuration set for CKEditor.
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 */
return [
    'height' => 200,
    'toolbarGroups' => [
		['name' => 'undo'],
		['name' => 'basicstyles', 'groups' => ['basicstyles', 'cleanup']],
		['name' => 'align'],
		['name' => 'colors'],
		['name' => 'links'],
		['name' => 'insert'],
		['name' => 'table'],
		['name' => 'others', 'groups' => ['others', 'about']],
    ],
    'removeButtons' => 'Smiley,Iframe'
];
