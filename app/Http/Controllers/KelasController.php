<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class kelasController extends Controller
{
    public function index() {
    	return View('Kelas.index');
    }

    public function get() {
    	$model = Kelas::all();
    	return View('Kelas.get', compact('model'));
    }

    public function delete($id) {
    	$model = Kelas::find($id);    	
    	if ($model) {
    		if ($model->delete()) {
    			return [
	    			'success' => true,
	    			'message' => 'Data berhasil dihapus'
	    		];
    		} else {
    			return [
	    			'success' => false,
	    			'message' => 'Data gagal dihapus'
	    		];
    		}
    	} else {
    		return [
    			'success' => false,
    			'message' => 'Data tidak ditemukan'
    		];
    	}
    }
}
