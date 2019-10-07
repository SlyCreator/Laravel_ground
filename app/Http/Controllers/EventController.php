<?php

namespace App\Http\Controllers;


use App\Events\TestEvent;
use Illuminate\Http\Request;
use Log;
use Event;
use Illuminate\Events\Dispatcher;

class EventController extends Controller
{
    public function testEvent(){
        try {
                
                Log::info('=== Hello  ========');
                Event::fire(new TestEvent());
                return 'hello';
          } catch(Exception $ex) {
             Log::info('Error'. $e->getMessage());
         
             return $ex;
          }
        }
}
