<?php

		namespace WhichBrowser\Data;

		Bots::$BOTS = [
			[ 'name' => '80legs', 						'regexp' => '/(?:^|\s)008\/([0-9.]*)/u' ],
			[ 'name' => '360spider', 					'regexp' => '/360Spider/u' ],
			[ 'name' => '360spider', 					'regexp' => '/360spider-image/u' ],
			[ 'name' => 'Aboundex',						'regexp' => '/Aboundex\/([0-9.]*)/u' ],
			[ 'name' => 'Ad Muncher', 					'regexp' => '/Ad Muncher v([0-9.]*)/u' ],
			[ 'name' => 'AddThis.com', 					'regexp' => '/AddThis.com robot/u' ],
			[ 'name' => 'ADmantX', 						'regexp' => '/ADmantX Platform Semantic Analyzer/u' ],
			[ 'name' => 'AhrefsBot',					'regexp' => '/AhrefsBot.Feeds v([0-9.]*)/u' ],
			[ 'name' => 'Analytics SEO', 				'regexp' => '/Curious George - www.analyticsseo.com\/crawler/u' ],
			[ 'name' => 'Amorank Spider',				'regexp' => '/AmorankSpider\/([0-9.]*)/u' ],
			[ 'name' => 'ArchiveBot', 					'regexp' => '/ArchiveTeam ArchiveBot/u' ],
			[ 'name' => 'Ask Jeeves', 					'regexp' => '/Ask Jeeves\/Teoma/u' ],
			[ 'name' => 'Backlink-Check',				'regexp' => '/Backlink-Ceck.de/u' ],
			[ 'name' => 'BacklinkCrawler',				'regexp' => '/BacklinkCrawler/u' ],
			[ 'name' => 'Baiduspider', 					'regexp' => '/Baiduspider[\+ ]\([\+ ]/u' ],
			[ 'name' => 'Baiduspider', 					'regexp' => '/Baiduspider\/([0-9.]*)/u' ],
			[ 'name' => 'Baiduspider', 					'regexp' => '/Baiduspider/u' ],
			[ 'name' => 'Bing', 						'regexp' => '/bingbot\/([0-9.]*)/u' ],
			[ 'name' => 'Bing', 						'regexp' => '/msnbot\/([0-9.]*)/u' ],
			[ 'name' => 'Bing', 						'regexp' => '/msnbot-NewsBlogs\/([0-9.]*)/u' ],
			[ 'name' => 'Bing Preview', 				'regexp' => '/BingPreview\/([0-9.]*)/u' ],
			[ 'name' => 'Bloglines', 					'regexp' => '/Bloglines\/([0-9.]*)/u' ],
			[ 'name' => 'Bloglovin', 					'regexp' => '/Bloglovin\/([0-9.]*)/u' ],
			[ 'name' => 'Blogram', 						'regexp' => '/BlogramCrawler\/([0-9.]*)/u' ],
			[ 'name' => 'Browsershots',					'regexp' => '/Browsershots/u' ],
			[ 'name' => 'CiteSeerX',					'regexp' => '/heritrix\/([0-9.]*)/u' ],
			[ 'name' => 'Cliqzbot',						'regexp' => '/Cliqzbot\/([0-9.]*)/u' ],
			[ 'name' => 'CommaFeed',					'regexp' => '/CommaFeed\/([0-9.]*)/u' ],
			[ 'name' => 'CommonCrawl',					'regexp' => '/CCBot\/([0-9.]*)/u' ],
			[ 'name' => 'Data Hotel Watchdog',			'regexp' => '/Data-Hotel-Watchdog\/([0-9.]*)/u' ],
			[ 'name' => 'ExactSeek',					'regexp' => '/ExactSeek Crawler/u' ],
			[ 'name' => 'Facebook External Hit',		'regexp' => '/facebookexternalhit\/([0-9.]*)/u' ],
			[ 'name' => 'Facebook Scraper', 			'regexp' => '/facebookscraper\/([0-9.]*)/u' ],
			[ 'name' => 'Facebook Security', 			'regexp' => '/FacebookSecurity\/([0-9.]*)/u' ],
			[ 'name' => 'FAST Enterprise Crawler', 		'regexp' => '/FAST Enterprise Crawler\/([0-9.]*)/u' ],
			[ 'name' => 'FAST Web Crawler', 			'regexp' => '/FAST-WebCrawler\/([0-9.]*)/u' ],
			[ 'name' => 'Flamingo Search', 				'regexp' => '/Flamingo_SearchEngine/u' ],
			[ 'name' => 'Fastladder', 					'regexp' => '/Fastladder FeedFetcher\/([0-9.]*)/u' ],
			[ 'name' => 'Feedbin', 						'regexp' => '/Feedbin/u' ],
			[ 'name' => 'FeedWrangler', 				'regexp' => '/Feed Wrangler\/([0-9.]*)/u' ],
			[ 'name' => 'Feedly', 						'regexp' => '/FeedlyApp\/([0-9.]*)/u' ],
			[ 'name' => 'Feedly', 						'regexp' => '/FeedlyBot\/([0-9.]*)/u' ],
			[ 'name' => 'Feedly', 						'regexp' => '/MetaFeedly\/([0-9.]*)/u' ],
			[ 'name' => 'Feedspot', 					'regexp' => '/Feedspot/u' ],
			[ 'name' => 'Fever', 						'regexp' => '/Fever\/([0-9.]*)/u' ],
			[ 'name' => 'Flamingo Search', 				'regexp' => '/Flamingo_SearchEngine/u' ],
			[ 'name' => 'FTRF: Friendly Robot', 		'regexp' => '/FTRF: Friendly robot\/([0-9.]*)/u' ],
			[ 'name' => 'Gocrawl', 						'regexp' => '/Googlebot \(gocrawl v([0-9.]*)\)/u' ],
			[ 'name' => 'Goo',							'regexp' => '/ichiro\/mobile goo/u' ],
			[ 'name' => 'Googlebot', 					'regexp' => '/Google[Bb]ot\/([0-9.]*)/u' ],
			[ 'name' => 'Googlebot Mobile',				'regexp' => '/Googlebot-Mobile\/([0-9.]*)/u' ],
			[ 'name' => 'Googlebot Image', 				'regexp' => '/Googlebot-Image\/([0-9.]*)/u' ],
			[ 'name' => 'Googlebot Video', 				'regexp' => '/Googlebot-Video\/([0-9.]*)/u' ],
			[ 'name' => 'Google Ads Bot', 				'regexp' => '/AdsBot-Google/u' ],
			[ 'name' => 'Google App Engine', 			'regexp' => '/AppEngine-Google/u' ],
			[ 'name' => 'Google Web Preview',			'regexp' => '/Google Web Preview/u' ],
			[ 'name' => 'Google Page Speed',			'regexp' => '/Google Page Speed Insights/u' ],
			[ 'name' => 'Google FeedBurner', 			'regexp' => '/FeedBurner\/([0-9.]*)/u' ],
			[ 'name' => 'Google Feedfetcher',			'regexp' => '/Feedfetcher-Google/iu' ],
			[ 'name' => 'Google Font Analysis', 		'regexp' => '/Google-FontAnalysis\/([0-9.]*)/u' ],
			[ 'name' => 'Google Sitemaps', 				'regexp' => '/Google-Sitemaps\/([0-9.]*)/u' ],
			[ 'name' => 'Google Mediapartners', 		'regexp' => '/Mediapartners-Google\/([0-9.]*)/u' ],
			[ 'name' => 'Google Mediapartners', 		'regexp' => '/Mediapartners-Google/u' ],
			[ 'name' => 'Google News', 					'regexp' => '/Googlebot-News/u' ],
			[ 'name' => 'Google Wireless Transcoder', 	'regexp' => '/Google Wireless Transcoder/u' ],
			[ 'name' => 'Google Play Newsstand', 		'regexp' => '/GoogleProducer/u' ],
			[ 'name' => 'Grub', 						'regexp' => '/grub-client-([0-9.]*)/u' ],
			[ 'name' => 'HeartRails Capture', 			'regexp' => '/HeartRails_Capture\/([0-9.]*)/u' ],
			[ 'name' => 'iAsk Spider', 					'regexp' => '/iaskspider\/([0-9.]*)/u' ],
			[ 'name' => 'Mapian News Bot',				'regexp' => '/mapion-news-bot\/([0-9.]*)/u' ],
			[ 'name' => 'PowerMapper',					'regexp' => '/CrawlerProcess \(http:\/\/www\.PowerMapper\.com\) \/([0-9.]*)/u' ],
			[ 'name' => 'Scrapy',						'regexp' => '/Scrapy\/([0-9.]*)/u' ],
			[ 'name' => 'Sogou Web Spider',				'regexp' => '/sogou spider/u' ],
			[ 'name' => 'Sogou Web Spider',				'regexp' => '/Sogou web spider\/([0-9.]*)/u' ],
			[ 'name' => 'Soso Web Spider',				'regexp' => '/Sosospider\/([0-9.]*)/u' ],
			[ 'name' => 'Yahoo Slurp', 					'regexp' => '/Yahoo\! Slurp\/([0-9.]*)/u' ],
			[ 'name' => 'Yahoo Slurp', 					'regexp' => '/Yahoo\! Slurp China/u' ],

			/* Generic bots */
			[ 'name' => 'Apache Nutch', 				'regexp' => '/\/Nutch-([0-9.]*)/u' ],
			[ 'name' => 'Wget', 						'regexp' => '/Wget\/([0-9.]*)/u' ],
		];