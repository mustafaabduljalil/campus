<?php

namespace App\Http\Controllers;
use App\Enums\Questions;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Support\Facades\Session;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function($botman, $message) {

            if (in_array(strtolower($message), ['hi','hey'])) {
                Session::put('question_number',0);
            }

            if(Session::has('question_number')){
                $questionNumber = Session::get('question_number');
                Session::put('question_number',$questionNumber+1);
            }else{
                Session::put('question_number',0);
            }
            if(in_array(strtolower($message),["yes","hi"])){
                $this->askName($botman);
            }

        });

        $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask(Questions::questions[Session::get('question_number')].'.... please reply with yes or no', function(Answer $answer) {

            $answer = $answer->getText();
            if(in_array($answer,['yes','YES','Yes'])){
                $this->say(Questions::answers[Session::get('question_number')].'... Do you want another question ?');
            }
        });
    }
}
