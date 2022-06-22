<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CmsMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Members::all();
        return view('back-end.members.index')->with([
            'members' => $members
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|max:255',
                'image' => 'required|mimes:png,jpg,jpeg|max:4096',
                'redirect' => 'required|max:255',
            ],
            [
                'image.max' => 'De grootte van de foto is te groot! MAX:4MB'
            ]
        );

        $newMember = new Members();
        $newMember->name = $request->name;
        $image = $request->file('image');
        $image->storeAs('members/images', $image->getClientOriginalName());
        $newMember->image_name = $image->getClientOriginalName();
        $newMember->redirect = $request->redirect;
        $newMember->active = 1;
        $newMember->slug = SlugService::createSlug(Members::class, 'slug', $request->name);
        $newMember->save();

        return redirect(route('admin.members.index'))->with('success', 'Succesvol een nieuw lid aangemaakt');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $member = Members::where('slug', $slug)->firstOrFail();
        return view('back-end.members.edit')->with([
            'member' => $member
        ]);
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
        $request->validate(
            [
                'name' => 'required|max:255',
                'image' => 'mimes:png,jpg,jpeg|max:4096',
                'redirect' => 'required|max:255',
            ],
            [
                'image.max' => 'De grootte van de foto is te groot! MAX:4MB'
            ]
        );

        $newMember = Members::findOrFail($id);
        $newMember->name = $request->name;
        if ($request->has('image')) {
            if(File::exists(asset('members/images/' . $newMember->image_name))) {
                File::delete(asset('members/images/' . $newMember->image_name));
            }
            $image = $request->file('image');
            $image->storeAs('members/images', $image->getClientOriginalName());
            $newMember->image_name = $image->getClientOriginalName();
        }
        $newMember->redirect = $request->redirect;
        $newMember->active = 1;
        if($newMember->title != $request->title) {
            $newMember->slug = SlugService::createSlug(Members::class, 'slug', $request->name);
        }
        $newMember->update();

        return redirect(route('admin.members.index'))->with('success', 'Succesvol lid aangepast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Members::findOrFail($id)->delete();
        return redirect(route('admin.members.index'))->with('success', 'Succesvol het lid verwijderd!');
    }
}
