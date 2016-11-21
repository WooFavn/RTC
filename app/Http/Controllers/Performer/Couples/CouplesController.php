<?php
/**
 * Created by PhpStorm.
 * User: sanya
 * Date: 04.09.16
 * Time: 15:44
 */

namespace app\Http\Controllers\Performer\Couples;

use App\Http\Controllers\Performer\MainController;
use App\Http\Requests;
use App\Models\Performer;

class CouplesController extends MainController
{
    private $type = 'Couple';
    public $couples;

    public function showList()
    {
        $this->couples = new Performer();
        $result = $this->couples->getActivePerformer($this->type);
        return view('all')->with('list', $result);
    }
}