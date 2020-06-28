<?php
return array(
    // set your paypal credential
    'client_id' => 'Acf028ryV-BfjmdsTUzl6G4r0KWb29aYFxSneIVIDrXPuXq0LM1p1c-tsVMBrNwFrcA209uB4034BVz6',
    'secret' => 'EN72uIE9bHgPnxE8q_cTjgbq4CjU9B0zzSY4czrBidcB_DG59cYmuDHH9m24x0aP2dqiztg4x-JeqLvX',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);