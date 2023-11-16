<?php

use App\Models\contact;
use App\Libraries\MyClass;

$id = $_REQUEST['id'];
$contact = contact::find($id);
if ($contact == null) {
  header("location:index.php?option=contact");
}
?>
<?php require_once "../views/backend/header.php"; ?>
<!-- CONTENT -->
<form action="index.php?option=contact&cat=process" method="post" enctype="multipart/form-data">    
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <strong class="text-dark text-lg">CẬT NHẬT LIÊN HỆ</strong>
          </div>
        </div>
      </div>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col md-12 text-right">
              <button name="CAPNHAT" type="submit" class="btn btn-sm btn-primary">
                <i class="fas fa-save"></i> Lưu[Cật Nhật]
              </button>
              <a class="btn btn-sm btn-info" href="index.php?option=contact">
                <i class="fas fa-arrow-left"></i> Về danh sách
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <input type="hidden" name="id" value="<?= $contact->id; ?>">
            <div class="col md-9">
              <div class="mb-3">
                <label>Tên </label>
                <input name="name" id="name" type="text" value="<?= $contact->name; ?>" class="form-control">
              </div>
              <div class="mb-3">
                <label>Email </label>
                <textarea name="email" id="email" class="form-control"><?= $contact->email  ; ?></textarea>
              </div>
              <div class="mb-3">
                <label>phone</label>
                <textarea name="phone" id="phone" class="form-control"><?= $contact->phone; ?></textarea>
              </div>
                <div class="mb-3">
                                    <label for="content">Chi Tiết </label>
                                    <textarea name="content" id="detail" class="form-control"  placeholder=" Nhập chi tiết"><?= $contact->content; ?></textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                    <label for="replay_id">ID LIÊN HỆ</label>
                                    <textarea name="replay_id" id="replay_id" class="form-control"  placeholder=" Nhập ID  "><?= $contact->replay_id; ?></textarea>
                                </div>

            </div>
            <div class="col md-9">
         
              <div class="mb-3">
                <label for="status">Trạng thái</label>
                <select name="status" id="status" class="form-control">
                  <option value="1" <?= ($contact->status == 1) ? 'selected' : ''; ?>>Xuất bản</option>
                  <option value="2" <?= ($contact->status == 2) ? 'selected' : ''; ?>>Chưa xuất bản</option>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">

        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

</form>
<!-- END CONTENT-->
<?php require_once "../views/backend/footer.php"; ?>