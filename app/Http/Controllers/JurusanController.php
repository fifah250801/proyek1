<?php
namespace App\Http\Controllers;
use App\models\Jurusan;
use Illuminate\Http\Request;
use App\models\Mahasiswa;
class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $mhs = Mahasiswa::all();
    return view('jurusan.index', compact('jur'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $jur=Jurusan::all();
    return view('jurusan.create',compact('jur'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $this->validate($request, [
    'id' => 'required',
    'jurusan' => 'required',
    ]);
    $jur = new Jurusan;
    $jur->id = $request->id;
    $jur->jurusan = $request->jurusan;
    $jur->save();
    return redirect()->route('jurusan.index')
    ->with('message',
    'Jurusan baru berhasil ditambahkan!');
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $mhs = Jurusan::find($id);
    $jur = Mahasiswa::all();
    return view('jurusan.edit',compact('jur','mhs'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id' => 'required',
            'jurusan' => 'required',
            ]);
            $jur = new Jurusan;
            $jur->id = $request->id;
            $jur->jurusan = $request->jurusan;
            $jur->save();
            return redirect()->route('jurusan.index')
            ->with('message',
            'Jurusan baru berhasil diubah!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    //
    }
}