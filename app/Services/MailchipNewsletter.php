<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;


class MailchipNewsletter implements Newsletter

{
    public function __construct(protected ApiClient $client)
    {
    }

    public function subscribe(string $email, string $list = null)
    {
        $list ??= config('services.mailchip.lists.subscribers');

        return $this->client->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }
}
