<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class Task2ZodiakController extends Controller
{
    public function index(Request $request)
    {
    	$day = $request->input('day');
    	$month = $request->input('month');

    	$zodiak = $this->zodiak($day, $month);

    	return Response::json([
   			'zodiak' => $zodiak
   		]);
    }

    public function zodiak($day, $month)
    {
    	$zodiak = '';

    	$data = array(
		    1 => array('name' => 'Козерог', 'till' => 21), // Январь
		    2 => array('name' => 'Водолей', 'till' => 20), // Февраль
		    3 => array('name' => 'Рыбы', 'till' => 21), // Март
		    4 => array('name' => 'Овен', 'till' => 21), // Апрель
		    5 => array('name' => 'Телец', 'till' => 22), // Май
		    6 => array('name' => 'Близнецы', 'till' => 22), // Июнь
		    7 => array('name' => 'Рак', 'till' => 24), // Июль
		    8 => array('name' => 'Лев', 'till' => 24), // Август
		    9 => array('name' => 'Дева', 'till' => 24), // Сентярбь
		    10 => array('name' => 'Весы', 'till' => 24), // Открябрь
		    11 => array('name' => 'Скорпион', 'till' => 23), // Ноябрь
		    12 => array('name' => 'Стрелец', 'till' => 22), // Декабрь
		);

		$data[13] =& $data[1];

		If ( $data[$month]['till'] >= $day ) {
			$zodiak = $data[$month]['name'];
		} else {
			$month += 1;
			$zodiak = $data[$month]['name'];
		}

		return $zodiak;
    }
}
