<?php

namespace App\Http\Controllers;

use App\Models\DomainDescription;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CmsDomainDescriptionController extends Controller
{
    public function index()
    {
        $domainDescriptions = DomainDescription::all();
        return view('back-end.domain_description.index')->with([
            'domainDescriptions' => $domainDescriptions
        ]);
    }

    public function create()
    {
        $targetAudienceOptions = DomainDescription::getEnum('TargetAudience');
        return view('back-end.domain_description.create')->with([
            'targetAudienceOptions' => $targetAudienceOptions
        ]);
    }

    public function edit($slug)
    {
        $domainDescription = DomainDescription::where('slug', $slug)->firstOrFail();
        $targetAudienceOptions = DomainDescription::getEnum('TargetAudience');
        
        return view('back-end.domain_description.edit')->with([
            'domainDescription' => $domainDescription,
            'targetAudienceOptions' => $targetAudienceOptions
        ]);
    }

    public function show($slug)
    {
        $domainDescription = DomainDescription::where('slug', $slug)->firstOrFail();
        return view('back-end.domain_description.show')->with([
            'domainDescription' => $domainDescription
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'type' => 'required',
            'download-url' => 'nullable|url',
            'target_audience' => ['required', Rule::in(DomainDescription::getEnum('TargetAudience'))]
        ],
        [
            'title.max' => 'De lengte van de titel is te lang ... maximaal 255 tekens.',
        ]
        );

        $newDomainDescription = new DomainDescription();
        $newDomainDescription->title = $request->title;
        $image = $request->file('image');
        $image->storeAs('domain-description/images', $image->getClientOriginalName());
        $newDomainDescription->image_name = $image->getClientOriginalName();
        $newDomainDescription->type = $request->type;
        $newDomainDescription->target_audience = $request->target_audience;

        $newDomainDescription->slug = SlugService::createSlug(DomainDescription::class, 'slug', $request->title);

        switch ($request->type) {
            case 1:
                $newDomainDescription->link = $request['redirect-url'];
                break;
            case 2:
                $file = $request->file('download-url');
                $file->storeAs('domain-description/files', $file->getClientOriginalName());
                $newDomainDescription->link = $file->getClientOriginalName();
                break;
            case 3:
                $newDomainDescription->description = $request['editor_content'];
                break;
        }

        $newDomainDescription->save();

        return redirect(route('admin.domain.description.index'))->with('sucess', 'Succesvol een nieuwe domein beschrijving aangemaakt');
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'mimes:png,jpg,jpeg|max:2048',
            'type' => 'required',
            'target_audience' => ['required', Rule::in(DomainDescription::getEnum('TargetAudience'))]
        ]);

        $editDomainDescription = DomainDescription::findOrFail($id);
        $editDomainDescription->title = $request->title;
        if ($request->has('image')){
            $image = $request->file('image');
            $image->storeAs('domain-description/images', $image->getClientOriginalName());
            $editDomainDescription->image_name = $image->getClientOriginalName();
        }
        $editDomainDescription->type = $request->type;
        $editDomainDescription->target_audience = $request->target_audience;

        // Update news article slug if a new title is given
        if($editDomainDescription->title != $request->title) {
            $editDomainDescription->slug = SlugService::createSlug(DomainDescription::class, 'slug', $request->title);
        }

        switch ($request->type) {
            case 1:
                $editDomainDescription->link = $request['redirect-url'];
                break;
            case 2:
                if ($request->has('download-url')){
                    $file = $request->file('download-url');
                    $file->storeAs('domain-description/files', $file->getClientOriginalName());
                    $editDomainDescription->link = $file->getClientOriginalName();
                }
                break;
            case 3:
                $editDomainDescription->description = $request['editor_content'];
                break;
        }
        $editDomainDescription->save();

        return redirect(route('admin.domain.description.index'))->with('sucess', 'Succesvol domein beschrijving aangepast!');
    }

    public function destroy($id) {
        $delete = DomainDescription::findOrFail($id)->delete();
        return redirect(route('admin.domain.description.index'))->with('sucess', 'Succesvol het artikel verwijderd!');
    }
}
