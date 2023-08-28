<?php
function getRandomUserAgent()
{
    $userAgents = array(
        "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36",
        "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Edge/101.0.0.0 Chrome/116.0.0.0 Safari/537.36",
        "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Opera/80.0.0.0 Chrome/116.0.0.0 Safari/537.36",
        "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36",
        "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Edge/101.0.0.0 Chrome/116.0.0.0 Safari/537.36",
        "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Opera/80.0.0.0 Chrome/116.0.0.0 Safari/537.36",
        "Mozilla/5.0 (Linux; Android 11; Pixel 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36",
        "Mozilla/5.0 (Linux; Android 11; Pixel 5) AppleWebKit/537.36 (KHTML, like Gecko) Firefox/95.0.0.0 Mobile Chrome/116.0.0.0 Safari/537.36",
        "Mozilla/5.0 (Linux; Android 11; Pixel 5) AppleWebKit/537.36 (KHTML, like Gecko) Opera/80.0.0.0 Mobile Chrome/116.0.0.0 Safari/537.36",
        "Mozilla/5.0 (Linux; U; ChromeOS i686 14.0.835.202) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36",
        "Mozilla/5.0 (Linux; U; ChromeOS i686 14.0.835.202) AppleWebKit/537.36 (KHTML, like Gecko) Firefox/95.0.0.0 Chrome/116.0.0.0 Safari/537.36",
        "Mozilla/5.0 (Linux; U; ChromeOS i686 14.0.835.202) AppleWebKit/537.36 (KHTML, like Gecko) Opera/80.0.0.0 Chrome/116.0.0.0 Safari/537.36",
        "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36",
        "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Opera/80.0.0.0 Chrome/116.0.0.0 Safari/537.36",
        "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36",
        "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Edge/101.0.0.0 Chrome/116.0.0.0 Safari/537.36",
        "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Opera/80.0.0.0 Chrome/116.0.0.0 Safari/537.36",
        "Mozilla/5.0 (Linux; Android 10; Galaxy S20) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36",
        "Mozilla/5.0 (Linux; Android 10; Galaxy S20) AppleWebKit/537.36 (KHTML, like Gecko) Firefox/95.0.0.0 Mobile Chrome/116.0.0.0 Safari/537.36",
        "Mozilla/5.0 (Linux; Android 10; Galaxy S20) AppleWebKit/537.36 (KHTML, like Gecko) Opera/80.0.0.0 Mobile Chrome/116.0.0.0 Safari/537.36",
    );
    return $userAgents[array_rand($userAgents)];
}
function getOptions()
{
    $options = array(
        'http' => array(
            'method' => 'GET',
            'header' => implode("\r\n", array(
                "Accept-Language: tr-TR,tr;q=0.9,en;q=0.8,en-US;q=0.7",
                'Sec-Ch-Ua: "Chromium";v="116", "Not)A;Brand";v="24", "Google Chrome";v="116',
                "Cookie: session-id=261-7187109-8441161; session-id-time=2082787201l; i18n-prefs=TRY; ubid-acbtr=257-5823092-2709558; lc-acbtr=tr_TR; session-token=8kYr2S3sIin7dBdd67M0SZd8FvV7Wj5gBhTDbhM1kBnr4Tct8ZbMrQnj7rKCUxZB2sYC0SyoCjss/b8ej0MqVhUVVOZAJ5FIbMwCc77278t04QzalcK9n3k2FqENgvspro25O9C+k7AO0+5kQ56EfzV/CSu+kqc4OFLJ/KULNzGgY+HwHvupCIc+G5cVtn9JanK1VR2D0Eo+mwk02CvHOY6kQe0EeDRuVSbLgpXAE+E=; csm-hit=tb:SK5GPTHFYBP8J1WDQS29+s-MBF1CJ9NABWWFDHNVB5P|1692778903406&t:1692778903406&adb:adblk_no",
                'path: /s?k=ayakkab%C4%B1&crid=AOWE8Y5BD1WO&sprefix=ayakka%2Caps%2C139&ref=nb_sb_ss_ts-doa-p_1_6',
                "User-Agent: " . getRandomUserAgent(),
            )),
        )
    );
    $context = stream_context_create($options);
}
