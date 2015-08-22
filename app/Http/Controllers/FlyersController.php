<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FlyerRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Flyer;
use App\Photo;
use Illuminate\Support\Facades\Auth;

class FlyersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except'=>['show']]);

        parent::__construct();

       /* view()->share('signedIn', Auth::check());

        view()->share('user', Auth::user());*/
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('flyers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //flash('Hello world', 'This is the message');
        //flash()->success('Success!','Your flyer has been created');
        //flash()->overlay('Success!','Your flyer has been created');

        return view('flyers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(FlyerRequest $request)
    {
        //validate the form
        //persist the flyer
        //redirect to landing page

        Flyer::create($request->all());

        //flash()->error('Success!','Your flyer has been created');
         flash()->overlay('Success!','Your flyer has been created');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($zip, $street)
    {
        $flyer =  Flyer::locatedAt($zip, $street);
       //return Flyer::where(compact('zip', 'street'))->first();

        return view('flyers.show', compact('flyer'));
    }


     /**
     * Function for adding photo.
     *
     * @param  int  $id
     * @return Response
     */

    public function addPhoto($zip, $street, Request $request)
    {
        /*$this->validate($request, [
            'photo' => 'required|mimes:jpg, jpeg, png, bmp'
        ]);*/

       // $file = $request->file('photo');

       

        $photo = $this->makePhoto($request->file('photo'));

       // $flyer = Flyer::locatedAt($zip, $street);

        //$flyer->photos()->create(['path' => "/flyers/photos/{$name}"]);

        //$file->move($photo->baseDir, $name);


        Flyer::locatedAt($zip,$street)->addPhoto($photo);

    }

    public function makePhoto(UploadedFile $file)
    {
         //return Photo::fromForm($file)->store($file);
         return Photo::named($file->getClientOriginalName())
                                    ->move($file);
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
