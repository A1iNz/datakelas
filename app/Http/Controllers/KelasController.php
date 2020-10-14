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
	
	public function create() {
		return view('kelas.create');
	}

	public function edit($id) {
		$model = Kelas::findOrFail($id);
        return View('Kelas.edit', compact('model'));
	}

	public function store(Request $request) {   
        $request->validate(self::validationRule());
        if (Kelas::create($request->all())) {    
            return [
                'success' => true,
                'message' => 'Data berhasil disimpan'
            ];
        } else {
            return [
                'success' => false,
                'message' => 'Data gagal disimpan'
            ];
        }
    }

	public function update(Request $request, $id) {   
        $request->validate(self::validationRule());
        $model = Kelas::findOrFail($id);
        if ($model->update($request->all())) {    
            return [
                'success' => true,
                'message' => 'Data berhasil '
            ];
        } else {
            return [
                'success' => false,
                'message' => 'Data gagal diperbarui'
            ];
        }
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
	
	public function validationRule() {
		return [
			'nama' => 'required',
			'kelas' => 'required',
			'nis' => 'required|numeric'
		];	
	}
}
