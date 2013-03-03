<?php

return array(
	'version' => '0.9.2.8',
	'cluster.messagebus.debug' => false,
	'cluster.messagebus.enabled' => false,
	'cluster.messagebus.sns.region' => '',
	'cluster.messagebus.sns.api_key' => '',
	'cluster.messagebus.sns.api_secret' => '',
	'cluster.messagebus.sns.topic_arn' => '',
	'dbcache.debug' => false,
	'dbcache.enabled' => false,
	'dbcache.engine' => 'file',
	'dbcache.file.gc' => 3600,
	'dbcache.file.locking' => false,
	'dbcache.lifetime' => 180,
	'dbcache.memcached.persistant' => true,
	'dbcache.memcached.servers' => array(
		0 => '127.0.0.1:11211',
	),
	'dbcache.reject.cookie' => array(
	),
	'dbcache.reject.logged' => true,
	'dbcache.reject.sql' => array(
		0 => 'gdsr_',
		1 => 'wp_rg_',
	),
	'dbcache.reject.uri' => array(
	),
	'dbcache.reject.words' => array(
		0 => '^\\s*insert\\b',
		1 => '^\\s*delete\\b',
		2 => '^\\s*update\\b',
		3 => '^\\s*replace\\b',
		4 => '^\\s*create\\b',
		5 => '^\\s*alter\\b',
		6 => '^\\s*show\\b',
		7 => '^\\s*set\\b',
		8 => '\\bautoload\\s+=\\s+\'yes\'',
		9 => '\\bsql_calc_found_rows\\b',
		10 => '\\bfound_rows\\(\\)',
		11 => '\\bw3tc_request_data\\b',
	),
	'objectcache.enabled' => false,
	'objectcache.debug' => false,
	'objectcache.engine' => 'file',
	'objectcache.file.gc' => 3600,
	'objectcache.file.locking' => false,
	'objectcache.memcached.servers' => array(
		0 => '127.0.0.1:11211',
	),
	'objectcache.memcached.persistant' => true,
	'objectcache.groups.global' => array(
		0 => 'users',
		1 => 'userlogins',
		2 => 'usermeta',
		3 => 'user_meta',
		4 => 'site-transient',
		5 => 'site-options',
		6 => 'site-lookup',
		7 => 'blog-lookup',
		8 => 'blog-details',
		9 => 'rss',
		10 => 'global-posts',
	),
	'objectcache.groups.nonpersistent' => array(
		0 => 'comment',
		1 => 'counts',
		2 => 'plugins',
	),
	'objectcache.lifetime' => 180,
	'fragmentcache.enabled' => false,
	'fragmentcache.debug' => false,
	'fragmentcache.engine' => 'file',
	'fragmentcache.file.gc' => 3600,
	'fragmentcache.file.locking' => false,
	'fragmentcache.memcached.servers' => array(
		0 => '127.0.0.1:11211',
	),
	'fragmentcache.memcached.persistant' => true,
	'fragmentcache.lifetime' => 180,
	'fragmentcache.groups' => array(
	),
	'pgcache.enabled' => true,
	'pgcache.comment_cookie_ttl' => 1800,
	'pgcache.debug' => false,
	'pgcache.engine' => 'file_generic',
	'pgcache.file.gc' => 3600,
	'pgcache.file.nfs' => false,
	'pgcache.file.locking' => false,
	'pgcache.lifetime' => 3600,
	'pgcache.memcached.servers' => array(
		0 => '127.0.0.1:11211',
	),
	'pgcache.memcached.persistant' => true,
	'pgcache.check.domain' => false,
	'pgcache.cache.query' => true,
	'pgcache.cache.home' => true,
	'pgcache.cache.feed' => false,
	'pgcache.cache.nginx_handle_xml' => false,
	'pgcache.cache.ssl' => false,
	'pgcache.cache.404' => false,
	'pgcache.cache.flush' => false,
	'pgcache.cache.headers' => array(
		0 => 'Last-Modified',
		1 => 'Content-Type',
		2 => 'X-Pingback',
		3 => 'P3P',
	),
	'pgcache.compatibility' => false,
	'pgcache.accept.uri' => array(
		0 => 'sitemap(_index)?\\.xml(\\.gz)?',
		1 => '[a-z0-9_\\-]+-sitemap([0-9]+)?\\.xml(\\.gz)?',
	),
	'pgcache.accept.files' => array(
		0 => 'wp-comments-popup.php',
		1 => 'wp-links-opml.php',
		2 => 'wp-locations.php',
	),
	'pgcache.reject.front_page' => false,
	'pgcache.reject.logged' => true,
	'pgcache.reject.logged_roles' => false,
	'pgcache.reject.roles' => array(
	),
	'pgcache.reject.uri' => array(
		0 => 'wp-.*\\.php',
		1 => 'index\\.php',
	),
	'pgcache.reject.ua' => array(
	),
	'pgcache.reject.cookie' => array(
		0 => 'wptouch_switch_toggle',
	),
	'pgcache.purge.front_page' => false,
	'pgcache.purge.home' => true,
	'pgcache.purge.post' => true,
	'pgcache.purge.comments' => false,
	'pgcache.purge.author' => false,
	'pgcache.purge.terms' => false,
	'pgcache.purge.archive.daily' => false,
	'pgcache.purge.archive.monthly' => false,
	'pgcache.purge.archive.yearly' => false,
	'pgcache.purge.feed.blog' => true,
	'pgcache.purge.feed.comments' => false,
	'pgcache.purge.feed.author' => false,
	'pgcache.purge.feed.terms' => false,
	'pgcache.purge.feed.types' => array(
		0 => 'rss2',
	),
	'pgcache.purge.postpages_limit' => 10,
	'pgcache.purge.pages' => array(
	),
	'pgcache.purge.sitemap_regex' => '([a-z0-9_\\-]*?)sitemap([a-z0-9_\\-]*)?\\.xml',
	'pgcache.prime.enabled' => false,
	'pgcache.prime.interval' => 900,
	'pgcache.prime.limit' => 10,
	'pgcache.prime.sitemap' => '',
	'pgcache.prime.post.enabled' => false,
	'minify.enabled' => true,
	'minify.auto' => true,
	'minify.debug' => false,
	'minify.engine' => 'file',
	'minify.file.gc' => 86400,
	'minify.file.nfs' => false,
	'minify.file.locking' => false,
	'minify.memcached.servers' => array(
		0 => '127.0.0.1:11211',
	),
	'minify.memcached.persistant' => true,
	'minify.rewrite' => true,
	'minify.options' => array(
	),
	'minify.symlinks' => array(
	),
	'minify.lifetime' => 86400,
	'minify.upload' => true,
	'minify.html.enable' => false,
	'minify.html.engine' => 'html',
	'minify.html.reject.feed' => false,
	'minify.html.inline.css' => false,
	'minify.html.inline.js' => false,
	'minify.html.strip.crlf' => false,
	'minify.html.comments.ignore' => array(
		0 => 'google_ad_',
		1 => 'RSPEAK_',
	),
	'minify.css.enable' => true,
	'minify.css.engine' => 'css',
	'minify.css.combine' => false,
	'minify.css.strip.comments' => false,
	'minify.css.strip.crlf' => false,
	'minify.css.imports' => '',
	'minify.css.groups' => array(
	),
	'minify.js.enable' => true,
	'minify.js.engine' => 'js',
	'minify.js.combine.header' => false,
	'minify.js.header.embed_type' => 'blocking',
	'minify.js.combine.body' => false,
	'minify.js.body.embed_type' => 'blocking',
	'minify.js.combine.footer' => false,
	'minify.js.footer.embed_type' => 'blocking',
	'minify.js.strip.comments' => false,
	'minify.js.strip.crlf' => false,
	'minify.js.groups' => array(
	),
	'minify.yuijs.path.java' => 'java',
	'minify.yuijs.path.jar' => 'yuicompressor.jar',
	'minify.yuijs.options.line-break' => 5000,
	'minify.yuijs.options.nomunge' => false,
	'minify.yuijs.options.preserve-semi' => false,
	'minify.yuijs.options.disable-optimizations' => false,
	'minify.yuicss.path.java' => 'java',
	'minify.yuicss.path.jar' => 'yuicompressor.jar',
	'minify.yuicss.options.line-break' => 5000,
	'minify.ccjs.path.java' => 'java',
	'minify.ccjs.path.jar' => 'compiler.jar',
	'minify.ccjs.options.compilation_level' => 'SIMPLE_OPTIMIZATIONS',
	'minify.ccjs.options.formatting' => '',
	'minify.csstidy.options.remove_bslash' => true,
	'minify.csstidy.options.compress_colors' => true,
	'minify.csstidy.options.compress_font-weight' => true,
	'minify.csstidy.options.lowercase_s' => false,
	'minify.csstidy.options.optimise_shorthands' => 1,
	'minify.csstidy.options.remove_last_;' => false,
	'minify.csstidy.options.case_properties' => 1,
	'minify.csstidy.options.sort_properties' => false,
	'minify.csstidy.options.sort_selectors' => false,
	'minify.csstidy.options.merge_selectors' => 2,
	'minify.csstidy.options.discard_invalid_properties' => false,
	'minify.csstidy.options.css_level' => 'CSS2.1',
	'minify.csstidy.options.preserve_css' => false,
	'minify.csstidy.options.timestamp' => false,
	'minify.csstidy.options.template' => 'default',
	'minify.htmltidy.options.clean' => false,
	'minify.htmltidy.options.hide-comments' => true,
	'minify.htmltidy.options.wrap' => 0,
	'minify.reject.logged' => false,
	'minify.reject.ua' => array(
	),
	'minify.reject.uri' => array(
	),
	'minify.reject.files.js' => array(
	),
	'minify.reject.files.css' => array(
	),
	'minify.cache.files' => array(
		0 => 'https://ajax.googleapis.com',
	),
	'cdn.enabled' => false,
	'cdn.debug' => false,
	'cdn.engine' => 'ftp',
	'cdn.uploads.enable' => true,
	'cdn.includes.enable' => true,
	'cdn.includes.files' => '*.css;*.js;*.gif;*.png;*.jpg;*.xml',
	'cdn.theme.enable' => true,
	'cdn.theme.files' => '*.css;*.js;*.gif;*.png;*.jpg;*.ico;*.ttf;*.otf,*.woff',
	'cdn.minify.enable' => true,
	'cdn.custom.enable' => true,
	'cdn.custom.files' => array(
		0 => 'favicon.ico',
		1 => 'wp-content/gallery/*',
		2 => 'wp-content/uploads/avatars/*',
		3 => 'wp-content/plugins/wordpress-seo/css/xml-sitemap.xsl',
		4 => 'wp-content/plugins/wp-minify/min*',
		5 => 'wp-content/plugins/*.js',
		6 => 'wp-content/plugins/*.css',
		7 => 'wp-content/plugins/*.gif',
		8 => 'wp-content/plugins/*.jpg',
		9 => 'wp-content/plugins/*.png',
	),
	'cdn.import.external' => false,
	'cdn.import.files' => '',
	'cdn.queue.interval' => 900,
	'cdn.queue.limit' => 25,
	'cdn.force.rewrite' => false,
	'cdn.autoupload.enabled' => false,
	'cdn.autoupload.interval' => 3600,
	'cdn.canonical_header' => false,
	'cdn.ftp.host' => '',
	'cdn.ftp.user' => '',
	'cdn.ftp.pass' => '',
	'cdn.ftp.path' => '',
	'cdn.ftp.pasv' => false,
	'cdn.ftp.domain' => array(
	),
	'cdn.ftp.ssl' => 'auto',
	'cdn.s3.key' => '',
	'cdn.s3.secret' => '',
	'cdn.s3.bucket' => '',
	'cdn.s3.cname' => array(
	),
	'cdn.s3.ssl' => 'auto',
	'cdn.cf.key' => '',
	'cdn.cf.secret' => '',
	'cdn.cf.bucket' => '',
	'cdn.cf.id' => '',
	'cdn.cf.cname' => array(
	),
	'cdn.cf.ssl' => 'auto',
	'cdn.cf2.key' => '',
	'cdn.cf2.secret' => '',
	'cdn.cf2.id' => '',
	'cdn.cf2.cname' => array(
	),
	'cdn.cf2.ssl' => '',
	'cdn.rscf.user' => '',
	'cdn.rscf.key' => '',
	'cdn.rscf.location' => 'us',
	'cdn.rscf.container' => '',
	'cdn.rscf.cname' => array(
	),
	'cdn.rscf.ssl' => 'auto',
	'cdn.azure.user' => '',
	'cdn.azure.key' => '',
	'cdn.azure.container' => '',
	'cdn.azure.cname' => array(
	),
	'cdn.azure.ssl' => 'auto',
	'cdn.mirror.domain' => array(
	),
	'cdn.mirror.ssl' => 'auto',
	'cdn.netdna.alias' => '',
	'cdn.netdna.consumerkey' => '',
	'cdn.netdna.consumersecret' => '',
	'cdn.netdna.domain' => array(
	),
	'cdn.netdna.ssl' => 'auto',
	'cdn.cotendo.username' => '',
	'cdn.cotendo.password' => '',
	'cdn.cotendo.zones' => array(
	),
	'cdn.cotendo.domain' => array(
	),
	'cdn.cotendo.ssl' => 'auto',
	'cdn.akamai.username' => '',
	'cdn.akamai.password' => '',
	'cdn.akamai.email_notification' => array(
	),
	'cdn.akamai.action' => 'invalidate',
	'cdn.akamai.zone' => 'production',
	'cdn.akamai.domain' => array(
	),
	'cdn.akamai.ssl' => 'auto',
	'cdn.edgecast.account' => '',
	'cdn.edgecast.token' => '',
	'cdn.edgecast.domain' => array(
	),
	'cdn.edgecast.ssl' => 'auto',
	'cdn.att.account' => '',
	'cdn.att.token' => '',
	'cdn.att.domain' => array(
	),
	'cdn.att.ssl' => 'auto',
	'cdn.reject.admins' => false,
	'cdn.reject.logged_roles' => false,
	'cdn.reject.roles' => array(
	),
	'cdn.reject.ua' => array(
	),
	'cdn.reject.uri' => array(
	),
	'cdn.reject.files' => array(
		0 => 'wp-content/uploads/wpcf7_captcha/*',
		1 => 'wp-content/uploads/imagerotator.swf',
		2 => 'wp-content/plugins/wp-fb-autoconnect/facebook-platform/channel.html',
	),
	'cdn.reject.ssl' => false,
	'cdncache.enabled' => false,
	'cloudflare.enabled' => false,
	'cloudflare.email' => '',
	'cloudflare.key' => '',
	'cloudflare.zone' => '',
	'cloudflare.ips.ip4' => array(
		0 => '204.93.240.0/24',
		1 => '204.93.177.0/24',
		2 => '199.27.128.0/21',
		3 => '173.245.48.0/20',
		4 => '103.22.200.0/22',
		5 => '141.101.64.0/18',
		6 => '108.162.192.0/18',
		7 => '190.93.240.1/20',
		8 => '188.114.96.0/20',
		9 => '198.41.128.0/17',
	),
	'cloudflare.ips.ip6' => array(
		0 => '2400:cb00::/32',
		1 => '2606:4700::/32',
		2 => '2803:f800::/32',
	),
	'varnish.enabled' => false,
	'varnish.debug' => false,
	'varnish.servers' => array(
		0 => '',
	),
	'browsercache.enabled' => true,
	'browsercache.no404wp' => false,
	'browsercache.no404wp.exceptions' => array(
		0 => 'robots\\.txt',
		1 => 'sitemap(_index)?\\.xml(\\.gz)?',
		2 => '[a-z0-9_\\-]+-sitemap([0-9]+)?\\.xml(\\.gz)?',
	),
	'browsercache.cssjs.last_modified' => true,
	'browsercache.cssjs.compression' => true,
	'browsercache.cssjs.expires' => false,
	'browsercache.cssjs.lifetime' => 31536000,
	'browsercache.cssjs.nocookies' => false,
	'browsercache.cssjs.cache.control' => false,
	'browsercache.cssjs.cache.policy' => 'cache_public_maxage',
	'browsercache.cssjs.etag' => false,
	'browsercache.cssjs.w3tc' => false,
	'browsercache.cssjs.replace' => false,
	'browsercache.html.compression' => true,
	'browsercache.html.last_modified' => true,
	'browsercache.html.expires' => false,
	'browsercache.html.lifetime' => 3600,
	'browsercache.html.cache.control' => false,
	'browsercache.html.cache.policy' => 'cache_public_maxage',
	'browsercache.html.etag' => false,
	'browsercache.html.w3tc' => false,
	'browsercache.html.replace' => false,
	'browsercache.other.last_modified' => true,
	'browsercache.other.compression' => true,
	'browsercache.other.expires' => false,
	'browsercache.other.lifetime' => 31536000,
	'browsercache.other.nocookies' => false,
	'browsercache.other.cache.control' => false,
	'browsercache.other.cache.policy' => 'cache_public_maxage',
	'browsercache.other.etag' => false,
	'browsercache.other.w3tc' => false,
	'browsercache.other.replace' => false,
	'browsercache.timestamp' => '',
	'mobile.enabled' => false,
	'mobile.rgroups' => array(
		'high' => array(
			'theme' => '',
			'enabled' => false,
			'redirect' => '',
			'agents' => array(
				0 => 'acer\\ s100',
				1 => 'android',
				2 => 'archos5',
				3 => 'bada',
				4 => 'blackberry9500',
				5 => 'blackberry9530',
				6 => 'blackberry9550',
				7 => 'blackberry\\ 9800',
				8 => 'cupcake',
				9 => 'docomo\\ ht\\-03a',
				10 => 'dream',
				11 => 'froyo',
				12 => 'googlebot-mobile',
				13 => 'htc\\ hero',
				14 => 'htc\\ magic',
				15 => 'htc_dream',
				16 => 'htc_magic',
				17 => 'iemobile/7.0',
				18 => 'incognito',
				19 => 'ipad',
				20 => 'iphone',
				21 => 'ipod',
				22 => 'kindle',
				23 => 'lg\\-gw620',
				24 => 'liquid\\ build',
				25 => 'maemo',
				26 => 'mot\\-mb200',
				27 => 'mot\\-mb300',
				28 => 'nexus\\ one',
				29 => 'opera\\ mini',
				30 => 's8000',
				31 => 'samsung\\-s8000',
				32 => 'series60.*webkit',
				33 => 'series60/5\\.0',
				34 => 'sonyericssone10',
				35 => 'sonyericssonu20',
				36 => 'sonyericssonx10',
				37 => 't\\-mobile\\ mytouch\\ 3g',
				38 => 't\\-mobile\\ opal',
				39 => 'tattoo',
				40 => 'webmate',
				41 => 'webos',
			),
		),
		'low' => array(
			'theme' => '',
			'enabled' => false,
			'redirect' => '',
			'agents' => array(
				0 => '2\\.0\\ mmp',
				1 => '240x320',
				2 => 'alcatel',
				3 => 'amoi',
				4 => 'asus',
				5 => 'au\\-mic',
				6 => 'audiovox',
				7 => 'avantgo',
				8 => 'benq',
				9 => 'bird',
				10 => 'blackberry',
				11 => 'blazer',
				12 => 'cdm',
				13 => 'cellphone',
				14 => 'danger',
				15 => 'ddipocket',
				16 => 'docomo',
				17 => 'dopod',
				18 => 'elaine/3\\.0',
				19 => 'ericsson',
				20 => 'eudoraweb',
				21 => 'fly',
				22 => 'haier',
				23 => 'hiptop',
				24 => 'hp\\.ipaq',
				25 => 'htc',
				26 => 'huawei',
				27 => 'i\\-mobile',
				28 => 'iemobile',
				29 => 'j\\-phone',
				30 => 'kddi',
				31 => 'konka',
				32 => 'kwc',
				33 => 'kyocera/wx310k',
				34 => 'lenovo',
				35 => 'lg',
				36 => 'lg/u990',
				37 => 'lge\\ vx',
				38 => 'midp',
				39 => 'midp\\-2\\.0',
				40 => 'mmef20',
				41 => 'mmp',
				42 => 'mobilephone',
				43 => 'mot\\-v',
				44 => 'motorola',
				45 => 'netfront',
				46 => 'newgen',
				47 => 'newt',
				48 => 'nintendo\\ ds',
				49 => 'nintendo\\ wii',
				50 => 'nitro',
				51 => 'nokia',
				52 => 'novarra',
				53 => 'o2',
				54 => 'openweb',
				55 => 'opera\\ mobi',
				56 => 'opera\\.mobi',
				57 => 'palm',
				58 => 'panasonic',
				59 => 'pantech',
				60 => 'pdxgw',
				61 => 'pg',
				62 => 'philips',
				63 => 'phone',
				64 => 'playstation\\ portable',
				65 => 'portalmmm',
				66 => '\\bppc\\b',
				67 => 'proxinet',
				68 => 'psp',
				69 => 'qtek',
				70 => 'sagem',
				71 => 'samsung',
				72 => 'sanyo',
				73 => 'sch',
				74 => 'sec',
				75 => 'sendo',
				76 => 'sgh',
				77 => 'sharp',
				78 => 'sharp\\-tq\\-gx10',
				79 => 'small',
				80 => 'smartphone',
				81 => 'softbank',
				82 => 'sonyericsson',
				83 => 'sph',
				84 => 'symbian',
				85 => 'symbian\\ os',
				86 => 'symbianos',
				87 => 'toshiba',
				88 => 'treo',
				89 => 'ts21i\\-10',
				90 => 'up\\.browser',
				91 => 'up\\.link',
				92 => 'uts',
				93 => 'vertu',
				94 => 'vodafone',
				95 => 'wap',
				96 => 'willcome',
				97 => 'windows\\ ce',
				98 => 'windows\\.ce',
				99 => 'winwap',
				100 => 'xda',
				101 => 'zte',
			),
		),
	),
	'referrer.enabled' => false,
	'referrer.rgroups' => array(
		'search_engines' => array(
			'theme' => '',
			'enabled' => false,
			'redirect' => '',
			'referrers' => array(
				0 => 'google\\.com',
				1 => 'yahoo\\.com',
				2 => 'bing\\.com',
				3 => 'ask\\.com',
				4 => 'msn\\.com',
			),
		),
	),
	'common.support' => '',
	'common.install' => 0,
	'common.tweeted' => false,
	'config.check' => true,
	'config.path' => '',
	'widget.latest.items' => 3,
	'widget.latest_news.items' => 5,
	'widget.pagespeed.enabled' => true,
	'widget.pagespeed.key' => '',
	'notes.wp_content_changed_perms' => true,
	'notes.wp_content_perms' => true,
	'notes.php_is_old' => true,
	'notes.theme_changed' => false,
	'notes.wp_upgraded' => false,
	'notes.plugins_updated' => false,
	'notes.cdn_upload' => false,
	'notes.cdn_reupload' => false,
	'notes.need_empty_pgcache' => false,
	'notes.need_empty_minify' => false,
	'notes.need_empty_objectcache' => false,
	'notes.root_rules' => true,
	'notes.rules' => true,
	'notes.pgcache_rules_wpsc' => true,
	'notes.support_us' => true,
	'notes.no_curl' => true,
	'notes.no_zlib' => true,
	'notes.zlib_output_compression' => true,
	'notes.no_permalink_rules' => true,
	'notes.browsercache_rules_no404wp' => true,
	'timelimit.email_send' => 180,
	'timelimit.varnish_purge' => 300,
	'timelimit.cache_flush' => 600,
	'timelimit.cache_gc' => 600,
	'timelimit.cdn_upload' => 600,
	'timelimit.cdn_delete' => 300,
	'timelimit.cdn_purge' => 300,
	'timelimit.cdn_import' => 600,
	'timelimit.cdn_test' => 300,
	'timelimit.cdn_container_create' => 300,
	'timelimit.cloudflare_api_request' => 180,
	'timelimit.domain_rename' => 120,
	'timelimit.minify_recommendations' => 600,
	'minify.auto.filename_length' => 150,
	'common.instance_id' => 92160224,
	'common.force_master' => true,
	'newrelic.enabled' => false,
	'newrelic.api_key' => '',
	'newrelic.account_id' => '',
	'newrelic.application_id' => 0,
	'newrelic.appname' => '',
	'newrelic.accept.logged_roles' => true,
	'newrelic.accept.roles' => array(
		0 => 'contributor',
	),
	'newrelic.use_php_function' => false,
	'notes.new_relic_page_load_notification' => true,
	'newrelic.appname_prefix' => 'Child Site - ',
	'newrelic.merge_with_network' => true,
	'newrelic.cache_time' => 5,
	'newrelic.enable_xmit' => false,
	'newrelic.use_network_wide_id' => false,
);