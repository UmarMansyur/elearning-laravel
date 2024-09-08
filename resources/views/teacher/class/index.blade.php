@section('title', 'Kelas')
@section('breadcrum', 'Kelas')
@section('dashboard', '/teacher/dashboard')
@extends('layouts.admin')
@section('content2')
<div class="card mt-24">
  <div class="card-header border-bottom">
    <div class="flex-between flex-wrap gap-16">
      <div>
        <h4 class="mb-4">Kelas</h4>
        <p class="text-15 text-gray-500">Daftar Kelas yang dapat digunakan untuk mengatur kelas pengguna.
        </p>
      </div>
      <div>
        <a href="#modalKelas" data-bs-toggle="modal" class="btn btn-primary rounded" onclick="clearModal">
          <i class="ph ph-plus-circle"></i>
          <span>Tambah Kelas</span>
        </a>
      </div>
    </div>
    <div class="modal fade" id="modalKelas" tabindex="-1" aria-labelledby="modalKelasLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalKelasLabel">Tambah/Edit Kelas</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="{{ route('Tambah Kelas') }}" method="post">
            <div class="modal-body">
              @csrf
              <div class="mb-24">
                <label for="kelas" class="form-label">Kelas: </label>
                <input type="hidden" name="id" id="id">
                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Contoh: Kelas 5">
              </div>
              <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                  <i class="ph ph-x"></i> Batal
                </button>
                <button type="submit" class="btn btn-primary">
                  <i class="bx bx-save"></i> Simpan
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="card-body">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session('success') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>{{ session('error') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="mt-16 text-dark">
      <table class="table table-striped dt-responsive" id="dataTable">
        <thead>
          <tr>
            <th class="h6 text-gray-300">No</th>
            <th class="h6 text-gray-300">Kelas</th>
            <th class="h6 text-gray-300 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable({
      language: {
        "sEmptyTable": "Tidak ada data yang tersedia pada tabel ini",
        "sProcessing": "Sedang memproses...",
        "sLengthMenu": "Tampilkan _MENU_ data",
        "sZeroRecords": "Tidak ditemukan data yang sesuai",
        "sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
        "sInfoEmpty": "Menampilkan 0 sampai 0 dari 0 data",
        "sInfoFiltered": "(disaring dari _MAX_ data keseluruhan)",
        "sInfoPostFix": "",
        "sSearch": "Cari:",
        "sUrl": "",
      },
      processing: true,
      serverSide: true,
      ajax: {
        url: "{{ route('get_data_kelas') }}",
      },
      columns: [
        {
          data: 'DT_RowIndex',
          name: 'DT_RowIndex',
        },
        {
          data: 'name',
          name: 'name',
        },
        {
          data: 'action',
          name: 'action',
          orderable: false,
          searchable: false
        },
      ]
    });
  });

  function editKelas(kelas) {
    console.log(kelas);
    document.getElementById('kelas').value = kelas.name;
    document.getElementById('id').value = kelas.id;
  }

  function clearModal() {
    document.getElementById('kelas').value = '';
    document.getElementById('id').value = '';
  }

  function hapusKelas(id) {
    Swal.fire({
      title: 'Apakah anda yakin?',
      text: "Data kelas yang dihapus tidak dapat dikembalikan!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#536de6',
      cancelButtonColor: '#fc544b',
      confirmButtonText: 'Ya, Hapus!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = '/teacher/kelas/delete/' + id;
      }
    })
  }
</script>
@endsection