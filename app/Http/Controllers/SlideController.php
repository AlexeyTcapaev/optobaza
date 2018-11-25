<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        try {
            $slide = Slide::add($request);
            $slide->uploadImage($request->file('image'));
            if (empty($slide))
                throw new Exception('Ошибка при создании продукта');
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return redirect()->route('admin.carousel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        try {
            $slide = Slide::findOrFail($id);
            if (empty($slide))
                return response()->json(['error' => 'Компания не найдена'], 404);
            else {
                $linked = explode(",", $request->linked);
                $request['linked_id'] = $linked[0];
                $request['linked_type'] = $linked[1];
                $slide->update($request->all());
                if ($request->hasFile('image')) {
                    $slide->uploadImage($request->file('image'));
                }
            }
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return redirect()->route('admin.carousel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $slide = Slide::findOrFail($id);
            if (empty($slide))
                return response()->json(['error' => 'Компания не найдена'], 404);
            else {
                $slide->remove();
                return redirect()->route('admin.carousel');
            }
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
