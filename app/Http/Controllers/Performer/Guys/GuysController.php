<?php
/**
 * Created by PhpStorm.
 * User: sanya
 * Date: 04.09.16
 * Time: 15:44
 */

namespace app\Http\Controllers\Performer\Guys;

use App\Http\Controllers\Performer\MainController;
use App\Http\Requests;
use App\Models\Performer;

class GuysController extends MainController
{
    private $type = 'Male';
    public $guys;

    public function showList()
    {
        $this->guys = new Performer();
        $result = $this->guys->getActivePerformer($this->type);
        return view('all')->with('list', $result);
    }
}