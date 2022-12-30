<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\subjectModel;


class subjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $subject = subjectModel::all();
        return view('subject.index', ['subject' => $subject,]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->post('subject');
        $img = $request->post('img');
        $subject = new subjectModel;
        $subject->subjectName = $name;
        $subject->imgLink = $img;
        //Como a matéria está sendo criada naquele momento,
        //entende-se que ela não possua nenhum conteúdo
        $subject->contentNumber = 0;
        $subject->user_id = 1;
        $subject->save();

        return redirect(url('/subject'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $subject = subjectModel::find($id);
        return view('subject.show',
            ['subject' => $subject],['pagId' => $id]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = subjectModel::find($id);
        return view('subject.edit', ['subject' => $subject,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subject = subjectModel::find($id);

        if(NULL !== $request->post('subject'))
            $subject->subjectName = $request->post('subject');
        else
            $subject->contentNumber = 1;

        if(NULL !== $request->post('img'))
            $subject->imgLink = $request->post('img');

        $subject->save();

        return redirect()->to(route('subject.show', ['subject'=>$subject->id,]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = subjectModel::where('id', $id)->firstorfail()->delete();
        return redirect()->route('subject.index');
    }
}
