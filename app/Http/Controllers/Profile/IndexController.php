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
use Illuminate\Http\Request;
use App\Models\Country;
use App\User;

class IndexController extends MainController
{
    public $typeOfUser;
    public $person;

    public function index()
    {
        $this->typeOfUser = User::find(Auth::id());
        if($this->typeOfUser['role'] == 'performer') {
            $this->person = User::find(Auth::id())->performer;
            $this->person['country'] = User::find(Auth::id())->country['country_name'];
            return view('profile/performer/index')->with('profile', $this->person);
        } elseif($this->typeOfUser['role']  == 'member') {
            $this->person = User::find(Auth::id())->member;
            $this->person['country'] = User::find(Auth::id())->country['country_name'];
            return view('profile/member/index')->with('profile', $this->person);
        } else {
            return view('errors/503');
        }
    }

    public function getCountry($country)
    {
        $countryName = Country::where('country_name', 'like', $country.'%')->get();
        return $countryName;
    }
    public function setCountry($country)
    {
        $countryId = Country::where('country_name', '=', $country)->get();
        $user = User::find(Auth::id());
        $user->country_id = $countryId['id'];

    }

} 