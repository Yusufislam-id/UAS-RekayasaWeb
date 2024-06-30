<div class="card">
    <div class="card-body">
        <form>
            <div class="form-group mb-3">
                <label for="idm">ID:</label>
                <input type="text" class="form-control @error('idm') is-invalid @enderror" id="idm"
                    placeholder="Masukkan ID" wire:model="idm">
                @error('idm')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="nama">Mata Kuliah</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                    placeholder="Masukkan Mata Kuliah" wire:model="nama">
                @error('nama')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="sks">SKS:</label>
                <input type="text" class="form-control @error('sks') is-invalid @enderror" id="sks"
                    placeholder="Masukkan SKS" wire:model="sks">
                @error('sks')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="d-grid gap-2">
                <button wire:click.prevent="update()" class="btn btn-success btn-block">Update</button>
                <button wire:click.prevent="cancel()" class="btn btn-secondary btn-block">Cancel</button>
            </div>
        </form>
    </div>
</div>
