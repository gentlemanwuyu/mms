<?php
/**
 * Created by PhpStorm.
 * User: Woozee
 * Date: 2020/6/1
 * Time: 14:23
 */

namespace App\Modules\Shopify\Console;

use Illuminate\Console\Command;

class GetProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shopify:get_product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '获取shopify商品';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            $this->initializeParams();

        }catch (\Exception $e) {
            $this->info("[" . get_class($e) . "]" . $e->getMessage());
        }
    }

    protected function initializeParams()
    {

    }
}
