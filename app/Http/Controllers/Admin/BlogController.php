<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }
    public function store(Request $request)
    {
        $locales = ['en', 'ar'];

        $validated = $request->validate([
            'image' => 'nullable|file|mimes:jpg,jpeg,png,pdf,docx',
            'target_audience' => 'required',
            'title.*' => 'required|string|max:255',
            'slug.*' => 'nullable|string|max:255',
            'description.*' => 'required|string',
        ]);
        $blog = Blog::create([
            'image' => $request->file('image')?->store('blogs', 'public'),
            'target_audience' => $request->target_audience,
        ]);

        foreach ($locales as $locale) {
            $blog->translations()->create([
                'locale' => $locale,
                'title' => $validated['title'][$locale],
                'slug' => $validated['slug'][$locale] ?? \Str::slug($validated['title'][$locale]),
                'description' => $validated['description'][$locale],
            ]);
        }
        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog'));
    }



    public function update(Request $request, Blog $blog)
    {
        $locales = ['en', 'ar'];

        $validated = $request->validate([
            'title.*' => 'required|string|max:255',
            'slug.*' => 'nullable|string|max:255',
            'description.*' => 'required|string',
            'target_audience' => 'required|in:UAE,International',
            'image' => 'nullable|file|mimes:jpg,jpeg,png,pdf,docx',
        ]);

        if ($request->hasFile('image')) {
            $blog->image = $request->file('image')->store('blogs', 'public');
        }

        $blog->target_audience = $request->target_audience;
        $blog->save();

        foreach ($locales as $locale) {
            $blog->translations()->updateOrCreate(
                ['locale' => $locale],
                [
                    'title' => $validated['title'][$locale],
                    'slug' => $validated['slug'][$locale] ?? Str::slug($validated['title'][$locale]),
                    'description' => $validated['description'][$locale],
                ]
            );
        }

        return redirect()->route('blogs.index')->with('status', 'Blog updated successfully.');
    }
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
