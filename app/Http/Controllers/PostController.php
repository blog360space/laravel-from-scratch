<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Carbon\Carbon;

class PostController extends Controller
{
    
    public function __construct() 
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {      
        $posts = Post::orderBy('created_at', 'desc')
                ->filter(request(['year', 'month']))
                ->get();
        
        $archives = Post::selectRaw(
                    'YEAR(created_at) AS `year`, 
                    MONTHNAME(created_at) AS `month`,
                    COUNT(id) AS published')
                ->groupBy('year', 'month')
                ->orderByRaw('min(created_at) desc')
                ->get()
                ->toArray();        

        return view('post.index', [ 
            'posts' => $posts,
            'archives' => $archives
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',            
        ]);
        
        $data = request(['title', 'body']);
        $data['user_id'] = auth()->user()->id;
        Post::create($data);
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Post $post)
    {
        return view('post.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
