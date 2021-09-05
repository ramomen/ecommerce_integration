<?php

namespace App\Console\Commands;

use App\Services\OpenCartService;
use Illuminate\Console\Command;

class OpencartGetTokenTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'octest:token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public OpenCartService $opencartService;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->opencartService = new OpenCartService();
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $baseUrl ="https://www.ramomen.co/deneme/";
        $username = "deneme";
        $key = "UxXZCJOo3syjx55AZQpEfoX1L2dP4KL2yfJ2tFxtbTGU4PlykKH8Sngvl1lKWgynWTON7Lo6EfNYkWJhTz2UXzEeTYNgs5Pmf4mtlPMdKuvMFiXh0VGJMwa01IXmG046rNXVCxXyKWGehbIFxlS50uwirFOIIlp3DUALuz0GgTuQATIdNVsSHUuxW71JTGYI0TTvvDxiEqWXan8tUV5FzYqHE26kXhJ4x4RgI5EtljPQC6RKyUOznDc0bRQ88ND7";
        $result = $this->opencartService->token($baseUrl,$username,$key);
        dd($result);
    }
}
