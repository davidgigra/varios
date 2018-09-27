<?php

namespace SebasLaravelInicial\Http\Controllers;

use SebasLaravelInicial\Trainer;
use SebasLaravelInicial\Custom\classTest;
use sebasPrueba\Services\CvHandler;
use SebasLaravelInicial\Http\Requests\StoreEntrenadorRequest;


use Illuminate\Http\Request;

class TrainerController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$trainers = Trainer::all();
		// $test = new classTest();
		// $test = new CvHandler();
		// $prueba = $test->sayHello();

		return view('trainers.index', compact('trainers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('trainers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(StoreEntrenadorRequest $request)
	{
		// $validados = $request->validate([
		// 	'nombre' => 'required|max: 10',
		// 	'avatar' => 'required|image',
		// 	'slug' => 'required'
		// ]);
		// return $request->all();
		// return $request->input('nombre');


		
		if($request->hasFile('avatar')){
			$file = $request->file('avatar');
			$name = time().$file->getClientOriginalName();
			$file->move(public_path().'/images/', $name);
		}

		$trainer = new Trainer();

		$trainer->nombre = $request->input('nombre');
		$trainer->descripcion = $request->input('descripcion');
		$trainer->slug = $request->input('slug');
		$trainer->avatar = $name;

		$trainer->save();

		// return 'Guardado';

		return redirect()->route('trainers.index');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(Trainer $trainer)
	{
		// $trainer = Trainer::where('slug', '=', $slug)->firstOrFail();

		return view('trainers.show', compact('trainer'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Trainer $trainer)
	{
		return view('trainers.edit', compact('trainer'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Trainer $trainer)
	{
		$trainer->fill($request->except('avatar'));
		if($request->hasFile('avatar')){
			$file = $request->file('avatar');
			$name = time().$file->getClientOriginalName();
			$trainer->avatar = $name;
			$file->move(public_path().'/images/', $name);
		}
		$trainer->save();


		// return 'Se actualizo correctamente';

		return redirect()->route('trainers.show',[$trainer])->with('status', 'El entrenador se actualizó correctamente');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Trainer $trainer)
	{
		$file_path = public_path().'/images/'.$trainer->avatar;
		\File::delete($file_path);
		$trainer->delete();
		// return 'Deleted';
		return redirect()->route('trainers.index');
	}
}
