<?php

namespace App\Livewire;

use Livewire\Component;

class Makul extends Component
{
    public $idm, $nama, $sks, $updateMakul = false, $addMakul = false; // definisikan variabelnya dulu
    public function render() // function ini yang dipanggil di blade dengan @livewire('makul')
    {
        $makul = \App\Models\Makul::latest()->get();
        return view('livewire.makul.makul', compact('makul'));
    }

    protected $rules = [
        'idm' => 'required',
        'nama' => 'required',
        'sks' => 'required'
    ];

    public function resetFields()
    {
        $this->idm = '';
        $this->nama = '';
        $this->sks = '';
    }

    public function create()
    {
        $this->resetFields();
        $this->addMakul = true;
        $this->updateMakul = false;
    }

    public function store()
    {
        $this->validate();
        try {
            \App\Models\Makul::create([
                'idm' => $this->idm,
                'nama' => $this->nama,
                'sks' => $this->sks
            ]);
            session()->flash('success', 'Data Makul berhasil simpan!!');
            $this->resetFields();
            $this->addMakul = false;
        } catch (\Exception $ex) {
            session()->flash('error', 'Ada kesalahan dalam proses penyimpanan!! ' . $ex);
        }
    }

    public function edit($idm)
    {
        try {
            $makul = \App\Models\Makul::findOrFail($idm);
            if (!$makul) {
                session()->flash('error', 'Makul not found');
            } else {
                $this->idm = $makul->idm;
                $this->nama = $makul->nama;
                $this->sks = $makul->sks;
                $this->updateMakul = true;
                $this->addMakul = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error', 'Gagal menyimpan!!');
        }
    }


    public function ups($idm = "")
    {
        // $mahasiswa = \App\Models\Mahasiswa::findOrFail($nim);
        $this->updateMakul = true;
    }

    public function update()
    {
        $this->validate();
        try {
            \App\Models\Makul::whereIdm($this->idm)->update([
                'idm' => $this->idm,
                'nama' => $this->nama,
                'sks' => $this->sks,
            ]);

            session()->flash('success', 'Data Makul berhasil di update!!');
            $this->resetFields();
            $this->updateMakul = false;
        } catch (\Exception $ex) {
            session()->flash('error', 'Ada kesalahan/gagal update!! ' . $ex);
        }
    }

    public function cancel()
    {
        $this->addMakul = false;
        $this->updateMakul = false;
        $this->resetFields();
    }

    public function destroy($idm)
    {
        try {
            \App\Models\Makul::find($idm)->delete();
            session()->flash('success', "Data Makul berhasil dihapus!!");
        } catch (\Exception $e) {
            session()->flash('error', "Terdapat kesalahan/gagal menghapus!!");
        }
    }
}
