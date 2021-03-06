<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class Employees extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index($id == null)
	{
		if ($id == null) {
			return Employee::orderBy('id', 'asc')->get();
		}else{
			return $this->show($id);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$employee = new Employee;
		$employee->name = $request->input('name');
		$employee->email = $request->input('email');
		$employee->contact_number = $request->input('contact_number');
		$employee->position = $request->input('position');
		$employee->save();

		return 'Gusrdado'. $employee->id;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		return Employee::find($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$employee = Employee::find($id);
		$employee->name = $request->input('name');
		$employee->email = $request->input('email');
		$employee->contact_number = $request->input('contact_number');
		$employee->position = $request->input('position');
		$employee->save();

		return "Actualizado ". $employee->id;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$employye = Employee::find($request->input('id'));
		$employee->delete();
		return "Eliminado ".$request->input('id');
	}
}
