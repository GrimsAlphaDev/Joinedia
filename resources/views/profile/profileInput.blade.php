<x-app-layout>

    <body>
        <h1>Hello, Masukan Data Diri Anda!</h1>
        <div class="card d-flex justify-content-center" style="margin:50px; padding:10px;">
            <form action="{{ route('profile.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Masukan Nama Anda</label>
                    <input type="text" class="form-control" required name="nama" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Masukan Status Anda</label>
                    <select class="form-select" aria-label="Default select example" required name="status"
                        id="status">
                        <option selected disabled>-- Pilih Status --</option>
                        <option value="1">Mahasiswa</option>
                        <option value="2">Dosen</option>
                        <option value="3">Hima / UKM</option>
                        <option value="4">Alumni</option>
                    </select>
                </div>
                <div id="status_decision"></div>
                <div class="mb-3">
                    <label for="universitas" class="form-label">Masukan Universitas Anda</label>
                    <select class="form-select" aria-label="Default select example" required name="universitas"
                        id="universitas">
                        <option selected disabled>-- Pilih Univ -- </option>
                        @foreach ($universityData as $univ)
                            <option value="{{ $univ->id }}">{{ $univ->nama_universitas }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Masukan Alamat Anda</label>
                    <textarea required name="alamat" id="alamat" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">Masukan No Telefon Anda</label>
                    <input required name="no_telp" id="no_telp" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>

        <script>
            const status = document.getElementById('status');
            // if status value change then run this function
            status.addEventListener('change', function() {
                // get status value
                const statusValue = status.value;
                // get status decision element
                const statusDecision = document.getElementById('status_decision');

                // empty statusDecision.innerHTML
                statusDecision.innerHTML = '';

                // if status value is 1 then show this
                if (statusValue == 1) {
                    statusDecision.innerHTML = `
                <div class="mb-3">
                    <label for="nim" class="form-label">Masukan Nim Anda</label>
                    <input name="nim" id="nim" required class="form-control"></input>
                </div>
                `;
                }
                // if status value is 2 then show this
                else if (statusValue == 2) {
                    statusDecision.innerHTML = `
                <div class="mb-3">
                    <label for="nip" class="form-label">Masukan nip Anda</label>
                    <input name="nip" id="nip" required class="form-control"></input>
                </div>
                <div class="mb-3">
                    <label for="prodi" class="form-label">Masukan Prodi Anda</label>
                    <input name="prodi" id="prodi" required class="form-control"></input>
                </div>
                `;
                } else if (statusValue == 3) {
                    statusDecision.innerHTML = `
                <div class="mb-3">
                    <label for="nama_himauk" class="form-label">Masukan Nama Hima / UKM Anda</label>
                    <input name="nama_himauk" required id="nama_himauk" class="form-control"></input>
                </div>
                <div class="mb-3">
                    <label for="no_keanggotaan" class="form-label">Masukan Nomor Keanggotaan Anda</label>
                    <input name="no_keanggotaan" required id="nip" class="form-control"></input>
                </div>
                `;
                } else if (statusValue == 4) {
                    statusDecision.innerHTML = `
                <div class="mb-3">
                    <label for="no_ijazah" class="form-label">Masukan Nomor Ijazah Anda</label>
                    <input name="no_ijazah" required id="no_ijazah" class="form-control"></input>
                </div>
                `;
                } else {
                    alert('mohon memilih status terlebih dahulu');
                }
            });
        </script>

</x-app-layout>
