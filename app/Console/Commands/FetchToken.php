<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FetchToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $params = [
            'grant_type' => 'client_credentials'
        ];
        $tokenUri = "https://oauth.battle.net/token";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_USERPWD, env("BLIZZARD_CLIENT_ID") . ":" . env("BLIZZARD_CLIENT_SECRET"));
        curl_setopt($ch, CURLOPT_URL, $tokenUri);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        $accessTokenResponse = json_decode($response, true);

        if (isset($accessTokenResponse['access_token'])) {
            $this->info("Access token: " . $accessTokenResponse['access_token']);
        } else {
            $this->error("Failed to retrieve access token.");
        }
    }

}
