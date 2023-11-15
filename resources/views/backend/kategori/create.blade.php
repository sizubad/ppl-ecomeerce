@include('backend.layouts.header')
<!-- Content Start -->
<form action="/backend/kategori/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-20 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Tambah kategori</h6>
                    <form>
                        <div class="row mb-3">
                            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kategori">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="gambar">gambar</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="gambar">
                            </div>
                        </div>
                        <button type="submit" name="submit" value="save" class="btn btn-warning">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
@include('backend.layouts.footer')