<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Post;
use App\Support\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('created_at', 'DESC')->limit(3)->get();

        $head = $this->seo->render(
            env('APP_NAME') . ' - Home',
            'Site voltado para o aprendizado',
            url('/'),
            asset('images/fundoSite.jpg')
        );

        return view('front.home', [
            'head' => $head,
            'posts' => $posts
        ]);
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();

        $head = $this->seo->render(
            env('APP_NAME') . ' - Blog',
            'Site voltado para o aprendizado',
            url('/'),
            asset('images/fundoSite.jpg')
        );

        return view('front.blog', [
            'head'=>$head,
            'posts'=>$posts
            ]);
    }

    public function article($uri)
    {
        $post = Post::where('uri', $uri)->first();

        $head = $this->seo->render(
            env('APP_NAME') . $post->title,
            $post->subtitle,
            url('/blog/'. $uri),
            asset(\App\Support\Cropper::thumb($post->cover, 800, 450))
        );

        return view('front.article', [
            'head'=>$head,
            'post'=>$post
            ]);
    }


    public function contact()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - Contato',
            'Site voltado para o aprendizado',
            url('/'),
            asset('images/fundoSite.jpg')
        );
        return view('front.contact', [ 'head'=>$head ]);
    }

    public function sendMail(Request $request)
    {
        $data = [
            'reply_name' => $request->first_name . " " . $request->last_name,
            'reply_email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        Mail::send(new ContactMail($data));
        return redirect()->route('contact');
        // return new ContactMail($data);
    }
}
