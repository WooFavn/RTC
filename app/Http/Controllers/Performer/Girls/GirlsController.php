<?php
/**
 * Created by PhpStorm.
 * User: sanya
 * Date: 04.09.16
 * Time: 15:44
 */

namespace app\Http\Controllers\Performer\Girls;

use App\Http\Controllers\Performer\MainController;
use App\Http\Requests;
use App\Models\Performer;

class GirlsController extends MainController
{
    private $type = 'Female';
    public $girls;

    public function showList()
    {
        $this->girls = new Performer();
        $result = $this->girls->getActivePerformer($this->type);
        return view('all')->with('list', $result);
    }
}