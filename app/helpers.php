<?php
function checkedspcial($array, $string)
{
    if (in_array($string, $array)) {
        return 'checked';
    } else {
        return '';
    }
}

function checkedsoft($array, $string)
{
    if (in_array($string, $array)) {
        return 'checked';
    } else {
        return '';
    }
}

//job status
function job_status($status)
{
    if ($status == 1)
        return "Approved";
    elseif ($status == 2)
        return "Assign";
    elseif ($status == 3)
        return "Canceled";
    elseif ($status == 4)
        return "Completed";
    else
        return "Pending";
}
//get username
function getUsername($id)
{
    $name = \App\Models\User::find($id);
    return $name->fname . ' ' . $name->lname;
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
