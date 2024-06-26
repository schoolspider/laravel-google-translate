<?php

namespace JoggApp\GoogleTranslate\Traits;

trait SupportedLanguages
{
    public function languages(): array
    {
        return [
            'af', 'ak', 'am', 'ar', 'az', 'be', 'bg', 'bn', 'bho', 'bs', 'ca',
            'ceb', 'ckb', 'co', 'cs', 'cy', 'da', 'de', 'el', 'en',
            'eo', 'es', 'et', 'eu', 'fa', 'fi', 'fr', 'fy',
            'ga', 'gd', 'gl', 'gu', 'ha', 'haw', 'he', 'hi', 'hmn',
            'hr', 'ht', 'hu', 'hy', 'id', 'ig', 'is', 'it',
            'iw', 'ja', 'jw', 'ka', 'kk', 'km', 'kn', 'ko',
            'ku', 'ky', 'la', 'lb', 'ln', 'lo', 'lt', 'lv', 'mg',
            'mi', 'mk', 'ml', 'mn', 'mr', 'ms', 'mt', 'my',
            'ne', 'nl', 'no', 'ny', 'pa', 'pl', 'ps', 'pt',
            'ro', 'ru', 'sd', 'si', 'sk', 'sl', 'sm', 'sn',
            'so', 'sq', 'sr', 'st', 'su', 'sv', 'sw', 'ta',
            'te', 'tg', 'th', 'ti', 'tl', 'tr', 'uk', 'ur', 'uz',
            'vi', 'xh', 'yi', 'yo', 'zh', 'zh-TW', 'zu'
        ];
    }
}
