<?php


 use App\Post;
 use App\User;
  use App\Role;
  use App\Country;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*  
-----------------
DATABASE Raw SQL Queries 
------------------
*/

// Route::get('/insert', function () {


// 	DB::insert(' insert into posts(title,content) values(?,?) ',['php with laravel', ' laravel is tbe bes thing that has heppend to php ']);
  


// });



// Route::get('/read', function () {

// 		$results=DB::select('select * from posts where id=?',[1] );
// 		// var_dump($results);
// 		// dd($results);
// 		// results array icindekiler obje 
// 	});


// Route::get('/update', function () {

// 	$updated = DB::update('update posts set title="update title" where id = ?', [1]);

// 	return $updated;


// 	});

 // Route::get('/delete', function () {

 // 	$deleted=DB::delete('delete from posts where id = ?', [1] );

 // 	return $deleted;


 // });

/*  
-----------------
ELOQUENT MODEL Object Related model (ORM) 
------------------
*/
// Route::get('/find', function() {

// 	$posts = Post::find(3);

// 	// foreach( $posts as $post) {

// 	// 	echo $post->title;

// 	// }

// 	dd($posts);

// });

 // Route::get('/findwhere', function() { 

 // 	$posts = Post::where('id','>',2)->orderBy('id','desc')->take(2)->get();

 // 	return $posts;

 // });


// Route::get('/findmore', function() {


// 	// $posts = Post::findOrFail(1);

// 	// return $posts ;


// 	$posts = Post::where('users_count' ,'<',50)->firstOrFail();

// 	return $posts;
// });


 // Route::get('/basicinsert', function() {

 // 	$post = Post::find(2);

 // 	$post->title = 'new ORM hjhj';
 // 	$post->content = "wow elequenthjhjhj content";
 // 	$post->save();


 // } );

// Route::get('/create', function() {

// 	Post::create(['title' => " the dfafs",
// 		'content' => "dsfsdfadfdsfasdf"]);
// } );

// Route::get('/update', function() {

// 	Post::where('id',2)->where('is_admin',0)->update(['title'=> 'new php title' , 'content' => 'i love my instructor']);
// }) ;

// Route::get('/delete', function() { 

// 	$post = Post::find(2);

// 	$post->delete();


// });
// Route::get('/delete2', function() { 

// 	// Post::destroy(3);

// 	Post::destroy([4,5]);  // multiple delete

// 	// Post::where('is_admin',0)->delete();


// });

// Route::get('/softdelete' , function() {


// 	Post::find(2)->delete();

// });


// Route::get('/readsoftdelete' , function() {


// 	// $post = Post::find(4);

// 	// return $post;

// 	// return post::withTrashed()->where('id',2)->get();

// 	return post::onlyTrashed()->where('is_admin',0)->get();

// });

// Route::get ('/restore', funct"ion()  {

// 	Post::withTrashed()->where('is_admin',0)->restore();


// } );

// Route::get ('/forcedelete', function()  {

// 	// Post::onlyTrashed()->where('is_admin',0)->forceDelete();

// 	Post::withTrashed()->where('id',2)->forceDelete();


// } );


/*  
-----------------
ELOQUENT Relationship 
------------------
*/

// One to One relationship


// Route::get('/user/{id}/post', function($id) {

// 	return User::find(1)->post->title;
// 	// return User::find(1)->post;

// });


// Route::get('/post/{id}/user', function($id) {

// 	return Post::find($id)->user;
// 	// return User::find(1)->post;

// });

// Route::get('/posts', function() { 

//   $user = User::find(1);

//   foreach ($user->posts as $post )
//  {

//  	echo $post->title;

//  }


// MANY TO MANY


// });

// Route::get('/user/{id}/role', function($id)  {

// 	$user = User::find($id)->roles()->orderBy('id','desc')->get();


// 	return $user;
// 	// foreach ( $user->roles as $role ) {

// 	// 	echo $role->name;

// 	// }

// });


// Route::get('role/{id}/user',function (){
  
 
//  $users = Role::find($id)->users;


//  foreach ($users as $user)      // admin olan kullanıcı isimlerini yazdir
//  {
//  	echo $user->name;
//  }


// } );



// Accessing the inermediate table / pivot


// Route::get('user/pivot',function (){
  
 
//  $user = User::find(1);
													

//  foreach ($user->roles as $role )
//  {
//  		 echo $role->pivot->created_at;
//  }

// } );


Route::get('/user/country',function (){

	$country = Country::find(2); // id si 2 olan country al


    dd($country->posts);
    
	// foreach ($country->posts as $post) { // users tablosunda country id si 2 olanların 
	// 									// postlarını al					
	// 	echo $post->title;
	// 	# code...
	// }

});


// Polymorphic Relations 

Route::get( 'user/photos', function () {

		$user = User::find(1);


		foreach ($user->photos as $photo) {
			# code...
			return $photo;
		}
		

});

