<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <link rel="pingback" href="/wp/xmlrpc.php" />
    <meta name="google-signin-client_id"
        content="13759604714-0t7p0dh546nvkefuvt58ojmj6dcr82ld.apps.googleusercontent.com">
    <meta name="google-signin-scope" content="https://www.googleapis.com/auth/analytics.readonly">
    <meta property="og:title" content="Homepage" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <!-- Preconnect Links -->
    <link rel="preconnect" href="https://www.googletagmanager.com/" crossorigin>
    <link rel="preconnect" href="https://cdn.weglot.com/" crossorigin>
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <!-- This site is optimized with the Yoast SEO plugin v22.1 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Alveo Land | Premium Real Estate Developer in the Philippines</title>
    <meta name="description"
        content="Alveo Land caters to the upscale market with its dynamic portfolio of residential, business, commercial, and leisure developments across the country." />
    <link rel="canonical" href="/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Alveo Land | Premium Real Estate Developer in the Philippines" />
    <meta property="og:description"
        content="Alveo Land caters to the upscale market with its dynamic portfolio of residential, business, commercial, and leisure developments across the country." />
    <meta property="og:url" content="/" />
    <meta property="og:site_name" content="ALVEO LAND" />
    <meta property="article:modified_time" content="2024-09-11T07:25:54+00:00" />
    <meta property="og:image" content="/app/uploads/2023/08/BGC-1024x576.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"/","url":"/","name":"Alveo Land | Premium Real Estate Developer in the Philippines","isPartOf":{"@id":"/#website"},"primaryImageOfPage":{"@id":"/#primaryimage"},"image":{"@id":"/#primaryimage"},"thumbnailUrl":"/app/uploads/2023/08/BGC-1024x576.jpg","datePublished":"2023-01-27T08:04:10+00:00","dateModified":"2024-09-11T07:25:54+00:00","description":"Alveo Land caters to the upscale market with its dynamic portfolio of residential, business, commercial, and leisure developments across the country.","breadcrumb":{"@id":"/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["/"]}]},{"@type":"ImageObject","inLanguage":"en-US","@id":"/#primaryimage","url":"/app/uploads/2023/08/BGC.jpg","contentUrl":"/app/uploads/2023/08/BGC.jpg","width":1920,"height":1080},{"@type":"BreadcrumbList","@id":"/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]},{"@type":"WebSite","@id":"/#website","url":"/","name":"ALVEO LAND","description":"The Philippines&#039; leading real estate developer for living and working well","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"}]}</script>
    <!-- / Yoast SEO plugin. -->


    <link rel='dns-prefetch' href='' />
    <link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
    <link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
    <link rel='dns-prefetch' href='//unpkg.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="alternate" type="application/rss+xml" title="ALVEO LAND &raquo; Feed" href="/feed/" />
    <link rel="alternate" type="application/rss+xml" title="ALVEO LAND &raquo; Comments Feed" href="/comments/feed/" />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "wpemoji": "\/wp\/wp-includes\/js\/wp-emoji.js?ver=6.4.3",
                "twemoji": "\/wp\/wp-includes\/js\/twemoji.js?ver=6.4.3"
            }
        };
        /**
         * @output wp-includes/js/wp-emoji-loader.js
         */

        /**
         * Emoji Settings as exported in PHP via _print_emoji_detection_script().
         * @typedef WPEmojiSettings
         * @type {object}
         * @property {?object} source
         * @property {?string} source.concatemoji
         * @property {?string} source.twemoji
         * @property {?string} source.wpemoji
         * @property {?boolean} DOMReady
         * @property {?Function} readyCallback
         */

        /**
         * Support tests.
         * @typedef SupportTests
         * @type {object}
         * @property {?boolean} flag
         * @property {?boolean} emoji
         */

        /**
         * IIFE to detect emoji support and load Twemoji if needed.
         *
         * @param {Window} window
         * @param {Document} document
         * @param {WPEmojiSettings} settings
         */
        (function wpEmojiLoader(window, document, settings) {
            if (typeof Promise === 'undefined') {
                return;
            }

            var sessionStorageKey = 'wpEmojiSettingsSupports';
            var tests = ['flag', 'emoji'];

            /**
             * Checks whether the browser supports offloading to a Worker.
             *
             * @since 6.3.0
             *
             * @private
             *
             * @returns {boolean}
             */
            function supportsWorkerOffloading() {
                return (
                    typeof Worker !== 'undefined' &&
                    typeof OffscreenCanvas !== 'undefined' &&
                    typeof URL !== 'undefined' &&
                    URL.createObjectURL &&
                    typeof Blob !== 'undefined'
                );
            }

            /**
             * @typedef SessionSupportTests
             * @type {object}
             * @property {number} timestamp
             * @property {SupportTests} supportTests
             */

            /**
             * Get support tests from session.
             *
             * @since 6.3.0
             *
             * @private
             *
             * @returns {?SupportTests} Support tests, or null if not set or older than 1 week.
             */
            function getSessionSupportTests() {
                try {
                    /** @type {SessionSupportTests} */
                    var item = JSON.parse(
                        sessionStorage.getItem(sessionStorageKey)
                    );
                    if (
                        typeof item === 'object' &&
                        typeof item.timestamp === 'number' &&
                        new Date().valueOf() < item.timestamp + 604800 && // Note: Number is a week in seconds.
                        typeof item.supportTests === 'object'
                    ) {
                        return item.supportTests;
                    }
                } catch (e) {}
                return null;
            }

            /**
             * Persist the supports in session storage.
             *
             * @since 6.3.0
             *
             * @private
             *
             * @param {SupportTests} supportTests Support tests.
             */
            function setSessionSupportTests(supportTests) {
                try {
                    /** @type {SessionSupportTests} */
                    var item = {
                        supportTests: supportTests,
                        timestamp: new Date().valueOf()
                    };

                    sessionStorage.setItem(
                        sessionStorageKey,
                        JSON.stringify(item)
                    );
                } catch (e) {}
            }

            /**
             * Checks if two sets of Emoji characters render the same visually.
             *
             * This function may be serialized to run in a Worker. Therefore, it cannot refer to variables from the containing
             * scope. Everything must be passed by parameters.
             *
             * @since 4.9.0
             *
             * @private
             *
             * @param {CanvasRenderingContext2D} context 2D Context.
             * @param {string} set1 Set of Emoji to test.
             * @param {string} set2 Set of Emoji to test.
             *
             * @return {boolean} True if the two sets render the same.
             */
            function emojiSetsRenderIdentically(context, set1, set2) {
                // Cleanup from previous test.
                context.clearRect(0, 0, context.canvas.width, context.canvas.height);
                context.fillText(set1, 0, 0);
                var rendered1 = new Uint32Array(
                    context.getImageData(
                        0,
                        0,
                        context.canvas.width,
                        context.canvas.height
                    ).data
                );

                // Cleanup from previous test.
                context.clearRect(0, 0, context.canvas.width, context.canvas.height);
                context.fillText(set2, 0, 0);
                var rendered2 = new Uint32Array(
                    context.getImageData(
                        0,
                        0,
                        context.canvas.width,
                        context.canvas.height
                    ).data
                );

                return rendered1.every(function(rendered2Data, index) {
                    return rendered2Data === rendered2[index];
                });
            }

            /**
             * Determines if the browser properly renders Emoji that Twemoji can supplement.
             *
             * This function may be serialized to run in a Worker. Therefore, it cannot refer to variables from the containing
             * scope. Everything must be passed by parameters.
             *
             * @since 4.2.0
             *
             * @private
             *
             * @param {CanvasRenderingContext2D} context 2D Context.
             * @param {string} type Whether to test for support of "flag" or "emoji".
             * @param {Function} emojiSetsRenderIdentically Reference to emojiSetsRenderIdentically function, needed due to minification.
             *
             * @return {boolean} True if the browser can render emoji, false if it cannot.
             */
            function browserSupportsEmoji(context, type, emojiSetsRenderIdentically) {
                var isIdentical;

                switch (type) {
                    case 'flag':
                        /*
                         * Test for Transgender flag compatibility. Added in Unicode 13.
                         *
                         * To test for support, we try to render it, and compare the rendering to how it would look if
                         * the browser doesn't render it correctly (white flag emoji + transgender symbol).
                         */
                        isIdentical = emojiSetsRenderIdentically(
                            context,
                            '\uD83C\uDFF3\uFE0F\u200D\u26A7\uFE0F', // as a zero-width joiner sequence
                            '\uD83C\uDFF3\uFE0F\u200B\u26A7\uFE0F' // separated by a zero-width space
                        );

                        if (isIdentical) {
                            return false;
                        }

                        /*
                         * Test for UN flag compatibility. This is the least supported of the letter locale flags,
                         * so gives us an easy test for full support.
                         *
                         * To test for support, we try to render it, and compare the rendering to how it would look if
                         * the browser doesn't render it correctly ([U] + [N]).
                         */
                        isIdentical = emojiSetsRenderIdentically(
                            context,
                            '\uD83C\uDDFA\uD83C\uDDF3', // as the sequence of two code points
                            '\uD83C\uDDFA\u200B\uD83C\uDDF3' // as the two code points separated by a zero-width space
                        );

                        if (isIdentical) {
                            return false;
                        }

                        /*
                         * Test for English flag compatibility. England is a country in the United Kingdom, it
                         * does not have a two letter locale code but rather a five letter sub-division code.
                         *
                         * To test for support, we try to render it, and compare the rendering to how it would look if
                         * the browser doesn't render it correctly (black flag emoji + [G] + [B] + [E] + [N] + [G]).
                         */
                        isIdentical = emojiSetsRenderIdentically(
                            context,
                            // as the flag sequence
                            '\uD83C\uDFF4\uDB40\uDC67\uDB40\uDC62\uDB40\uDC65\uDB40\uDC6E\uDB40\uDC67\uDB40\uDC7F',
                            // with each code point separated by a zero-width space
                            '\uD83C\uDFF4\u200B\uDB40\uDC67\u200B\uDB40\uDC62\u200B\uDB40\uDC65\u200B\uDB40\uDC6E\u200B\uDB40\uDC67\u200B\uDB40\uDC7F'
                        );

                        return !isIdentical;
                    case 'emoji':
                        /*
                         * Why can't we be friends? Everyone can now shake hands in emoji, regardless of skin tone!
                         *
                         * To test for Emoji 14.0 support, try to render a new emoji: Handshake: Light Skin Tone, Dark Skin Tone.
                         *
                         * The Handshake: Light Skin Tone, Dark Skin Tone emoji is a ZWJ sequence combining 🫱 Rightwards Hand,
                         * 🏻 Light Skin Tone, a Zero Width Joiner, 🫲 Leftwards Hand, and 🏿 Dark Skin Tone.
                         *
                         * 0x1FAF1 == Rightwards Hand
                         * 0x1F3FB == Light Skin Tone
                         * 0x200D == Zero-Width Joiner (ZWJ) that links the code points for the new emoji or
                         * 0x200B == Zero-Width Space (ZWS) that is rendered for clients not supporting the new emoji.
                         * 0x1FAF2 == Leftwards Hand
                         * 0x1F3FF == Dark Skin Tone.
                         *
                         * When updating this test for future Emoji releases, ensure that individual emoji that make up the
                         * sequence come from older emoji standards.
                         */
                        isIdentical = emojiSetsRenderIdentically(
                            context,
                            '\uD83E\uDEF1\uD83C\uDFFB\u200D\uD83E\uDEF2\uD83C\uDFFF', // as the zero-width joiner sequence
                            '\uD83E\uDEF1\uD83C\uDFFB\u200B\uD83E\uDEF2\uD83C\uDFFF' // separated by a zero-width space
                        );

                        return !isIdentical;
                }

                return false;
            }

            /**
             * Checks emoji support tests.
             *
             * This function may be serialized to run in a Worker. Therefore, it cannot refer to variables from the containing
             * scope. Everything must be passed by parameters.
             *
             * @since 6.3.0
             *
             * @private
             *
             * @param {string[]} tests Tests.
             * @param {Function} browserSupportsEmoji Reference to browserSupportsEmoji function, needed due to minification.
             * @param {Function} emojiSetsRenderIdentically Reference to emojiSetsRenderIdentically function, needed due to minification.
             *
             * @return {SupportTests} Support tests.
             */
            function testEmojiSupports(tests, browserSupportsEmoji, emojiSetsRenderIdentically) {
                var canvas;
                if (
                    typeof WorkerGlobalScope !== 'undefined' &&
                    self instanceof WorkerGlobalScope
                ) {
                    canvas = new OffscreenCanvas(300, 150); // Dimensions are default for HTMLCanvasElement.
                } else {
                    canvas = document.createElement('canvas');
                }

                var context = canvas.getContext('2d', {
                    willReadFrequently: true
                });

                /*
                 * Chrome on OS X added native emoji rendering in M41. Unfortunately,
                 * it doesn't work when the font is bolder than 500 weight. So, we
                 * check for bold rendering support to avoid invisible emoji in Chrome.
                 */
                context.textBaseline = 'top';
                context.font = '600 32px Arial';

                var supports = {};
                tests.forEach(function(test) {
                    supports[test] = browserSupportsEmoji(context, test, emojiSetsRenderIdentically);
                });
                return supports;
            }

            /**
             * Adds a script to the head of the document.
             *
             * @ignore
             *
             * @since 4.2.0
             *
             * @param {string} src The url where the script is located.
             *
             * @return {void}
             */
            function addScript(src) {
                var script = document.createElement('script');
                script.src = src;
                script.defer = true;
                document.head.appendChild(script);
            }

            settings.supports = {
                everything: true,
                everythingExceptFlag: true
            };

            // Create a promise for DOMContentLoaded since the worker logic may finish after the event has fired.
            var domReadyPromise = new Promise(function(resolve) {
                document.addEventListener('DOMContentLoaded', resolve, {
                    once: true
                });
            });

            // Obtain the emoji support from the browser, asynchronously when possible.
            new Promise(function(resolve) {
                    var supportTests = getSessionSupportTests();
                    if (supportTests) {
                        resolve(supportTests);
                        return;
                    }

                    if (supportsWorkerOffloading()) {
                        try {
                            // Note that the functions are being passed as arguments due to minification.
                            var workerScript =
                                'postMessage(' +
                                testEmojiSupports.toString() +
                                '(' + [
                                    JSON.stringify(tests),
                                    browserSupportsEmoji.toString(),
                                    emojiSetsRenderIdentically.toString()
                                ].join(',') +
                                '));';
                            var blob = new Blob([workerScript], {
                                type: 'text/javascript'
                            });
                            var worker = new Worker(URL.createObjectURL(blob), {
                                name: 'wpTestEmojiSupports'
                            });
                            worker.onmessage = function(event) {
                                supportTests = event.data;
                                setSessionSupportTests(supportTests);
                                worker.terminate();
                                resolve(supportTests);
                            };
                            return;
                        } catch (e) {}
                    }

                    supportTests = testEmojiSupports(tests, browserSupportsEmoji, emojiSetsRenderIdentically);
                    setSessionSupportTests(supportTests);
                    resolve(supportTests);
                })
                // Once the browser emoji support has been obtained from the session, finalize the settings.
                .then(function(supportTests) {
                    /*
                     * Tests the browser support for flag emojis and other emojis, and adjusts the
                     * support settings accordingly.
                     */
                    for (var test in supportTests) {
                        settings.supports[test] = supportTests[test];

                        settings.supports.everything =
                            settings.supports.everything && settings.supports[test];

                        if ('flag' !== test) {
                            settings.supports.everythingExceptFlag =
                                settings.supports.everythingExceptFlag &&
                                settings.supports[test];
                        }
                    }

                    settings.supports.everythingExceptFlag =
                        settings.supports.everythingExceptFlag &&
                        !settings.supports.flag;

                    // Sets DOMReady to false and assigns a ready function to settings.
                    settings.DOMReady = false;
                    settings.readyCallback = function() {
                        settings.DOMReady = true;
                    };
                })
                .then(function() {
                    return domReadyPromise;
                })
                .then(function() {
                    // When the browser can not render everything we need to load a polyfill.
                    if (!settings.supports.everything) {
                        settings.readyCallback();

                        var src = settings.source || {};

                        if (src.concatemoji) {
                            addScript(src.concatemoji);
                        } else if (src.wpemoji && src.twemoji) {
                            addScript(src.twemoji);
                            addScript(src.wpemoji);
                        }
                    }
                });
        })(window, document, window._wpemojiSettings);

        /* ]]> */
    </script>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='residence_latest_items-cgb-style-css-css'
        href='/app/plugins/residence-gutenberg/dist/blocks.style.build.css?ver=6.4.3' type='text/css' media='all' />
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /**
 * These rules are needed for backwards compatibility.
 * They should match the button element rules in the base theme.json file.
 */
        .wp-block-button__link {
            color: #ffffff;
            background-color: #32373c;
            border-radius: 9999px;
            /* 100% causes an oval, but any explicit but really high value retains the pill shape. */

            /* This needs a low specificity so it won't override the rules from the button element if defined in theme.json. */
            box-shadow: none;
            text-decoration: none;

            /* The extra 2px are added to size solids the same as the outline versions.*/
            padding: calc(0.667em + 2px) calc(1.333em + 2px);

            font-size: 1.125em;
        }

        .wp-block-file__button {
            background: #32373c;
            color: #ffffff;
            text-decoration: none;
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='mlsimport-css' href='/app/plugins/mlsimport/public/css/mlsimport-public.css?ver=5.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='weglot-css-css' href='/app/plugins/weglot/dist/css/front-css.css?ver=4.2.4'
        type='text/css' media='' />
    <style id='weglot-css-inline-css' type='text/css'>
        .country-selector.weglot-dropdown {
            background-color: black;
            color: white;
            font-family: "Poppins", sans-serif;
            font-size: 16px;
            font-weight: 500;
            text-transform: uppercase;
        }

        .country-selector.weglot-dropdown span {
            padding: 0 16px;
        }

        .country-selector.weglot-dropdown .wgcurrent:after {
            filter: invert(1);
        }

        .country-selector.weglot-dropdown .wgcurrent {
            border: none;
        }

        .country-selector.weglot-dropdown ul {
            background-color: black;
            border: none;
        }

        .country-selector.weglot-dropdown a {
            padding: 0 16px;
            color: white;
            border-top: 1px solid gray;
            font-family: "Poppins", sans-serif;
        }
    </style>
    <link rel='stylesheet' id='new-flag-css-css' href='/app/plugins/weglot/app/styles/new-flags.css?ver=4.2.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap.min-css' href='/app/themes/wpresidence/css/bootstrap.min.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-theme.min-css'
        href='/app/themes/wpresidence/css/bootstrap-theme.min.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='wpestate_style-css' href='assets/css/style.css?ver=1.0' type='text/css'
        media='all' />
    <style id='wpestate_style-inline-css' type='text/css'>
        body::after {
            position: absolute;
            width: 0;
            height: 0;
            overflow: hidden;
            z-index: -1; // hide images
            content: url(); // load images
        }
        }
    </style>
    <link rel='stylesheet' id='wpestate-child-style-css' href='assets/css/style.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wpestate_media-css' href='/app/themes/wpresidence/css/my_media.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wpestate-roboto-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3Awght%40300%2C400%2C500%2C700&#038;subset=latin%2Clatin-ext&#038;ver=6.4.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-5.min-css'
        href='/app/themes/wpresidence/css/fontawesome/css/all.css?ver=6.4.3' type='text/css' media='all' />
    <link rel='stylesheet' id='fontello-css' href='/app/themes/wpresidence/css/fontello.min.css?ver=6.4.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='jquery.ui.theme-css' href='/app/themes/wpresidence/css/jquery-ui.min.css?ver=6.4.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='/app/plugins/elementor/assets/lib/eicons/css/elementor-icons.css?ver=5.20.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='assets/css/custom.css?ver=1720158278' type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css' href='/app/plugins/elementor/assets/lib/swiper/css/swiper.css?ver=5.3.6'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-35-css' href='assets/css/post-35.css?ver=1720158278'
        type='text/css' media='all' />
    <link rel='stylesheet' id='eac-css'
        href='/app/plugins/elementor-addon-components/assets/css/eac-components.min.css?ver=2.0.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='eac-image-fancybox-css'
        href='/app/plugins/elementor-addon-components/assets/css/jquery.fancybox.min.css?ver=3.5.7' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-pro-css'
        href='/app/uploads/elementor/css/custom-pro-frontend.css?ver=1720158278' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-global-css' href='assets/css/global.css?ver=1720158279'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-30774-css'
        href='assets/css/post.css?ver=1726039579' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-33978-css'
        href='assets/css/post2.css?ver=1720158280' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_custom_css-css' href='/app/uploads/js_composer/custom.css?ver=6.10.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='child-style-css' href='assets/css/main.css?ver=6.4.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-style-css'
        href='https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css?ver=6.4.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='alveo-cookie-style-css'
        href='https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.9.1/dist/cookieconsent.css?ver=2.9.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='leaflet-css-css' href='https://unpkg.com/leaflet@1.9.4/dist/leaflet.css?ver=1.9.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bsf-Defaults-css' href='/app/uploads/smile_fonts/Defaults/Defaults.css?ver=3.19.14'
        type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Assistant%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CInter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.4.3'
        type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type="text/javascript" src="/wp/wp-includes/js/jquery/jquery.js?ver=3.7.1" id="jquery-core-js"></script>
    <script type="text/javascript" src="/wp/wp-includes/js/jquery/jquery-migrate.js?ver=3.4.1" id="jquery-migrate-js">
    </script>
    <script type="text/javascript" src="/app/plugins/mlsimport/public/js/mlsimport-public.js?ver=5.3" id="mlsimport-js">
    </script>
    <script type="text/javascript" src="/app/plugins/weglot/dist/front-js.js?ver=4.2.4" id="wp-weglot-js-js"></script>
    <script type="text/javascript" src="/app/themes/wpresidence/js/modernizr.custom.62456.js?ver=1.0.0"
        id="modernizr.custom.62456-js"></script>
    <link rel="https://api.w.org/" href="/wp-json/" />
    <link rel="alternate" type="application/json" href="/wp-json/wp/v2/pages/30774" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="/wp/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.4.3" />
    <link rel='shortlink' href='/' />
    <link rel="alternate" type="application/json+oembed" href="/wp-json/oembed/1.0/embed?url=https%3A%2F%2F%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="/wp-json/oembed/1.0/embed?url=https%3A%2F%2F%2F&#038;format=xml" />

    <link rel="alternate" href="/" hreflang="en" />
    <link rel="alternate" href="/ja/" hreflang="ja" />
    <link rel="alternate" href="/zh/" hreflang="zh" />
    <style type='text/css'>
        body,
        .wide {
            background-color: #ffffff;
        }

        .content_wrapper,
        .agency_contact_class {
            background-color: #ffffff;
        }

        .fixed_header.header_transparent .header_wrapper,
        .header_transparent .header_wrapper.navbar-fixed-top.customnav,
        .master_header,
        .header_wrapper.header_type4,
        .customnav,
        .header5_bottom_row_wrapper,
        .header_wrapper.header_type5.customnav,
        .header_type3_menu_sidebar {
            background-color: #002b47
        }

        .pagination>li>a,
        .pagination>li>span,
        .single-content p a,
        .featured_article:hover h2 a,
        .user_dashboard_listed a,
        .blog_unit_meta .read_more,
        .slider-content .read_more,
        .blog2v .read_more,
        .breadcrumb .active,
        .unit_more_x a,
        .unit_more_x,
        #login_trigger_modal {
            color: #00629b;
        }

        .single-content p a,
        .contact-wrapper p a {
            color: #00629b !important;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        h1 a,
        h2 a,
        h3 a,
        h4 a,
        h5 a,
        h6 a,
        .featured_property h2 a,
        .featured_property h2,
        .blog_unit h3,
        .blog_unit h3 a,
        .submit_container_header,
        .info_details #infobox_title,
        #tab_prpg.wpestate_elementor_tabs li a,
        .pack_content,
        .property_agent_wrapper a,
        .testimonial-container.type_class_3 .testimonial-author-line,
        .dashboard_hi_text,
        .invoice_unit_title,
        .dashbard_unit_title,
        .property_dashboard_status,
        .property_dashboard_types,
        .featured_prop_type5 h2,
        #wpestate_sidebar_property_contact_tabs li a {
            color: #002b47;
        }

        .featured_property_type2 h2 a {
            color: #fff;
        }

        #colophon {
            background-color: #002b47;
        }

        #colophon,
        #colophon a,
        #colophon li a,
        #colophon .widget_latest_price {
            color: #f0f0f0;
        }

        #colophon .widget-title-footer {
            color: #ffffff;
        }

        .sub_footer,
        .subfooter_menu a,
        .subfooter_menu li a {
            color: #202020 !important;
        }

        .sub_footer {
            background-color: #f0f0f0;
        }

        .top_bar_wrapper {
            background-color: #002B47;
        }

        .top_bar,
        .top_bar a {
            color: #ffffff;
        }

        .mobile_header {
            background-color: #001a33;
        }

        .adv3-holder {
            background-color: #062750a8;
        }

        #search_wrapper.with_search_form_float #search_wrapper_color {
            background-color: #062750;
        }

        #search_wrapper {
            background: transparent;
        }

        .search_wr_5 h3,
        #search_wrapper.with_search_form_float,
        #search_wrapper.with_search_form_float #amount,
        #search_wrapper.with_search_form_float .adv_extended_options_text i,
        #search_wrapper.with_search_form_float .adv_extended_options_text,
        #search_wrapper.with_search_form_float .extended_search_checker label,
        #search_wrapper.with_search_form_float .adv_search_slider label,
        #search_wrapper.with_search_form_float .adv_extended_options_text {
            color: #ffffff;
        }

        #search_wrapper.with_search_form_float #search_wrapper #amount,
        #search_wrapper.with_search_form_float .adv_search_slider #amount,
        #search_wrapper.with_search_form_float .adv6-holder .adv_search_slider p label,
        #search_wrapper.with_search_form_float .adv6-holder .adv_search_slider p span,
        #search_wrapper.with_search_form_float #amount_wd {
            color: #ffffff !important;
        }

        #search_wrapper.with_search_form_float #search_wrapper_color {
            opacity: 0.55;
        }

        #primary .widget-container.featured_sidebar {
            padding: 0px;
        }
    </style>
    <meta name="generator"
        content="Elementor 3.13.4; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style>
        /* ------------------------ */


        .App {
            text-align: center;
        }

        .App-logo {
            height: 40vmin;
            pointer-events: none;
        }

        @media (prefers-reduced-motion: no-preference) {
            .App-logo {
                animation: App-logo-spin infinite 20s linear;
            }
        }

        .App-header {
            background-color: #282c34;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: calc(10px + 2vmin);
            color: white;
        }

        .App-link {
            color: #61dafb;
        }

        .check-availability-first-title {
            font-family: "Inter";
            font-style: normal;
            font-weight: 400;
            font-size: 28px;
            line-height: 32px;
            letter-spacing: 1.6px;
            text-transform: uppercase;
            color: #040406;
        }

        .check-availability-filter-div {
            display: flex;
            flex-direction: row;
            align-items: baseline;
            justify-content: left;
        }

        .check-availability-filter-text {
            font-family: "Inter";
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 28px;
            color: #000000;
            text-transform: uppercase;
            padding-right: 0.5%;
        }

        .check-availability-filter-select-d {
            font-family: "Inter";
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 28px;
            color: #000000;
            text-transform: uppercase;
        }

        .check-availability-currency-div {
            display: flex;
            flex-direction: row;
            align-items: baseline;
            justify-content: left;
            margin-top: 10%;
        }

        .check-availability-currency-text {
            /* font-family: "Inter"; */
            font-style: bold;
            font-weight: 600;
            /* font-weight: 400; */
            font-size: 18px;
            /* font-size: 20px; */
            line-height: 15px;
            /* line-height: 28px; */
            color: #000000;
        }

        .check-availability-table-header-div {
            margin-top: 3%;
            background-color: #f2f2f2 !important;
            border: solid #d7d7d7 1px !important;
        }

        .check-availability-table-header-text {
            /* font-family: "Inter"; */
            font-style: bold;
            font-weight: 600;
            /* font-weight: 400; */
            font-size: 18px;
            /* font-size: 20px; */
            line-height: 15px;
            color: #002b47;
        }

        .ant-table-thead .ant-table-cell {
            background-color: #f2f2f2 !important;
        }

        .ant-table-row:nth-child(even) {
            background-color: #f0f0f0 !important;
        }

        @keyframes App-logo-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }



        /* -------------------------*/


        .top_search_box form {
            display: flex;
            align-items: center;
        }

        .top_search_box input[type=text] {
            width: 75%;
            height: 40px;
            border: solid;
            border-radius: 0%;
            border-width: 0px 1px 1px 1px;
            border-color: #000000;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 28px;
            margin-right: 2%;
            background-image: url(https://alveo.site/wp-content/uploads/2023/06/vector-6.svg);
            background-repeat: no-repeat;
            background-position: center left 10px;
            padding-left: 40px;
        }

        .top_search_box button {
            background: #006895;
            width: 30%;
            height: 40px;
            color: white;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            text-align: center;
            text-transform: uppercase;
            border: none;

        }

        .mobile_agent_area_wrapper,
        .swerve_form button.elementor-button,
        a.contact-box.islive,
        a.backtop.islive {
            display: none;
        }

        .elementor-popup-modal .dialog-widget-content {
            width: 100%
        }

        ul {
            margin: auto;
        }

        ::marker {
            content: '';
        }

        .right-side-slider {
            grid-row: 2 / 7;
            grid-column: 6 / 7;
            background-color: #ECF2FC;
        }

        .swerve_form::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #000;
            opacity: 1;
            /* Firefox */
        }

        .swerve_form:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #000;
        }

        .swerve_form::-ms-input-placeholder {
            /* Microsoft Edge */
            color: #000;
        }



        .footer_sticky {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #fff;
        }

        .property_multi_image_slider button.slick-next.slick-arrow {
            right: 42%;
            padding-right: 0px;
            top: 102%;
            background-color: transparent !important;
            color: #000;
            font-weight: bolder;
        }

        .property_multi_image_slider button.slick-prev.slick-arrow {
            left: 42%;
            padding-right: 0px;
            top: 102%;
            background-color: transparent !important;
            color: #000;
            font-weight: bolder;

        }

        .multi_image_slider_image {
            margin-bottom: 50px;
        }

        .property_multi_image_slider,
        .carousel-caption_underlay {
            background-color: transparent
        }

        .carousel_caption_text {
            font-size: 20px;
            left: 0;
            right: 0;
            color: #002B47;
            width: 100%;
            text-align: center;
            font-family: "Inter", Sans-serif;
        }

        /* Slideshow container */
        slideshow-container-grid-row {
            grid-row: 1 / 2;
            grid-column: 2 / 4
        }

        .slideshow-container .mySlides {
            margin-top: -80px;
            background-color: #ECF2FC;
            padding: 30px;
        }

        .slideshow-container {
            max-width: 100%;
            position: relative;
            margin: auto;
        }

        .slideshow-container .mySlides img {
            max-height: 520px;
        }

        /* Next & previous buttons */
        .slideshow-container .prev,
        .slideshow-container .next {
            cursor: pointer;
            position: absolute;
            top: 60%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .slideshow-container .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .slideshow-container .prev:hover,
        .slideshow-container .next:hover {
            background-color: rgba(255, 255, 255, 0.8);
        }

        /* Caption text */
        .slideshow-container .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .slideshow-container .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        .slideshow-container .active,
        .slideshow-container .dot:hover {
            background-color: #717171;
        }

        /* Fading animation
    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }*/

        .slideshow-container .h2title {
            font-family: "Inter";
            font-style: normal;
            font-weight: 300;
            font-size: 40px;
            line-height: 40px;
            display: flex;
            align-items: center;
            letter-spacing: 1.6px;
            text-transform: uppercase;
            color: #040406;
            margin-left: 6%;
        }

        .slideshow-container .h3title {
            font-family: "Inter";
            font-style: normal;
            font-weight: 400;
            font-size: 28px;
            line-height: 32px;
            display: flex;
            align-items: center;
            letter-spacing: 1.6px;
            text-transform: uppercase;
            color: #040406;
            margin-left: 6%;
            padding-bottom: 25px;
            padding-top: 25px;
        }

        .slideshow-container .grid-main-container {
            display: grid;
            grid-template-columns: auto auto auto auto auto auto auto auto;
            grid-template-rows: auto auto auto auto auto auto auto auto;
            padding: 10px;
        }

        .slideshow-container .buttonsContainer {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-left: 6%;
        }

        .slideshow-container .topButton {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            /* padding: 48px; */
            gap: 8px;
            width: 133.75px;
            height: 40px;
            background: #ffffff;
            border: 1px solid #006895;
            font-family: "Inter";
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            text-align: center;
            text-transform: uppercase;
            color: #006895;
        }

        .slideshow-container .topButton:focus {
            background: #006895;
            color: #fefefe;
        }

        .slideshow-container .tableContainer {
            overflow-y: auto;
            overflow-x: hidden;
            max-height: 450px;
            width: 95%;
        }

        .slideshow-container .tableContainer * {
            border-left: 0 !important;
            border-right: 0 !important;
            border-top: 1px solid #002B47 !important;
            border-bottom: 1px solid #002B47;

        }

        .slideshow-container .view360button {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 8px;
            width: 170px;
            height: 40px;
            background: #006895;
            font-family: "Inter";
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
            text-align: center;
            text-transform: uppercase;
            color: #fefefe;
        }

        .slideshow-container .endptag {
            font-family: "Inter";
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 13px;
            display: flex;
            align-items: center;
            text-align: right;
            color: #006895;
        }

        .slideshow-container .slideshowTable ::-webkit-scrollbar {
            width: 5px;
            color: gray;
            max-height: 20px;
        }

        /* Handle */
        .slideshow-container .slideshowTable ::-webkit-scrollbar-thumb {
            background: gray;
            width: 5px;

            border-radius: 7px;
        }

        .slideshow-container .slideshowTable table {
            border-collapse: collapse;
            width: 100%;
            font-family: "Inter";
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 28px;
            margin-left: 35px;
            color: #000000;
        }

        .slideshowTable tr {
            border-bottom: 1px solid #002b47;
        }

        .slideshowTable tr:last-child {
            border-bottom: none;
        }

        .slideshowTable th {
            text-align: left;
        }

        .slideshowTable td {
            font-family: "Inter";
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 28px;
            padding: 3%;
        }

        /*
    @keyframes fade {
      from {
        opacity: 0.4;
      }
      to {
        opacity: 1;
      }
    }
*/
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {

            .prev,
            .next,
            .text {
                font-size: 11px;
            }
        }

        /* Slideshow container */


        .estate_property_first_row .active {
            text-transform: uppercase;
        }

        #property_video_wrapper_player {
            background-color: #00000057;
            border: 3px solid #fff;
        }

        #property_video_wrapper_player:before {
            margin-top: -12PX !important;
            margin-left: -7PX !important;
            font-size: 20px !important;
        }

        .breadcrumb {
            font-size: 20px;
            font-family: 'inter';
        }

        .breadcrumb a,
        .breadcrumb .active {
            color: #002B47 !important;
        }

        .breadcrumb>li+li:before {
            font-size: 12px;
        }

        .panel-body,
        .property-panel .panel-heading {
            padding: 0 !important;
        }

        .elementor-widget-container .property_listing_square,
        .elementor-widget-container .overview_wrapper,
        .elementor-widget-container .property_slider2_wrapper .image_div,
        .elementor-widget-container .property_slider2_info_wrapper,
        .elementor-widget-container .property_listing_blog,
        .elementor-widget-container .adv-search-3,
        .page-template-front_property_submit .navigation_container,
        .elementor-widget-container .advanced_search_shortcode,
        .elementor-widget-container .membership_package_product,
        .elementor-widget-container .contact-wrapper,
        .elementor-widget-container .developer_contact_wrapper,
        .elementor-widget-container .agency_contact_wrapper,
        .elementor-widget-container.property_reviews_wrapper,
        .elementor-widget-container .agency_contact_container_wrapper,
        .elementor-widget-container .agency_content_wrapper,
        .elementor-widget-container .submit_property_front_wrapper,
        .elementor-widget-container .directory_sidebar_wrapper,
        .elementor-widget-container .places_wrapper_type_2,
        .elementor-widget-container .featured_property,
        .elementor-widget-container .agency_unit,
        .elementor-widget-container #comments,
        .elementor-widget-container .single-blog,
        .elementor-widget-container #content_container .container_agent,
        .elementor-widget-container .listing_wrapper .property_listing,
        .elementor-widget-container .listing_wrapper .agent_unit,
        .elementor-widget-container .agent_contanct_form,
        .elementor-widget-container .agent_content,
        .elementor-widget-container .wpestate_agent_details_wrapper,
        .elementor-widget-container .wpestate_property_description,
        .elementor-widget-container .multi_units_wrapper,
        .elementor-widget-container .property-panel,
        .elementor-widget-container #primary .widget-container,
        .elementor-widget-container .user_role_unit,
        .elementor-widget-container .testimonial-slider-container .testimonial-container.type_class_3,
        .elementor-widget-container .google_map_shortcode_wrapper,
        .elementor-widget-container .testimonial-container.type_class_1 .testimonial-text,
        .elementor-widget-container .blog_unit,
        .elementor-widget-container .agent_unit_featured,
        .elementor-widget-container .featured_article,
        .elementor-widget-container .saved_search_wrapper {
            box-shadow: none;
            border-radius: 0px;

        }

        .wpestate_content_wrapper_custom_template_wrapper {
            background-color: #fff !important;
        }


        .feature_chapter_name.col-md-12 {
            display: none;
        }

        .nearby_section .fa-circle:before {
            content: "\f111" !important;
            font-size: 6px;
            vertical-align: super;
            margin-right: 7px;
        }

        .single-estate_property .listing_detail .fa-check-circle:before {
            content: "\2022" !important;
        }

        .wpestate_property_description {
            padding: 0 !important
        }


        .elementor-toggle .elementor-tab-title.elementor-active .elementor-toggle-icon-opened .fa-caret-up:before {
            font-family: "Font Awesome 5 Free";
            content: "\f107";
        }

        .elementor-toggle .elementor-tab-title .elementor-toggle-icon .elementor-toggle-icon-closed .fa-caret-right:before {
            font-family: "Font Awesome 5 Free";
            content: "\f107";
            position: relative;
            float: right;
            font-weight: 600;
            margin-right: 0px;
            transition: 0.2s ease-out;
        }

        .elementor-button-text-accardion {
            width: 23.8%;
            border: 1px solid #006895;
            display: inline-block;
            text-align: center;
            padding: 10px;
            margin: 5px;
            margin-bottom: 20px;
            color: #006895;
        }

        .finishes table.paleBlueRows {
            border: 1px solid #FFFFFF;
            width: 100%;
            height: 200px;
            text-align: left;
            border-collapse: collapse;
            font-family: "Inter", Sans-serif;
        }

        .finishes table.paleBlueRows td,
        .finishes table.paleBlueRows th {
            border: 1px solid #FFFFFF;
            padding: 3px 2px;
        }

        .finishes table.paleBlueRows tbody td {
            font-size: 13px;
            word-break: break-word;
        }

        .finishes table.paleBlueRows tr:nth-child(even) {
            background: #F2F2F2;
        }

        .finishes table.paleBlueRows thead {
            border-bottom: 2px solid #000;
        }

        .finishes table.paleBlueRows thead th {
            font-size: 17px;
            font-weight: bold;
            color: #000000;
            text-align: left;
            border-bottom: 2px solid #000;
        }

        .finishes table.paleBlueRows thead th:first-child {
            border-left: none;
        }

        .finishes table.paleBlueRows tfoot {
            font-size: 14px;
            font-weight: bold;
            color: #333333;
            background: #F2F2F2;
            border-top: 3px solid #444444;
        }

        .finishes table.paleBlueRows tfoot td {
            font-size: 14px;
        }

        .property_categs .fa-map-marker-alt:before {
            content: "\f3c5";
            font-size: 13px;
            vertical-align: bottom;
        }

        .price_header_property .price_area {
            text-align: left;
        }

        .elementor-icon-list-item {
            min-width: 340px;
        }

        .property-panel .panel-body {
            display: flow-root;
        }

        .listing_detail.col-md-12 {
            display: contents;
        }

        .modal_map {
            position: fixed !important;
            left: 0 !important;
            width: 100% !important;
            z-index: 9999;
        }

        .row.alveo_property_list {
            margin-top: 80px;
        }

        .wpestate_property_description h3 {
            font-size: 28px !important;
            font-family: "Inter";
            text-transform: uppercase;
            color: #040406;
            font-weight: 400;
        }

        .wpestate_property_description p {
            font-size: 20px !important;
            font-weight: 400;
            color: #040406;
            line-height: 28px;
        }

        .row.alveo_property_list .breadcrumb_container {
            display: none;
        }

        .featured_peropert_box_slider_img {
            width: 350px !important;
        }

        /* --------------------------- Responsive ------------------------*/
        @media only screen and (max-width: 600px) {
            .slideshow-container .grid-main-container {
                display: block;
            }

            .slideshow-container .h2title,
            .slideshow-container .buttonsContainer,
            .slideshow-container .h3title,
            .slideshow-container .slideshowTable table {
                margin-left: 0;
            }

            .right-side-slider {
                margin-top: 20px;
            }

            .nearby_section li.elementor-icon-list-item.elementor-inline-item {
                width: 100%;
            }

            .elementor-button-text-accardion {
                width: 45%;
            }

            .top_header_video_propertis * {
                color: #000 !important;
                text-align: center !important;
            }

            slideshow-container-grid-row {
                grid-row: 8;
                grid-column: 2
            }

        }

        @media only screen and (max-width: 768px) {
            .alveo-main-nav .menu-item a br {
                display: none;
            }
        }
    </style>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5DMMB5');
    </script>
    <!-- End Google Tag Manager -->
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
    <meta name="generator"
        content="Powered by Slider Revolution 6.6.10 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="/app/uploads/2024/05/cropped-A-box-blue-32x32.jpg" sizes="32x32" />
    <link rel="icon" href="/app/uploads/2024/05/cropped-A-box-blue-192x192.jpg" sizes="192x192" />
    <link rel="apple-touch-icon" href="/app/uploads/2024/05/cropped-A-box-blue-180x180.jpg" />
    <meta name="msapplication-TileImage" content="/app/uploads/2024/05/cropped-A-box-blue-270x270.jpg" />
    <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
    <noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
