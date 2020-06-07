<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Webklex\IMAP\Client;
use Webklex\IMAP\Exceptions\ConnectionFailedException;
use Webklex\IMAP\Exceptions\GetMessagesFailedException;
use Webklex\IMAP\Exceptions\InvalidMessageDateException;
use Webklex\IMAP\Exceptions\MailboxFetchingException;
use Webklex\IMAP\Exceptions\MaskNotFoundException;
use Webklex\IMAP\Folder;
use Webklex\IMAP\Message;
use Webklex\IMAP\Support\FolderCollection;
use Webklex\IMAP\Support\MessageCollection;

class TestLaravelImap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test_laravel_imap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @throws ConnectionFailedException
     * @throws GetMessagesFailedException
     * @throws InvalidMessageDateException
     * @throws MailboxFetchingException
     * @throws MaskNotFoundException
     */
    public function handle()
    {
        echo "test laravel-imap start\n";

        $client = new Client();
        $client->connect();

        /** @var FolderCollection $folder */
        $folder = $client->getFolder('test');

        $messages = $folder->messages()->all()->get();

        /** @var Message $message */
        foreach ($messages as $message) {
            echo '添付ファイル件数：' . $message->getAttachments()->count() . "\n";
            echo "件名：" . $message->getSubject() . "\n";
            echo "本文：" . $message->getTextBody() . "\n";

            // 添付ファイル保存
            if ($message->hasAttachments()) {
                foreach ($message->getAttachments() as $attachment) {
                    Storage::disk('local')->put('file.png', $attachment->content);
                }
            }
        }
        echo "test laravel-imap end\n";
    }
}
