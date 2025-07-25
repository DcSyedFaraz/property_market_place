<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use DB;
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
        // Supported locales
        $locales = ['en', 'ar'];

        // 1. Validation
        $validated = $request->validate([
            'image' => 'nullable|file|mimes:jpg,jpeg,png,pdf,docx|max:2048',
            'target_audience' => 'required|string|max:255',
            'title.*' => 'required|string|max:255',
            'slug.*' => 'nullable|string|max:255',
            'description.*' => 'required|string',
        ]);

        // 2. File upload and DB transaction
        DB::beginTransaction();
        try {
            $imagePath = null;
            if ($request->hasFile('image')) {

                $imagePath = $request->file('image')
                    ->store('blog', 'public');
            }

            // 3. Create primary blog record
            $blog = Blog::create([
                'image' => $imagePath,
                'target_audience' => $validated['target_audience'],
            ]);

            // 4. Create translations
            foreach ($locales as $locale) {
                $title = $validated['title'][$locale];
                $slug = $validated['slug'][$locale] ?? Str::slug($title);
                $description = $validated['description'][$locale];

                $blog->translations()->create([
                    'locale' => $locale,
                    'title' => $title,
                    'slug' => $slug,
                    'description' => $description,
                ]);
            }

            DB::commit();

            return redirect()
                ->route('blogs.index')
                ->with('success', 'Blog created successfully.');

        } catch (\Exception $e) {
            DB::rollBack();
            // Log the exception or handle as needed
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['error' => 'Failed to create blog: ' . $e->getMessage()]);
        }
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
