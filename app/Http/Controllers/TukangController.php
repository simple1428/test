<?php

namespace App\Http\Controllers;

use App\Models\Tukang;
use App\Models\Category;
use Illuminate\Http\Request;

class TukangController extends Controller
{ 
    public $category = 'all' ,$total;

    public function __construct(Request $request){
        $this->category = $request->category;
        $this->total = $request->x * $request->y;
    }
    public function index()
    {
        $data = [
            'title' => 'search',
            'categories' => Category::all(),
        ];
        if($this->category == 'all'){
            $data['tukang'] = Tukang::all();  
            $data['category'] = 'All';  
        }else{
            $data['tukang'] = Tukang::where('category_id', $this->category)->get();  
            $data['category'] = $this->category;  
        }; 
        return view('home.pages.search',$data);
    } 

    public function detail(Tukang $tukang)
    {
        $data = [
            'title' => 'detail',
            'tukang' => $tukang,
            'total' => $this->total
        ];
       
        return view('home.pages.detailtukang',$data);
    }

     
 
}