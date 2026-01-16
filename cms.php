<?php
variables([
	'link-to-node-home' => true,
	'link-to-sub-node-home' => true,
]);

$wantsKG = nodeIs(SITEHOME);

if ($wantsKG) {
	includeThemeManager();
	CanvasTheme::HeadCssFor($subTheme = 'kindergarten');
	variable('pseudo-sub-theme', $subTheme);
	if (nodeIs(SITEHOME)) {
		variable('siteReplaces', [
			'slider-intro' => variable('byline'),
			'slider-heading' => str_replace('With ', 'With <span class="color">', variable('name')) . '</span>',
			'slider-cta-link' => '#todo', 'slider-cta' => 'Buy On Amazon!!',
			'slider-youtube-id' => 'P3Huse9K6Xs', 'slider-youtube-cta' => 'Why Our Colouring Books',
			'slider-mood' => '%cdn%colouring/animals--001-cow--crow--swan.png',
			'slider-figure' => 'https://canvastemplate.com/demos/kindergarten/images/fish2.png',
			'slider-message' => '<a href="%url%colouring-books/animals/001-cow--crow--swan/" class="btn btn-primary my-0">
				Why Paint a Cow, Crow and Swan?</a><br /><span class="bg-warning my-1 p-3 d-inline-block rounded-4">It is: <b>Fun / Informative / Creative</b> :)</span>',
		]);
	}
}

function enrichThemeVars($vars, $what) {
	$subTheme = variable('pseudo-sub-theme');

	if ($what == 'header' && $subTheme == 'kindergarten') {
		$vars['optional-slider'] = replaceHtml(getSnippet('kg-slider'));
	}

	return $vars;
}

function after_footer_assets() {
	if (nodeIs(SITEHOME))
		echo getSnippet('slider-footer');
}
