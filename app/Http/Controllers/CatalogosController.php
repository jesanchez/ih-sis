<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;

// repositorios para afectar la base de datos

use App\Repositories\NivelesRepositoryEloquent;
use App\Repositories\ProgramasRepositoryEloquent;
use App\Repositories\GruposRepositoryEloquent;

class CatalogosController extends Controller
{
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $niveles;
    protected $programas;
    protected $grupos;

    public function __construct(
    	NivelesRepositoryEloquent $niveles,
		ProgramasRepositoryEloquent $programas,
		GruposRepositoryEloquent $grupos
    )
    {
        try
        {
	    	$this->niveles = $niveles;
	    	$this->programas = $programas;
	    	$this->grupos = $grupos;

        }catch (\Exception $e){
        	dd($e->getMessage());
        }

    }

    /**
     * agregar niveles
     * 
     * @param
     *
     * @return void
     */
    public function agregar_nivel(Request $request)
    {

    	try
    	{
    		$info = array (
	    		"descripcion" => $request->nivel,
	    		"status" => 1,
	    	);

	    	$this->niveles->create( $info );

    	}catch(\Exception $e){
    		Log::info("[Catalogos::agregar_nivel] " . $e->getMessage());
    	}
    }

    /**
     * editar niveles
     * 
     * @param
     *
     * @return void
     */
    public function editar_nivel(Request $request)
    {

    	try
    	{
    		$info = array (
	    		"descripcion" => $request->nivel,
	    		"status" => 1,
	    	);

	    	$this->niveles->update( $info , $request->i);
	    	
    	}catch(\Exception $e){
    		Log::info("[Catalogos::editar_nivel] " . $e->getMessage());
    	}
    }

    /**
     * eliminar niveles
     * 
     * @param
     *
     * @return void
     */
    public function eliminar_nivel(Request $request)
    {

    	try
    	{
    		$info = array (
	    		"status" => 0,
	    	);

	    	$this->niveles->update( $info , $request->i);
	    	
    	}catch(\Exception $e){
    		Log::info("[Catalogos::eliminar_nivel] " . $e->getMessage());
    	}
    }

    /**
     * agregar programas
     * 
     * @param
     *
     * @return void
     */
    public function agregar_programa(Request $request)
    {

    	try
    	{
    		$info = array (
	    		"descripcion" => $request->programa,
	    		"status" => 1,
	    	);

	    	$this->programas->create( $info );

    	}catch(\Exception $e){
    		Log::info("[Catalogos::agregar_programa] " . $e->getMessage());
    	}
    }

    /**
     * editar programas
     * 
     * @param
     *
     * @return void
     */
    public function editar_programa(Request $request)
    {

    	try
    	{
    		$info = array (
	    		"descripcion" => $request->programa,
	    		"status" => 1,
	    	);

	    	$this->programas->update( $info , $request->i);
	    	
    	}catch(\Exception $e){
    		Log::info("[Catalogos::editar_programa] " . $e->getMessage());
    	}
    }

    /**
     * eliminar programas
     * 
     * @param
     *
     * @return void
     */
    public function eliminar_programa(Request $request)
    {

    	try
    	{
    		$info = array (
	    		"status" => 0,
	    	);

	    	$this->programas->update( $info , $request->i);
	    	
    	}catch(\Exception $e){
    		Log::info("[Catalogos::eliminar_programa] " . $e->getMessage());
    	}
    }

    /**
     * agregar grupos
     * 
     * @param
     *
     * @return void
     */
    public function agregar_grupo(Request $request)
    {

    	try
    	{
    		$info = array (
	    		"descripcion" => $request->grupo,
	    		"status" => 1,
	    	);

	    	$this->grupos->create( $info );

    	}catch(\Exception $e){
    		Log::info("[Catalogos::agregar_grupo] " . $e->getMessage());
    	}
    }

    /**
     * editar grupos
     * 
     * @param
     *
     * @return void
     */
    public function editar_grupo(Request $request)
    {

    	try
    	{
    		$info = array (
	    		"descripcion" => $request->grupo,
	    		"status" => 1,
	    	);

	    	$this->grupos->update( $info , $request->i);
	    	
    	}catch(\Exception $e){
    		Log::info("[Catalogos::editar_grupo] " . $e->getMessage());
    	}
    }

    /**
     * eliminar grupos
     * 
     * @param
     *
     * @return void
     */
    public function eliminar_grupo(Request $request)
    {

    	try
    	{
    		$info = array (
	    		"status" => 0,
	    	);

	    	$this->grupos->update( $info , $request->i);
	    	
    	}catch(\Exception $e){
    		Log::info("[Catalogos::eliminar_grupo] " . $e->getMessage());
    	}
    }

}
