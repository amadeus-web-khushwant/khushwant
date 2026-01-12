<?php
variables([
	'link-to-node-home' => true,
	'link-to-sub-node-home' => true,
]);

if (nodeIs(SITEHOME))
	variable('welcome-message', 'Welcome to My Site<br />
<a href="%url%colouring-books/animals/001-cow--crow--swan/" class="d-block text-center"><img src="%cdn%colouring/animals--001-cow--crow--swan.png" class="img-fluid img-max-600" /></a>
');