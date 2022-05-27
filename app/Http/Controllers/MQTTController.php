<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpMqtt\Client\Facades\MQTT;
//use Mqtt;
//use Salman\Mqtt\MqttClass\Mqtt;

class MQTTController extends Controller
{
    public function SendMsgViaMqtt()
    {
        $output = MQTT::publish('ebbc06a8-ae19-46d3-8662-c19268c68466/control', 'Hello World!');

        if ($output === true)
        {
            return 'thành công';
        }

        return false;
    }
}
