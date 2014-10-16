<?php
$xpdo_meta_map['mapex2Item'] = array(
	'package' => 'mapex2',
	'version' => '1.1',
	'table' => 'mapex2_items',
	'extends' => 'xPDOSimpleObject',
	'fields' =>
		array(
			'name' => '',
			'description' => '',
			'active' => 1,
		),
	'fieldMeta' =>
		array(
			'name' =>
				array(
					'dbtype' => 'varchar',
					'precision' => '100',
					'phptype' => 'string',
					'null' => false,
					'default' => '',
				),
			'description' =>
				array(
					'dbtype' => 'text',
					'phptype' => 'text',
					'null' => true,
					'default' => '',
				),
			'active' =>
				array(
					'dbtype' => 'tinyint',
					'precision' => '1',
					'phptype' => 'boolean',
					'null' => true,
					'default' => 1,
				),
		),
	'indexes' =>
		array(
			'name' =>
				array(
					'alias' => 'name',
					'primary' => false,
					'unique' => false,
					'type' => 'BTREE',
					'columns' =>
						array(
							'name' =>
								array(
									'length' => '',
									'collation' => 'A',
									'null' => false,
								),
						),
				),
			'active' =>
				array(
					'alias' => 'active',
					'primary' => false,
					'unique' => false,
					'type' => 'BTREE',
					'columns' =>
						array(
							'active' =>
								array(
									'length' => '',
									'collation' => 'A',
									'null' => false,
								),
						),
				),
		),
);
