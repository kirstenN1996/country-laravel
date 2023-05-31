<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
include('simple_html_dom.php');


class AdminController extends Controller
{
	public function index($user){
		$user = User::findOrFail($user);
		$html = new \simple_html_dom();
		$html->load_file('https://www.worldometers.info/coronavirus/');

		$table = $html->find('#main_table_countries_today', 0);

		$tableData = [];

		foreach ($table->find('tr') as $row) {
    			$rowData = [];
    			$rowData['country'] = $row->find('td', 1) ? trim($row->find('td', 1)->plaintext) : '';
    			$rowData['total_cases'] = $row->find('td', 2) ? trim($row->find('td', 2)->plaintext) : '';
    			$rowData['new_cases'] = $row->find('td', 3) ? trim($row->find('td', 3)->plaintext) : '';
    			$rowData['total_deaths'] = $row->find('td', 4) ? trim($row->find('td', 4)->plaintext) : '';
    			$rowData['new_deaths'] = $row->find('td', 5) ? trim($row->find('td', 5)->plaintext) : '';
    			$rowData['total_recovered'] = $row->find('td', 6) ? trim($row->find('td', 6)->plaintext) : '';

    			$tableData[] = $rowData;
		}

		//$jsonData = json_encode($tableData);
		//error_log($jsonData);
		//die();
        	return view('admin.index', ['data' => $tableData]);
    	}
}