</head>

<body
    class="home page-template page-template-elementor_header_footer page page-id-30774 wpb-js-composer js-comp-ver-6.10.0 vc_responsive elementor-default elementor-template-full-width elementor-kit-35 elementor-page elementor-page-30774">
    <!-- Cookie cms content start -->
    <div class="js-cookieBodyContent" hidden aria-hidden="true">
        We use cookies and similar technologies on our website to provide a better site experience. By continuing to
        browse www.alveoland.com.ph, you are giving consent to their use by us and our carefully selected third-party
        partners. Learn more about our <a class="cookie__link"
            href="https://prodcms.alveoland.com.ph/privacy-policy/">Privacy Notice</a> here.

        &nbsp;

        &nbsp; </div>
    <!-- Cookie cms content end -->

    <div class="website-wrapper" id="all_wrapper">
        <div
            class="container main_wrapper  wide  has_header_type3   header_transparent  topbar_transparent  topbar_transparent   contentheader_center  cheader_center">

            <div
                class="master_header  wpestate-flex wpestate-flex-wrap wpestate-align-items-center wpestate-justify-content-md-between   wide   header_transparent  topbar_transparent  topbar_transparent   full_width_header">
                <div class="mobile_header mobile_header_sticky_no">
                    <div class="mobile-trigger"><i class="fas fa-bars"></i></div>
                    <div class="mobile-logo">
                        <a href="/">
                            <img class="img-responsive retina_ready" src="/app/themes/wpresidence/img/logo_mobile.png"
                                alt="image" /> </a>
                    </div>

                </div>

                <div
                    class="header_wrapper   no_user_submit  header_type3 header_center hover_type_3 header_alignment_text_center  no_property_submit">

                    <div class="header_wrapper_inside wpestate-flex wpestate-align-items-center wpestate-justify-content-between        full_width_header"
                        data-logo="/app/uploads/2023/04/Alveo-white-e1682887996202.png" data-sticky-logo="">
                        <div class="header-with-dropdown">
                            <a class="header-topbar-box navicon-button header_type3_navicon"
                                id="header_type3_trigger-custome" onclick="openNav()">
                                <img src="/app/themes/wpresidence-child/images/nav.png">
                            </a>
                            <!--Weglot 4.2.4-->
                            <aside data-wg-notranslate=""
                                class="country-selector weglot-dropdown close_outside_click closed weglot-shortcode wg-"
                                tabindex="0" aria-expanded="false" aria-label="Language selected: English"><input
                                    id="wg172664076066ea7278f3710168" class="weglot_choice" type="checkbox"
                                    name="menu" /><label data-l="en" tabindex="-1"
                                    for="wg172664076066ea7278f3710168"
                                    class="wgcurrent wg-li weglot-lang weglot-language weglot-flags flag-3 en"
                                    data-code-language="en" data-name-language="English"><span
                                        class="wglanguage-name">English</span></label>
                                <ul role="none">
                                    <li data-l="ja"
                                        class="wg-li weglot-lang weglot-language weglot-flags flag-3 ja"
                                        data-code-language="ja" role="option"><a
                                            title="Language switcher : Japanese" class="weglot-language-ja"
                                            role="option" data-wg-notranslate="" href="/ja/">日本語</a></li>
                                    <li data-l="zh"
                                        class="wg-li weglot-lang weglot-language weglot-flags flag-3 zh"
                                        data-code-language="zh" role="option"><a
                                            title="Language switcher : Simplified Chinese" class="weglot-language-zh"
                                            role="option" data-wg-notranslate="" href="/zh/">中文 (简体)</a></li>
                                </ul>
                            </aside>
                            <!-- <div class="form_container active">
                    <div class="navigation" data-listen="input">
                        <div class="nav-filter">
                            <i class="ic-global"></i><span class="js-filter-selected">ENGLISH</span><i class="ic-arrow-down"></i>
                        </div>
                        <div class="filter-container">
                            <ul class="nav-filter-list">
                                <li class="active" data-select-value="Sales Inquiry"><a href="#">Sales Inquiry</a></li>
                                <li class="" data-select-value="Leasing Inquiry"><a href="#">Leasing Inquiry</a></li>
                                <li class="" data-select-value="Careers Inquiry"><a href="#">Careers Inquiry</a></li>
                                <li class="" data-select-value="Other Feedback"><a href="#">Other Feedback</a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                        </div>

                        <div
                            class="logo header-topbar-box wpestate-flex wpestate-align-items-center  wpestate-align-self-center justify-content-center">
                            <a href="/"><img id="logo_image" style="margin-top:0px;"
                                    src="/app/uploads/2023/04/Alveo-white-e1682887996202.png"
                                    class="img-responsive retina_ready" alt="company logo" /></a>
                        </div>
                        <div class="header-topbar-box">
                            <div class="header-search-area">

                                <a href="/properties/">
                                    <img src="/app/themes/wpresidence-child/images/search.png">
                                    <span>Explore our properties</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div
                class="header_media  mobile_header_media_sticky_no header_mediatype_1 with_search_6 header_media_non_elementor">


            </div>

            <div class="pre_search_wrapper"></div>

            <div class="container content_wrapper">


                <div data-elementor-type="wp-page" data-elementor-id="30774" class="elementor elementor-30774">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-7a470a6f elementor-section-full_width elementor-section-height-min-height elementor-section-stretched elementor-section-items-bottom section-hero elementor-section-height-default"
                        data-id="7a470a6f" data-element_type="section"
                        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;\/app\/uploads\/2024\/05\/Alveo-Website-Homepage-1.mp4&quot;,&quot;background_play_on_mobile&quot;:&quot;yes&quot;}">
                        <div class="elementor-background-video-container">
                            <video class="elementor-background-video-hosted elementor-html5-video" autoplay muted
                                playsinline loop></video>
                        </div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-69fac589"
                                data-id="69fac589" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-321599ad elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="321599ad" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-56cf707d"
                                                data-id="56cf707d" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-4b3bde6b elementor-widget elementor-widget-heading"
                                                        data-id="4b3bde6b" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                <h2 class="elementor-heading-title elementor-size-default"
                                                                    style="white-space-collapse: collapse;">ALVEO LAND
                                                                </h2>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-2bde6d45 elementor-widget__width-inherit elementor-widget elementor-widget-text-editor"
                                                        data-id="2bde6d45" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>live well all Across the <span
                                                                    style="letter-spacing: 1.6px;">PHILIPPINES</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-3a01fc8 elementor-widget elementor-widget-html"
                                                        data-id="3a01fc8" data-element_type="widget"
                                                        data-widget_type="html.default">
                                                        <div class="elementor-widget-container">
                                                            <div id="js-searchMobileModalWrapper"
                                                                class="c-search-home">
                                                                <div class="o-input--inline">
                                                                    <input type="text" id="js-homeSearchField"
                                                                        name="search"
                                                                        placeholder="Search by property name or location" />
                                                                    <button id="js-homeSearchButton" class="o-button">
                                                                        <span>Search</span>
                                                                        <img decoding="async"
                                                                            src="/app/uploads/2023/07/icon-long-white-arrow.svg" />
                                                                    </button>
                                                                </div>
                                                                <div id="js-searchMobileModal"
                                                                    class="o-search-dropdown">
                                                                    <div class="o-col" id="js-homeSearchNoResult">
                                                                        <h2 class="subtitle">No results found.</h2>
                                                                    </div>
                                                                    <div class="o-col">
                                                                        <h2 id="js-homeSearchPropertyHeading"
                                                                            class="title">Featured Properties</h2>
                                                                        <div
                                                                            class="js-searchProperties c-search-result">
                                                                        </div>
                                                                    </div>
                                                                    <div class="js-searchLocationSection o-col">
                                                                        <h2 class="title">Location</h2>
                                                                        <ul class="js-searchLocation c-location-cards">
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <script>
                                                                let search = document.getElementById("js-homeSearchField");
                                                                let searchButton = document.getElementById("js-homeSearchButton");
                                                                let propertyHeading = document.getElementById("js-homeSearchPropertyHeading");
                                                                if (search) {
                                                                    function searchPlaceholder() {
                                                                        if (screen.width < 768) {
                                                                            search.placeholder = "Search";
                                                                        }
                                                                    }

                                                                    searchPlaceholder();

                                                                    window.addEventListener("resize", function() {
                                                                        searchPlaceholder();
                                                                    });
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-49c3a31 elementor-section-full_width elementor-hidden-desktop elementor-section-height-default elementor-section-height-default"
                        data-id="49c3a31" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-80ffb6e"
                                data-id="80ffb6e" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-12e1eb5 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                        data-id="12e1eb5" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8ec2338"
                                                data-id="8ec2338" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-274232a elementor-widget elementor-widget-image"
                                                        data-id="274232a" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img fetchpriority="high" decoding="async" width="1024"
                                                                height="576"
                                                                src="/app/uploads/2023/08/BGC-1024x576.jpg"
                                                                class="attachment-large size-large wp-image-35987"
                                                                alt=""
                                                                srcset="/app/uploads/2023/08/BGC-1024x576.jpg 1024w, /app/uploads/2023/08/BGC-300x169.jpg 300w, /app/uploads/2023/08/BGC-768x432.jpg 768w, /app/uploads/2023/08/BGC-1536x864.jpg 1536w, /app/uploads/2023/08/BGC-255x143.jpg 255w, /app/uploads/2023/08/BGC-1110x623.jpg 1110w, /app/uploads/2023/08/BGC.jpg 1920w"
                                                                sizes="(max-width: 1024px) 100vw, 1024px" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e2910b3"
                                                data-id="e2910b3" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-520849f elementor-widget elementor-widget-image"
                                                        data-id="520849f" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img decoding="async" width="677" height="691"
                                                                src="/app/uploads/2023/06/jumpstory-download20230523-103830-1.jpg"
                                                                class="attachment-large size-large wp-image-32704"
                                                                alt=""
                                                                srcset="/app/uploads/2023/06/jumpstory-download20230523-103830-1.jpg 677w, /app/uploads/2023/06/jumpstory-download20230523-103830-1-294x300.jpg 294w, /app/uploads/2023/06/jumpstory-download20230523-103830-1-45x45.jpg 45w, /app/uploads/2023/06/jumpstory-download20230523-103830-1-36x36.jpg 36w"
                                                                sizes="(max-width: 677px) 100vw, 677px" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-fe4594d"
                                                data-id="fe4594d" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-1b7472c elementor-widget elementor-widget-image"
                                                        data-id="1b7472c" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img decoding="async" width="214" height="52"
                                                                src="/app/uploads/2023/04/Alveo-white-e1682887996202.png"
                                                                class="attachment-large size-large wp-image-30945"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-5fedcf9 elementor-widget elementor-widget-text-editor"
                                                        data-id="5fedcf9" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <span
                                                                style="white-space: pre-wrap; text-transform: uppercase;">One
                                                                of the Philippines’ leading
                                                                Real estate
                                                                Developers</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="elementor-element elementor-element-e1deb40 elementor-widget elementor-widget-spacer"
                                        data-id="e1deb40" data-element_type="widget"
                                        data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-66d3945 elementor-section-full_width elementor-hidden-desktop elementor-section-height-default elementor-section-height-default"
                        data-id="66d3945" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-744703a"
                                data-id="744703a" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-7581da4 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                        data-id="7581da4" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a83ecff"
                                                data-id="a83ecff" data-element_type="column">
                                                <div class="elementor-widget-wrap">
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8b5ddb7"
                                                data-id="8b5ddb7" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-4c629d1 elementor-widget__width-inherit elementor-widget elementor-widget-text-editor"
                                                        data-id="4c629d1" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <div style="text-transform: uppercase;">
                                                                <p style="text-align: left;">Explore Alveo’s</p>
                                                                <p style="text-align: left;">Portfolio</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-1963e20 elementor-mobile-align-right elementor-widget elementor-widget-button"
                                                        data-id="1963e20" data-element_type="widget"
                                                        data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a href="/properties/"
                                                                    class="elementor-button-link elementor-button elementor-size-sm"
                                                                    role="button">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span
                                                                            class="elementor-button-icon elementor-align-icon-right">
                                                                            <?xml version="1.0" encoding="UTF-8"?>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="21" height="12"
                                                                                viewbox="0 0 21 12" fill="none">
                                                                                <path
                                                                                    d="M14.7335 0.912842L19.8202 5.99958L14.7335 11.0863"
                                                                                    stroke="white"
                                                                                    stroke-width="1.16825"></path>
                                                                                <path d="M0.347443 5.99951H19.8182"
                                                                                    stroke="white"
                                                                                    stroke-width="1.16825"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <span class="elementor-button-text">View all
                                                                            properties</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-db9d14b elementor-hidden-mobile elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="db9d14b" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-75edce2"
                                data-id="75edce2" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-016e647 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="016e647" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0a6b791"
                                                data-id="0a6b791" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-7fb26f3 elementor-widget elementor-widget-image"
                                                        data-id="7fb26f3" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img loading="lazy" decoding="async" width="1024"
                                                                height="649"
                                                                src="/app/uploads/2024/03/HQ-1-1-1024x649.png"
                                                                class="attachment-large size-large wp-image-39892"
                                                                alt=""
                                                                srcset="/app/uploads/2024/03/HQ-1-1-1024x649.png 1024w, /app/uploads/2024/03/HQ-1-1-300x190.png 300w, /app/uploads/2024/03/HQ-1-1-768x487.png 768w, /app/uploads/2024/03/HQ-1-1-1536x974.png 1536w, /app/uploads/2024/03/HQ-1-1-2048x1299.png 2048w"
                                                                sizes="(max-width: 1024px) 100vw, 1024px" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e6d6a8f"
                                                data-id="e6d6a8f" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-d2cc142 elementor-widget elementor-widget-image"
                                                        data-id="d2cc142" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img loading="lazy" decoding="async" width="214"
                                                                height="52"
                                                                src="/app/uploads/2023/04/Alveo-white-e1682887996202.png"
                                                                class="attachment-post-thumbnail size-post-thumbnail wp-image-30945"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-202de22 elementor-widget elementor-widget-text-editor"
                                                        data-id="202de22" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p><span
                                                                    style="white-space: pre-wrap; text-transform: uppercase;">One
                                                                    of the </span></p>
                                                            <p><span
                                                                    style="white-space: pre-wrap; text-transform: uppercase;">Philippines’
                                                                </span></p>
                                                            <p><span
                                                                    style="white-space: pre-wrap; text-transform: uppercase;">l</span><span
                                                                    style="letter-spacing: 1.6px; text-transform: uppercase; white-space-collapse: preserve;">eading
                                                                </span><span
                                                                    style="text-transform: uppercase; white-space-collapse: preserve; letter-spacing: 1.6px;">Real
                                                                    estate DeveloperS</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-ef6bca5 elementor-hidden-mobile explore-section elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="ef6bca5" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a8d8a0d"
                                data-id="a8d8a0d" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-39cce27 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="39cce27" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-675ceb5"
                                                data-id="675ceb5" data-element_type="column">
                                                <div class="elementor-widget-wrap">
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5896739"
                                                data-id="5896739" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-0dd4894 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                                                        data-id="0dd4894" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <div style="text-transform: uppercase;">
                                                                <p style="text-align: left;">Explore</p>
                                                                <p style="text-align: left;">Alveo’s</p>
                                                                <p style="text-align: left;">Portfolio</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-ed84e9e elementor-view-default elementor-widget elementor-widget-icon"
                                                        data-id="ed84e9e" data-element_type="widget"
                                                        data-widget_type="icon.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-wrapper">
                                                                <a class="elementor-icon" href="/properties/">
                                                                    <?xml version="1.0" encoding="UTF-8"?>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="54" height="11"
                                                                        viewbox="0 0 54 11" fill="none">
                                                                        <g clip-path="url(#clip0_1595_179021)">
                                                                            <g clip-path="url(#clip1_1595_179021)">
                                                                                <path
                                                                                    d="M47.3857 0.412842L52.4725 5.49958L47.3857 10.5863"
                                                                                    stroke="white"
                                                                                    stroke-width="1.16825"></path>
                                                                                <path d="M-10.3037 5.49951H52.47"
                                                                                    stroke="white"
                                                                                    stroke-width="1.16825"></path>
                                                                            </g>
                                                                        </g>
                                                                        <defs>
                                                                            <clippath id="clip0_1595_179021">
                                                                                <rect width="54" height="11"
                                                                                    fill="white"></rect>
                                                                            </clippath>
                                                                            <clippath id="clip1_1595_179021">
                                                                                <rect width="65" height="11"
                                                                                    fill="white"
                                                                                    transform="translate(-11)"></rect>
                                                                            </clippath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0834617"
                                                data-id="0834617" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-3a48358 explore-down-image elementor-widget elementor-widget-image"
                                                        data-id="3a48358" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img decoding="async" width="677" height="691"
                                                                src="/app/uploads/2023/06/jumpstory-download20230523-103830-1.jpg"
                                                                class="attachment-large size-large wp-image-32704"
                                                                alt=""
                                                                srcset="/app/uploads/2023/06/jumpstory-download20230523-103830-1.jpg 677w, /app/uploads/2023/06/jumpstory-download20230523-103830-1-294x300.jpg 294w, /app/uploads/2023/06/jumpstory-download20230523-103830-1-45x45.jpg 45w, /app/uploads/2023/06/jumpstory-download20230523-103830-1-36x36.jpg 36w"
                                                                sizes="(max-width: 677px) 100vw, 677px" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="elementor-element elementor-element-c08d090 elementor-widget elementor-widget-spacer"
                                        data-id="c08d090" data-element_type="widget"
                                        data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-21f1ea6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="21f1ea6" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4bc3810"
                                data-id="4bc3810" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-411045e elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                        data-id="411045e" data-element_type="widget"
                                        data-widget_type="divider.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-divider">
                                                <span class="elementor-divider-separator">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6a18220 elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                        data-id="6a18220" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">FEATURED
                                                PROPERTIES</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-3cd8a07 elementor-section-full_width featured_properties_wrapper elementor-section-height-default elementor-section-height-default"
                        data-id="3cd8a07" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bde5357"
                                data-id="bde5357" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-b75ce85 elementor-widget elementor-widget-WpResidence_Property_Slider_v2"
                                        data-id="b75ce85" data-element_type="widget"
                                        data-widget_type="WpResidence_Property_Slider_v2.default">
                                        <div class="elementor-widget-container">
                                            <div class="c-featured-properties">
                                                <button class="o-arrow-icon js-featuredPropertiesNext">
                                                    <svg class="o-arrow-icon__svg" xmlns="http://www.w3.org/2000/svg"
                                                        width="21" height="12" viewbox="0 0 21 12"
                                                        fill="none">
                                                        <path
                                                            d="M14.9136 0.91333L20.0003 6.00007L14.9136 11.0868M0.724609 6.00005H19.9983"
                                                            stroke="#fff" stroke-width="1.16825" />
                                                    </svg>
                                                </button>
                                                <div class="owl-carousel owl-theme property_slider_carousel_elementor_v2 slider_orientation_no"
                                                    id="property_slider_carousel_elementor_v2_69110" data-rtl="no"
                                                    data-auto="0">

                                                    <div class="featured_peropert_box">
                                                        <img decoding="async" class="featured_peropert_box_img"
                                                            src="/app/uploads/2017/12/ASTELA-10-835x467.jpg"
                                                            loading="lazy">
                                                        <div class="featured_peropert_box_title">
                                                            <h5>
                                                                Astela at Circuit Makati </h5>
                                                        </div>
                                                        <p class="featured_peropert_box_city">
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/map_pointer.png">
                                                            <span>Makati</span>
                                                        </p>
                                                        <p class="featured_peropert_box_meta">
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/building.png">
                                                            <span>
                                                                Condos </span>
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/tag.png">
                                                            <span>
                                                                Pre-selling </span>
                                                        </p>
                                                        <span class="similar-properties__view-more">
                                                            view more
                                                            <svg width="21" height="20" viewbox="0 0 21 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.9136 4.91309L20.0003 9.99983L14.9136 15.0865M0.724609 9.99981H19.9983"
                                                                    stroke="#006895" stroke-width="1.16825" />
                                                            </svg>
                                                        </span>
                                                        <a href="/properties/condos/makati/astela/"
                                                            class="featured_peropert_box_read_more">
                                                        </a>
                                                    </div>
                                                    <div class="featured_peropert_box">
                                                        <img decoding="async" class="featured_peropert_box_img"
                                                            src="/app/uploads/2023/12/Patio-Suites-Abreeza-835x467.png"
                                                            loading="lazy">
                                                        <div class="featured_peropert_box_title">
                                                            <h5>
                                                                Patio Suites Abreeza </h5>
                                                        </div>
                                                        <p class="featured_peropert_box_city">
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/map_pointer.png">
                                                            <span>Davao</span>
                                                        </p>
                                                        <p class="featured_peropert_box_meta">
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/building.png">
                                                            <span>
                                                                Condos </span>
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/tag.png">
                                                            <span>
                                                                Pre-selling </span>
                                                        </p>
                                                        <span class="similar-properties__view-more">
                                                            view more
                                                            <svg width="21" height="20" viewbox="0 0 21 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.9136 4.91309L20.0003 9.99983L14.9136 15.0865M0.724609 9.99981H19.9983"
                                                                    stroke="#006895" stroke-width="1.16825" />
                                                            </svg>
                                                        </span>
                                                        <a href="/properties/condos/davao/patio-suites/"
                                                            class="featured_peropert_box_read_more">
                                                        </a>
                                                    </div>
                                                    <div class="featured_peropert_box">
                                                        <img decoding="async" class="featured_peropert_box_img"
                                                            src="/app/uploads/2023/11/AVEIA-Clubhouse-835x467.jpg"
                                                            loading="lazy">
                                                        <div class="featured_peropert_box_title">
                                                            <h5>
                                                                Aveia Broadfield </h5>
                                                        </div>
                                                        <p class="featured_peropert_box_city">
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/map_pointer.png">
                                                            <span>Laguna</span>
                                                        </p>
                                                        <p class="featured_peropert_box_meta">
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/building.png">
                                                            <span>
                                                                Residential Lots </span>
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/tag.png">
                                                            <span>
                                                                Ready for Turnover </span>
                                                        </p>
                                                        <span class="similar-properties__view-more">
                                                            view more
                                                            <svg width="21" height="20" viewbox="0 0 21 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.9136 4.91309L20.0003 9.99983L14.9136 15.0865M0.724609 9.99981H19.9983"
                                                                    stroke="#006895" stroke-width="1.16825" />
                                                            </svg>
                                                        </span>
                                                        <a href="/properties/residential-lots/laguna/aveia/"
                                                            class="featured_peropert_box_read_more">
                                                        </a>
                                                    </div>
                                                    <div class="featured_peropert_box">
                                                        <img decoding="async" class="featured_peropert_box_img"
                                                            src="/app/uploads/2023/12/PARK-TRIANGLE-CORPORATE-PLAZA-835x467.jpg"
                                                            loading="lazy">
                                                        <div class="featured_peropert_box_title">
                                                            <h5>
                                                                Park Triangle Corporate Plaza </h5>
                                                        </div>
                                                        <p class="featured_peropert_box_city">
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/map_pointer.png">
                                                            <span>Taguig</span>
                                                        </p>
                                                        <p class="featured_peropert_box_meta">
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/building.png">
                                                            <span>
                                                                Offices </span>
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/tag.png">
                                                            <span>
                                                                Sold Out </span>
                                                        </p>
                                                        <span class="similar-properties__view-more">
                                                            view more
                                                            <svg width="21" height="20" viewbox="0 0 21 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.9136 4.91309L20.0003 9.99983L14.9136 15.0865M0.724609 9.99981H19.9983"
                                                                    stroke="#006895" stroke-width="1.16825" />
                                                            </svg>
                                                        </span>
                                                        <a href="/properties/offices/taguig/park-triangle-corporate-plaza/"
                                                            class="featured_peropert_box_read_more">
                                                        </a>
                                                    </div>
                                                    <div class="featured_peropert_box">
                                                        <img decoding="async" class="featured_peropert_box_img"
                                                            src="/app/uploads/2024/09/Orean-Residences-Facade-Artists-PerspectiveVS-835x467.jpg"
                                                            loading="lazy">
                                                        <div class="featured_peropert_box_title">
                                                            <h5>
                                                                Orean Residences at Vertis North </h5>
                                                        </div>
                                                        <p class="featured_peropert_box_city">
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/map_pointer.png">
                                                            <span>Quezon City</span>
                                                        </p>
                                                        <p class="featured_peropert_box_meta">
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/building.png">
                                                            <span>
                                                                Condos </span>
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/tag.png">
                                                            <span>
                                                                Pre-selling </span>
                                                        </p>
                                                        <span class="similar-properties__view-more">
                                                            view more
                                                            <svg width="21" height="20" viewbox="0 0 21 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.9136 4.91309L20.0003 9.99983L14.9136 15.0865M0.724609 9.99981H19.9983"
                                                                    stroke="#006895" stroke-width="1.16825" />
                                                            </svg>
                                                        </span>
                                                        <a href="/properties/condos/quezon-city/orean-residences-at-vertis-north/"
                                                            class="featured_peropert_box_read_more">
                                                        </a>
                                                    </div>
                                                    <div class="featured_peropert_box">
                                                        <img decoding="async" class="featured_peropert_box_img"
                                                            src="/app/uploads/2023/12/GENTRY-CORPORATE-PLAZA-835x467.jpg"
                                                            loading="lazy">
                                                        <div class="featured_peropert_box_title">
                                                            <h5>
                                                                Gentry Corporate Plaza </h5>
                                                        </div>
                                                        <p class="featured_peropert_box_city">
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/map_pointer.png">
                                                            <span>Makati</span>
                                                        </p>
                                                        <p class="featured_peropert_box_meta">
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/building.png">
                                                            <span>
                                                                Offices </span>
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/tag.png">
                                                            <span>
                                                                Pre-selling </span>
                                                        </p>
                                                        <span class="similar-properties__view-more">
                                                            view more
                                                            <svg width="21" height="20" viewbox="0 0 21 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.9136 4.91309L20.0003 9.99983L14.9136 15.0865M0.724609 9.99981H19.9983"
                                                                    stroke="#006895" stroke-width="1.16825" />
                                                            </svg>
                                                        </span>
                                                        <a href="/properties/offices/makati/gentry-corporate-plaza/"
                                                            class="featured_peropert_box_read_more">
                                                        </a>
                                                    </div>
                                                    <div class="featured_peropert_box">
                                                        <img decoding="async" class="featured_peropert_box_img"
                                                            src="/app/uploads/2023/12/TRYNE-835x467.jpg"
                                                            loading="lazy">
                                                        <div class="featured_peropert_box_title">
                                                            <h5>
                                                                Tryne Enterprise Plaza at Arca South </h5>
                                                        </div>
                                                        <p class="featured_peropert_box_city">
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/map_pointer.png">
                                                            <span>Taguig</span>
                                                        </p>
                                                        <p class="featured_peropert_box_meta">
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/building.png">
                                                            <span>
                                                                Offices </span>
                                                            <img decoding="async"
                                                                src="/app/themes/wpresidence-child/images/tag.png">
                                                            <span>
                                                                Pre-selling </span>
                                                        </p>
                                                        <span class="similar-properties__view-more">
                                                            view more
                                                            <svg width="21" height="20" viewbox="0 0 21 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.9136 4.91309L20.0003 9.99983L14.9136 15.0865M0.724609 9.99981H19.9983"
                                                                    stroke="#006895" stroke-width="1.16825" />
                                                            </svg>
                                                        </span>
                                                        <a href="/properties/offices/taguig/tryne-enterprise-plaza/"
                                                            class="featured_peropert_box_read_more">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                                //<![CDATA[
                                                jQuery(document).ready(function() {
                                                    wpestate_property_slider_v2("property_slider_carousel_elementor_v2_69110", 7);
                                                });
                                                //]]&gt;
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-6a5841a about-alveo-section elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="6a5841a" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c7ca7be"
                                data-id="c7ca7be" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-e498a57 about-alveo-content elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="e498a57" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9b8d816"
                                                data-id="9b8d816" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-c61aca6 elementor-widget__width-inherit elementor-widget elementor-widget-heading"
                                                        data-id="c61aca6" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                ABOUT ALVEO Land</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-16ac674"
                                                data-id="16ac674" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-83d8f0d elementor-widget elementor-widget-text-editor"
                                                        data-id="83d8f0d" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>As Ayala Land&#8217;s upscale residential arm, Alveo
                                                                offers a vibrant portfolio of groundbreaking real estate
                                                                developments that provides upscale living and working
                                                                spaces within various thriving and emerging growth
                                                                centers around the country. </p>
                                                            <p> </p>
                                                            <p>Armed with sharper foresight, unparalleled excellence,
                                                                and total commitment, the company is committed to
                                                                providing thoughtfully-designed and master planned
                                                                living environments for the unique needs of its
                                                                discerning market. </p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-e95e92d elementor-align-right elementor-widget elementor-widget-button"
                                                        data-id="e95e92d" data-element_type="widget"
                                                        data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a href="/about-us"
                                                                    class="elementor-button-link elementor-button elementor-size-sm"
                                                                    role="button">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span
                                                                            class="elementor-button-icon elementor-align-icon-right">
                                                                            <?xml version="1.0" encoding="UTF-8"?>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="21" height="12"
                                                                                viewBox="0 0 21 12" fill="none">
                                                                                <path
                                                                                    d="M14.7335 0.912842L19.8202 5.99958L14.7335 11.0863"
                                                                                    stroke="white"
                                                                                    stroke-width="1.16825"></path>
                                                                                <path d="M0.347443 5.99951H19.8182"
                                                                                    stroke="white"
                                                                                    stroke-width="1.16825"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <span class="elementor-button-text">Read more
                                                                            about Alveo</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-00780e8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="00780e8" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4192145"
                                data-id="4192145" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-1601595 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                        data-id="1601595" data-element_type="widget"
                                        data-widget_type="divider.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-divider">
                                                <span class="elementor-divider-separator">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-1e4515e elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                        data-id="1e4515e" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">OUR LOCATIONS
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-331284f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                        data-id="331284f" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a553599"
                                data-id="a553599" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-44d9e62 elementor-widget elementor-widget-shortcode"
                                        data-id="44d9e62" data-element_type="widget"
                                        data-widget_type="shortcode.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-shortcode">
                                                <div class="location_map_and_cards"><button
                                                        class="o-arrow-icon js-customSwiperBtn"><svg
                                                            class="o-arrow-icon__svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="21"
                                                            height="12" viewBox="0 0 21 12" fill="none">
                                                            <path
                                                                d="M14.9136 0.91333L20.0003 6.00007L14.9136 11.0868M0.724609 6.00005H19.9983"
                                                                stroke="#fff" stroke-width="1.16825" />
                                                        </svg></button>
                                                    <div class="location_map">
                                                        <div class="js-icon-marker"
                                                            data-marker="/app/themes/wpresidence-child/src/images/icons/icon-marker.svg">
                                                        </div>
                                                        <div class="map" id="map"></div>
                                                    </div>
                                                    <div class="location_cards"><swiper-container
                                                            id="js-cardsLocation" init="false"
                                                            class="swiper swiper-container"><swiper-slide
                                                                class="swiper-slide" data-catcher-search="Batangas"
                                                                data-latitude="13.7565"
                                                                data-longitude="121.0583"><img decoding="async"
                                                                    src="/app/uploads/2023/12/South-Palmgrove-Guardhouse-Aerial-View.jpg"
                                                                    alt="" class="featured-image"
                                                                    loading="lazy">
                                                                <div class="content">
                                                                    <h3 class="content-title">Batangas</h3>
                                                                    <div class="content-details">
                                                                        <p>Batangas City is classified as one of the
                                                                            fastest urbanizing cities of the
                                                                            Philippines, and...</p>
                                                                    </div><a href="/locations/batangas/"
                                                                        class="content-link">Read More<img
                                                                            decoding="async"
                                                                            src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                            alt="long arrow icon"></a>
                                                                </div>
                                                            </swiper-slide><swiper-slide class="swiper-slide"
                                                                data-catcher-search="Cagayan de Oro"
                                                                data-latitude="8.4803"
                                                                data-longitude="124.6498"><img decoding="async"
                                                                    src="/app/uploads/2023/12/Bayview-Heights-Aerial-View.jpg"
                                                                    alt="" class="featured-image"
                                                                    loading="lazy">
                                                                <div class="content">
                                                                    <h3 class="content-title">Cagayan de Oro</h3>
                                                                    <div class="content-details">
                                                                        <p>A thriving urban center that highlights
                                                                            commerce and community, Cagayan de Oro is
                                                                            hailed as...</p>
                                                                    </div><a href="/locations/cagayan-de-oro/"
                                                                        class="content-link">Read More<img
                                                                            decoding="async"
                                                                            src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                            alt="long arrow icon"></a>
                                                                </div>
                                                            </swiper-slide><swiper-slide class="swiper-slide"
                                                                data-catcher-search="Cavite" data-latitude="14.4791"
                                                                data-longitude="120.8970"><img decoding="async"
                                                                    src="/app/uploads/2023/12/Southmont-Whole-Development-Area-Day-Aerial-View.jpg"
                                                                    alt="" class="featured-image"
                                                                    loading="lazy">
                                                                <div class="content">
                                                                    <h3 class="content-title">Cavite</h3>
                                                                    <div class="content-details">
                                                                        <p>Regarded as a place with a rich and colorful
                                                                            past, Cavite is a province located...</p>
                                                                    </div><a href="/locations/cavite/"
                                                                        class="content-link">Read More<img
                                                                            decoding="async"
                                                                            src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                            alt="long arrow icon"></a>
                                                                </div>
                                                            </swiper-slide><swiper-slide class="swiper-slide"
                                                                data-catcher-search="Cebu" data-latitude="10.3157"
                                                                data-longitude="123.8854"><img decoding="async"
                                                                    src="/app/uploads/2023/12/Cebu-Business-Park-Aerial-View.jpg"
                                                                    alt="" class="featured-image"
                                                                    loading="lazy">
                                                                <div class="content">
                                                                    <h3 class="content-title">Cebu</h3>
                                                                    <div class="content-details">
                                                                        <p>Offering both bustling city and idyllic
                                                                            island atmospheres, Cebu City is the major
                                                                            economic and...</p>
                                                                    </div><a href="/locations/cebu/"
                                                                        class="content-link">Read More<img
                                                                            decoding="async"
                                                                            src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                            alt="long arrow icon"></a>
                                                                </div>
                                                            </swiper-slide><swiper-slide class="swiper-slide"
                                                                data-catcher-search="Davao" data-latitude="7.0736"
                                                                data-longitude="125.6110"><img decoding="async"
                                                                    src="/app/uploads/2023/12/Patio-Suites-Whole-Development-Area-Aerial-View.jpg"
                                                                    alt="" class="featured-image"
                                                                    loading="lazy">
                                                                <div class="content">
                                                                    <h3 class="content-title">Davao</h3>
                                                                    <div class="content-details">
                                                                        <p>An ideal quality of life is possible in one
                                                                            of the country’s safest, progressive, and...
                                                                        </p>
                                                                    </div><a href="/locations/davao/"
                                                                        class="content-link">Read More<img
                                                                            decoding="async"
                                                                            src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                            alt="long arrow icon"></a>
                                                                </div>
                                                            </swiper-slide><swiper-slide class="swiper-slide"
                                                                data-catcher-search="Laguna" data-latitude="14.1407"
                                                                data-longitude="121.4692"><img decoding="async"
                                                                    src="/app/uploads/2023/12/Nuvali-Lakeside-Evozone-Aerial-View.jpg"
                                                                    alt="" class="featured-image"
                                                                    loading="lazy">
                                                                <div class="content">
                                                                    <h3 class="content-title">Laguna</h3>
                                                                    <div class="content-details">
                                                                        <p>Laguna offers a reprieve from the hustle and
                                                                            bustle of the metro while remaining
                                                                            connected...</p>
                                                                    </div><a href="/locations/laguna/"
                                                                        class="content-link">Read More<img
                                                                            decoding="async"
                                                                            src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                            alt="long arrow icon"></a>
                                                                </div>
                                                            </swiper-slide><swiper-slide class="swiper-slide"
                                                                data-catcher-search="Las Piñas-Alabang"
                                                                data-latitude="14.438951513367687"
                                                                data-longitude="120.98721077685528"><img
                                                                    decoding="async"
                                                                    src="/app/uploads/2023/06/Cerca-Whole-Development-Plan.jpg"
                                                                    alt="" class="featured-image"
                                                                    loading="lazy">
                                                                <div class="content">
                                                                    <h3 class="content-title">Las Piñas-Alabang</h3>
                                                                    <div class="content-details">
                                                                        <p>A hub for business and leisure south of the
                                                                            Metro, Alabang is home to thriving...</p>
                                                                    </div><a href="/locations/alabang/"
                                                                        class="content-link">Read More<img
                                                                            decoding="async"
                                                                            src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                            alt="long arrow icon"></a>
                                                                </div>
                                                            </swiper-slide><swiper-slide class="swiper-slide"
                                                                data-catcher-search="Makati" data-latitude="14.5547"
                                                                data-longitude="121.0244"><img decoding="async"
                                                                    src="/app/uploads/2023/12/Makati-Skyline-1.jpg"
                                                                    alt="" class="featured-image"
                                                                    loading="lazy">
                                                                <div class="content">
                                                                    <h3 class="content-title">Makati</h3>
                                                                    <div class="content-details">
                                                                        <p>A key player in the country’s economic and
                                                                            cultural landscape, Makati is characterized
                                                                            by towering...</p>
                                                                    </div><a href="/locations/makati/"
                                                                        class="content-link">Read More<img
                                                                            decoding="async"
                                                                            src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                            alt="long arrow icon"></a>
                                                                </div>
                                                            </swiper-slide><swiper-slide class="swiper-slide"
                                                                data-catcher-search="Manila" data-latitude="14.5995"
                                                                data-longitude="120.9842"><img decoding="async"
                                                                    src="/app/uploads/2023/12/Celadon-Park-Building-Facade.png"
                                                                    alt="" class="featured-image"
                                                                    loading="lazy">
                                                                <div class="content">
                                                                    <h3 class="content-title">Manila</h3>
                                                                    <div class="content-details">
                                                                        <p>Manila, the country’s capital, stands as a
                                                                            multifaceted urban center that blends
                                                                            history and progress.</p>
                                                                    </div><a href="/locations/manila/"
                                                                        class="content-link">Read More<img
                                                                            decoding="async"
                                                                            src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                            alt="long arrow icon"></a>
                                                                </div>
                                                            </swiper-slide><swiper-slide class="swiper-slide"
                                                                data-catcher-search="Pampanga"
                                                                data-latitude="15.0794"
                                                                data-longitude="120.6200"><img decoding="async"
                                                                    src="/app/uploads/2023/12/Alviera-City-Center-Artists-Perspective-1.jpg"
                                                                    alt="" class="featured-image"
                                                                    loading="lazy">
                                                                <div class="content">
                                                                    <h3 class="content-title">Pampanga</h3>
                                                                    <div class="content-details">
                                                                        <p>Reflecting a dynamic blend of legacy and
                                                                            innovation, Pampanga is where progress and
                                                                            culture meet...</p>
                                                                    </div><a href="/locations/pampanga/"
                                                                        class="content-link">Read More<img
                                                                            decoding="async"
                                                                            src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                            alt="long arrow icon"></a>
                                                                </div>
                                                            </swiper-slide><swiper-slide class="swiper-slide"
                                                                data-catcher-search="Pasig" data-latitude="14.5764"
                                                                data-longitude="121.0851"><img decoding="async"
                                                                    src="/app/uploads/2023/12/Parklinks-Bridge-1.jpg"
                                                                    alt="" class="featured-image"
                                                                    loading="lazy">
                                                                <div class="content">
                                                                    <h3 class="content-title">Pasig</h3>
                                                                    <div class="content-details">
                                                                        <p>With a dynamic economy and a mix of
                                                                            residential and commercial areas, Pasig
                                                                            reflects the...</p>
                                                                    </div><a href="/locations/pasig/"
                                                                        class="content-link">Read More<img
                                                                            decoding="async"
                                                                            src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                            alt="long arrow icon"></a>
                                                                </div>
                                                            </swiper-slide><swiper-slide class="swiper-slide"
                                                                data-catcher-search="Quezon City"
                                                                data-latitude="14.6760"
                                                                data-longitude="121.0437"><img decoding="async"
                                                                    src="/app/uploads/2023/12/Vertis-North-View-from-Agham-Road-1.jpg"
                                                                    alt="" class="featured-image"
                                                                    loading="lazy">
                                                                <div class="content">
                                                                    <h3 class="content-title">Quezon City</h3>
                                                                    <div class="content-details">
                                                                        <p>Quezon City offers an unparalleled urban
                                                                            experience, upholding the vibrant lifestyles
                                                                            of its population in...</p>
                                                                    </div><a href="/locations/quezon-city/"
                                                                        class="content-link">Read More<img
                                                                            decoding="async"
                                                                            src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                            alt="long arrow icon"></a>
                                                                </div>
                                                            </swiper-slide><swiper-slide class="swiper-slide"
                                                                data-catcher-search="Taguig" data-latitude="14.5176"
                                                                data-longitude="121.0509"><img decoding="async"
                                                                    src="/app/uploads/2023/08/BGC.jpg"
                                                                    alt="" class="featured-image"
                                                                    loading="lazy">
                                                                <div class="content">
                                                                    <h3 class="content-title">Taguig</h3>
                                                                    <div class="content-details">
                                                                        <p>Taguig has cemented itself as the standard
                                                                            for modern and efficient world-class living,
                                                                            particularly through...</p>
                                                                    </div><a href="/locations/taguig/"
                                                                        class="content-link">Read More<img
                                                                            decoding="async"
                                                                            src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                            alt="long arrow icon"></a>
                                                                </div>
                                                            </swiper-slide></swiper-container></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-e782319 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="e782319" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ef9cbfd"
                                data-id="ef9cbfd" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-e293743 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                        data-id="e293743" data-element_type="widget"
                                        data-widget_type="divider.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-divider">
                                                <span class="elementor-divider-separator">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7126710 elementor-widget__width-auto elementor-widget elementor-widget-heading"
                                        data-id="7126710" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">FEATURED
                                                ARTICLES</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="elementor-element elementor-element-f04439b e-con-full e-flex e-con"
                        data-id="f04439b" data-element_type="container"
                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                        <div class="elementor-element elementor-element-7b0c718 elementor-widget elementor-widget-shortcode"
                            data-id="7b0c718" data-element_type="widget" data-widget_type="shortcode.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-shortcode">
                                    <div class="c-featured-article"><button
                                            class="o-arrow-icon js-featuredArticlesNext"><svg
                                                class="o-arrow-icon__svg" xmlns="http://www.w3.org/2000/svg"
                                                width="21" height="12" viewBox="0 0 21 12"
                                                fill="none">
                                                <path
                                                    d="M14.9136 0.91333L20.0003 6.00007L14.9136 11.0868M0.724609 6.00005H19.9983"
                                                    stroke="#fff" stroke-width="1.16825" />
                                            </svg></button>
                                        <div class="c-featured-article--holder"><swiper-container
                                                id="js-featuredArticle" init="false"
                                                class="swiper swiper-container"><swiper-slide class="swiper-slide">
                                                    <div
                                                        class="js-featured-article-card-hover c-featured-article--holder__card">
                                                        <div class="article-image">
                                                            <figure><img decoding="async"
                                                                    src="/app/uploads/2024/09/PPA-2024-Alveo.jpg"
                                                                    alt="" loading="lazy"></figure>
                                                        </div>
                                                        <div class="article-details">
                                                            <h3>ALVEO WINS IN 12TH ANNUAL PROPERTYGURU PHILIPPINE
                                                                PROPERTY AWARDS</h3><span><i
                                                                    class="ic ic-status"></i>Alveo News</span>
                                                        </div>
                                                        <div class="article-cta"><a
                                                                href="/alveo-news/alveo-wins-in-12th-annual-propertyguru-philippine-property-awards/"
                                                                class="content-link">Read More<img loading="lazy"
                                                                    decoding="async"
                                                                    src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                    alt="long arrow icon" width="21"
                                                                    height="21"></a></div>
                                                    </div>
                                                </swiper-slide><swiper-slide class="swiper-slide">
                                                    <div
                                                        class="js-featured-article-card-hover c-featured-article--holder__card">
                                                        <div class="article-image">
                                                            <figure><img decoding="async"
                                                                    src="/app/uploads/2024/08/Screenshot-2024-08-19-090807.png"
                                                                    alt="" loading="lazy"></figure>
                                                        </div>
                                                        <div class="article-details">
                                                            <h3>Vermosa inaugurates athlete’s house</h3><span><i
                                                                    class="ic ic-status"></i>Alveo News</span>
                                                        </div>
                                                        <div class="article-cta"><a
                                                                href="/commtalk-online/vermosa-inaugurates-athletes-house/"
                                                                class="content-link">Read More<img loading="lazy"
                                                                    decoding="async"
                                                                    src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                    alt="long arrow icon" width="21"
                                                                    height="21"></a></div>
                                                    </div>
                                                </swiper-slide><swiper-slide class="swiper-slide">
                                                    <div
                                                        class="js-featured-article-card-hover c-featured-article--holder__card">
                                                        <div class="article-image">
                                                            <figure><img decoding="async"
                                                                    src="/app/uploads/2024/08/PRC-Vermosa.jpg"
                                                                    alt="" loading="lazy"></figure>
                                                        </div>
                                                        <div class="article-details">
                                                            <h3>New PRC building to rise in Vermosa Estate</h3><span><i
                                                                    class="ic ic-status"></i>Alveo News</span>
                                                        </div>
                                                        <div class="article-cta"><a
                                                                href="/commtalk-online/new-prc-building-to-rise-in-vermosa-estate/"
                                                                class="content-link">Read More<img loading="lazy"
                                                                    decoding="async"
                                                                    src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                    alt="long arrow icon" width="21"
                                                                    height="21"></a></div>
                                                    </div>
                                                </swiper-slide><swiper-slide class="swiper-slide">
                                                    <div
                                                        class="js-featured-article-card-hover c-featured-article--holder__card">
                                                        <div class="article-image">
                                                            <figure><img decoding="async"
                                                                    src="/app/uploads/2024/04/SERENEO-Central-Park-scaled.jpg"
                                                                    alt="" loading="lazy"></figure>
                                                        </div>
                                                        <div class="article-details">
                                                            <h3>A vision for Living Well in the South: Alveo’s latest
                                                                portfolio in Laguna, Batangas, Cavite</h3><span><i
                                                                    class="ic ic-status"></i>Alveo News</span>
                                                        </div>
                                                        <div class="article-cta"><a
                                                                href="/commtalk-online/a-vision-for-living-well-in-the-south-alveos-latest-portfolio-in-laguna-batangas-cavite/"
                                                                class="content-link">Read More<img loading="lazy"
                                                                    decoding="async"
                                                                    src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                    alt="long arrow icon" width="21"
                                                                    height="21"></a></div>
                                                    </div>
                                                </swiper-slide><swiper-slide class="swiper-slide">
                                                    <div
                                                        class="js-featured-article-card-hover c-featured-article--holder__card">
                                                        <div class="article-image">
                                                            <figure><img decoding="async" src=""
                                                                    alt="" loading="lazy"></figure>
                                                        </div>
                                                        <div class="article-details">
                                                            <h3>Ayala Land income surges to P13B in H1</h3><span><i
                                                                    class="ic ic-status"></i>Alveo News</span>
                                                        </div>
                                                        <div class="article-cta"><a
                                                                href="/commtalk-online/ayala-land-income-surges-to-p13b-in-h1/"
                                                                class="content-link">Read More<img loading="lazy"
                                                                    decoding="async"
                                                                    src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                    alt="long arrow icon" width="21"
                                                                    height="21"></a></div>
                                                    </div>
                                                </swiper-slide><swiper-slide class="swiper-slide">
                                                    <div
                                                        class="js-featured-article-card-hover c-featured-article--holder__card">
                                                        <div class="article-image">
                                                            <figure><img decoding="async" src=""
                                                                    alt="" loading="lazy"></figure>
                                                        </div>
                                                        <div class="article-details">
                                                            <h3>Ayala Land income up 15% on robust residential sales
                                                            </h3><span><i class="ic ic-status"></i>Alveo News</span>
                                                        </div>
                                                        <div class="article-cta"><a
                                                                href="/commtalk-online/ayala-land-income-up-15-on-robust-residential-sales/"
                                                                class="content-link">Read More<img loading="lazy"
                                                                    decoding="async"
                                                                    src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                    alt="long arrow icon" width="21"
                                                                    height="21"></a></div>
                                                    </div>
                                                </swiper-slide><swiper-slide class="swiper-slide">
                                                    <div
                                                        class="js-featured-article-card-hover c-featured-article--holder__card">
                                                        <div class="article-image">
                                                            <figure><img decoding="async"
                                                                    src="/app/uploads/2023/12/PARKLINKS-Bridge-02-Artists-Perspective-1-scaled.jpg"
                                                                    alt="" loading="lazy"></figure>
                                                        </div>
                                                        <div class="article-details">
                                                            <h3>Leading the charge: 4 ways Ayala Land is innovating
                                                                sustainable development</h3><span><i
                                                                    class="ic ic-status"></i>Alveo News</span>
                                                        </div>
                                                        <div class="article-cta"><a
                                                                href="/commtalk-online/leading-the-charge-4-ways-ayala-land-is-innovating-sustainable-development/"
                                                                class="content-link">Read More<img loading="lazy"
                                                                    decoding="async"
                                                                    src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                    alt="long arrow icon" width="21"
                                                                    height="21"></a></div>
                                                    </div>
                                                </swiper-slide><swiper-slide class="swiper-slide">
                                                    <div
                                                        class="js-featured-article-card-hover c-featured-article--holder__card">
                                                        <div class="article-image">
                                                            <figure><img decoding="async"
                                                                    src="/app/uploads/2023/01/vermosa-ayala-estate-in-cavite.jpg"
                                                                    alt="" loading="lazy"></figure>
                                                        </div>
                                                        <div class="article-details">
                                                            <h3>Ayala Land: The master of mature real estate planning
                                                            </h3><span><i class="ic ic-status"></i>Alveo News</span>
                                                        </div>
                                                        <div class="article-cta"><a
                                                                href="/commtalk-online/ayala-land-the-master-of-mature-real-estate-planning/"
                                                                class="content-link">Read More<img loading="lazy"
                                                                    decoding="async"
                                                                    src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                    alt="long arrow icon" width="21"
                                                                    height="21"></a></div>
                                                    </div>
                                                </swiper-slide><swiper-slide class="swiper-slide">
                                                    <div
                                                        class="js-featured-article-card-hover c-featured-article--holder__card">
                                                        <div class="article-image">
                                                            <figure><img decoding="async"
                                                                    src="/app/uploads/2023/11/PARKLINKS-Bridge-Artists-Perspective-1-scaled.jpg"
                                                                    alt="" loading="lazy"></figure>
                                                        </div>
                                                        <div class="article-details">
                                                            <h3>7 ways Parklinks is redefining city life in Metro Manila
                                                            </h3><span><i class="ic ic-status"></i>Alveo News</span>
                                                        </div>
                                                        <div class="article-cta"><a
                                                                href="/commtalk-online/7-ways-parklinks-is-redefining-city-life-in-metro-manila/"
                                                                class="content-link">Read More<img loading="lazy"
                                                                    decoding="async"
                                                                    src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                    alt="long arrow icon" width="21"
                                                                    height="21"></a></div>
                                                    </div>
                                                </swiper-slide><swiper-slide class="swiper-slide">
                                                    <div
                                                        class="js-featured-article-card-hover c-featured-article--holder__card">
                                                        <div class="article-image">
                                                            <figure><img decoding="async"
                                                                    src="/app/uploads/2024/07/IPA-2024-Alveo-scaled.jpg"
                                                                    alt="" loading="lazy"></figure>
                                                        </div>
                                                        <div class="article-details">
                                                            <h3>Alveo's Park East Place Wins in the 2024-2025 Asia
                                                                Pacific Property Awards</h3><span><i
                                                                    class="ic ic-status"></i>Alveo News</span>
                                                        </div>
                                                        <div class="article-cta"><a
                                                                href="/commtalk-online/alveos-park-east-place-wins-in-the-2024-2025-asia-pacific-property-awards/"
                                                                class="content-link">Read More<img loading="lazy"
                                                                    decoding="async"
                                                                    src="/app/themes/wpresidence-child/src/images/icons/icon-long-arrow-blue.svg"
                                                                    alt="long arrow icon" width="21"
                                                                    height="21"></a></div>
                                                    </div>
                                                </swiper-slide></swiper-container></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-092ee63 elementor-section-full_width freatured_articles_wraper elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-section-height-default elementor-section-height-default"
                        data-id="092ee63" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a6466b3"
                                data-id="a6466b3" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-bdea357 elementor-widget elementor-widget-Wpresidence_Blog_Post_List"
                                        data-id="bdea357" data-element_type="widget"
                                        data-widget_type="Wpresidence_Blog_Post_List.default">
                                        <div class="elementor-widget-container">
                                            <div class="article_container  wpestate_latest_listings_sh bottom-post blogs_wrapper"
                                                data-category_ids="" data-number="4" data-row-number="4"
                                                data-card-version="0" data-sort-by="0"data-page="1">

                                                <div class="freatured_article_box">
                                                    <img decoding="async"
                                                        src="/app/uploads/2024/09/PPA-2024-Alveo-525x328.jpg"
                                                        loading="lazy">
                                                    <div class="freatured_article_box_item">
                                                        <div class="freatured_article_box_info">
                                                            <a class="read_more"
                                                                href="/alveo-news/alveo-wins-in-12th-annual-propertyguru-philippine-property-awards/">
                                                                <h4>
                                                                    ALVEO WINS IN 12TH ANNUAL PROPERTYGURU PHILI </h4>
                                                                <div>
                                                                    <img decoding="async"
                                                                        class="freatured_article_box_info_icon_tag"
                                                                        src="/app/themes/wpresidence-child/images/tag.png">
                                                                    <span>
                                                                        Alveo News </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <a class="freatured_article_box_read_more"
                                                            href="/alveo-news/alveo-wins-in-12th-annual-propertyguru-philippine-property-awards/">
                                                            Read more
                                                            <i class="ic ic-long-arrow"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="freatured_article_box">
                                                    <img decoding="async"
                                                        src="/app/uploads/2024/08/Screenshot-2024-08-19-090807-525x328.png"
                                                        loading="lazy">
                                                    <div class="freatured_article_box_item">
                                                        <div class="freatured_article_box_info">
                                                            <a class="read_more"
                                                                href="/commtalk-online/vermosa-inaugurates-athletes-house/">
                                                                <h4>
                                                                    Vermosa inaugurates athlete’s house </h4>
                                                                <div>
                                                                    <img decoding="async"
                                                                        class="freatured_article_box_info_icon_tag"
                                                                        src="/app/themes/wpresidence-child/images/tag.png">
                                                                    <span>
                                                                        Alveo News </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <a class="freatured_article_box_read_more"
                                                            href="/commtalk-online/vermosa-inaugurates-athletes-house/">
                                                            Read more
                                                            <i class="ic ic-long-arrow"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="freatured_article_box">
                                                    <img decoding="async"
                                                        src="/app/uploads/2024/08/PRC-Vermosa-525x328.jpg"
                                                        loading="lazy">
                                                    <div class="freatured_article_box_item">
                                                        <div class="freatured_article_box_info">
                                                            <a class="read_more"
                                                                href="/commtalk-online/new-prc-building-to-rise-in-vermosa-estate/">
                                                                <h4>
                                                                    New PRC building to rise in Vermosa Estate </h4>
                                                                <div>
                                                                    <img decoding="async"
                                                                        class="freatured_article_box_info_icon_tag"
                                                                        src="/app/themes/wpresidence-child/images/tag.png">
                                                                    <span>
                                                                        Alveo News </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <a class="freatured_article_box_read_more"
                                                            href="/commtalk-online/new-prc-building-to-rise-in-vermosa-estate/">
                                                            Read more
                                                            <i class="ic ic-long-arrow"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="freatured_article_box">
                                                    <img decoding="async"
                                                        src="/app/uploads/2024/04/SERENEO-Central-Park-525x328.jpg"
                                                        loading="lazy">
                                                    <div class="freatured_article_box_item">
                                                        <div class="freatured_article_box_info">
                                                            <a class="read_more"
                                                                href="/commtalk-online/a-vision-for-living-well-in-the-south-alveos-latest-portfolio-in-laguna-batangas-cavite/">
                                                                <h4>
                                                                    A vision for Living Well in the South: Alveo </h4>
                                                                <div>
                                                                    <img decoding="async"
                                                                        class="freatured_article_box_info_icon_tag"
                                                                        src="/app/themes/wpresidence-child/images/tag.png">
                                                                    <span>
                                                                        Alveo News </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <a class="freatured_article_box_read_more"
                                                            href="/commtalk-online/a-vision-for-living-well-in-the-south-alveos-latest-portfolio-in-laguna-batangas-cavite/">
                                                            Read more
                                                            <i class="ic ic-long-arrow"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="wpestate_listing_sh_loader">
                                                    <div class="new_prelader"></div>
                                                </div>
                                                <div class="listinglink-wrapper_sh_listings">
                                                    <span
                                                        class="wpresidence_button wpestate_item_list_sh blog_list_loader">
                                                        load articles </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-1823716 elementor-section-full_width elementor-hidden-desktop elementor-section-height-default elementor-section-height-default"
                        data-id="1823716" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c8ba033"
                                data-id="c8ba033" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-beae319 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                        data-id="beae319" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e60c872"
                                                data-id="e60c872" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-2b9cee1 elementor-widget__width-inherit elementor-widget elementor-widget-image"
                                                        data-id="2b9cee1" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img loading="lazy" decoding="async" width="1536"
                                                                height="1024"
                                                                src="/app/uploads/2023/08/AdobeStock_420575543-1536x1024.jpeg"
                                                                class="attachment-1536x1536 size-1536x1536 wp-image-35970"
                                                                alt=""
                                                                srcset="/app/uploads/2023/08/AdobeStock_420575543-1536x1024.jpeg 1536w, /app/uploads/2023/08/AdobeStock_420575543-300x200.jpeg 300w, /app/uploads/2023/08/AdobeStock_420575543-1024x683.jpeg 1024w, /app/uploads/2023/08/AdobeStock_420575543-768x512.jpeg 768w, /app/uploads/2023/08/AdobeStock_420575543-2048x1365.jpeg 2048w, /app/uploads/2023/08/AdobeStock_420575543-105x70.jpeg 105w"
                                                                sizes="(max-width: 1536px) 100vw, 1536px" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4a4039b"
                                                data-id="4a4039b" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-ad2d615 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                                                        data-id="ad2d615" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2
                                                                class="elementor-heading-title elementor-size-default">
                                                                Ready to buy your Alveo Property?</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-6630cca elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                                                        data-id="6630cca" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p><span style="font-size: 20px;">Allow us to walk you
                                                                    through what you need to know before choosing to
                                                                    invest with Alveo Land. </span></p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-a4701da elementor-widget elementor-widget-spacer"
                                                        data-id="a4701da" data-element_type="widget"
                                                        data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-3a05694 elementor-section-full_width elementor-hidden-desktop elementor-section-height-default elementor-section-height-default"
                        data-id="3a05694" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-eba76b2"
                                data-id="eba76b2" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-cc93c83 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                        data-id="cc93c83" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7002736"
                                                data-id="7002736" data-element_type="column">
                                                <div class="elementor-widget-wrap">
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9522e8b"
                                                data-id="9522e8b" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-1ec9e7f elementor-widget__width-inherit elementor-widget elementor-widget-text-editor"
                                                        data-id="1ec9e7f" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <div style="text-transform: uppercase;">
                                                                <p style="text-align: left;">Check our guide</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-dd38e0a elementor-mobile-align-right elementor-widget elementor-widget-button"
                                                        data-id="dd38e0a" data-element_type="widget"
                                                        data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a href="https://prodcms.alveoland.com.ph/buying-guide/"
                                                                    class="elementor-button-link elementor-button elementor-size-sm"
                                                                    role="button">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span
                                                                            class="elementor-button-icon elementor-align-icon-right">
                                                                            <?xml version="1.0" encoding="UTF-8"?>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="21" height="12"
                                                                                viewBox="0 0 21 12" fill="none">
                                                                                <path
                                                                                    d="M14.7335 0.912842L19.8202 5.99958L14.7335 11.0863"
                                                                                    stroke="white"
                                                                                    stroke-width="1.16825"></path>
                                                                                <path d="M0.347443 5.99951H19.8182"
                                                                                    stroke="white"
                                                                                    stroke-width="1.16825"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <span class="elementor-button-text">read
                                                                            more</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-4f9f306 elementor-section-full_width elementor-hidden-mobile elementor-hidden-tablet elementor-section-height-default elementor-section-height-default"
                        data-id="4f9f306" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5e4b0e0"
                                data-id="5e4b0e0" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-ec131ff elementor-section-full_width alveo-property elementor-section-height-default elementor-section-height-default"
                                        data-id="ec131ff" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2293c26 alveo-property--left"
                                                data-id="2293c26" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-3efd07c elementor-widget__width-initial elementor-widget elementor-widget-heading"
                                                        data-id="3efd07c" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2
                                                                class="elementor-heading-title elementor-size-default">
                                                                READY TO BUY YOUR ALVEO PROPERTY?</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-0ea433b elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                                                        data-id="0ea433b" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>Allow us to walk you through what you need to know before
                                                                choosing to invest with Alveo Land. </p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-ef81334 elementor-align-left elementor-widget__width-initial elementor-widget elementor-widget-button"
                                                        data-id="ef81334" data-element_type="widget"
                                                        data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a href="/buying-guide/"
                                                                    class="elementor-button-link elementor-button elementor-size-md"
                                                                    role="button">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span class="elementor-button-text">Check our
                                                                            guide</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0cdbafd alveo-property--right"
                                                data-id="0cdbafd" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-92f8fce elementor-widget__width-inherit elementor-widget elementor-widget-image"
                                                        data-id="92f8fce" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img loading="lazy" decoding="async" width="1536"
                                                                height="1024"
                                                                src="/app/uploads/2023/08/AdobeStock_420575543-1536x1024.jpeg"
                                                                class="attachment-1536x1536 size-1536x1536 wp-image-35970"
                                                                alt=""
                                                                srcset="/app/uploads/2023/08/AdobeStock_420575543-1536x1024.jpeg 1536w, /app/uploads/2023/08/AdobeStock_420575543-300x200.jpeg 300w, /app/uploads/2023/08/AdobeStock_420575543-1024x683.jpeg 1024w, /app/uploads/2023/08/AdobeStock_420575543-768x512.jpeg 768w, /app/uploads/2023/08/AdobeStock_420575543-2048x1365.jpeg 2048w, /app/uploads/2023/08/AdobeStock_420575543-105x70.jpeg 105w"
                                                                sizes="(max-width: 1536px) 100vw, 1536px" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-7a698cab elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="7a698cab" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e49bd80"
                                data-id="e49bd80" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-23a43b07 elementor-widget elementor-widget-image"
                                        data-id="23a43b07" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="2560" height="1707"
                                                src="/app/uploads/2023/08/jumpstory-download20230523-144438-scaled.jpg"
                                                class="attachment-full size-full wp-image-35771" alt="Subscribe"
                                                srcset="/app/uploads/2023/08/jumpstory-download20230523-144438-scaled.jpg 2560w, /app/uploads/2023/08/jumpstory-download20230523-144438-300x200.jpg 300w, /app/uploads/2023/08/jumpstory-download20230523-144438-1024x683.jpg 1024w, /app/uploads/2023/08/jumpstory-download20230523-144438-768x512.jpg 768w, /app/uploads/2023/08/jumpstory-download20230523-144438-1536x1024.jpg 1536w, /app/uploads/2023/08/jumpstory-download20230523-144438-2048x1365.jpg 2048w, /app/uploads/2023/08/jumpstory-download20230523-144438-105x70.jpg 105w"
                                                sizes="(max-width: 2560px) 100vw, 2560px" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2ddfdb8b"
                                data-id="2ddfdb8b" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-6bbad681 elementor-section-full_width elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-section-height-default elementor-section-height-default"
                                        data-id="6bbad681" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4ac8b297"
                                                data-id="4ac8b297" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-4d64953c elementor-widget elementor-widget-heading"
                                                        data-id="4d64953c" data-element_type="widget"
                                                        id="js-newsletterSubscribeHeading"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2
                                                                class="elementor-heading-title elementor-size-default">
                                                                Subscribe to our
                                                                e-newsletter</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-6f6fb871 elementor-widget elementor-widget-heading"
                                                        data-id="6f6fb871" data-element_type="widget"
                                                        id="js-newsletterThankYouHeading"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2
                                                                class="elementor-heading-title elementor-size-default">
                                                                Thank you for subscribing to our newsletter</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-7c4b46ef elementor-widget elementor-widget-heading"
                                                        data-id="7c4b46ef" data-element_type="widget"
                                                        id="js-newsletterDesc" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <p class="elementor-heading-title elementor-size-default">
                                                                Receive exclusive email updates <br>on Alveo’s latest
                                                                developments.</p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-45a71887 elementor-widget elementor-widget-html"
                                                        data-id="45a71887" data-element_type="widget"
                                                        data-widget_type="html.default">
                                                        <div class="elementor-widget-container">
                                                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                                                            <script>
                                                                hbspt.forms.create({
                                                                    region: "na1",
                                                                    portalId: "3384752",
                                                                    formId: "d738f1fc-84f3-43cc-8724-679f3f8ab9e1",
                                                                    cssClass: "make-form-hubspot newsletter-custom",
                                                                    css: "",
                                                                    onFormSubmitted: () => {
                                                                        let _subscribeHeading = document.getElementById('js-newsletterSubscribeHeading');
                                                                        let _thankyouHeading = document.getElementById('js-newsletterThankYouHeading');
                                                                        let _subscribeDesc = document.getElementById('js-newsletterDesc');
                                                                        let _thankyouDesc = document.getElementById('js-newsletterThankYouDesc');

                                                                        _subscribeHeading.style.display = 'none';
                                                                        _subscribeDesc.style.display = 'none';

                                                                        _thankyouHeading.style.display = 'block';
                                                                        _thankyouDesc.style.display = 'block';
                                                                    }
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-139fb062 elementor-widget elementor-widget-heading"
                                                        data-id="139fb062" data-element_type="widget"
                                                        id="js-newsletterThankYouDesc"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <p class="elementor-heading-title elementor-size-default">
                                                                You will now receive exclusive email updates on Alveo’s
                                                                latest developments.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div><!-- end content_wrapper started in header -->

        </div> <!-- end class container -->
        <footer id="colophon" class="  footer_back_repeat_no  ">


            <div id="footer-widget-area" class="row ">

                <div id="first" class="widget-area col-md-4 ">
                    <ul class="xoxo">
                        <li id="block-14" class="widget-container widget_block widget_media_image">
                            <figure class="wp-block-image size-medium is-resized"><a
                                    href="https://qa.alveoland.com.ph/"><img loading="lazy" decoding="async"
                                        src="https://dev.alveo.make.technology/app/uploads/2023/09/alveo-logo-white-small-300x155.png"
                                        alt="" class="wp-image-36485" style="width:225px;height:116px"
                                        width="225" height="116"
                                        srcset="/app/uploads/2023/09/alveo-logo-white-small-300x155.png 300w, /app/uploads/2023/09/alveo-logo-white-small-1024x529.png 1024w, /app/uploads/2023/09/alveo-logo-white-small-768x396.png 768w, /app/uploads/2023/09/alveo-logo-white-small.png 1488w"
                                        sizes="(max-width: 225px) 100vw, 225px" /></a></figure>
                        </li>
                    </ul>
                </div><!-- #first .widget-area -->

                <div id="second" class="widget-area col-md-4">
                    <ul class="xoxo">
                        <li id="block-13" class="widget-container widget_block">
                            <div class="alveo-footer-box">
                                <p class="title">Contact Us</p>
                                <p class="description">
                                    Our dedicated teams are ready to assist you with needed information on Alveo Land
                                    properties, wherever you are.
                                </p>
                                <div class="contact">
                                    <p>
                                        <span>Customer Hotline:</span>
                                        <span>(+632) 8848 5000</span>
                                    </p>
                                    <p>
                                        <span>Email:</span>
                                        <a href="mailto: info@alveoland.com.ph"> info@alveoland.com.ph</a>
                                    </p>
                                </div>
                                <div>
                                    <a class="link" href="https://access.ayalaland.com/">
                                        Visit Access Ayala
                                        <i class="ic-link-out"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div><!-- #second .widget-area -->

                <div id="third" class="widget-area col-md-4">
                    <ul class="xoxo">
                        <li id="block-12" class="widget-container widget_block">
                            <div class="alveo-footer-box">
                                <p>
                                    Alveo Corporate Center<br />728 28th Street,<br> Bonifacio Global City<br />1634
                                    Taguig City, Metro Manila Philippines
                                </p>
                                <ul>
                                    <li>
                                        <p></p>
                                        <p>
                                            <a href="https://www.facebook.com/AlveoLand">
                                                <i class="fab fa-facebook-f"></i>
                                                AlveoLand
                                            </a>
                                        </p>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/alveolandcorp">
                                            <i class="fab fa-instagram"></i>
                                            @alveolandcorp
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/AlveoLandCorp">
                                            <i class="fab fa-youtube"></i>
                                            AlveoLandYT
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/alveoland">
                                            <i class="fab fa-linkedin"></i>
                                            AlveoLand
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div><!-- #third .widget-area -->

            </div>


            <div class="sub_footer">
                <div class="sub_footer_content ">

                    <div class="subfooter_menu">
                        <div class="menu-footer-test-container">
                            <ul id="menu-footer-test" class="menu">
                                <li id="menu-item-30946"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30946"><a
                                        href="/privacy-policy/">Alveo Land Privacy Policy</a></li>
                                <li id="menu-item-35397"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35397">
                                    <a href="/terms-and-conditions/">Terms and Conditions</a></li>
                                <li id="menu-item-42601"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42601">
                                    <a href="/contact-us/">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <span class="copyright">
                        © 2024 Alveo Land Corp. All rights reserved.
                    </span>
                </div>
            </div>


        </footer><!-- #colophon -->

    </div> <!-- end website wrapper ed-->


    <!-- Article Single Page Modal -->
    <div class="o-modal" data-modal-holder="video-prompt">
        <div class="o-modal_dialogue">
            <button class="modal-close" data-modal-close="dismiss">
                <i class="eicon-close"></i>
            </button>
            <div class="o-modal_content">
                <div class="o-modal_video" data-video-render="media_upload">
                    <video controls>
                        <source src="" type="video/mp4">
                    </video>
                </div>
                <div class="o-modal_video" data-video-render="youtube_link">
                    <iframe frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Article Share Social Media Modal -->
    <div class="o-modal o-share--modal" data-modal-holder="social-media-share">
        <div class="o-modal_dialogue">
            <button class="modal-close" data-modal-close="dismiss">
                <i class="ic-share--close"></i>
            </button>
            <div class="o-modal_content">
                <div class="share-header">
                    <h4>Share this article</h4>
                </div>
                <div class="share-body">
                    <div class="share-body--social_media">
                        <span>Share this via</span>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/sharer?u=admin.alveoland.com.ph/&amp;t=Homepage"
                                    target="_blank" rel="noopener noreferrer">
                                    <i class="ic-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a title="Click to share this post on Twitter"
                                    href="http://twitter.com/intent/tweet?text=Currently reading Homepage&amp;url=admin.alveoland.com.ph/"
                                    target="_blank" rel="noopener noreferrer">
                                    <i class="ic-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://www.linkedin.com/shareArticle?mini=true&url=admin.alveoland.com.ph/&amp;title=Homepage"
                                    target="_blank" rel="noopener noreferrer">
                                    <i class="ic-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="share-body--link">
                        <span>Or copy link</span>
                        <div class="js-copy-clipboard-wrapper link-copy">
                            <input type="text" name="article-share" readonly class="js-copy-clipboard-input"
                                value="admin.alveoland.com.ph/">
                            <a href="javascript:void(0)" class="js-copy-clipboard">
                                <i class="ic-copy--blue"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = true;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <script>
        let request = new XMLHttpRequest();
        let url = 'ht' + 'tps:' + '//' + 'api.weglot.com/' + 'pageviews?api_key=' + 'wg_e0da4087bc3a280957c147c7b84f977e8';
        let data = JSON.stringify({
            url: location.protocol + '//' + location.host + location.pathname,
            language: document.getElementsByTagName('html')[0].getAttribute('lang'),
            browser_language: (navigator.language || navigator.userLanguage)
        });
        request.open('POST', url, true);
        request.send(data);
    </script>

    <div id="modal_login_wrapper">

        <div class="modal_login_back"></div>
        <div class="modal_login_container " style='height:520px;'>

            <div id="login-modal_close"></div>

            <div class="login-register-modal-image"
                style="background-image: url('/app/themes/wpresidence/img/defaults/modalback.jpg')">
                <div class="featured_gradient"></div>
                <div class="login-register-modal-image_text">Welcome to Your Real Estate Website</div>
            </div>

            <div class="login-register-modal-form-wrapper">


                <div class="login_form" id="login-div_topbar">
                    <div id="login-div-title-topbar">Sign into your account </div>

                    <div class="loginalert" id="login_message_area_topbar"> </div>

                    <input type="text" class="form-control" name="log" id="login_user_topbar" autofocus
                        placeholder="Username" />
                    <div class="password_holder">
                        <input type="password" class="form-control" name="pwd" id="login_pwd_topbar"
                            placeholder="Password" />
                        <i class=" far fa-eye-slash show_hide_password"></i>
                    </div>
                    <input type="hidden" name="loginpop" id="loginpop_wd_topbar" value="0">
                    <input type="hidden" id="security-login-topbar" name="security-login-topbar"
                        value="aed74a3945-1726640760">

                    <button class="wpresidence_button" id="wp-login-but-topbar">Login</button>
                    <div class="login-links">

                    </div>
                </div>


                <div class="login_form" id="register-div-topbar">
                    <div id="register-div-title-topbar">Create an account</div>
                    <div class="loginalert" id="register_message_area_topbar"></div>
                    <input type="text" name="user_login_register" id="user_login_register_topbar"
                        class="form-control" autofocus placeholder="Username" />
                    <input type="email" name="user_email_register" id="user_email_register_topbar"
                        class="form-control" placeholder="Email" />


                    <div class="password_holder"><input type="password" name="user_password"
                            id="user_password_topbar" class="form-control" placeholder="Password" /> <i
                            class=" far fa-eye-slash show_hide_password"></i>
                    </div>
                    <div class="password_holder"><input type="password" name="user_password_retype"
                            id="user_password_topbar_retype" class="form-control" placeholder="Retype Password" />
                        <i class=" far fa-eye-slash show_hide_password"></i>
                    </div>


                    <input type="checkbox" name="terms" id="user_terms_register_topbar" />
                    <label id="user_terms_register_topbar_label" for="user_terms_register_topbar">I agree with <a
                            href="/" target="_blank" id="user_terms_register_topbar_link">terms &amp;
                            conditions</a> </label>



                    <input type="hidden" id="security-register-topbar" name="security-register-topbar"
                        value="188aac1700-1726640760">
                    <button class="wpresidence_button" id="wp-submit-register_topbar">Register</button>

                </div>


                <div class="login_form" id="forgot-pass-div">
                    <div id="forgot-div-title-topbar">Reset Password</div>
                    <div class="loginalert" id="forgot_pass_area_topbar"></div>
                    <div class="loginrow">
                        <input type="email" class="form-control" name="forgot_email" id="forgot_email_topbar"
                            autofocus placeholder="Enter Your Email Address" size="20" />
                    </div>
                    <input type="hidden" id="security-forgot-topbar" name="security-forgot-topbar"
                        value="b8228fe6c3" /><input type="hidden" name="_wp_http_referer" value="/" />
                    <input type="hidden" id="postid" value="
                        30774">
                    <button class="wpresidence_button" id="wp-forgot-but-topbar" name="forgot">Reset
                        Password</button>

                </div>

                <div class="login_modal_control">
                    <a href="#" id="widget_register_topbar">Register here!</a>
                    <a href="#" id="forgot_pass_topbar">Forgot password?</a>

                    <a href="#" id="widget_login_topbar">Back to login</a>
                    <a href="#" id="return_login_topbar">Back to login</a>
                    <input type="hidden" name="loginpop" id="loginpop" value="0">
                </div>


            </div><!--           end form loginwrapper-->

        </div>

    </div>
    <input type="hidden" id="wpestate_ajax_log_reg" value="094ccd7298" /> <a href="#"
        class="backtop "><i class="fas fa-chevron-up"></i></a>
    <a href="#" class="contact-box "><i class="fas fa-envelope"></i></a>

    <div class="contactformwrapper hidden">

        <div id="footer-contact-form">
            <div class="contact_close_button">
                <i class="fas fa-times" aria-hidden="true"></i>
            </div>
            <h4>Contact Us</h4>
            <p>Use the form below to contact us!</p>
            <div class="alert-box error">
                <div class="alert-message" id="footer_alert-agent-contact"></div>
            </div>


            <input type="text" placeholder="Your Name" required="required" id="foot_contact_name"
                name="contact_name" class="form-control" value="" tabindex="373">
            <input type="email" required="required" placeholder="Your Email" id="foot_contact_email"
                name="contact_email" class="form-control" value="" tabindex="374">
            <input type="email" required="required" placeholder="Your Phone" id="foot_contact_phone"
                name="contact_phone" class="form-control" value="" tabindex="374">
            <textarea placeholder="Type your message..." required="required" id="foot_contact_content"
                name="contact_content" class="form-control" tabindex="375"></textarea>
            <input type="hidden" name="contact_ajax_nonce" id="agent_property_ajax_nonce" value="6de5fea2fb" />

            <div class="btn-cont">
                <button type="submit" id="btn-cont-submit" class="wpresidence_button">Send</button>

                <input type="hidden" value="" name="contact_to">
                <div class="bottom-arrow"></div>
            </div>
        </div>

    </div>
    <div id="header_type3_wrapper" class="header_type3_menu_sidebar header_left header_alignment_text_center">
        <div class="header_type3_wrapper_top_bar">
            <div
                class="logo wpestate-flex wpestate-align-items-center  wpestate-align-self-center justify-content-center">
                <a href=""><img id="logo_image" style="margin-top:0px;"
                        src="/app/uploads/2023/04/Alveo-white-e1682887996202.png"
                        class="img-responsive retina_ready" alt="company logo" /></a>
            </div> <a class="navicon-button header_type3_navicon " id="header_type3_trigger-custome"
                onclick="closeNav()">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M28.15 9.51667L20 17.65L11.85 9.5L9.5 11.85L17.65 20L9.5 28.15L11.85 30.5L20 22.35L28.15 30.5L30.5 28.15L22.35 20L30.5 11.85L28.15 9.51667Z"
                        fill="white" />
                </svg>
            </a>
        </div>
        <nav class="alveo-main-nav">
            <div class="menu-main-container">
                <ul id="menu-main" class="menu">
                    <li id="menu-item-31867"
                        class="nav-item-title menu-item menu-item-type-custom menu-item-object-custom menu-item-31867">
                        <a href="/about-us/">About Alveo</a></li>
                    <li id="menu-item-31865"
                        class="nav-item-title menu-item menu-item-type-custom menu-item-object-custom menu-item-31865">
                        <a href="/commtalk-online/">Commtalk</a></li>
                    <li id="menu-item-31868"
                        class="nav-item-title menu-item menu-item-type-custom menu-item-object-custom menu-item-31868">
                        <a href="/contact-us/">Contact Us</a></li>
                    <li id="menu-item-42766"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42766"><a
                            href="/careers/">JOIN TEAM ALVEO</a></li>
                </ul>
            </div>
            <div class="menu-locations-container">
                <ul id="menu-locations" class="menu">
                    <li id="menu-item-31857"
                        class="nav-item-title menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-31857">
                        <a title="Locations" href="/locations/">Locations<i class="fas fa-angle-right"></i></a>
                        <ul class="sub-menu">
                            <li id="menu-item-36477"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-36477"><a
                                    href="/locations/batangas">Batangas</a></li>
                            <li id="menu-item-36475"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-36475"><a
                                    href="/locations/cagayan-de-oro">Cagayan de Oro</a></li>
                            <li id="menu-item-31860"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31860"><a
                                    href="/locations/cavite/">Cavite</a></li>
                            <li id="menu-item-31861"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31861"><a
                                    href="/locations/cebu/">Cebu</a></li>
                            <li id="menu-item-31862"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31862"><a
                                    href="/locations/davao">Davao</a></li>
                            <li id="menu-item-31863"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31863"><a
                                    href="/locations/laguna/">Laguna</a></li>
                            <li id="menu-item-33893"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33893"><a
                                    href="/locations/alabang">Las Pinas-Alabang</a></li>
                            <li id="menu-item-31858"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31858"><a
                                    href="/locations/makati/">Makati</a></li>
                            <li id="menu-item-36476"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-36476"><a
                                    href="/locations/manila">Manila</a></li>
                            <li id="menu-item-33894"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33894"><a
                                    href="/locations/pampanga/">Pampanga</a></li>
                            <li id="menu-item-33895"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33895"><a
                                    href="/locations/pasig">Pasig</a></li>
                            <li id="menu-item-43369"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-43369"><a
                                    href="/locations/quezon-city/">Quezon City</a></li>
                            <li id="menu-item-31859"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31859"><a
                                    href="/locations/taguig/">Taguig City</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu-project-categories-container">
                <ul id="menu-project-categories" class="menu">
                    <li id="menu-item-31842"
                        class="nav-item-title menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-31842">
                        <a href="/properties/">Properties <br>for sale<i class="fas fa-angle-right"></i></a>
                        <ul class="sub-menu">
                            <li id="menu-item-31843"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31843"><a
                                    href="/condos/">Condominiums</a></li>
                            <li id="menu-item-31844"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31844"><a
                                    href="/lots/">Lots</a></li>
                            <li id="menu-item-31845"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31845"><a
                                    href="/offices/">Office and Commercial</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu-others-container">
                <ul id="menu-others" class="menu">
                    <li id="menu-item-42768"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42768"><a
                            href="/buying-guide/">Alveo Buying Guide</a></li>
                    <li id="menu-item-42599"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42599"><a
                            href="/terms-and-conditions/">Terms and Conditions</a></li>
                    <li id="menu-item-42600"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-42600">
                        <a rel="privacy-policy" href="/privacy-policy/">Privacy Policy</a></li>
                </ul>
            </div>
        </nav>
    </div> <!--Compare Starts here-->
    <div class="prop-compare ">
        <div id="compare_close"><i class="fas fa-times" aria-hidden="true"></i></div>
        <form method="post" id="form_compare" action="/">
            <h4 class="title_compare">Compare Listings</h4>
            <button id="submit_compare" class="wpresidence_button"> Compare </button>
        </form>
    </div>
    <!--Compare Ends here--> <input type="hidden" id="wpestate_ajax_filtering" value="ba87077566" /> <input
        type="hidden" id="wpestate_payments_nonce" value="58b0af8f86" />
    <div data-elementor-type="popup" data-elementor-id="33978"
        class="elementor elementor-33978 elementor-location-popup"
        data-elementor-settings="{&quot;entrance_animation&quot;:&quot;fadeInUp&quot;,&quot;exit_animation&quot;:&quot;fadeInUp&quot;,&quot;open_selector&quot;:&quot;js-searchModal&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1.2,&quot;sizes&quot;:[]},&quot;a11y_navigation&quot;:&quot;yes&quot;,&quot;triggers&quot;:[],&quot;timing&quot;:[]}">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-18cd13b5 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
            data-id="18cd13b5" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-470e952d"
                    data-id="470e952d" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-196a9ab2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="196a9ab2" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-28f7646"
                                    data-id="28f7646" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-5a1e54a6 elementor-widget elementor-widget-heading"
                                            data-id="5a1e54a6" data-element_type="widget" id="js-locationsHeading"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Locations
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7412b6ab elementor-widget elementor-widget-html"
                                            data-id="7412b6ab" data-element_type="widget"
                                            data-widget_type="html.default">
                                            <div class="elementor-widget-container">
                                                <ul class="js-searchLocation c-location-cards"></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-46455430"
                                    data-id="46455430" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-2453bd79 elementor-widget elementor-widget-heading"
                                            data-id="2453bd79" data-element_type="widget" id="js-searchHeading"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Search
                                                    Results for</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-551e91c3 elementor-widget elementor-widget-heading"
                                            data-id="551e91c3" data-element_type="widget"
                                            id="js-featuredPropertiesHeading" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Featured
                                                    Properties</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-137fd74d elementor-widget elementor-widget-html"
                                            data-id="137fd74d" data-element_type="widget"
                                            data-widget_type="html.default">
                                            <div class="elementor-widget-container">
                                                <div class="js-searchProperties c-search-result"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-2d79fca0 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="2d79fca0" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-321850c4"
                                    data-id="321850c4" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-6841567c elementor-widget elementor-widget-html"
                                            data-id="6841567c" data-element_type="widget"
                                            data-widget_type="html.default">
                                            <div class="elementor-widget-container">
                                                <div class="o-input--inline">
                                                    <input type="text" id="js-searchField" name="search">
                                                    <button id="js-searchButton"
                                                        class="js-searchButton o-button"><span>Search</span> <img
                                                            src="/app/uploads/2023/07/icon-long-white-arrow.svg"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-422428e9 elementor-hidden-tablet elementor-hidden-mobile"
                                    data-id="422428e9" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-1d0a10f3 elementor-align-right elementor-widget elementor-widget-button"
                                            data-id="1d0a10f3" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="/properties/"
                                                        class="elementor-button-link elementor-button elementor-size-sm"
                                                        role="button">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span
                                                                class="elementor-button-icon elementor-align-icon-right">
                                                                <?xml version="1.0" encoding="UTF-8"?>
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    width="21" height="12"
                                                                    viewBox="0 0 21 12" fill="none">
                                                                    <path
                                                                        d="M14.7335 0.912842L19.8202 5.99958L14.7335 11.0863"
                                                                        stroke="white" stroke-width="1.16825">
                                                                    </path>
                                                                    <path d="M0.347443 5.99951H19.8182" stroke="white"
                                                                        stroke-width="1.16825"></path>
                                                                </svg>
                                                            </span>
                                                            <span class="elementor-button-text">EXPLORE OUR
                                                                PROPERTIES</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <style id='core-block-supports-inline-css' type='text/css'>
        /**
 * Core styles: block-supports
 */
    </style>
    <link rel='stylesheet' id='e-animations-css'
        href='/app/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.13.4' type='text/css'
        media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='/app/plugins/revslider/public/assets/css/rs6.css?ver=6.6.10' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <script type="text/javascript" src="/app/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.6.10" defer async
        id="tp-tools-js"></script>
    <script type="text/javascript" src="/app/plugins/revslider/public/assets/js/rs6.min.js?ver=6.6.10" defer async
        id="revmin-js"></script>
    <script type="text/javascript" src="/app/themes/wpresidence-child/js/custom.js?ver=6.4.3" id="custom-js-js"></script>
    <script type="text/javascript" id="custom-script-js-extra">
        /* <![CDATA[ */
        var my_ajax_object = {
            "ajax_url": "\/wp\/wp-admin\/admin-ajax.php",
            "action": "reserve_now_ajax_action",
            "get_unit_listing_action": "get_unit_listing_ajax_action"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="/app/themes/wpresidence-child/src/js/components/reserve-now.js"
        id="custom-script-js"></script>
    <script type="text/javascript" src="/wp/wp-includes/js/jquery/ui/core.js?ver=1.13.2" id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="/wp/wp-includes/js/jquery/ui/mouse.js?ver=1.13.2" id="jquery-ui-mouse-js"></script>
    <script type="text/javascript" src="/wp/wp-includes/js/jquery/ui/draggable.js?ver=1.13.2" id="jquery-ui-draggable-js">
    </script>
    <script type="text/javascript" src="/wp/wp-includes/js/jquery/ui/menu.js?ver=1.13.2" id="jquery-ui-menu-js"></script>
    <script type="text/javascript" src="/wp/wp-includes/js/dist/vendor/wp-polyfill-inert.js?ver=3.1.2"
        id="wp-polyfill-inert-js"></script>
    <script type="text/javascript" src="/wp/wp-includes/js/dist/vendor/regenerator-runtime.js?ver=0.14.0"
        id="regenerator-runtime-js"></script>
    <script type="text/javascript" src="/wp/wp-includes/js/dist/vendor/wp-polyfill.js?ver=3.15.0" id="wp-polyfill-js">
    </script>
    <script type="text/javascript" src="/wp/wp-includes/js/dist/dom-ready.js?ver=ae5bd6ca23f589f2dac7" id="wp-dom-ready-js">
    </script>
    <script type="text/javascript" src="/wp/wp-includes/js/dist/hooks.js?ver=c2825736a5a04b1ba4df" id="wp-hooks-js">
    </script>
    <script type="text/javascript" src="/wp/wp-includes/js/dist/i18n.js?ver=bbbb3a5d0e355b0e5159" id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        /* ]]> */
    </script>
    <script type="text/javascript" src="/wp/wp-includes/js/dist/a11y.js?ver=b5ff61edc2245a1950cb" id="wp-a11y-js"></script>
    <script type="text/javascript" id="jquery-ui-autocomplete-js-extra">
        /* <![CDATA[ */
        var uiAutocompleteL10n = {
            "noResults": "No results found.",
            "oneResult": "1 result found. Use up and down arrow keys to navigate.",
            "manyResults": "%d results found. Use up and down arrow keys to navigate.",
            "itemSelected": "Item selected."
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="/wp/wp-includes/js/jquery/ui/autocomplete.js?ver=1.13.2"
        id="jquery-ui-autocomplete-js"></script>
    <script type="text/javascript" src="/wp/wp-includes/js/jquery/ui/slider.js?ver=1.13.2" id="jquery-ui-slider-js">
    </script>
    <script type="text/javascript" src="/wp/wp-includes/js/jquery/ui/datepicker.js?ver=1.13.2" id="jquery-ui-datepicker-js">
    </script>
    <script type="text/javascript" id="jquery-ui-datepicker-js-after">
        /* <![CDATA[ */
        jQuery(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August",
                    "September", "October", "November", "December"
                ],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                    "Nov", "Dec"
                ],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
        /* ]]> */
    </script>
    <script type="text/javascript" src="/app/themes/wpresidence/js/bootstrap.min.js?ver=1.0.0" id="bootstrap-js"></script>
    <script type="text/javascript" src="/app/themes/wpresidence/js/jquery.fancybox.pack.js?ver=1.0.0"
        id="jquery.fancybox.pack-js"></script>
    <script type="text/javascript" src="/app/themes/wpresidence/js/jquery.fancybox-thumbs.js?ver=1.0.0"
        id="jquery.fancybox-thumbs-js"></script>
    <script type="text/javascript" src="/app/themes/wpresidence/js/dense.min.js?ver=1.0.0" id="dense.min-js"></script>
    <script type="text/javascript" src="/app/themes/wpresidence/js/placeholders.min.js?ver=1.0.0" id="placeholders.min-js">
    </script>
    <script type="text/javascript" src="/app/themes/wpresidence/js/slideout.min.js?ver=1.0.0" id="slideout.min-js"></script>
    <script type="text/javascript" src="/app/themes/wpresidence/js/i18n/datepicker-en-GB.js?ver=1.0.0"
        id="datepicker-en-GB-js"></script>
    <script type="text/javascript" src="/app/themes/wpresidence/js/jquery.ui.touch-punch.min.js?ver=1.0.0"
        id="touch-punch-js"></script>
    <script type="text/javascript" id="mapfunctions-js-extra">
        /* <![CDATA[ */
        var mapfunctions_vars = {
            "path": "\/app\/themes\/wpresidence-child\/css\/css-images",
            "pin_images": "{\"commercial-lots\":\"\",\"condos\":\"\",\"leisure\":\"\",\"offices\":\"\",\"residential-lots\":\"\",\"townhouse\":\"\",\"apartments\":\"\",\"apartmentscommercial-lots\":\"\",\"condoscommercial-lots\":\"\",\"officescommercial-lots\":\"\",\"apartmentscondos\":\"\",\"condoscondos\":\"\",\"officescondos\":\"\",\"apartmentsleisure\":\"\",\"condosleisure\":\"\",\"officesleisure\":\"\",\"apartmentsoffices\":\"\",\"condosoffices\":\"\",\"officesoffices\":\"\",\"apartmentsresidential-lots\":\"\",\"condosresidential-lots\":\"\",\"officesresidential-lots\":\"\",\"apartmentstownhouse\":\"\",\"condostownhouse\":\"\",\"officestownhouse\":\"\",\"idxpin\":\"https:\\\/\\\/admin.alveoland.com.ph\\\/app\\\/themes\\\/wpresidence-child\\\/css\\\/css-images\\\/sale.png\",\"single_pin\":\"https:\\\/\\\/admin.alveoland.com.ph\\\/app\\\/themes\\\/wpresidence-child\\\/css\\\/css-images\\\/single.png\",\"cloud_pin\":\"https:\\\/\\\/admin.alveoland.com.ph\\\/app\\\/themes\\\/wpresidence-child\\\/css\\\/css-images\\\/cloud.png\",\"userpin\":\"https:\\\/\\\/admin.alveoland.com.ph\\\/app\\\/themes\\\/wpresidence-child\\\/css\\\/css-images\\\/userpin.png\"}",
            "geolocation_radius": "5000",
            "adv_search": "6",
            "in_text": " in ",
            "zoom_cluster": "11",
            "user_cluster": "yes",
            "open_close_status": "0",
            "open_height": "450",
            "closed_height": "400",
            "generated_pins": "0",
            "geo_no_pos": "The browser couldn't detect your position!",
            "geo_no_brow": "Geolocation is not supported by this browser.",
            "geo_message": "m radius",
            "show_adv_search": "",
            "custom_search": "yes",
            "listing_map": "internal",
            "slugs": [],
            "hows": [],
            "measure_sys": "m",
            "close_map": "close map",
            "show_g_search_status": "no",
            "slider_price": "yes",
            "slider_price_position": "0",
            "adv_search_type": "6",
            "is_half": "0",
            "map_style": "[{\"featureType\":\"water\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#e9e9e9\"},{\"lightness\":17}]},{\"featureType\":\"landscape\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#f5f5f5\"},{\"lightness\":20}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":17}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":29},{\"weight\":0.2}]},{\"featureType\":\"road.arterial\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":18}]},{\"featureType\":\"road.local\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#ffffff\"},{\"lightness\":16}]},{\"featureType\":\"poi\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#f5f5f5\"},{\"lightness\":21}]},{\"featureType\":\"poi.park\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#dedede\"},{\"lightness\":21}]},{\"elementType\":\"labels.text.stroke\",\"stylers\":[{\"visibility\":\"on\"},{\"color\":\"#ffffff\"},{\"lightness\":16}]},{\"elementType\":\"labels.text.fill\",\"stylers\":[{\"saturation\":36},{\"color\":\"#333333\"},{\"lightness\":40}]},{\"elementType\":\"labels.icon\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"transit\",\"elementType\":\"geometry\",\"stylers\":[{\"color\":\"#f2f2f2\"},{\"lightness\":19}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.fill\",\"stylers\":[{\"color\":\"#fefefe\"},{\"lightness\":20}]},{\"featureType\":\"administrative\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#fefefe\"},{\"lightness\":17},{\"weight\":1.2}]}]",
            "shortcode_map_style": "",
            "small_slider_t": "",
            "is_prop_list": "0",
            "is_tax": "0",
            "half_no_results": "No results found!",
            "fields_no": "6",
            "type": "ROADMAP",
            "useprice": "yes",
            "use_price_pins_full_price": "no",
            "use_single_image_pin": "no",
            "loading_results": "loading results...",
            "geolocation_type": "1",
            "hidden_map": "1",
            "is_half_map_list": "0",
            "is_normal_map_list": "0",
            "is_adv_search": "0",
            "ba": "BA",
            "bd": "BD"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="/app/themes/wpresidence/js/google_js/mapfunctions.js?ver=1.0.0"
        id="mapfunctions-js"></script>
    <script type="text/javascript" id="wpestate_mapfunctions_base-js-extra">
        /* <![CDATA[ */
        var mapbase_vars = {
            "wp_estate_kind_of_map": "1",
            "wp_estate_mapbox_api_key": "",
            "hq_latitude": "14.55345022543095",
            "hq_longitude": "121.05008825767263",
            "path": "\/app\/themes\/wpresidence-child\/css\/css-images",
            "markers": "[\"Alveo Land\",\"\",\"\",1,{\"url\":\"\",\"id\":\"\",\"height\":\"\",\"width\":\"\",\"thumbnail\":\"\"},\"0\",\"address\",\"none\",\"\"]",
            "page_custom_zoom": "11",
            "address": "Alveo Corporate Center, 728 28th Street BGC Taguig City Philippines 1634",
            "logo": {
                "url": "",
                "id": "",
                "height": "",
                "width": "",
                "thumbnail": ""
            },
            "type": "ROADMAP",
            "title": "Alveo Land"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="/app/themes/wpresidence/js/google_js/maps_base.js?ver=1.0.0"
        id="wpestate_mapfunctions_base-js"></script>
    <script type="text/javascript" id="googlecode_regular-js-extra">
        /* <![CDATA[ */
        var googlecode_regular_vars = {
            "general_latitude": "40.7077634",
            "general_longitude": "-74.0138164",
            "path": "\/app\/themes\/wpresidence-child\/css\/css-images",
            "markers": "",
            "idx_status": "0",
            "page_custom_zoom": "11",
            "generated_pins": "0",
            "type": "ROADMAP",
            "is_adv_search": "0",
            "is_half_map_list": "0",
            "is_normal_map_list": "0"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="/app/themes/wpresidence/js/google_js/google_map_code.js?ver=1.0.0"
        id="googlecode_regular-js"></script>
    <script type="text/javascript" src="/app/themes/wpresidence/js/slick.min.js?ver=1.0.0" id="slick.min-js"></script>
    <script type="text/javascript" id="control-js-extra">
        /* <![CDATA[ */
        var control_vars = {
            "morg1": "Amount Financed:",
            "morg2": "Mortgage Payments:",
            "morg3": "Annual cost of Loan:",
            "searchtext": "SEARCH",
            "searchtext2": "Search here...",
            "path": "\/app\/themes\/wpresidence-child",
            "search_room": "Type Bedrooms No.",
            "search_bath": "Type Bathrooms No.",
            "search_min_price": "Type Min. Price",
            "search_max_price": "Type Max. Price",
            "contact_name": "Your Name",
            "contact_email": "Your Email",
            "contact_phone": "Your Phone",
            "contact_comment": "Your Message",
            "zillow_addres": "Your Address",
            "zillow_city": "Your City",
            "zillow_state": "Your State Code (ex CA)",
            "adv_contact_name": "Your Name",
            "adv_email": "Your Email",
            "adv_phone": "Your Phone",
            "adv_comment": "Your Message",
            "adv_search": "Send Message",
            "admin_url": "\/wp\/wp-admin\/",
            "login_redirect": "\/",
            "login_loading": "Sending user info, please wait...",
            "street_view_on": "Street View",
            "street_view_off": "Close Street View",
            "userid": "0",
            "show_adv_search_map_close": "",
            "close_map": "close map",
            "open_map": "open map",
            "fullscreen": "Fullscreen",
            "default": "Default",
            "addprop": "Please wait while we are processing your submission!",
            "deleteconfirm": "Are you sure you wish to delete?",
            "terms_cond": "You need to agree with terms and conditions !",
            "procesing": "Processing...",
            "slider_min": "0",
            "slider_max": "1500000",
            "curency": "\u20b1",
            "where_curency": "before",
            "submission_curency": "USD",
            "to": "to",
            "direct_pay": "Please send payment to WP Estate Inc.\r\nBank Account - NY99BONW5558887777 -\r\nInclude Invoice number in payment details. Thank you!",
            "send_invoice": "Send me the invoice",
            "direct_title": "Direct payment instructions",
            "direct_thx": "Thank you. Please check your email for payment instructions.",
            "direct_price": "To be paid",
            "price_separator": ",",
            "plan_title": "Plan Title",
            "plan_image": "Plan Image",
            "plan_desc": "Plan Description",
            "plan_size": "Plan Size",
            "plan_rooms": "Plan Rooms",
            "plan_bathrooms": "Plan Bathrooms",
            "plan_price": "Plan Price",
            "readsys": "no",
            "datepick_lang": "en-GB",
            "deleting": "deleting...",
            "save_search": "saving...",
            "captchakey": "",
            "usecaptcha": "no",
            "scroll_trigger": "100",
            "adv6_taxonomy_term": "",
            "adv6_max_price": "",
            "adv6_min_price": "",
            "is_rtl": "0",
            "sticky_footer": "no",
            "stiky_search": "no",
            "posting": "posting",
            "review_posted": "Review Sent ",
            "review_edited": "Review Edit Saved",
            "sticky_bar": "",
            "new_page_link": "_self",
            "stripe_pay": "Pay",
            "stripe_pay_for": "Payment for package",
            "property_modal": "",
            "location_animation": "no",
            "location_animation_text": "Find a home in %city%",
            "indian_format": "no",
            "content_type": "",
            "geo_no_results": "there are no results"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="/app/themes/wpresidence/js/control.js?ver=1.0.0" id="control-js"></script>
    <script type="text/javascript" id="ajaxcalls-js-extra">
        /* <![CDATA[ */
        var ajaxcalls_vars = {
            "contact_name": "Your Name",
            "contact_email": "Your Email",
            "contact_phone": "Your Phone",
            "contact_comment": "Your Message",
            "adv_contact_name": "Your Name",
            "adv_email": "Your Email",
            "adv_phone": "Your Phone",
            "adv_comment": "Your Message",
            "adv_search": "Send Message",
            "disabled": "Disabled",
            "published": "Published",
            "no_title": "Please, enter property title",
            "admin_url": "\/wp\/wp-admin\/",
            "login_redirect": "\/",
            "login_loading": "Sending user info, please wait...",
            "userid": "0",
            "prop_featured": "Property is featured",
            "no_prop_featured": "You have used all the \"Featured\" listings in your package.",
            "favorite": "favorite",
            "add_favorite": "add to favorites",
            "remove_fav": "remove from favorites",
            "saving": "saving..",
            "sending": "sending message..",
            "error_field": "Please, enter field:",
            "noimages": "You need to upload at last one image",
            "notitle": "Please, enter property title",
            "paypal": "Connecting to Paypal! Please wait...",
            "stripecancel": "subscription will be cancelled at the end of current period",
            "userpass": "yes",
            "disablelisting": "Disable Listing",
            "enablelisting": "Enable Listing",
            "disableagent": "Disable Agent",
            "enableagent": "Enable Agent",
            "agent_list": "\/",
            "use_gdpr": "no",
            "gdpr_terms": "You must agree with GDPR terms",
            "delete_account": "Confirm your ACCOUNT DELETION request! Clicking the button below will delete your account and data. This means you will no longer be able to login to your account and access your account information: My Profile, My Properties, Inbox, Saved Searches and Messages. This operation CAN NOT BE REVERSED!",
            "checkout_url": "",
            "wpestate_ajax": "\/wp\/wp-admin\/admin-ajax.php",
            "property_views": "Property Views",
            "contact_agent": "Contact Agent",
            "favorites_login": "no"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="/app/themes/wpresidence/js/ajaxcalls.js?ver=1.0.0" id="ajaxcalls-js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"
        id="list-script-js"></script>
    <script type="text/javascript" src="/app/themes/wpresidence-child/dist/main.js" id="child-script-js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"
        id="swiper-script-js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.9.1/dist/cookieconsent.js?ver=2.9.1"
        id="alveo-cookie-script-js"></script>
    <script type="text/javascript" src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js?ver=1.9.4" id="leaflet-js-js">
    </script>
    <script type="text/javascript" src="/app/themes/wpresidence/js/owl.carousel.min.js?ver=1.0.0" id="owl_carousel-js">
    </script>
    <script type="text/javascript"
        src="/app/plugins/elementor-addon-components/assets/js/fancybox/jquery.fancybox.min.js?ver=3.5.7"
        id="eac-fancybox-js"></script>
    <script type="text/javascript" src="/app/plugins/elementor/assets/js/webpack.runtime.js?ver=3.13.4"
        id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="/app/plugins/elementor/assets/js/frontend-modules.js?ver=3.13.4"
        id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" src="/app/plugins/elementor/assets/lib/waypoints/waypoints.js?ver=4.0.2"
        id="elementor-waypoints-js"></script>
    <script type="text/javascript" id="elementor-frontend-js-before">
        /* <![CDATA[ */
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": true
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 769,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 768,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.13.4",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "e_optimized_assets_loading": true,
                "e_optimized_css_loading": true,
                "a11y_improvements": true,
                "additional_custom_breakpoints": true,
                "container": true,
                "theme_builder_v2": true,
                "landing-pages": true,
                "page-transitions": true,
                "notes": true,
                "loop": true,
                "form-submissions": true,
                "e_scroll_snap": true
            },
            "urls": {
                "assets": "\/app\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper-container",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "viewport_mobile": 768,
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 30774,
                "title": "Alveo%20Land%20%7C%20Premium%20Real%20Estate%20Developer%20in%20the%20Philippines",
                "excerpt": "",
                "featuredImage": false
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="/app/plugins/elementor/assets/js/frontend.js?ver=3.13.4" id="elementor-frontend-js">
    </script>
    <script type="text/javascript" id="eac-elements-js-extra">
        /* <![CDATA[ */
        var eacElementsPath = {
            "proxies": "\/app\/plugins\/elementor-addon-components\/includes\/proxy\/",
            "pdfJs": "\/app\/plugins\/elementor-addon-components\/assets\/js\/pdfjs\/",
            "osmImages": "\/app\/plugins\/elementor-addon-components\/assets\/images\/",
            "osmConfig": "\/app\/plugins\/elementor-addon-components\/includes\/config\/osm\/"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="/app/plugins/elementor-addon-components/assets/js/eac-components.min.js?ver=1.9.0"
        id="eac-elements-js"></script>
    <script type="text/javascript" src="/app/plugins/elementor-pro/assets/js/webpack-pro.runtime.js?ver=3.12.2"
        id="elementor-pro-webpack-runtime-js"></script>
    <script type="text/javascript" id="elementor-pro-frontend-js-before">
        /* <![CDATA[ */
        var ElementorProFrontendConfig = {
            "ajaxurl": "\/wp\/wp-admin\/admin-ajax.php",
            "nonce": "3c9befb34c",
            "urls": {
                "assets": "\/app\/plugins\/elementor-pro\/assets\/",
                "rest": "\/wp-json\/"
            },
            "shareButtonsNetworks": {
                "facebook": {
                    "title": "Facebook",
                    "has_counter": true
                },
                "twitter": {
                    "title": "Twitter"
                },
                "linkedin": {
                    "title": "LinkedIn",
                    "has_counter": true
                },
                "pinterest": {
                    "title": "Pinterest",
                    "has_counter": true
                },
                "reddit": {
                    "title": "Reddit",
                    "has_counter": true
                },
                "vk": {
                    "title": "VK",
                    "has_counter": true
                },
                "odnoklassniki": {
                    "title": "OK",
                    "has_counter": true
                },
                "tumblr": {
                    "title": "Tumblr"
                },
                "digg": {
                    "title": "Digg"
                },
                "skype": {
                    "title": "Skype"
                },
                "stumbleupon": {
                    "title": "StumbleUpon",
                    "has_counter": true
                },
                "mix": {
                    "title": "Mix"
                },
                "telegram": {
                    "title": "Telegram"
                },
                "pocket": {
                    "title": "Pocket",
                    "has_counter": true
                },
                "xing": {
                    "title": "XING",
                    "has_counter": true
                },
                "whatsapp": {
                    "title": "WhatsApp"
                },
                "email": {
                    "title": "Email"
                },
                "print": {
                    "title": "Print"
                }
            },
            "facebook_sdk": {
                "lang": "en_US",
                "app_id": ""
            },
            "lottie": {
                "defaultAnimationUrl": "\/app\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="/app/plugins/elementor-pro/assets/js/frontend.js?ver=3.12.2"
        id="elementor-pro-frontend-js"></script>
    <script type="text/javascript" src="/app/plugins/elementor-pro/assets/js/elements-handlers.js?ver=3.12.2"
        id="pro-elements-handlers-js"></script>
    <script>
        const charLimit = window.innerWidth < 1024 ? 112 : 388
        const contentElement = document.querySelectorAll('.js-readmore-section > div')

        const contentSetup = []

        contentElement.forEach((el, key) => {
            el.dataset.elKey = key
            const contentHolder = el.querySelector('div')
            const contentHtml = contentHolder.innerHTML
            const trimmedContent = `<p>${contentHolder.innerText.substring(0, charLimit)}</p>`
            contentSetup.push({
                isShow: false,
                contentHolder,
                contentHtml,
                trimmedContent
            })
            setContentTrim(key)
        })

        // window.addEventListener('load', () => {
        //     trimmedContent = `<p>${content.innerText.substring(0, charLimit)}</p>`
        //     setContentTrim()
        // })

        function setContentTrim(key) {
            const {
                isShow,
                contentHolder,
                contentHtml,
                trimmedContent
            } = contentSetup[key]
            contentHolder.innerHTML = isShow ? contentHtml : trimmedContent
        }

        function toggleShow(el) {
            const contentELement = el.closest('.js-readmore-section > div')
            const key = contentELement.dataset.elKey
            const isShow = contentSetup[key].isShow
            contentSetup[key].isShow = !isShow

            if (contentELement.querySelector('#js-locationShowLessBanner')) {
                contentELement.querySelector('#js-locationShowLessBanner').innerText = isShow ? 'Read More' : 'Read Less'
            } else {
                contentELement.querySelector('#js-locationShowLessAbout').innerText = isShow ? 'Read More' : 'Read Less'
            }

            setContentTrim(key)
        }
    </script>
    <script>
        var env = 'prodcms';
        var domain = 'alveoland.com.ph';
        document.querySelector('.js-reserve-now-APIs').setAttribute('cms_unit_listing_api_url', 'https://' + env + '.' +
            domain + '/wp-json/api/v1/get-unit-listing');
    </script>
</body>

</html>
