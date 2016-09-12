<?php
namespace Medialisk\Librolisk\Text;

use Medialisk\Librolisk\Text\Util;

class PreviewText
{
    /**
     * cuts a wysiwyg field for a shorter preview text. Followed by dots if cut..
     * @param $text
     * @param int $length
     * @return string
     */
    public static function cutWysiwygStringForPreview($text, $length = 0)
    {
        $mainTextStripped = strip_tags($text);
        if ($length) {
            $result = Util::cutStringRespectingWhitespace($mainTextStripped, $length);
        } else {
            $result = $mainTextStripped;
        }
        return $result;
    }

    public static function getFirstTextOrElseGetAlternativeTextCut($firstText, $alternativeText, $length = 0)
    {
        if ($firstText) {
            $result = nl2br($firstText);
        } else {
            $result = self::cutWysiwygStringForPreview($alternativeText, $length);
        }
        return $result;
    }
}