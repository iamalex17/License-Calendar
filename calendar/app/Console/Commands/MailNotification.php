<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Event;
use App\User;
use Mail;

class MailNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notify user of events in calendar';

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
        $now = new \DateTime(null, new \DateTimeZone('Europe/Bucharest'));
        $events = Event::where('created_at', $now->format('Y-m-d'))->get();

        foreach ($events as $event) {
            $currentTime = $now->format('H:i');

            if ($currentTime == $event->alert) {
                $user = User::find($event->user_id);

                $data = array(
                    'username'   => $user->name,
                    'email'      => $user->email,
                    'eventTitle' => $event->title,
                    'eventStart' => $event->start,
                );

                Mail::send('emails.notification', $data, function ($message) use ($data) {
                    $message->from('lex.greenapple@gmail.com', 'The Calendar');
                    $message->to($data['email'])->subject('Friendly reminder');
                });
            }
        }
    }
}
