<?php

namespace App\Console\Commands;

use App\Models\Pesan;
use Carbon\Carbon;
use Illuminate\Console\Command;

class batalUnpay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pesanan:unpay';

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
        $pesan = Pesan::where('status', 1)->where('expired_at', '<=', now())->get();
        foreach($pesan as $pes){
            $pes->status = 4;
            $pes->save();
        }
    }
}
