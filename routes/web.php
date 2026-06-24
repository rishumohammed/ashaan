<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Work;
use App\Models\SiteSetting;

Route::get('/', function () {
    $settings = SiteSetting::all()->mapWithKeys(fn($s) => [$s->key => $s->type === 'image' ? $s->image_url : $s->value])->toArray();
    $works = Work::with('category')->where('is_featured', true)->orderBy('sort_order', 'asc')->take(7)->get();
    return view('index', compact('settings', 'works'));
});

Route::get('/index.html', function () {
    return redirect('/');
});

Route::get('/admin', function () {
    return redirect('/admin/works');
});

Route::get('/work.html', function () {
    return redirect('/work');
});

Route::get('/work', function () {
    $settings = SiteSetting::all()->mapWithKeys(fn($s) => [$s->key => $s->type === 'image' ? $s->image_url : $s->value])->toArray();
    $categories = Category::withCount('works')->orderBy('sort_order', 'asc')->get();
    $works = Work::with('category')->orderBy('sort_order', 'asc')->get();
    return view('work', compact('settings', 'categories', 'works'));
});

Route::get('/studio.html', function () {
    return redirect('/about');
});

Route::get('/about.html', function () {
    return redirect('/about');
});

Route::get('/about', function () {
    $settings = SiteSetting::all()->mapWithKeys(fn($s) => [$s->key => $s->type === 'image' ? $s->image_url : $s->value])->toArray();
    return view('about', compact('settings'));
});

Route::get('/services.html', function () {
    return redirect('/services');
});

Route::get('/services', function () {
    $settings = SiteSetting::all()->mapWithKeys(fn($s) => [$s->key => $s->type === 'image' ? $s->image_url : $s->value])->toArray();
    return view('services', compact('settings'));
});

Route::get('/contact.html', function () {
    return redirect('/contact');
});

Route::get('/contact', function () {
    $settings = SiteSetting::pluck('value', 'key')->toArray();
    return view('contact', compact('settings'));
});
