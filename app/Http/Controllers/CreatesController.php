<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Article;

class CreatesController extends Controller
{
    public function home(){
    	$articles = Article::all();
    	return view('home',['articles'=>$articles]);
/*    	echo "<pre>";
    	print_r($articles);
    	echo "</pre>";*/
    }

    public function add(Request $request){
    	$this->validate($request,[
            'nombre' => 'required',
            'edad' => 'required',
            'telefono' => 'required',
            'razon' => 'required',
            'email' => 'required',
            'departamento' => '',
            'fecha' => 'required',
            'doctor' => '',
            'tiempo' => 'required',
    	]);

    	$articles = new Article;
    	$articles->nombre = $request->input('nombre');
    	$articles->edad = $request->input('edad');
    	$articles->telefono = $request->input('telefono');
    	$articles->razon = $request->input('razon');
    	$articles->email = $request->input('email');
    	$articles->departamento = $request->input('departamento');
    	$articles->fecha = $request->input('fecha');
    	$articles->doctor = $request->input('doctor');
    	$articles->tiempo = $request->input('tiempo');

    	$articles->save();
    	return redirect('/')->with('info','Article Saved Successfully!');
    } 

    public function update($id){
    	$articles = Article::find($id);
    	return view('update',['articles'=>$articles]);
    	/* check 
    	echo '<pre>';
    	print_r($articles);
    	echo "</pre>";
    	exit();*/    	
    } 

    public function edit(Request $request, $id){
    	$this->validate($request,[
            'nombre' => 'required',
            'edad' => 'required',
            'telefono' => 'required',
            'razon' => 'required',
            'email' => 'required',
            'departamento' => 'required',
            'fecha' => 'required',
            'doctor' => 'required',
            'tiempo' => 'required',
    	]);
    	$data = array(
    	    'nombre' => $request->input('nombre'),
        'edad' => $request->input('edad'),
        'telefono' => $request->input('telefono'),
        'razon' => $request->input('razon'),
        'email' => $request->input('email'),
        'departamento' => $request->input('departamento'),
        'fecha' => $request->input('fecha'),
        'doctor' => $request->input('doctor'),
        'tiempo' => $request->input('tiempo'),


			'title' => $request->input('title'),
    		'description' => $request->input('description')
    	);
    	Article::where('id',$id)
    	->update($data);
    	return redirect('/')->with('info','Article Updated Successfully!');
    } 

    public function read($id){
    	$articles = Article::find($id);
    	//return $id;
    	return view('read',['articles'=>$articles]);
    }

    public function delete($id){
		Article::where('id',$id)
		->delete();
		return redirect('/')->with('info','Article Deleted Successfully!');
    } 
}
