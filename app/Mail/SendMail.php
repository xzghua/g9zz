<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $type;
    public $replier;
    public $name;
    public $articleAddress;
    public $article;
    public $content;

    /**
     * SendMail constructor.
     * @param $type
     * @param string $replier
     * @param string $name
     * @param string $articleAddress
     * @param string $article
     * @param string $content
     */

    public function __construct($type,$replier = '',$name = '',$articleAddress = '',$article = '',$content = '')
    {
        $this->type = $type;
        $this->replier = $replier;
        $this->name = $name;
        $this->articleAddress = $articleAddress;
        $this->article = $article;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        switch ($this->type) {
            case 'reply':
                $this->reply();
                break;
            case 'vote':
                $this->vote();
                break;
            case 'attention':
                break;
            case 'verify':
                break;

            default:
                break;
        }


        return $this->reply();
    }


    public function reply()
    {
        $data = [
            'replier' => $this->replier,
            'name' => $this->name,
            'articleAddress' => $this->articleAddress,
            'article' => $this->article,
            'content' => $this->content
        ];
        return $this->view('emails.reply',$data);
    }

    public function vote()
    {
        return $this->view('emails.test');
    }

    public function attention()
    {

    }

    public function verify()
    {

    }
}
