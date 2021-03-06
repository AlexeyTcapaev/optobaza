<?php

namespace App\Http\Controllers;

use App\Page;
use Exception;
use Illuminate\Http\Request;
use App\Navbar;

class PageController extends Controller
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
            $page = Page::create($request->all());
            if ($request->nav) {
                Navbar::create(['page_id' => $page->id]);
            }
            if (empty($page))
                throw new Exception('Ошибка при создании продукта');
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return redirect()->route('admin.pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $page->fill($request->all());
        $page->save();
        $nav = Navbar::where('page_id', $page->id)->first();
        if ($request->has('nav')) {
            if ($request->nav == 'on') {
                if (!$nav) {
                    Navbar::create(['page_id' => $page->id]);
                }
            }
        } elseif($nav) {
            $nav->delete();
        }
        return redirect()->route('admin.pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        if ($page->has('nav')) {
            Navbar::where('page_id', $page->id)->delete();
        }
        $page->delete();
        return redirect()->route('admin.pages');
    }
}
