<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Services\EscalaService;
use App\Http\Requests\EscalaRequest;
use LaravelAux\BaseController;
use App\Models\Escala;

class EscalaController extends BaseController
{
    /**
     * UserController constructor.
     *
     * @param EscalaService $service
     * @param EscalaRequest $request
     */
    public function __construct(EscalaService $service)
    {
        parent::__construct($service, new EscalaRequest);
    }

    public function calendario(){

        $data = Escala::with(['user'])->get();
       
        $events = [];

        foreach($data as $ret)
        {
            $events[] = [
                'id' => $ret->id,
                'start' => $ret->start_date,
                'end' => Carbon::parse($ret->start_date)->addHours(2)->format('Y-m-d H:i:s'),
                'title' => $ret->user->name,
                'color' => '#183151'
            ];
        }
        
        return $events;
    }
}