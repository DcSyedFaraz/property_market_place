<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;
use Str;
class TeamController extends Controller
{
   public function index()
    {
        $members = TeamMember::all();
        return view('admin.team.index', compact('members'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:team_members,email',
        'slug' => 'nullable|string|max:255|unique:team_members,slug',
        'position' => 'required',
        'description' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'facebook' => 'nullable|url',
        'twitter' => 'nullable|url',
        'linkedin' => 'nullable|url',
        'instagram' => 'nullable|url',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);
        $data['image'] = $imageName;
    }
    $data['slug'] = Str::slug($request->name);

    TeamMember::create($data);
    return redirect()->route('team.index')->with('success', 'Team member added!');
}


    public function edit(TeamMember $team)
    {
        return view('admin.team.edit', compact('team'));
    }

   public function update(Request $request, TeamMember $team)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:team_members,email,' . $team->id,
        'slug' => 'nullable|string|max:255|unique:team_members,slug',
        'position' => 'required',
        'description' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'facebook' => 'nullable|url',
        'twitter' => 'nullable|url',
        'linkedin' => 'nullable|url',
        'instagram' => 'nullable|url',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
        // Delete old image
        if ($team->image && file_exists(public_path('uploads/' . $team->image))) {
            unlink(public_path('uploads/' . $team->image));
        }

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);
        $data['image'] = $imageName;
    }

    $data['slug'] = Str::slug($request->name);

    $team->update($data);
    return redirect()->route('team.index')->with('success', 'Team member updated!');
}


    public function destroy(TeamMember $team)
    {
        $team->delete();
        return redirect()->route('team.index')->with('success', 'Team member deleted!');
    }
}
