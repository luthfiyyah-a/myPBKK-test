<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function show(): View
    {
        $topics = [
            (object)['id' => 1, 'judul' => 'bikin app pbkk', 'dosen' => 'John Doe', 'status' => 'belum diambil'],
            (object)['id' => 2, 'judul' => 'desain pengalaman app pbkk', 'dosen' => 'Jane Smith', 'status' => 'sudah diambil'],
        ];
        
        return view('dashboard.penawaran-topik', [
            'topics' => $topics,
            'nama' => 'Luthfiyyah'
        ]);
    }
}
