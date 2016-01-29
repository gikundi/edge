<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Hook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class GithubController extends Controller {

    private $client;

    /*
     * Github username
     *
     * @var string
     * */
    private $username;

    public function __construct(\Github\Client $client) {
        $this->client = $client;
        $this->username = env('$user');
    }

    public function index() {

        try {

            $repos = $this->client->api('current_user')->repositories();


            $username = $repos[0]['full_name'];

            $currentuser = explode('/', $username);

            $name = $repos[0]['name'];

            $issues = $this->client->api('issue')->all($currentuser[0], $name, array('state' => 'open'));


            $title = $issues[0]['title'];

            $body = $issues[0]['body'];



            return View::make('home', ['repos' => $repos, 'title' => $title, 'body' => $body, 'issue' => $issues]);
        } catch (\RuntimeException $e) {
            $this->handleAPIException($e);
        }
    }

    public function addComment($comment) {

        $repos = $this->client->api('current_user')->repositories();


        $username = $repos[0]['full_name'];

        $currentuser = explode('/', $username);

        $name = $repos[0]['name'];

        $new_comment = $this->client->api('issue')->comments()->create($currentuser[0], $name, 4, array('body' => $comment));


        return View::make('home');
    }

}
