<?php

namespace MailChamp\Console\Commands;

use Illuminate\Console\Command;
use MailChamp\Library\Log;
use MailChamp\Library\QuotaTrackerStd;
use MailChamp\Library\QuotaTrackerRedis;
use MailChamp\Library\StringHelper;
use MailChamp\Library\QuotaTracker;
use MailChamp\Model\Campaign;
use MailChamp\Model\User;
use MailChamp\Model\MailList;
use MailChamp\Model\Subscriber;
use MailChamp\Model\TrackingLog;
use MailChamp\Model\AutoEvent;
use MailChamp\Model\SendingServer;
use MailChamp\Model\AutoTrigger;
use MailChamp\Model\SendingServerElasticEmailApi;
use MailChamp\Model\SendingServerElasticEmail;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Validator;

class TestCampaign extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'campaign:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
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
        $this->testImap();
    }

    public function testSmtp() {
        $transport = \Swift_SmtpTransport::newInstance('smtp.elasticemail.com', 2525, 'tls')
          ->setUsername('')
          ->setPassword('')
          ;

        // Create the Mailer using your created Transport
        $mailer = \Swift_Mailer::newInstance($transport);

        // Create a message
        $message = \Swift_Message::newInstance('Wonderful Subject')
          ->setFrom(array('' => 'Asish'))
          ->setTo(array('' => 'Louis'))
          ->setBody('Here is the message itself')
          ;

        // Send the message
        $result = $mailer->send($message);

        var_dump($result);
    }

    public function testImap() {
        // Connect to IMAP server
        $imapPath = "{mail.example.com:993/imap/tls}INBOX";

        // try to connect
        $inbox = imap_open($imapPath, 'user@example.com', 'password');

        // search and get unseen emails, function will return email ids
        $emails = imap_search($inbox, 'UNSEEN');

        if (!empty($emails)) {
            foreach ($emails as $message) {
                var_dump($message);
            }
        }

        // colse the connection
        imap_expunge($inbox);
        imap_close($inbox);
    }
}
