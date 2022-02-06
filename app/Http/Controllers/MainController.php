<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\settings;
use App\Models\ComentModel;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function welcome()
    {
        $review = settings::find(1)->first();
        return view('welcome',['info' => $review]);
    }

    public function add()
    {
        $review = settings::find(1)->first();
        return view('add',['info' => $review]);
    }
    public function portfolio_coment($id)
    {
        return view('portfolio_coment');
    }
    public function portfolio_process($id, Request $data)
    {
        $coment = $data->validate([
            'keywords' => ['required', 'string']
        ]);

        //coment
        $review = new ComentModel();
        $review->product = $id;
        $review->coment = $data->input('coment');
        $review->save();

        return redirect()->route('home');
    }



    public function add_process(Request $data)
    {
        
        $valid = $data->validate([
            'icon' => ['image', 'mimetypes:image/jpeg,image/png'],
            'bgimage' => ['image', 'mimetypes:image/jpeg,image/png'],
            'title' => ['required', 'string'],
            'slogan' => ['required', 'string'],
            'description' => ['required', 'string'],
            'keywords' => ['required', 'string']
        ]);
        
        $review = settings::find(1);

            if(!empty($data->input('icon'))){
                // загрузка файла
                $file = $data->file('icon');
                $upload_folder = 'public/images'; //Создается автоматически
                $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
                Storage::putFileAs($upload_folder, $file, $filename);
                $review->icon = $filename;
            }

            if(!empty($data->input('bgimage'))){

             // загрузка файла
            $file = $data->file('bgimage');
            $upload_folder = 'public/images'; //Создается автоматически
            $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
            Storage::putFileAs($upload_folder, $file, $filename);
            $review->bgimage = $filename;
        }

        $review->title = $data->input('title');
        $review->slogan = $data->input('slogan');
        $review->description = $data->input('description');
        $review->keywords = $data->input('keywords');
        $review->save();

        return redirect()->route('home');

    }

    public function contact_process(Request $data)
    {
        
        $valid = $data->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'subject' => ['required', 'string'],
            'message' => ['required', 'string']
        ]);
    }
}



