<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
    body {
        background-image: url('https://images.pexels.com/photos/6334879/pexels-photo-6334879.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
    }

    .card {
        background: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
    }

    .card-header {
        background-color: #b81d11; /* Adjusted for transparency */
    }

    .form-control {
        background: rgba(255, 255, 255, 0.8); /* Semi-transparent input fields */
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    .btn-success {
        background-color: #7a140c;
        color: white;
    }

    .btn-success:hover {
        background-color: #b81d11;
    }

    .btn-secondary {
        background-color: #000000;
        color: white;
    }

    .btn-secondary:hover {
        background-color: #333333;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header text-white">
                    <h4>Edit</h4>
                </div>
                <div class="card-body">

                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>

                    <?= validation_list_errors() ?>

                    <?= form_open('buku/update/' . $post['id']); ?>
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul" value="<?= $post['judul'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Masukkan Penulis" value="<?= $post['penulis'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukkan Penerbit" value="<?= $post['penerbit'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="tahun_terbit">Tahun Terbit</label>
                        <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Masukkan Tahun Terbit" value="<?= $post['tahun_terbit'] ?>">
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-success">Update</button>
                        <a href="<?= base_url('home') ?>" class="btn btn-secondary">Kembali</a>
                    </div>
                    <?= form_close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('extra-js') ?>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#post_content').summernote({
            tabsize: 2,
            height: 500
        });
    });
</script>
<?= $this->endSection() ?>
