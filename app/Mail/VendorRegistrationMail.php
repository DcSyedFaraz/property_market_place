<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VendorRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The vendor registration data.
     *
     * @var array
     */
    public array $data;

    /**
     * Create a new message instance.
     *
     * @param array $data
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Vendor Registration')
            ->markdown('emails.vendor_registration')
            ->with(['data' => $this->data]);
    }
}
