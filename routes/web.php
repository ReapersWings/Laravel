<?php

use App\Http\Controllers\listingsController;
use App\Http\Controllers\usercontroller;
use App\Http\Middleware\checkage;
use App\Http\Middleware\checklogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\demo;
use App\Models\demos;
use App\Models\fruit;
use App\Models\listings;
use App\Models\userdatas;

Route::get('/', function () {
    return view('main');
});

//laravel part 5.2 start
Route::get('/fruit',function(){
    return view('fruit',[
        "data"=>fruit::all()
    ]);
});
Route::get('/fruit/{id}',function($id){
    return response(
        fruit::find($id)
    );
});
//laravel part 5.2 End

Route::get('/listdatabase', function () {
    return view('demo',[
        "demo"=>demo::all()
    ]);
});
Route::get('/listdatabase/{id}', function ($id) {
    return response(demo::where("d_id","=","$id")->get());
});
Route::get('/listdata',function(){
    return view('demo',[
        "demo"=>demos::all()
    ]);
});
Route::get('/listdata/{id}',function($id){
    return response(demos::find($id));
});


Route::get('/list/{id}', function ($id){
        $student=[
            [
                "id"=>1 ,
                "name"=>"student1",
                "age"=>16
            ],[
                "id"=>2 ,
                "name"=>"student2",
                "age"=>17
            ],[
                "id"=>3 ,
                "name"=>"student3",
                "age"=>18
            ]
        ];
        foreach ($student as $row ) {
            if ($row['id']==$id) {
                return response($row) ;
            }
        }
});

Route::get('/main', function () {
    return view('listout',[
        "student"=>[
            [
                "id"=>1 ,
                "name"=>"student1",
                "age"=>16
            ],[
                "id"=>2 ,
                "name"=>"student2",
                "age"=>17
            ],[
                "id"=>3 ,
                "name"=>"student3",
                "age"=>18
            ]
        ]
    ]);
});

Route::get('/calculater', function (Request $request){
    return response($request->num1."+".$request->num2."=".$request->num1+$request->num2."<br>".$request->num1."-".$request->num2."=".$request->num1-$request->num2."<br>".$request->num1."x".$request->num2."=".$request->num1*$request->num2."<br>".$request->num1."/".$request->num2."=".$request->num1/$request->num2."<br>");
})/*->where("num1","[0-9]+")->where("num2","[0-9]+")*/;

Route::get('/look/{id}', function ($id) {
    return response("This my word ".$id);
})->where("id","[a-z]+");

Route::get('/index', function () {
    return view('index');
});

Route::post('/index', function (Request $request) {
    return dd("Usernasme:".$request->username,"Password:".$request->password);
});

Route::get('/multiply/{id}', function ($id) {
    return view('multiply',[
        'math'=>$id
    ]);
});

Route::get('/listout', function () {
    //dd(userdatas::all());
    return view('listouttwo',[
        'data'=>[
            userdatas::all()
        ]
    ]);
});
Route::get('/listout/{id}', function ($id) {
    return view('listoutstwo',[
        'data'=>[
            userdatas::where("id","=","$id")->get()
        ]
    ]);
});
//Laravel part 6 start
Route::get('/listing',[listingsController::class,'show']);
// Route::get('/listing',[listingsController::class,'display']);
//Laravel part 6 end

//Laravel part 7 start
Route::get('/create',[listingsController::class,'view1'])->middleware(checklogin::class);
Route::post('/create',[listingsController::class,'insert1']);
//Laravel part 7 end
//laravel part 8 start
Route::get('/listing/{listing}',[listingsController::class,'show1'])->middleware(checklogin::class)->middleware(checkage::class);
//laravel part 8 end 
//laravel part 9 start
Route::get('/listing/edit/{data}',[listingsController::class,'update1'])->name('updateedit');
Route::put('/listing/{data}',[listingsController::class,'update2'])->name('updateedit1');
Route::delete('/listing/delete/{data}',[listingsController::class,'delete1'])->name('deletedata');
//laravel part 9 end 
//laravel part 10 start
Route::get('/register',[usercontroller::class,'register'])->name('register');
Route::post('/register',[usercontroller::class,'f_register'])->name('f_register');
Route::post('/logout',[usercontroller::class,'logout'])->name('logout');
//laravel part 10 end
//laravel part 11 start
Route::get('/login',[usercontroller::class,'login'])->name('login');
Route::post('/login',[usercontroller::class,'f_login'])->name('f_login');
//laravel part 11 end
//laravel part 12 start 
Route::get('/manage',[listingsController::class,'manage'])->name('manage');
//laravel part 12 end 
//laravel part 13 start
Route::post('/manage/search',[listingsController::class,'search'])->name('search');
//laravel part 13 end
?>