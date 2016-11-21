<?php
/**
 * Created by PhpStorm.
 * User: sanya
 * Date: 19.11.16
 * Time: 22:11
 */

namespace App\Http\Controllers\Profile;

use Auth;
use App\Http\Controllers\Performer\MainController;
use App\Http\Requests;
use App\Models\Member;
use App\Models\Performer;
use App\User;

class IndexController extends MainController
{
    public $type;
    private $person;

    public function __construct()
    {
        $user = User::find(Auth::id());
        $this->type = User::find(Auth::id());
        if($this->type == 'performer') {
            $this->person = Performer::find($user['id']);
        } elseif($this->type == 'member') {
            $this->person = Member::find($user['id']);
        }
    }
    public function index()
    {
        $result = $this->type;
        return view('profile/index')->with('profile', $result );
    }

} 