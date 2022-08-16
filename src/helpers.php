<?php

if (! function_exists('currentTimezone')) {
    function currentTimezone($ip = null)
    {
        return cache('timezone.' . $ip ??= clientIp()) ?? config('app.timezone');
    }
}

if (! function_exists('clientIp')) {
    function clientIp()
    {
        $remotes_keys = [
            'HTTP_X_FORWARDED_FOR',
            'HTTP_CLIENT_IP',
            'HTTP_X_REAL_IP',
            'HTTP_X_FORWARDED',
            'HTTP_FORWARDED_FOR',
            'HTTP_FORWARDED',
            'REMOTE_ADDR',
            'HTTP_X_CLUSTER_CLIENT_IP',
        ];

        foreach ($remotes_keys as $key) {
            if ($address = getenv($key)) {
                foreach (explode(',', $address) as $ip) {
                    if (isIpValid($ip)) {
                        return $ip;
                    }
                }
            }
        }

        return '127.0.0.0';
    }
}

if (! function_exists('isIpValid')) {
    function isIpValid($ip)
    {
        if (! filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)
            && ! filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6 | FILTER_FLAG_NO_PRIV_RANGE)
        ) {
            return false;
        }

        return true;
    }
}
