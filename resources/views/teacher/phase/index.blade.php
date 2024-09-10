@section('title', 'Fase')
@section('breadcrum', 'Fase')
@section('dashboard', '/teacher/dashboard')
@extends('layouts.admin')
@section('content2')
<div class="card mt-24">
  <div class="card-body">
    <div class="d-flex justify-content-between">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" data-bs-toggle="tab" href="#phase-page" role="tab" aria-selected="true">
            <span>Fase</span>
          </a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" data-bs-toggle="tab" href="#class-phase" role="tab" aria-selected="false" tabindex="-1">
            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
            <span>Fase Kelas</span>
          </a>
        </li>
      </ul>
      <div>
        <button type="button" data-bs-toggle="modal" data-bs-target="#modalFase" class="btn btn-primary">
          <i class="ph ph-plus-circle"></i> Tambah Fase
        </button>
        <div class="modal fade" id="modalFase" tabindex="-1" aria-labelledby="modalFaseLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalFaseLabel">Tambah/Edit Fase</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="{{ route('Tambah Fase') }}" method="post">
                <div class="modal-body">
                  @csrf
                  <div class="mb-24">
                    <label for="phase" class="form-label">Fase: </label>
                    <input type="hidden" name="id" id="id">
                    <input type="text" class="form-control" id="phase" name="phase" placeholder="Contoh: Fase A">
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
    </div>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session('success') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>{{ session('error') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="tab-content p-3 text-muted">
      <div class="tab-pane show active" id="phase-page" role="tabpanel">
        <div class="mt-24">
          <table class="table table-bordered table-hover mt-24" id="dataTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Fase</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
      <div class="tab-pane" id="class-phase" role="tabpanel">
        
      </div>
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
        url: "{{ route('get_data_phase') }}",
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
  function editFase(fase) {
    console.log(fase);
    document.getElementById('phase').value = fase.name;
    document.getElementById('id').value = fase.id;
  }

  function clearModal() {
    document.getElementById('phase').value = '';
    document.getElementById('id').value = '';
  }

  function hapusFase(id) {
    Swal.fire({
      title: 'Apakah anda yakin?',
      text: "Data fase yang dihapus tidak dapat dikembalikan!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#536de6',
      cancelButtonColor: '#fc544b',
      confirmButtonText: 'Ya, Hapus!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = '/teacher/phase/delete/' + id;
      }
    })
  }
  
</script>
@endsection