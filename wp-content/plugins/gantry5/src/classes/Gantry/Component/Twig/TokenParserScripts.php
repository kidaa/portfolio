<?php
/**
 * @package   Gantry5
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2015 RocketTheme, LLC
 * @license   Dual License: MIT or GNU/GPLv2 and later
 *
 * http://opensource.org/licenses/MIT
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Gantry Framework code that extends GPL code is considered GNU/GPLv2 and later
 */

namespace Gantry\Component\Twig;

/**
 * Adds scripts to head/footer/custom location.
 *
 * {% scripts in 'head' with { priority: 2 } %}
 *   <script type="text/javascript" src="{{ url('gantry-theme://js/my.js') }}"></script>
 * {% endscripts -%}
 */
class TokenParserScripts extends TokenParserAssets
{
    public function decideBlockEnd(\Twig_Token $token)
    {
        return $token->test('endscripts');
    }

    /**
     * Gets the tag name associated with this token parser.
     *
     * @return string The tag name
     */
    public function getTag()
    {
        return 'scripts';
    }
}
