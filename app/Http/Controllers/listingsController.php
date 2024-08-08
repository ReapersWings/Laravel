<?php

namespace App\Http\Controllers;
use App\Models\listings;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class listingsController extends Controller
{
    public function show(){
        //dd(listings::latest()->filter(request(['tag','search']))->get());
        return view('listing',[
            'listing'=>listings::latest()->filter(request(['tag','search']))->paginate(6)
        ]);
    }

    //laravel part 7 start
    public function view1(){
        return view('/create');
    }

    public function insert1(Request $request){
        $formtable=$request->validate([
            'title'=>'required',
            'age_limit'=>'nullable|numeric',
            'company'=>['required',Rule::unique('listings','company')],
            'tag'=>'required',
            'location'=>'required',
            'email'=>['required','email'],
            'website'=>'required',
            'description'=>'required'
        ]);
        if ($request->hasFile('logo')) {
            $formtable['logo']=$request->file('logo')->store("logo","public");
        }
        $formtable['user_id']=auth()->id();    
        //dd($formtable);
        listings::create($formtable);
        return redirect('create')->with('massage','insert complete');
    }
     //laravel part 7 end
     public function show1(listings $listing){
        //dd($listing);
        return view('listout2',[ 'data'=>$listing ]);
     }
     //laravel part 9 start
     public function update1(listings $data){
        return view('edit',[
            'data'=>$data
        ]);
     }
     public function update2(listings $data , Request $request){
        $updateform=$request->validate([
            'title'=>'required',
            'age_limit'=>'nullable|numeric',
            'company'=>'required',
            'tag'=>'required',
            'location'=>'required',
            'email'=>['required','email'],
            'website'=>'required',
            'description'=>'required'
        ]);
        if ($request->hasFile('logo')) {
            $updateform['logo']=$request->file('logo')->store("logo","public");
        }
        $data->update($updateform);
        return redirect()->route('updateedit')->with('massage','Edit successful');
     }
     public function delete1(listings $data){
        $data->delete();
        return redirect('/listing')->with('massage','delete successful');
     }
     //laravel part 9 end
     //laravel part 12 start 
     public function manage(){
        return view('manage_listing',['datas'=>auth()->user()->listings()->get()]);
     }
     //laravel part 12 end 
     //laravel part 13 start
     public function search(Request $request){
        $listing=$request->search!=""?listings::where('title','LIKE','%'.$request->search.'%')->where('user_id','=',''.auth()->id())->get():auth()->user()->listings()->get();
        //return response()->json($listing);
        if ($listing) {
            return response()->json([
                'html'=>view("partials._search",compact('listing'))->render()
            ]);
        }else{
            return response()->json(['message'=>'Product not found'],404);
        }
     }
     //laravel part 13 end
}
