<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posting = [
            [
            "title" => "Judul Satu",
            "slug" => "judul-satu",
            ],
            [
            "title" => "Judul Dua",
            "slug" => "judul-dua",
            ]
        ];

        return view('posts', [
            'menu' => "posts",
            "posts" => $posting
        ]);
    }

    public function show($slug){
        $posting = [
            [
            "title" => "Judul Satu",
            "slug" => "judul-satu",
            "author" => "Ricky",
            "desc" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora incidunt nihil quod quam natus exercitationem minus sit, dignissimos officiis amet, excepturi tempore quis blanditiis numquam nulla eaque quos aliquam qui. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut vel aliquam obcaecati deserunt, aspernatur omnis quisquam exercitationem aut reprehenderit incidunt. Itaque quisquam nobis tenetur tempora praesentium magnam in quod reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur at, quidem ad sed culpa, tempora voluptates qui tempore aliquam atque veniam voluptas nostrum repudiandae veritatis aut, ab facilis beatae itaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae fugiat iste nobis veniam harum quae soluta blanditiis, modi nisi a quas suscipit laudantium porro iusto obcaecati voluptatum sint magnam maiores."
            ],
            [
            "title" => "Judul Dua",
            "slug" => "judul-dua",
            "author" => "Ricky",
            "desc" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora incidunt nihil quod quam natus exercitationem minus sit, dignissimos officiis amet, excepturi tempore quis blanditiis numquam nulla eaque quos aliquam qui. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut vel aliquam obcaecati deserunt, aspernatur omnis quisquam exercitationem aut reprehenderit incidunt. Itaque quisquam nobis tenetur tempora praesentium magnam in quod reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur at, quidem ad sed culpa, tempora voluptates qui tempore aliquam atque veniam voluptas nostrum repudiandae veritatis aut, ab facilis beatae itaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae fugiat iste nobis veniam harum quae soluta blanditiis, modi nisi a quas suscipit laudantium porro iusto obcaecati voluptatum sint magnam maiores."
            ]
        ];

        $new_post = [];
        foreach ($posting as $post) {
            if($post["slug"] == $slug) {
                $new_post = $post;
            }
        }

        return view('post', [
            "menu" => "Single Post",
            "post" => $new_post
        ]);
    }
}
