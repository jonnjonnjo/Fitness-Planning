<?php

namespace App\Controllers;

class Calorie extends BaseController
{
    public function index()
    {
        $alldata = $this->request->getGet();
        $sendData = array();
        $caloriesCutted = substr($alldata['calories'], 0, strlen($alldata) - 6);
        $walk = new Activity('walk', $caloriesCutted);
        $pushup = new Activity('push up', $caloriesCutted);
        $situp = new Activity('sit up', $caloriesCutted);

        $sendData[] = $walk;
        $sendData[] = $pushup;
        $sendData[] = $situp;


        return $this->response->setStatusCode(200)->setJSON($sendData);
    }
}


class Activity
{
    public $activityType;
    public $quantity;
    public $unit;

    public function __construct($type, $calories)
    {
        if ($type == 'walk') {
            $this->activityType = 'walk';
            $this->quantity = ($calories * 1609.34) / 100;
            $this->unit = "meters";
        } else if ($type == 'push up') {
            $this->activityType = $type;
            $this->quantity = ($calories) / 3;
            $this->unit = "times";
        } else {
            $this->activityType = $type;
            $this->quantity = ($calories) / 2;
            $this->unit = "times";
        }

    }
}