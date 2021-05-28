<?php

namespace App\Http\Controllers;

use App\Http\Requests\CmsRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CmsController extends Controller
{
    private $posts;

    public function __construct(Post $posts)
    {
        $this->posts = $posts;
    }

    public function index()
    {
        $posts = $this->posts::latest()->paginate();
        return view('CMS.index', ["posts" => $posts]);
    }

    public function create()
    {
        return view('CMS.create');
    }

    public function store(CmsRequest $request)
    {
        $data = $request->only('title', 'artigo');

        if ($id = $this->posts->verifyPostsExist($request->title)) {
            return $this->update($request, $id);
        }

        if ($request->hasFile('cover') && $request->cover->isValid()) {
            $namefile = str_replace(" ", "_", $request->title) . '.' . $request->cover->extension();
            $imagePath = $request->cover->storeAs('post', $namefile);

            $data['cover'] = $imagePath;
        }

        $posts = $this->posts::create($data);

        return redirect()->route('cms.index');
    }

    public function edit($id)
    {
        $post = $this->posts::find($id);

        if (!$post) {
            return redirect()->back();
        }

        return view('CMS.edit', ['post' => $post]);
    }

    public function update(CmsRequest $request, $id)
    {
        $post = $this->posts::find($id);
        if (!$post) {
            return redirect()->back();
        }

        $data = $request->all();

        if ($request->hasFile('cover') && $request->cover->isValid()) {

            Storage::delete($post->cover);
            $namefile = str_replace(" ", "_", $request->title) . '.' . $request->cover->extension();
            $imagePath = $request->cover->storeAs('post', $namefile);

            $data['cover'] = $imagePath;
        }

        $post->update($data);

        return redirect()->route('cms.index');
    }

    public function show($id)
    {
        $post = $this->posts::find($id);
        if (!$post) {
            return redirect()->back();
        }

        return view('CMS.show', ['post' => $post]);
    }

    public function delete($id)
    {
        $post = $this->posts::find($id);
        if (!$post) {
            return redirect()->back();
        }

        if ($post->cover && Storage::exists($post->cover)) {
            Storage::delete($post->cover);
        }

        $post->delete();
        return redirect()->route('cms.index');
    }
}
