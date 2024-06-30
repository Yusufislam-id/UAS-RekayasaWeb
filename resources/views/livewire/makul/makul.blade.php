<div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @if (!$addMakul)
                    <button wire:click="create()" class="btn btn-primary btn-sm float-end">Tambah Data Makul</button>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Mata Kuliah</th>
                                <th>SKS</th>
                                <th> ACTION </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($makul as $data)
                                <tr>
                                    <td>
                                        {{ $data->idm }}
                                    </td>
                                    <td>
                                        {{ $data->nama }}
                                    </td>
                                    <td>
                                        {{ $data->sks }}
                                    </td>
                                    <td>
                                        <button wire:click="edit('{{ $data->idm }}')"
                                            class="btn btn-primary btn-sm">Edit</button>
                                        <button wire:click="destroy('{{ $data->idm }}')"
                                            class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" align="center">
                                        Data Mata Kuliah Kosong
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
        @if ($addMakul)
            @include('livewire.makul.create')
        @endif
        @if ($updateMakul)
            @include('livewire.makul.update')
        @endif
    </div>
</div>
