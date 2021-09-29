<?php
function checkedspcial($array,$string){
   if(in_array($string, $array))
   {
    return 'checked';
   }
   else
   {
    return '';
   }
}

function checkedsoft($array,$string)
{
   if(in_array($string, $array))
   {
    return 'checked';
   }
   else
   {
    return '';
   }

}

 /**
     * Convert any string to a color code.
     *
     * @param string $string
     *
     * @return string
     */
 function stringToColorCode($string)
    {
        $code = dechex(crc32($string));

        return substr($code, 0, 6);
    }

    /**
     * User link.
     *
     * @param mixed $user
     *
     * @return string
     */
    function userLink($user)
    {
        $url = config('chatter.user.relative_url_to_profile', '');

        if ('' === $url) {
            return '#_';
        }

        return replaceUrlParameter($url, $user);
    }

    /**
     * Replace url parameter.
     *
     * @param string $url
     * @param mixed  $source
     *
     * @return string
     */
    function replaceUrlParameter($url, $source)
    {
        $parameter = urlParameter($url);

        return str_replace('{' . $parameter . '}', $source[$parameter], $url);
    }

    /**
     * Url parameter.
     *
     * @param string $url
     *
     * @return string
     */
   function urlParameter($url)
    {
        $start = strpos($url, '{') + 1;

        $length = strpos($url, '}') - $start;

        return substr($url, $start, $length);
    }

    /**
     * This function will demote H1 to H2, H2 to H3, H4 to H5, etc.
     * this will help with SEO so there are not multiple H1 tags
     * on the same page.
     *
     * @param HTML string
     *
     * @return HTML string
     */
    function demoteHtmlHeaderTags($html)
    {
        $originalHeaderTags = [];
        $demotedHeaderTags = [];

        foreach (range(100, 1) as $index) {
            $originalHeaderTags[] = '<h' . $index . '>';

            $originalHeaderTags[] = '</h' . $index . '>';

            $demotedHeaderTags[] = '<h' . ($index + 1) . '>';

            $demotedHeaderTags[] = '</h' . ($index + 1) . '>';
        }

        return str_ireplace($originalHeaderTags, $demotedHeaderTags, $html);
    }

?>