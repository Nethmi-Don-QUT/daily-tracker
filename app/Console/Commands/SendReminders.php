<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\DailyReminderMail;

class SendReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-reminders';

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
        /**
         * Users should receive reminders if they haven't posted by 6 p.m.
         */
        $users = User::all();

        foreach ($users as $user) {
            $hasPostedToday = $user->posts()
                ->whereDate('created_at', Carbon::today())
                ->exists();

            if (!$hasPostedToday) {
                Mail::to($user->email)->send(new DailyReminderMail());
            }
        }
    }
}
