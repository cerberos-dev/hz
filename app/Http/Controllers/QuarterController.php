<?php

namespace App\Http\Controllers;

use App\Models\Quarter;
use Illuminate\Http\Request;

/**
 * Controller to manage Quarter CRUD.
 * @package App\Http\Controllers
 * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
 * Class QuarterController
 */
class QuarterController extends Controller
{

    /**
     * Show all Quarters.
     * @author Marius van Zundert <marius.vanzundert@youaredigital.nl>
     * @return mixed
     */
    public function index()
    {
        return response(Quarter::all());
    }
}
