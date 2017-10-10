<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use File;
use App\ArtProject;

class ArtProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = ArtProject::where( 'user_id', '=', auth()->user()->id )->get();
//VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV
        if( ! File::exists( storage_path() . '/app/public/projects/user-' . auth()->user()->id ) )
        {
            File::makeDirectory( storage_path() . '/app/public/projects/user-' . auth()->user()->id, intval( '0777', 8 ), true, true );
        }
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
        \File::cleanDirectory( storage_path() . '/app/public/projects/user-' . auth()->user()->id );

        foreach( $projects as $index => $project )
        {
            $image = explode( 'base64,', $project->project_url );
            // dump( $image );
            file_put_contents( storage_path() . '/app/public/projects/user-' . auth()->user()->id . '/image' . $index . '.png', base64_decode($image[ 1 ]) );
        }
        $my_pics = [];
        $picsInFolder = \File::files( 'storage/projects/user-' . auth()->user()->id );

        foreach( $picsInFolder as $path )
        {
            $my_pics[] = pathinfo( $path );
        }

        return view( 'art-project.index', compact( 'my_pics' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'art-project.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(  );
        $new_art_project = ArtProject::create([
            'project_url' => $request[ 'image_data' ],
            'user_id'     => auth()->user()->id,
        ]);

        $new_art_project->save();

        return redirect()->back();
        
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
}
