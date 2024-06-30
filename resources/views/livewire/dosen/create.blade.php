<div class="card">
    <div class="card-body">
        <form>
            <div class="form-group mb-3">
                <label for="nidn">NIDN:</label>
                <input type="text" class="form-control @error('ndin') is-invalid @enderror" id="nidn"
                    placeholder="Masukkan NIDN" wire:model="nidn">
                @error('nidn')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="nama">NAMA</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                    placeholder="Masukkan nama" wire:model="nama">
                @error('nama')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="email">Email:</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                    placeholder="Masukkan Email" wire:model="email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                    placeholder="Masukkan Alamat" wire:model="alamat">
                @error('alamat')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="makul">Makul:</label>
                <input type="text" class="form-control @error('makul') is-invalid @enderror" id="makul"
                    placeholder="Masukkan Makul" wire:model="makul">
                @error('makul')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-grid gap-2">
                <button wire:click.prevent="store()" class="btn btn-success btn-block">Simpan</button>
                <button wire:click.prevent="cancel()" class="btn btn-secondary btn-block">Cancel</button>
            </div>
        </form>
    </div>
</div>
