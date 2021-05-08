<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\http\Request;

use App\Models\Companies;

class ComplainesController extends Controller
{
    //
    public function companies(){
        $obj = new Companies();
        $companies = $obj->paginate(100);
        return view('companies',['companies'=>$companies]);
    }
    public function seachcompanies(Request $request){
        $obj = new Companies();
        $search = $obj->search($request->get('search'));
        return view('search',['search'=> $search ]);
    }
}
