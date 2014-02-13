
# Usage

Add the following to your module.config.php:

	'invokables' => [
		'TwentyFifth\Hydrator\SerializingHydrator' => 'TwentyFifth\Hydrator\SerializingHydrator',
	],
	'initializers' => [
		function ($instance, ServiceManager $sm) {
			if ($instance instanceof \Zend\Stdlib\Hydrator\HydratorPluginManager) {
				$instance->setInvokableClass('SerializingHydrator', 'TwentyFifth\Hydrator\SerializingHydrator');
			}
		}
	],

Then you can either set the hydrator as default:

	'zf-hal' => [
		'renderer' => [
			'default_hydrator' => 'SerializingHydrator',
		],
	]

Or you can specify it directly in one resource:

	'zf-hal' => [
		'metadata_map' => [
			'Your\\Project\\Foo' => [
				'identifier_name' => 'id',
				'route_name'      => 'api/foo',
				'hydrator'        => 'SerializingHydrator',
			]
		]
	]