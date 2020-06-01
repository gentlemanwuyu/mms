<?php
/**
 * Created by PhpStorm.
 * User: Woozee
 * Date: 2020/6/1
 * Time: 15:13
 */

namespace App\Modules\Shopify\Services\Client;

use PHPShopify\ShopifySDK;

class Admin
{
    protected $client;

    public function __construct($shop)
    {
        $this->auth($shop);
    }

    public function auth($shop)
    {
        $this->client = new ShopifySDK(config('shopify.api_auth.' . $shop));

        return $this;
    }
}
