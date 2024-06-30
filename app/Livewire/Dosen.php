<?php

namespace App\Livewire;

use Livewire\Component;

class Dosen extends Component
{
    public $nidn, $nama, $email, $alamat, $makul, $updateDosen = false, $addDosen = false; // definisikan variabelnya dulu
    public function render() // function ini yang dipanggil di blade dengan @livewire('dosen')
    {
        $dosen = \App\Models\Dosen::latest()->get();
        return view('livewire.dosen.dosen', compact('dosen'));
    }

    protected $rules = [
        'nidn' => 'required',
        'nama' => 'required',
        'email' => 'required',
        'alamat' => 'required',
        'makul' => 'required'
    ];

    public function resetFields()
    {
        $this->nidn = '';
        $this->nama = '';
        $this->email = '';
        $this->alamat = '';
        $this->makul = '';
    }

    public function create()
    {
        $this->resetFields();
        $this->addDosen = true;
        $this->updateDosen = false;
    }

    public function store()
    {
        $this->validate();
        try {
            \App\Models\Dosen::create([
                'nidn' => $this->nidn,
                'nama' => $this->nama,
                'email' => $this->email,
                'alamat' => $this->alamat,
                'makul' => $this->makul,
            ]);
            session()->flash('success', 'Data Dosen berhasil simpan!!');
            $this->resetFields();
            $this->addDosen = false;
        } catch (\Exception $ex) {
            session()->flash('error', 'Ada kesalahan dalam proses penyimpanan!! ' . $ex);
        }
    }

    public function edit($nidn)
    {
        try {
            $dosen = \App\Models\Dosen::findOrFail($nidn);
            if (!$dosen) {
                session()->flash('error', 'Dosen not found');
            } else {
                $this->nidn = $dosen->nidn;
                $this->nama = $dosen->nama;
                $this->email = $dosen->email;
                $this->alamat = $dosen->alamat;
                $this->makul = $dosen->makul;
                
                $this->updateDosen = true;
                $this->addDosen = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error', 'Gagal menyimpan!!');
        }
    }


    public function ups($nidn = "")
    {
        // $mahasiswa = \App\Models\Mahasiswa::findOrFail($nim);
        $this->updateDosen = true;
    }

    public function update()
    {
        $this->validate();
        try {
            \App\Models\Dosen::whereNidn($this->nidn)->update([
                'nidn' => $this->nidn,
                'nama' => $this->nama,
                'email' => $this->email,
                'alamat' => $this->alamat,
                'makul' => $this->makul,
            ]);

            session()->flash('success', 'Data Dosen berhasil di update!!');
            $this->resetFields();
            $this->updateDosen = false;
        } catch (\Exception $ex) {
            session()->flash('error', 'Ada kesalahan/gagal update!! ' . $ex);
        }
    }

    public function cancel()
    {
        $this->addDosen = false;
        $this->updateDosen = false;
        $this->resetFields();
    }

    public function destroy($nidn)
    {
        try {
            \App\Models\Dosen::find($nidn)->delete();
            session()->flash('success', "Data Dosen berhasil dihapus!!");
        } catch (\Exception $e) {
            session()->flash('error', "Terdapat kesalahan/gagal menghapus!!");
        }
    }
}
