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
use App\Models\Pulsa;

class PulsaController extends Controller
{
    public function __construct()
    {
        $this->route      ='dashboard.pulsa.';
        $this->view       ='dashboard.pulsa.';
        $this->with_query = [];
        
        
    }
   
    public function index(Request $request){
        $datas      = Pulsa::with($this->with_query)
        ->get(); 
        $arrReturn  = [
            'arrData' => $datas,
        ];
        return view($this->view.'index',$arrReturn);
    }
  
    public function detailJson(Request $request,$id){
        $data = Pulsa::with($this->with_query)
        ->where('id',$id)->first();
       
        return $this->success('Permintaan berhasil diproses.',$data);
        
    }
    

    
    public function edit(Request $request,$id){
       
        $data = Pulsa::with($this->with_query)
        ->where('id',$id)->first();
        

        $arrReturn  = [
            'data'      => $data,
            
            
        ];
        return view($this->view.'edit',$arrReturn);

    }
    public function destroy(Request $request,$id){
        $data = Pulsa::find($id);
        if($data){
            $data->delete();
        }
        return $this->success("berhasil dihapus");
    }
    public function update(Request $request,$id){
       
        $this->validate($request, [
            'nomer_hp'       => 'required',
            'id_provider'    => 'required',
            'id_nominal'     => 'required',
            'check_out'      => 'required', 
          
           
            
            
        ]);
       
       
        $arrUpdate=[
            
            'nomer_hp'     => $request->nomer_hp,
            'id_provider'  => $request->id_provider,
            'id_nominal'   => $request->id_nominal,
            'check_out'    => $request->check_out,
           
           
        ];
        

       
        $updatePulsa = Pulsa::where('id',$id)
        ->update($arrUpdate);
        return redirect()->route($this->route.'index')
        ->with('success', 'Sukses');
    }

    public function store(Request $request){
        $this->validate($request, [
            
            'nomer_hp'       => 'required',
            'id_provider'    => 'required',
            'id_nominal'     => 'required',
            'check_out'      => 'required', 
           
            
            
        ]);
       
       
        $arrCreate=[
            

            'nomer_hp'     => $request->nomer_hp,
            'id_provider'  => $request->id_provider,
            'id_nominal'   => $request->id_nominal,
            'check_out'    => $request->check_out,
           
           
        ];
       
       
        $createPulsa =Pulsa::create($arrCreate);
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
