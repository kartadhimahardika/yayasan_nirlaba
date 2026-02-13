<?php

namespace App\Services;

class FonnteService
{
    public static function sendWhatsApp($target, $message)
    {
        $token = env('FONNTE_TOKEN');

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => [
                'target' => $target,
                'message' => $message,
            ],
            CURLOPT_HTTPHEADER => [
                "Authorization: $token",
            ],
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }
}
