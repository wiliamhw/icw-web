<?php

namespace Database\Seeders;

use App\Models\Bill;
use App\Models\Event;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = Event::all();
        $bills = Bill::all();
        $status = ['success', 'pending', 'failed'];
        $count_event = count($events);

        // Get 20 users excluding the admin account
        $users = User::orderBy('id', 'asc')->where('id', '>', $count_event + 1)->take(20)->get();

        // first event will have a minimum of 20 pending user
        $events->first()->users()->attach(
            $users->random(20)->pluck('id')->toArray(), [
                'payment_status' => 'pending',
                'payment_receipt_path' => 'payment_receipts/default.png',
                'paper_path' => 'papers/dummy.pdf',
                'paper_grade' => 0.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );

        // remove first events
        $events = $events->filter(function ($event) {
            return $event->id != 1;
        });

        // Populate event_user pivot table
        $users->each(
            function ($user) use ($events, $status) {
                $user->events()->attach(
                    $events->random(rand(1, 3))->pluck('id')->toArray(), [
                        'payment_status' => $status[array_rand($status)],
                        'payment_receipt_path' => 'payment_receipts/default.png',
                        'gdrive_path' => 'https://drive.google.com/drive/folders/1j-INK9t6Iq5RAabfM-aKuCwBLMOgi5Zm?usp=sharing',
                        'created_at'  => Carbon::now(),
                        'updated_at'  => Carbon::now()
                    ]
                );
            }
        );
        DB::table('event_user')->where('event_id', 3)->update([
            'gdrive_path'          => null,
        ]);
        DB::table('event_user')->where('event_id', 4)->update([
            'gdrive_path'          => null,
            'payment_receipt_path' => null,
        ]);

        // Populate bill_event pivot table
        $events->each(
            function ($event) use ($bills) {
                $event->bills()->attach(
                    $bills->random(rand(1, 3))->pluck('id')->toArray(),
                    ['created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
                );
            }
        );
    }
}
