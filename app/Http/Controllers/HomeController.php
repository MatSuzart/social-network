<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Usuario;
use App\Post;
use App\Relacionamento;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){

       $this->middleware('authorizer');

    }

    public function index()
    { 
        $rel= Relacionamento::all();
        return view('home', compact('rel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createPost($id){
        $postsData = $request->all();

        $u = Usuario::find($id);
        if(isset($u)){

            $post = new Post();
            $post->usuario()->create($postsData);

        }


    }
    public function myPost(){
        $post = Post::All();

       return view('home', compact('post'));
    }
}
