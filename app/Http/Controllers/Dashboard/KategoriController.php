<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Validator;
use Carbon\Carbon;
use Auth;
use DB;
use DateTime;
use DateInterval;
use stdClass;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->route      ='dashboard.kategori.';
        $this->view       ='dashboard.kategori.';
        $this->with_query = [];
        
        
    }
   
    public function index(Request $request){
        $datas      = Kategori::with($this->with_query)
        ->get(); 
        $arrReturn  = [
            'arrData' => $datas,
        ];
        return view($this->view.'index',$arrReturn);
    }
  
    public function detailJson(Request $request,$id){
        $data = Kategori::with($this->with_query)
        ->where('id',$id)->first();
       
        return $this->success('Permintaan berhasil diproses.',$data);
        
    }
    

    
    public function edit(Request $request,$id){
       
        $data = Kategori::with($this->with_query)
        ->where('id',$id)->first();
        

        $arrReturn  = [
            'data'      => $data,
            
            
        ];
        return view($this->view.'edit',$arrReturn);

    }
    public function destroy(Request $request,$id){
        $data = Kategori::find($id);
        if($data){
            $data->delete();
        }
        return $this->success("berhasil dihapus");
    }
    public function update(Request $request,$id){
       
        $this->validate($request, [
            
             'nama'                     =>'required',
            
           
            
            
        ]);
       
       
        $arrUpdate=[
            

             'nama'                     =>$request->nama,
           
           
        ];
        

       
        $updateKategori=Kategori::where('id',$id)
        ->update($arrUpdate);
        return redirect()->route($this->route.'index')
        ->with('success', 'Sukses');
    }

    public function store(Request $request){
        $this->validate($request, [
            
             'nama'                     =>'required',
          
           
            
            
        ]);
       
       
        $arrCreate=[
            

             'nama'                     =>$request->nama,
            
           
        ];
       
       
        $createKategori=Kategori::create($arrCreate);
        return redirect()->route($this->route.'index')
        ->with('success', 'Sukses');
    }
    public function create(Request $request){
      
        

        $arrReturn  = [
            
            //'arrKategori'  => $kategori,
            
        ];
        return view($this->view.'create',$arrReturn);
    }
}
