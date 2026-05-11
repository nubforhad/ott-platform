<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Catagory;
use App\Models\Video;

class HomeController extends Controller
{
  public function home(){
    $room   = Room::latest()->take(3)->get();
    $videos = Video::with('category')->latest()->get();
    return view('frontend.pages.home', compact('room', 'videos'));
}

    public function about(){
        return view('frontend.pages.about');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function team(){
        return view('frontend.pages.team');
    }

    public function donation(){
        return view('frontend.pages.donation');
    }

    public function testimonial(){
        return view('frontend.pages.testimonial');
    }

    public function feature(){
        return view('frontend.pages.feature');
    }
    

    public function error404(){
        return view('frontend.pages.error404');
    }

    public function room(){
        $room = Room::all();
        return view('frontend.pages.room', compact('room'));
    }
    public function roomdetails($id){
       $room = Room::findOrFail($id);
        return view('frontend.pages.roomdetails', compact('room'));
    }
    public function booking(){
        return view('frontend.pages.booking');
    }

    
    public function service(){
        return view('frontend.pages.service');
    }

    
    
    public function policy(){
        return view('frontend.pages.policy');
    }
    
    public function termsCondition(){
        return view('frontend.pages.termsCondition');
    }

    public function adminroom(){
        $room = Room::all();
        return view('adminroom', compact('room'));
    }

    public function storeroom(Request $request)
    {
        // validation
        $request->validate([
            'title' => 'required|string|max:255',
            'bed' => 'required|integer',
            'bath' => 'required|integer',
            'price' => 'required',
            'description' => 'nullable|string',
            'floor' => 'required|string|max:50',
        ]);

        // store data
       $room = Room::create([
            'title' => $request->title,
            'bed' => $request->bed,
            'bath' => $request->bath,
            'price' => $request->price,
            'description' => $request->description,
            'floor' => $request->floor,
        ]);

        // redirect back with success message
        return redirect()->route('adminroom', $room)
                        ->with('success', 'Property created successfully!');
    }


    // catagory
    public function catagoryadmin(){
        $categories = Catagory::latest()->get();
        return view('layouts.catagoryadmin', compact('categories'));
    }

    public function createcatagory(){
        return view('layouts.createcatagory');
    }

    public function catagorystore(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'title' => 'required',
            'count' => 'required|numeric',
        ]);

        Catagory::create([
            'name'  => $request->name,
            'title' => $request->title,
            'count' => $request->count,
        ]);

        return redirect()
                ->route('catagoryadmin')
                ->with('success', 'Category Created Successfully');
    }

    public function catagorydestroy($id)
    {
        $category = Catagory::findOrFail($id);

        $category->delete();

        return redirect()
                ->route('catagoryadmin')
                ->with('success', 'Category Deleted Successfully');
    }



    // video function 
    public function videoadmin(){
        
        $videos = Video::with('category')->latest()->get();
        return view('layouts.videoadmin', compact('videos'));

    }
    public function createvideo()
    {
        $categories = Catagory::all();

        return view('layouts.createvideo', compact('categories'));
    }
    
     public function videosstore(Request $request)
{
    $request->validate([
        'name'        => 'required|string|max:255',
        'title'       => 'required|string|max:255',
        'catagory_id' => 'required',   // ✅ matches form name
        'iframe'      => 'required',
        'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'description' => 'nullable|string',
    ]);

    $imagePath = null;
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imageName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/videos'), $imageName);
        $imagePath = 'uploads/videos/' . $imageName;
    }

    Video::create([
        'name'        => $request->name,
        'title'       => $request->title,
        'catagory_id' => $request->catagory_id,  // ✅ fixed
        'iframe'      => $request->iframe,
        'image'       => $imagePath,
        'description' => $request->description,
    ]);

    return redirect()
        ->route('videoadmin')
        ->with('success', 'Video created successfully');
}

 public function deletevideo($id)
{
    $video = Video::findOrFail($id);

    // যদি image থাকে তাহলে delete করা (optional but good practice)
    if ($video->image && file_exists(public_path($video->image))) {
        unlink(public_path($video->image));
    }

    $video->delete();

    return redirect()
        ->route('videoadmin')
        ->with('success', 'Video deleted successfully');
}

}
