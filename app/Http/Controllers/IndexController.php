<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IndexController extends Controller
{
   public $cats=['phones', 'watches', 'sportwear', 'other'];
               
//   public $phones = [
//     "id" => [
//         1,2,3
//     ],
//     "name" => [
//         "iphone11","iphone12","iphone13"
//     ],
//     "price" => [
//       "10000","12000","13000"
//     ]
//   ];
// public $watches = [
//     "id" => [
//           "1","2","3"
//       ],
//       "name" => [
//           "rolex","casio","versace"
//       ],
//       "price" => [
//         "10000","12000","13000"
//       ]
//       ]; 

//   public $sportwear = [
//         "id" => [
//               "1","2","3"
//           ],
//           "name" => [
//               "top","sneakers","hairband"
//           ],
//           "price" => [
//             "100","120","10"
//           ]
//           ]; 
      
public $products = [
    ['id'=>0, 'name'=>"phone1", 'price'=>4000 ],
    ['id'=>1, 'name'=>"phone2", 'price'=>5000 ],
    ['id'=>2, 'name'=>"phone3", 'price'=>6000 ],
    ['id'=>3, 'name'=>"phone4", 'price'=>700 ],
    ['id'=>4, 'name'=>"watch1", 'price'=>700 ],
    ['id'=>5, 'name'=>"watch2", 'price'=>800 ],
    ['id'=>6, 'name'=>"watch3", 'price'=>800 ],
    ['id'=>7, 'name'=>"watch3", 'price'=>800 ],
    ['id'=>8, 'name'=>"sportwear", 'price'=>800 ],
    ['id'=>9, 'name'=>"sportwear", 'price'=>800 ],
    ['id'=>10, 'name'=>"sportwear", 'price'=>800 ],
    ['id'=>11, 'name'=>"sportwear", 'price'=>800 ],

];
      
    public function home()
    {
         
       // return view('home')->with(['categories' => $this->cats,  'phones' => $this->phones, 'watches' => $this->watches,
    //'sportwear'=>$this->sportwear]);
    return view('home')->with(['categories' => $this->cats,  'products' => $this->products]);
    }

    public function viewProduct($id)
    {
        
      return view('details')->with(['product' => $this->products[$id]]);
        // return view('details')->with(['categories' => $cats,  'phones' => $phones, 'watches' => $watches,
        // 'sportwear'=>$sportwear]);
    }

    // public function categories(){

    // }
}
