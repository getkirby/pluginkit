<?php

use Kirby\Filesystem\F;

F::loadClasses([
	'superwoman\\superplugin\\superclass' => 'src/Superclass.php'
], __DIR__);

Kirby::plugin('getkirby/pluginkit', [
	// plugin magic happens here
]);
