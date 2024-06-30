<div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @if (!$addDosen)
                    <button wire:click="create()" class="btn btn-primary btn-sm float-end">Tambah Data Dosen</button>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NIDN</th>
                                <th>Dosen</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Makul</th>
                                <th> ACTION </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dosen as $data)
                                <tr>
                                    <td>
                                        {{ $data->nidn }}
                                    </td>
                                    <td>
                                        {{ $data->nama }}
                                    </td>
                                    <td>
                                        {{ $data->email }}
                                    </td>
                                    <td>
                                        {{ $data->alamat }}
                                    </td>
                                    <td>
                                        {{ $data->makul }}
                                    </td>
                                    <td>
                                        <button wire:click="edit('{{ $data->nidn }}')"
                                            class="btn btn-primary btn-sm">Edit</button>
                                        <button wire:click="destroy('{{ $data->nidn }}')"
                                            class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" align="center">
                                        Data Dosen Kosong
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class="col-md-12 mb-2">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session()->get('error') }}
            </div>
        @endif
        @if ($addDosen)
            @include('livewire.dosen.create')
        @endif
        @if ($updateDosen)
            @include('livewire.dosen.update')
        @endif
    </div>
</div>
