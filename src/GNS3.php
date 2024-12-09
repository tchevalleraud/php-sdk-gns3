<?php
    namespace Tchevalleraud\GNS3;

    use GuzzleHttp\Client;

    class GNS3 {

        private $client;
        private $host;

        public function __construct(string $host, array $options = [], string $scheme = "http", int $port = 3080){
            $this->host = $host;
            $options = array_merge([
                'base_uri'  => $scheme."://".$host.":".$port
            ], $options);

            $this->client = new Client($options);
        }

        public function getComputes(){
            return $this->request("GET", "/v2/computes");
        }

        public function getVersion(){
            return $this->request("GET", "/v2/version");
        }

        private function request(string $method, string $endpoint, array $options = []){
            $response = $this->client->request($method, $endpoint, $options);
            return json_decode($response->getBody()->getContents(), true) ?: (string) $response->getBody()->getContents();
        }

    }